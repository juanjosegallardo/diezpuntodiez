[CmdletBinding(SupportsShouldProcess = $true)]
param(
    [string]$ExecutablePath,
    [switch]$Uninstall
)

$ErrorActionPreference = 'Stop'
$protocolPath = 'Software\Classes\cecyteg-packettracer'
$protocolOwner = 'CECyTEG.Portal.PacketTracer'
$existingKey = [Microsoft.Win32.Registry]::CurrentUser.OpenSubKey($protocolPath)
try {
    if ($existingKey -and $existingKey.GetValue('PortalOwner') -ne $protocolOwner) {
        throw 'Este protocolo ya tiene otra configuracion. No se modifico.'
    }
    $alreadyConfigured = $null -ne $existingKey
} finally {
    if ($existingKey) { $existingKey.Dispose() }
}

if ($Uninstall) {
    if (-not $alreadyConfigured) {
        Write-Output 'El acceso del portal no estaba configurado para este usuario.'
        return
    }
    if ($PSCmdlet.ShouldProcess('HKCU\' + $protocolPath, 'Eliminar solo el acceso de Packet Tracer del portal')) {
        [Microsoft.Win32.Registry]::CurrentUser.DeleteSubKeyTree($protocolPath)
        Write-Output 'Acceso del portal eliminado. Packet Tracer sigue instalado.'
    }
    return
}

if (-not $ExecutablePath) {
    $ciscoKey = [Microsoft.Win32.Registry]::ClassesRoot.OpenSubKey('pttp\shell\open\command')
    try {
        $ciscoCommand = if ($ciscoKey) { [string]$ciscoKey.GetValue('') } else { '' }
        if ($ciscoCommand -match '^"(?<executable>[^"]+\\PacketTracer\.exe)"' -and (Test-Path -LiteralPath $Matches.executable -PathType Leaf)) {
            $ExecutablePath = $Matches.executable
        }
    } finally {
        if ($ciscoKey) { $ciscoKey.Dispose() }
    }
}

if (-not $ExecutablePath) {
    $installRoots = @($env:ProgramFiles, ${env:ProgramFiles(x86)}) | Where-Object { $_ } | Select-Object -Unique
    $candidates = @(
        foreach ($installRoot in $installRoots) {
            Get-ChildItem -LiteralPath $installRoot -Directory -Filter '*Packet Tracer*' -ErrorAction SilentlyContinue | ForEach-Object {
                $candidate = Join-Path $_.FullName 'bin\PacketTracer.exe'
                if (Test-Path -LiteralPath $candidate -PathType Leaf) { Get-Item -LiteralPath $candidate }
            }
        }
    )
    if ($candidates.Count -eq 1) { $ExecutablePath = $candidates[0].FullName }
    elseif ($candidates.Count -gt 1) { throw 'Hay varias versiones. Indica la ruta correcta con -ExecutablePath.' }
}

if (-not $ExecutablePath -or -not (Test-Path -LiteralPath $ExecutablePath -PathType Leaf)) {
    throw 'No se encontro Packet Tracer. Instalalo o indica su PacketTracer.exe con -ExecutablePath.'
}
$packetExecutable = (Get-Item -LiteralPath $ExecutablePath).FullName
if ([System.IO.Path]::GetFileName($packetExecutable) -ine 'PacketTracer.exe') {
    throw 'La ruta debe corresponder al archivo PacketTracer.exe.'
}

# El enlace solo abre la aplicacion: no se pasa su contenido como argumentos.
$openCommand = '"' + $packetExecutable + '"'
Write-Output ('Aplicacion: ' + $packetExecutable)
Write-Output ('Comando: ' + $openCommand)
if ($PSCmdlet.ShouldProcess('HKCU\' + $protocolPath, 'Registrar cecyteg-packettracer para el usuario actual')) {
    $protocolKey = [Microsoft.Win32.Registry]::CurrentUser.CreateSubKey($protocolPath)
    try {
        $protocolKey.SetValue('', 'URL:CECyTEG - Cisco Packet Tracer')
        $protocolKey.SetValue('URL Protocol', '')
        $protocolKey.SetValue('PortalOwner', $protocolOwner)
        $iconKey = $protocolKey.CreateSubKey('DefaultIcon')
        try { $iconKey.SetValue('', $openCommand + ',0') } finally { $iconKey.Dispose() }
        $commandKey = $protocolKey.CreateSubKey('shell\open\command')
        try { $commandKey.SetValue('', $openCommand) } finally { $commandKey.Dispose() }
    } finally {
        $protocolKey.Dispose()
    }
    Write-Output 'Acceso configurado. Vuelve al portal y pulsa Abrir aplicacion.'
}
