<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([

        [ 'nombre' => 'JUAN JOSÉ GALLARDO MENDOZA', 'usuario' => 'juanjo',
            'tipo' => 'ADMINISTRATIVO', // o cualquier valor que se use en tu sistema
            'password' =>"12345",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [ 'nombre' => 'ACOSTA SARABIA ANGEL OMAR', 'usuario' => 'AOSA100720HGTCRNA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AGUIRRE LOPEZ XIMENA GUADALUPE', 'usuario' => 'AULX100718MGTGPMA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AGUIRRE NAVARRO SEBASTIAN', 'usuario' => 'AUNS100715HGTGVBA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BRIBIESCA FRIAS PAOLA BERENICE', 'usuario' => 'BIFP101019MGTRRLA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMARILLO LOPEZ LIZBETH', 'usuario' => 'CALL100521MGTMPZA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DUARTE MARTINEZ ANA ARELY', 'usuario' => 'DUMA101216MGTRRNA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ESPINOSA MENDOZA KEVIN JESUS', 'usuario' => 'EIMK100516HGTSNVA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FELIPE BRIBIESCA NATALY VALENTINA', 'usuario' => 'FEBN100214MGTLRTA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FERNANDEZ ROJAS DEISY', 'usuario' => 'FERD100125MGTRJSA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA TORRES JOSE GUADALUPE', 'usuario' => 'GATG101124HGTRRDA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ CABRERA ALAN ARTURO', 'usuario' => 'GOCA100920HGTNBLA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ LOPEZ VALERIA CITLALI', 'usuario' => 'GOLV100814MGTNPLA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ OBLEA KAROL ARAHI', 'usuario' => 'GOOK101220MGTNBRA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUEVARA ZAVALA BYRON ALEXIS', 'usuario' => 'GUZB100213HGTVVYA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUZMAN GOMEZ VANIA JIMENA', 'usuario' => 'GUGV100805MGTZMNA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ TAFOYA AMERICA JANETH', 'usuario' => 'HETA101023MGTRFMA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JIMENEZ BONILLA ANA PATRICIA', 'usuario' => 'JIBA100212MGTMNNA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JUAREZ GUTIERREZ LUIS ALBERTO', 'usuario' => 'JUGL101225HGTRTSA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LONA GARCIA ANGELES CRISTINA', 'usuario' => 'LOGA100806MGTNRNA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ AGUIRRE EMILIANO', 'usuario' => 'LOAE100516HGTPGMA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ AGUIRRE JESSICA', 'usuario' => 'MAAJ090929MGTRGSA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ GOMEZ LEONARDO ANTONIO', 'usuario' => 'MAGL101029HGTRMNA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ MARTINEZ JOCELYN GUADALUPE', 'usuario' => 'MAMJ100113MGTRRCA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ VENTURA ANGELA ANAHI', 'usuario' => 'MAVA100629MGTRNNA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDEL FLORES CARLOS', 'usuario' => 'MEFC100212HGTDLRA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA GUEVARA JESUS GIOVANNY', 'usuario' => 'MEGJ090925HGTNVSA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MONDRAGON LOPEZ LEILANI CORINA', 'usuario' => 'MOLL101230MGTNPLA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAVARRETE CAZARES IAN FERNANDO', 'usuario' => 'NACI100820HGTVZNA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PELAGIO RAMIREZ ALLISON', 'usuario' => 'PERA100205MGTLMLA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ RAMIREZ ALAN MISAEL', 'usuario' => 'PERA100719HGTRMLA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ RAMIREZ NARELY ALEJANDRA', 'usuario' => 'PERN100717MGTRMRA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMOS COVARRUBIAS PAOLA CITLALI', 'usuario' => 'RACP100505MGTMVLA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAYA MUÑOZ FATIMA', 'usuario' => 'RAMF100510MGTYXTA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAZO CONTRERAS ERIK PAUL', 'usuario' => 'RACE100615HGTZNRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIOS MARTINEZ ADAN FRANCISCO', 'usuario' => 'RIMA100216HGTSRDA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIVERA CASTAÑEDA CANDELARIA ELIZABETH', 'usuario' => 'RICC100127MGTVSNA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALDAÑA CRUZ JOSE LEONEL', 'usuario' => 'SACL101019HGTLRNA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SANTOS MORALES MERARY ITAMAR', 'usuario' => 'SAMM100817MCCNRRA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SOTO NOLASCO EDWIN ADRIAN', 'usuario' => 'SONE080822HGTTLDA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ ARREDONDO DAVID', 'usuario' => 'VAAD070210HGTZRVA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10022007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ CERVANTES CARLOS JAVIER', 'usuario' => 'VACC100406HGTZRRA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ PRADO AXEL YAEL', 'usuario' => 'VAPA100506HGTZRXA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ VILLALOBOS FRANCISCO JAVIER', 'usuario' => 'VAVF101228HGTZLRA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA ORTIZ ALVARO', 'usuario' => 'VEOA101219HGTNRLA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VERA REYES JOSE MANUEL', 'usuario' => 'VERM100717HGTRYNA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VIZCARRA ALONSO KAREN AIDE', 'usuario' => 'VIAK100415MGTZLRA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARELLANO HERNANDEZ ALONDRA', 'usuario' => 'AEHA100709MGTRRLA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARRIAGA JUAREZ CRISTAL ANGELICA', 'usuario' => 'AIJC100826MBCRRRA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARROYO LOPEZ JOSE JUAN', 'usuario' => 'AOLJ100508HGTRPNA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARRIENTOS RODRIGUEZ ARELY', 'usuario' => 'BARA100904MGTRDRA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARRON LEDESMA FERNANDO', 'usuario' => 'BALF100623HGTRDRA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARRON TORRES XIMENA', 'usuario' => 'BATX100305MGTRRMA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA GONZALEZ ISAAC FERNANDO', 'usuario' => 'CAGI100112HGTBNSA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANCHOLA NAVARRO JUAN RAFAEL', 'usuario' => 'CANJ100617HGTNVNA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CARRILLO LOPEZ EVELYN MARIA', 'usuario' => 'CALE100206MGTRPVA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAZARES SUAREZ ANGELA RENATA', 'usuario' => 'CASA101110MGTZRNA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CHAVEZ CAMACHO JOSE RODRIGO', 'usuario' => 'CACR100819HGTHMDA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DELGADO SILVA ALEXIS MARTIN', 'usuario' => 'DESA100125HGTLLLA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES AGUILAR XIMENA', 'usuario' => 'FOAX100520MGTLGMA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA ALMANZA KEVIN ALEXIS', 'usuario' => 'GAAK100917HGTRLVA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA ARREDONDO CARLOS IVAN', 'usuario' => 'GAAC100505HGTRRRA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA CISNEROS ANDRES', 'usuario' => 'GACA100224HGTRSNA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA GARCIA DANIEL ALEXANDER', 'usuario' => 'GAGD090429HGTRRNA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA GOVEA BERNARDO NICOLAS', 'usuario' => 'GAGB101020HGTRVRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA MARTINEZ KEVIN ALEXIS', 'usuario' => 'GAMK101210HGTRRVA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA REYES MARIA CAMILA', 'usuario' => 'GARC100816MGTRYMA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ ZAMARRIPA MARIA FERNANDA', 'usuario' => 'GOZF100320MGTNMRA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUEVARA GARCIA YAMELI GUADALUPE', 'usuario' => 'GUGY100610MGTVRMA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ CABELLO JUAN DIEGO', 'usuario' => 'GUCJ100423HGTTBNA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ BOMBELA ATZIRY CAMILA', 'usuario' => 'LOBA101028MDGPMTA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA MARTINEZ JOSE JESUS', 'usuario' => 'MEMJ101106HGTNRSA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MUÑOZ CENDEJAS XIMENA', 'usuario' => 'MUCX101031MGTXNMA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ CERVANTES SHIARA YERALDIN', 'usuario' => 'RACS100705MGTMRHA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ GOMEZ AIDE MARGARITA', 'usuario' => 'RAGA100705MGTMMDA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'REYES TORRES KARLA PAOLA', 'usuario' => 'RETK100312MGTYRRA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIVERA AVILES EMMANUEL ENRIQUE', 'usuario' => 'RIAE100927HGTVVMA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIZO VEGA JAZMIN GUADALUPE', 'usuario' => 'RIVJ100129MMNZGZA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ CEJA DULCE MARIA', 'usuario' => 'ROCD100430MGTDJLA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ FLORES SERGIO MANUEL', 'usuario' => 'ROFS101022HGTDLRA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ HERNANDEZ IGNACIO DE JESUS', 'usuario' => 'ROHI100408HGTDRGA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ LEDESMA JAIRO', 'usuario' => 'ROLJ100331HGTDDRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROSALES PAZ LUIS EDUARDO', 'usuario' => 'ROPL101108HGTSZSA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROSAS BARRIOS JESUS', 'usuario' => 'ROBJ090916HGTSRSA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALAZAR ALVAREZ MIGUEL', 'usuario' => 'SAAM100427HGTLLGA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALAZAR MARTINEZ PAULA GUADALUPE', 'usuario' => 'SAMP100921MGTLRLA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VARGAS LOPEZ LUIS ELEAZAR', 'usuario' => 'VALL100721HGTRPSA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ ELIZARRARAS GONZALO', 'usuario' => 'VAEG101201HGTZLNA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ MENDOZA BRANDON MATEO', 'usuario' => 'VAMB100202HGTZNRA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA LOPEZ CAMILA VIOLETA', 'usuario' => 'VELC100502MGTNPMA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VILLANUEVA ARIAS NATALIA BELEN', 'usuario' => 'VIAN101001MGTLRTA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'YEPEZ SALAZAR BRITTANY SUGEY', 'usuario' => 'YESB100810MGTPLRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZAVALA LOPEZ SARA', 'usuario' => 'ZALS101201MGTVPRA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LANDIN LEMUS MAYRA ELIZABETH', 'usuario' => 'LALM101127MGTNMYA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMARILLO ORTIZ MARIANA GUADALUPE', 'usuario' => 'CAOM100507MGTMRRA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA MARTINEZ LESLIE LUCIANA', 'usuario' => 'GAML100107MGTRRSA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GALVAN HERNANDEZ DIANA', 'usuario' => 'GAHD080716MGTLRNA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ NEGRETE FERNANDA', 'usuario' => 'PENF091221MGTRGRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MORENO DE JESUS MARTHA GUADALUPE', 'usuario' => 'MOJM101007MGTRSRA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ FLORES CANDELARIA ISABEL', 'usuario' => 'LOFC100505MGTPLNA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO LOPEZ CHRISTOPHER IGNACIO', 'usuario' => 'CALC100731HGTNPHA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MORALES LOMELI JOSE', 'usuario' => 'MOLJ101124HGTRMSA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DUARTE ROSALES EVELIN ESTRELLA', 'usuario' => 'DURE100828MGTRSVA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MONTOYA GARCIA ALEXA CAMILA', 'usuario' => 'MOGA100715MGTNRLA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ HERNANDEZ CESAR', 'usuario' => 'GOHC100618HGTNRSA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALANIS LOPEZ ANGEL ESTEBAN', 'usuario' => 'AALA100905HGTLPNA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALVARADO SANCHEZ EDGAR ALEJANDRO', 'usuario' => 'AASE101021HGTLNDA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALVAREZ SALAZAR MELANY', 'usuario' => 'AASM101026MGTLLLA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARAUJO MINGUELA EDGAR ZADKIEL', 'usuario' => 'AAME100219HGTRNDA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARAUJO MINGUELA ASHLEY SAMANTHA', 'usuario' => 'AAMA090115MGTRNSA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARRON TINAJERO PATRICIA GUADALUPE', 'usuario' => 'BATP100731MGTRNTA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BELMAN CABELLO BRISA SOFIA', 'usuario' => 'BECB100310MGTLBRA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABEZA CERVANTES CARLOS ANGEL', 'usuario' => 'CACC100830HGTBRRA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GALVAN BRAVO ALAN', 'usuario' => 'GABA100206HGTLRLA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA FLORES CESAR LEONARDO', 'usuario' => 'GAFC100902HGTRLSA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GRIMALDO SILVA LAILA YOLOTZIN', 'usuario' => 'GISL100225MDFRLLA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERRERA BRAVO PEDRO SEBASTIAN', 'usuario' => 'HEBP101125HGTRRDA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JUAREZ ARRIAGA CHRISTIAN REYNALDO', 'usuario' => 'JUAC101113HMNRRHA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LAGUNA TORRES MADISSON YANETH', 'usuario' => 'LATM101016MGTGRDA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO MENDOZA NATALIA', 'usuario' => 'CAMN100607MGTNNTA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES RODRIGUEZ PAOLA MARIA', 'usuario' => 'CERP100119MGTRDLA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CISNEROS GARCIA STEPHANY SARAHI', 'usuario' => 'CIGS100825MGTSRTA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CORONA HERNANDEZ EVELYN XIMENA', 'usuario' => 'COHE090403MGTRRVB1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CUELLAR GARCIA JUAN DANIEL', 'usuario' => 'CUGJ100224HGTLRNA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DUARTE CASTAÑEDA EZEQUIEL', 'usuario' => 'DUCE080804HGTRSZA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDEL GARCIA JUANA EDITH', 'usuario' => 'MEGJ100109MGTDRNA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NOLASCO BRIBIESCA EMILIANO', 'usuario' => 'NOBE100807HGTLRMA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PACHECO ARREDONDO SAUL ALEXIS', 'usuario' => 'PAAS100517HGTCRLA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ ZAMORA JOSE LUIS', 'usuario' => 'RAZL091111HDFMMSA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ ZAMORA JUAN LUIS', 'usuario' => 'RAZJ091111HDFMMNA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VILLALOBOS ARMENTA SOFIA', 'usuario' => 'VIAS101215MGTLRFA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VARGAS GONZALEZ CARLOS OCTAVIO', 'usuario' => 'VAGC101104HGTRNRA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALAZAR CAMARILLO CELESTE', 'usuario' => 'SACC100901MGTLMLA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROSALES RODRIGUEZ IVAN ARTURO', 'usuario' => 'RORI100427HGTSDVA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ LEON MARIO', 'usuario' => 'ROLM100222HGTDNRA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMOS PRADO LUIS REYNALDO', 'usuario' => 'RAPL100916HGTMRSA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAYA CAMACHO CHRISTIAN', 'usuario' => 'RACC100830HGTYMHA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RICO MARTINEZ XIMENA MARLEN', 'usuario' => 'RIMX100918MGTCRMA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIZO CENDEJAS RAFAEL DE JESUS', 'usuario' => 'RICR101002HGTZNFA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCALA HERNANDEZ BARBARA LILIANA', 'usuario' => 'AAHB100919MGTLRRA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALVAREZ ROA ISIS SARAHI', 'usuario' => 'AARI101026MGTLXSA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ANDRADE CARRILLO MISSAEL ALEJANDRO', 'usuario' => 'AACM100831HGTNRSA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARELLANO PELAGIO ALAN', 'usuario' => 'AEPA100424HGTRLLA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARELLANO PELAGIO ALDO', 'usuario' => 'AEPA100424HGTRLLB5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AVILA RAZO CAMILA MICHEL', 'usuario' => 'AIRC100908MGTVZMA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA ALVAREZ JOHNATAN MAURICIO', 'usuario' => 'CAAJ100319HGTBLHA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANCHOLA ALVAREZ ALEJANDRO', 'usuario' => 'CAAA100312HGTNLLA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CASTRO MOSQUEDA DANIELA', 'usuario' => 'CAMD100111MGTSSNA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES FLORES TADEO ALEXANDER', 'usuario' => 'CEFT100911HGTRLDA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES OBLEA CARLOS IGNACIO', 'usuario' => 'CEOC101223HGTRBRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ CERVANTES KENIA YARETZI', 'usuario' => 'CUCK100228MGTRRNA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA CLAUDIO CHRISTOPHER', 'usuario' => 'GACC100420HGTRLHA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA HERNANDEZ URIEL TOMAS', 'usuario' => 'GAHU100328HMNRRRA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA NAVARRETE ABRIL ARIADNA', 'usuario' => 'GANA100827MGTRVBA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ JIMENEZ XIMENA GUADALUPE', 'usuario' => 'GOJX101219MGTNMMA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ NAVARRO ISAAC EMILIANO', 'usuario' => 'GUNI100603HGTTVSA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ PEREZ RIGOBERTO', 'usuario' => 'GUPR100122HGTTRGA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ BOMBELA MILAGROS', 'usuario' => 'HEBM100611MGTRMLA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ PEÑA MARIA JOSE', 'usuario' => 'HEPJ100329MGTRXSA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ RINCON DENICE', 'usuario' => 'HERD100809MGTRNNA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA SANCHEZ LUIS BRYAN', 'usuario' => 'LESL100307HGTDNSA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LINARES AGUIRRE MICHEL SOFIA', 'usuario' => 'LIAM100703MMNNGCA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ ESQUIVEL EVELIN', 'usuario' => 'MAEE090502MNERSVA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA GONZALEZ VICTOR EMILIO', 'usuario' => 'MEGV100707HGTNNCA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA GUTIERREZ YAMILET MONSERRAT', 'usuario' => 'MEGY100727MGTNTMA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA RIOS DAYANNA GUADALUPE', 'usuario' => 'MERD101030MGTNSYA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MONTEJANO GARCIA EVELYN', 'usuario' => 'MOGE100710MGTNRVA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MUÑOZ FLORES EMMANUEL', 'usuario' => 'MUFE100621HGTXLMA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAVARRO OBLEA ORLANDO', 'usuario' => 'NAOO101118HGTVBRA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NEGRETE MAGAÑA XIMENA GUADALUPE', 'usuario' => 'NEMX101212MGTGGMA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ORNELAS PEREZ JOSE ANGEL', 'usuario' => 'OEPA101216HGTRRNA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ ESTRADA YOSHAN', 'usuario' => 'PEEY100906HGTRSSA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PLANCARTE AGUILAR YANIN', 'usuario' => 'PAAY100822MGTLGNA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PLASCENCIA CANO KIMBERLY LESLIE MIREYA', 'usuario' => 'PACK091005MGTLNMA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMOS BRAVO MARCOS ANDRES', 'usuario' => 'RABM101120HGTMRRA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMOS FLORES ALDO SEBASTIAN', 'usuario' => 'RAFA100702HGTMLLA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ DUARTE JADE MAHETSI', 'usuario' => 'RODJ100912MGTDRDA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ GARCIA KARLA FERNANDA', 'usuario' => 'ROGK100627MGTDRRA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ LAGUNA KEVIN NOE', 'usuario' => 'ROLK101203HGTDGVA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ RIOS VIANEY ADILENE', 'usuario' => 'RORV101008MGTDSNA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SANCHEZ RAYA MATEO', 'usuario' => 'SARM101007HGTNYTA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES MARTINEZ DONOVAN LEVY', 'usuario' => 'TOMD080328HNERRNA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VELAZQUEZ JUAREZ XIMENA SARAHI', 'usuario' => 'VEJX100111MGTLRMA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VILLA RIOS DENISSE', 'usuario' => 'VIRD100610MGTLSNA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZAMORA MENDOZA ERICK GABRIEL', 'usuario' => 'ZAME100810HGTMNRA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ACOSTA ORTIZ KARIM ISRAEL', 'usuario' => 'AOOK100303HGTCRRA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALTAMIRANO RAMIREZ JOSE ALBERTO', 'usuario' => 'AARA100607HGTLMLA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BERMEJO MENDOZA OMAR', 'usuario' => 'BEMO100422HGTRNMA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BRAVO VENTURA JENNIFER', 'usuario' => 'BAVJ100520MGTRNNA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO CHAVEZ VANESSA', 'usuario' => 'CACV100823MGTNHNA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO TAFOYA EVELYN', 'usuario' => 'CATE100630MDFNFVA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES GUTIERREZ ANDRES DAVID', 'usuario' => 'CEGA100914HGTRTNA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES ZAVALA CAMILA', 'usuario' => 'CEZC100215MGTRVMA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ GONZALEZ EDWIN', 'usuario' => 'CUGE100909HGTRNDA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DELGADO MENDOZA JUAN ESTEBAN', 'usuario' => 'DEMJ090225HGTLNNA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES CEJA PAOLA GISELLE', 'usuario' => 'FOCP101019MGTLJLA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES RAMIREZ ESTRELLA GUADALUPE', 'usuario' => 'FORE100102MGTLMSA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FUENTES HERNANDEZ CARLOS GABRIEL', 'usuario' => 'FUHC100504HGTNRRA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA GUZMAN CHRISTIAN ALEXANDRO', 'usuario' => 'GAGC100206HGTRZHA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ ESTRADA YULIANA', 'usuario' => 'GOEY100321MGTMSLA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GORDILLO CERVANTES EVELYN MONTSERRAT', 'usuario' => 'GOCE100222MGTRRVA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUEVARA GARCIA ELENA YOSELIN', 'usuario' => 'GUGE101104MGTVRLA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ LOMELI ANGEL MANUEL', 'usuario' => 'GULA101013HGTTMNA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ RODRIGUEZ LUIS ENRIQUE', 'usuario' => 'GURL100316HGTTDSA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ ESCOBAR MARIELA', 'usuario' => 'HEEM100309MGTRSRA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ GARNICA RUTH ABRIL', 'usuario' => 'HEGR100206MGTRRTA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ RIOS MARIA FERNANDA', 'usuario' => 'HERF090311MGTRSRA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JUAREZ CRUZ LESLIE MARIA', 'usuario' => 'JUCL100704MGTRRSA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA SANDOVAL ESTEFANIA', 'usuario' => 'LESE100607MGTDNSA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ ALONSO JUAN MANUEL', 'usuario' => 'LOAJ101223HGTPLNA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ VENTURA ALLISON COLETTE', 'usuario' => 'LOVA100116MGTPNLA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ MUÑOZ ALHONDRA GUADALUPE', 'usuario' => 'MAMA100626MGTRXLA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MINGUELA PEREZ ALEXIS HUMBERTO', 'usuario' => 'MIPA101005HGTNRLA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PACHECO GOMEZ JAIRO ISAI', 'usuario' => 'PAGJ100927HGTCMRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ DE LA ROSA GABRIEL ISAAK MIROSLAV', 'usuario' => 'PERG090526HGTRSBA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ ALVARADO PATRICIA', 'usuario' => 'RAAP100715MGTMLTA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ HERNANDEZ ALAN MISAEL', 'usuario' => 'RAHA100912HNEMRLA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ LEDESMA MARIA CLARA', 'usuario' => 'RALC100811MGTMDLA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'REYES ALCOCER SOL ISABELA', 'usuario' => 'REAS100512MGTYLLA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIOS FELIPE FATIMA LIZETH', 'usuario' => 'RIFF100812MGTSLTA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ CERVANTES ANGEL ARMANDO', 'usuario' => 'ROCA091020HGTDRNA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ VILLA ANAHI GUADALUPE', 'usuario' => 'ROVA100204MGTDLNA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RUIZ HERNANDEZ AIDE IVONNE', 'usuario' => 'RUHA100827MMNZRDA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES ACOSTA JOEL ISAAC', 'usuario' => 'TOAJ101106HGTRCLA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TRIGUEROS LINARES LUIS ALEXIS', 'usuario' => 'TILL090719HGTRNSA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ NAVARRO MAURICIO DE JESUS', 'usuario' => 'VANM100329HGTZVRA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA MAGAÑA BRANDON', 'usuario' => 'VEMB100509HGTNGRA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA MAGAÑA BRYAN', 'usuario' => 'VEMB081003HGTNGRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA REYES SHERLYN', 'usuario' => 'VERS100809MGTNYHA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VILLA LARA NATALIA JAQUELINE', 'usuario' => 'VILN101201MMNLRTA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VILLANUEVA ROSALES JULIAN ADONAI', 'usuario' => 'VIRJ101029HGTLSLA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZAMORA CABRERA ANA MARIA', 'usuario' => 'ZACA100302MGTMBNA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ACEVES RAMIREZ PAUL IVAN', 'usuario' => 'AERP101008HGTCMLA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCANTAR RICO ARIANA', 'usuario' => 'AARA100505MGTLCRA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05052010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCOCER GALVAN ABRIL SARON', 'usuario' => 'AOGA100407MGTLLBA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALFARO GOVEA PAULINA', 'usuario' => 'AAGP101213MGTLVLA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARIAS DOMINGUEZ CARLOS ALEXIS', 'usuario' => 'AIDC090526HGTRMRA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARROYO GUEVARA DANIEL ALEJANDRO', 'usuario' => 'AOGD100708HGTRVNA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AVILA ALCOCER JESUS FRANCISCO', 'usuario' => 'AIAJ100618HGTVLSA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AVILA TAFOLLA ROSALIA', 'usuario' => 'AITR100221MGTVFSA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMARILLO DUARTE DIEGO ALEXIS', 'usuario' => 'CADD100611HGTMRGA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CASTAÑEDA RIVERA JOSE PABLO', 'usuario' => 'CARP101105HGTSVBA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CHAVEZ RIOS MARCO ANTONIO', 'usuario' => 'CARM100608HGTHSRA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CUELLAR GUTIERREZ BRANDON OCTAVIO', 'usuario' => 'CUGB100718HGTLTRA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ESQUIVEL DURAN EDWIN OMAR', 'usuario' => 'EUDE100922HGTSRDA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FIGUEROA ROJAS SARA ANDREA', 'usuario' => 'FIRS101224MGTGJRA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GAONA MORENO SHIRLEY SAYURI', 'usuario' => 'GAMS100417MGTNRHA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA MAGAÑA JOSE DE JESUS', 'usuario' => 'GAMJ100712HGTRGSA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12072010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA RAMIREZ NOELIA', 'usuario' => 'GARN080722MGTRMLA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ ROSALES JIMENA', 'usuario' => 'GORJ100405MGTNSMA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ VALDES ALMA GISELLE', 'usuario' => 'GOVA100319MGTNLLA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUARDADO VENTURA LUZ MARIA', 'usuario' => 'GUVL101002MGTRNZA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ VILLANUEVA CLAUDIA VALERIA', 'usuario' => 'HEVC100618MGTRLLA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEMUS TAPIA NAOMI JOSHUA', 'usuario' => 'LETN100618MGTMPMA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LINARES NAVARRO MONSERRATH', 'usuario' => 'LINM100826MGTNVNA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOMELI NAVARRETE ALEJANDRA', 'usuario' => 'LONA100321MGTMVLA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ DOMINGUEZ ADRIAN LEONARDO', 'usuario' => 'LODA100827HGTPMDA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27082010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ TULA DANIELA', 'usuario' => 'LOTD100420MGTPLNA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LORENZO CHAVEZ CARLOS ANDRES', 'usuario' => 'LOCC100918HGTRHRA0',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MACIAS OBLEA DAVID JOSHUA', 'usuario' => 'MAOD101219HGTCBVA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MATA VAZQUEZ ALEXIS', 'usuario' => 'MAVA100415HGTTZLA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAVARRETE GUEVARA STHEFANY DAYANA', 'usuario' => 'NAGS100406MGTVVTA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ CABRERA YUREM', 'usuario' => 'PECY100921HGTRBRA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ CANO FRANCISCO PABLO', 'usuario' => 'PECF100915HGTRNRA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ GOMEZ ISIS STEPHANY', 'usuario' => 'RAGI080408MGTMMSA7',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ NAVARRO JOSUE', 'usuario' => 'RANJ100301HGTMVSA4',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01032010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAYA ALCANTAR SEBASTIAN', 'usuario' => 'RAAS100116HGTYLBA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAZO ARROYO VIOLETA', 'usuario' => 'RAAV100919MGTZRLA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19092010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'REYES ESTRADA ALONDRA NAHOMI', 'usuario' => 'REEA101009MGTYSLA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROBLERO REYES WENDY', 'usuario' => 'RORW101002MGTBYNA2',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROJAS AGUIRRE VALENTINA GUADALUPE', 'usuario' => 'ROAV100214MGTJGLA9',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14022010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROJAS VAZQUEZ NAHOMI ZARAHI', 'usuario' => 'ROVN100104MGTJZHA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04012010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROSALES MARTINEZ YOSELIN', 'usuario' => 'ROMY101108MGTSRSA3',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08112010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALAZAR LOPEZ ZAYRA CELESTE', 'usuario' => 'SALZ101206MGTLPYA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06122010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALINAS CHAVEZ FERNANDA AMAIRANI', 'usuario' => 'SACF101006MGTLHRA6',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06102010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SANCHEZ CABEZA ISAAC', 'usuario' => 'SACI100414HGTNBSA8',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14042010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VELAZQUEZ REYNAGA MARCO ANTONIO', 'usuario' => 'VERM091013HMCLYRA1',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA PEREZ OMAR ANTONIO', 'usuario' => 'VEPO100611HGTNRMA5',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11062010",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ACOSTA CABEZA ALONDRA', 'usuario' => '24411070200002',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCALA VEGA LLUVIA FERNANDA', 'usuario' => '24411070200004',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCOCER AVILA ANGEL GERARDO', 'usuario' => '24411070200005',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALVARADO DUARTE YULIANA MARLENE', 'usuario' => '24411070200011',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARIAS DOMINGUEZ CARLOS ALEXIS', 'usuario' => '24411070200015',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARREDONDO GUTIERREZ MANUEL', 'usuario' => '24411070200018',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARREDONDO HERNANDEZ MARCOS', 'usuario' => '24411070200019',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARROYO RODRIGUEZ MISAEL ALEXANDER', 'usuario' => '24411070200020',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BALTAZAR PRADO ALEXIS EMILIANO', 'usuario' => '24411070200026',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARAJAS SOTO JESUS ERNESTO', 'usuario' => '24411070200031',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA CHICO PATRICIA', 'usuario' => '24411070200042',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA RIOS MELISSA ITZEL', 'usuario' => '24411070200046',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMARENA DUARTE IAN MISAEL', 'usuario' => '24411070200049',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CENDEJAS VILLAFAÑA ROBERTO', 'usuario' => '24411070200065',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES MARTINEZ LESLY JANNETH', 'usuario' => '24411070200070',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CHAVEZ NARANJO JOSE ENRIQUE', 'usuario' => '24411070200075',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ CERVANTES JENNIFER', 'usuario' => '24411070200079',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DUARTE MOSQUEDA CARLOS', 'usuario' => '24411070200086',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ESCAMILLA RODRIGUEZ ESMERALDA ALEJANDRA', 'usuario' => '24411070200089',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES LOPEZ MILAGROS LISSETH', 'usuario' => '24411070200096',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GAONA ROSAS ALEXANDRA', 'usuario' => '24411070200101',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ ARANDA KEVIN ALEXANDER', 'usuario' => '24411070200109',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUARDIOLA OROZCO JULIAN ISAI', 'usuario' => '24411070200120',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUZMAN NEGRETE ALONDRA', 'usuario' => '24411070200127',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ JIMENEZ LUIS DANIEL', 'usuario' => '24411070200132',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERRERA VENTURA EFRAIN', 'usuario' => '24411070200138',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA CERVANTES KIMBERLY', 'usuario' => '24411070200145',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA VENTURA OSCAR', 'usuario' => '24411070200146',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26122007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ CONTRERAS MARIA FERNANDA', 'usuario' => '24411070200151',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MADRIGAL PEREZ JESSICA PRISCILLA', 'usuario' => '24411070200157',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ CANO YESSENIA MARIA GUADALUPE', 'usuario' => '24411070200164',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ MORALES MARIA MAGDALENA', 'usuario' => '24411070200166',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA GUEVARA JESUS GIOVANNY', 'usuario' => '24411070200175',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MOSQUEDA CISNEROS ELIZABETH', 'usuario' => '24411070200184',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MUÑOZ PEREZ MELANIE SINAID', 'usuario' => '24411070200187',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAVARRETE PEREZ JOSE JOAQUIN', 'usuario' => '24411070200193',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'OLVERA VAZQUEZ IAN', 'usuario' => '24411070200199',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ORTIZ REYES CAMILA', 'usuario' => '24411070200206',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEÑA VARGAS DIEGO ALEXANDER', 'usuario' => '24411070200209',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ HERNANDEZ DIANA PAOLA', 'usuario' => '24411070200213',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PIZAÑA GALVAN KARLA PAOLA', 'usuario' => '24411070200217',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ NAVARRO XIMENA MONTSERRAT', 'usuario' => '24411070200222',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMOS OROZCO KARINA DAAYANI', 'usuario' => '24411070200230',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIVERA LOPEZ JOSE TADEO', 'usuario' => '24411070200240',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ BRAVO JAZMIN BERENICE', 'usuario' => '24411070200243',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROSALES DUARTE MARIA DEL CARMEN', 'usuario' => '24411070200252',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALDAÑA MATA CRISTIAN GIOVANNI', 'usuario' => '24411070200259',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES ROBLES PABLO', 'usuario' => '24411070200271',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ LEMUS ALONSO GUADALUPE', 'usuario' => '24411070200279',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06102006",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AGUILAR RODRIGUEZ JUAN FERNANDO', 'usuario' => '24411070200003',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17122007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALVARADO RAMIREZ ITALY DENISSE', 'usuario' => '24411070200014',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AVILA GARCIA MARIANA', 'usuario' => '24411070200022',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARAJAS AYALA AITANA JAZMIN', 'usuario' => '24411070200027',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARAJAS SANCHEZ DIANA GUADALUPE', 'usuario' => '24411070200030',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARRIOS VARGAS JAEL ARMANDO', 'usuario' => '24411070200032',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BOMBELA AGUILAR HUGO DANIEL', 'usuario' => '24411070200035',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BOMBELA LEMUS ALLISON MAGALY', 'usuario' => '24411070200036',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABEZA IBARRA CARLOS ALBERTO', 'usuario' => '24411070200040',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA AGUILERA JULIO ANGEL', 'usuario' => '24411070200041',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA GALLARDO ASHLY GUADALUPE', 'usuario' => '24411070200043',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMPOS ESTRADA MARIO ALEXIS', 'usuario' => '24411070200051',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMPOS VAZQUEZ VALENTIN', 'usuario' => '24411070200052',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO GARCIA JULIAN EMILIO', 'usuario' => '24411070200053',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO RIVERA EFRAIN', 'usuario' => '24411070200058',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CASTILLO RAYA CHRISTIAN JESUS', 'usuario' => '24411070200061',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CENDEJAS VILLAFAÑA CARLOS', 'usuario' => '24411070200064',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES LOPEZ JORGE OSVALDO', 'usuario' => '24411070200068',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES MONTOYA DARIO UCIEL', 'usuario' => '24411070200071',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES MORALES FRIDA VIANNEY', 'usuario' => '24411070200072',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CISNEROS RAMIREZ IVONNE JOCELYN', 'usuario' => '24411070200076',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CONCHA CERVANTES ANGEL OSVALDO', 'usuario' => '24411070200077',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CUELLAR RAMIREZ XIMENA JOCELYN', 'usuario' => '24411070200081',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CUEVAS HERNANDEZ MIGUEL EDUARDO', 'usuario' => '24411070200082',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CUEVAS VILLANUEVA FRANCISCO', 'usuario' => '24411070200083',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DUARTE PRADO CARLOS ARMANDO', 'usuario' => '24411070200087',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ESPARZA CONTRERAS SAUL MAURICIO', 'usuario' => '24411070200090',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES CRUZ DANIELA', 'usuario' => '24411070200094',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES MEZA KARLA VICTORIA', 'usuario' => '24411070200098',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GAONA ROSAS CHRISTIAN JESUS', 'usuario' => '24411070200102',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA CANCHOLA LUZ ARELI', 'usuario' => '24411070200103',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA GARCIA DANIEL ALEXANDER', 'usuario' => '24411070200104',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ CERVANTES FATIMA', 'usuario' => '24411070200112',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ FLORES LUIS ALEJANDRO', 'usuario' => '24411070200113',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ OÑATE JUAN DIEGO', 'usuario' => '24411070200123',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ ALONSO OSCAR ALEXANDER', 'usuario' => '24411070200128',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ VENTURA PRISCILA', 'usuario' => '24411070200136',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HIDALGO RAMIREZ YAHIR EMILIANO', 'usuario' => '24411070200139',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ MATA LILIANA DENISSE', 'usuario' => '24411070200152',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MAGAÑA OBLEA DULCE MARIA', 'usuario' => '24411070200159',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ CRUZ NOHEMI BETZABETH', 'usuario' => '24411070200165',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEJIA GUERRERO ALYSA', 'usuario' => '24411070200170',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MORALES TORRES MARIA FERNANDA', 'usuario' => '24411070200182',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MUÑOZ AGUIRRE KIMBELRY GIOVANNA', 'usuario' => '24411070200186',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PADILLA MORENO LUIS ANGEL', 'usuario' => '24411070200207',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SERAFIN PEREZ MA. DEL CARMEN', 'usuario' => '24411070200263',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VARGAS MADRIGAL DAYANA', 'usuario' => '24411070200277',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA PEREZ EMILY GUADALUPE', 'usuario' => '24411070200287',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZAMORA OROZCO ALISSON CAMILA', 'usuario' => '24411070200291',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZARAGOZA HERNANDEZ SAMANTHA GUADALUPE', 'usuario' => '24411070200293',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ACEVEDO CHAVEZ JUAN DIEGO', 'usuario' => '24411070200001',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCOCER AVILA JESUS', 'usuario' => '24411070200006',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALFARO GOVEA JAVIER ALEJANDRO', 'usuario' => '24411070200008',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALONSO FIGUEROA BRYAN BLADIMIR', 'usuario' => '24411070200009',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALVARADO DUARTE FATIMA SHERLYN', 'usuario' => '24411070200010',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALVARADO MENDOZA FATIMA GUADALUPE', 'usuario' => '24411070200013',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARIAS VENTURA ANA ISABEL', 'usuario' => '24411070200016',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AVILA MURILLO VALERIA', 'usuario' => '24411070200023',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AYALA AYALA AINARA MARGARITA', 'usuario' => '24411070200025',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARAJAS MARTINEZ ALEXA CAMILA', 'usuario' => '24411070200029',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA HERNANDEZ JOSE ANTONIO', 'usuario' => '24411070200044',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO GARCIA OSCAR', 'usuario' => '24411070200054',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CARRERA BRAVO TOMAS EMILIANO', 'usuario' => '24411070200059',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CASTAÑEDA SOLANO CHRISTIAN JESUS', 'usuario' => '24411070200060',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DIAZ HERNANDEZ ALAN GUADALUPE', 'usuario' => '24411070200084',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FIGUEROA ANDRADE KAROL DAMIAN', 'usuario' => '24411070200093',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ CENTENO MIGUEL ANGEL', 'usuario' => '24411070200111',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ GARCIA ANGEL', 'usuario' => '24411070200116',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ RIVERA ALAN', 'usuario' => '24411070200118',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ CERVANTES MARCOS DAMIAN', 'usuario' => '24411070200122',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ VILLA ERICK AGUSTIN', 'usuario' => '24411070200125',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUZMAN MENDOZA ANGEL ROMAN', 'usuario' => '24411070200126',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ CORONA DANIEL EDUARDO', 'usuario' => '24411070200130',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ GARNICA GABRIEL DE JESUS', 'usuario' => '24411070200131',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ MAGAÑA JUAN CARLOS', 'usuario' => '24411070200133',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ MENDOZA KEVIN EDUARDO', 'usuario' => '24411070200134',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04112007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ RINCON ALAN RICARDO', 'usuario' => '24411070200135',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ MURILLO LEONARDO JOSUE', 'usuario' => '24411070200153',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MURILLO VALDES ANA KARINA', 'usuario' => '24411070200190',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NOLAZCO MENDOZA DIANA RUBI', 'usuario' => '24411070200196',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'OBLEA SALDAÑA URIEL', 'usuario' => '24411070200198',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ORTEGA REYES ELISA YARETZI', 'usuario' => '24411070200203',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ FLORES DIEGO', 'usuario' => '24411070200211',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ GOVEA LIDIA FERNANDA', 'usuario' => '24411070200212',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ MURILLO JUANA ADILENE', 'usuario' => '24411070200216',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ HERNANDEZ KARLA FERNANDA', 'usuario' => '24411070200221',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ REYES ANDREA JAZMIN', 'usuario' => '24411070200225',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'REYES VAZQUEZ MARIA GUADALUPE', 'usuario' => '24411070200235',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIZO RAMIREZ NANCY PAOLA', 'usuario' => '24411070200242',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROMERO MARTINEZ MELANY GUADALUPE', 'usuario' => '24411070200251',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALAZAR ALONSO KAREN ANDREA', 'usuario' => '24411070200256',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SANDOVAL BARAJAS CINTHIA', 'usuario' => '24411070200261',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES RAMIREZ IVANNA NOHEMI', 'usuario' => '24411070200270',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TRINIDAD CISNEROS ARANZA', 'usuario' => '24411070200274',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ ALVARADO LUCILA SARAHI', 'usuario' => '24411070200278',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ MADRIGAL BRISA GUADALUPE', 'usuario' => '24411070200280',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VILLANUEVA CANALES KAROL ALONDRA', 'usuario' => '24411070200289',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZAMORA VARGAS REGINA ODETTE GUADALUPE', 'usuario' => '24411070200292',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZARATE OBLEA EVELYN', 'usuario' => '24411070200295',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AVILA VENTURA KIMBERLY RENATA', 'usuario' => '24411070200024',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA MARTINEZ DULCE MARIA', 'usuario' => '24411070200045',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMACHO ZAMORA ESTEFANI SARAY', 'usuario' => '24411070200048',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMARILLO LUGO JESHUA NAOMI', 'usuario' => '24411070200050',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO MENDOZA ANAHI MONTSERRATH', 'usuario' => '24411070200055',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO RIOS MARIA GUADALUPE', 'usuario' => '24411070200057',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES FLORES ANDREA NATALIA', 'usuario' => '24411070200067',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES LOPEZ VALERIA MONTSERRAT', 'usuario' => '24411070200069',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05042007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES ORTIZ XIMENA GUADALUPE', 'usuario' => '24411070200073',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CONTRERAS MEZA KAREYMI BELEM', 'usuario' => '24411070200078',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DOMINGUEZ CERVANTES XIMENA CITLALI', 'usuario' => '24411070200085',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DUMAS SALAS FANNY DANAE', 'usuario' => '24411070200088',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FERNANDEZ REYES ALLISON CAROLINA', 'usuario' => '24411070200092',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES DUARTE KAMILA DENISSE', 'usuario' => '24411070200095',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FRAUSTO ARREDONDO ANDREA RUBI', 'usuario' => '24411070200100',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA GOMEZ ALEXANDRA GUADALUPE', 'usuario' => '24411070200105',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ MARTINEZ TERESA DE JESUS', 'usuario' => '24411070200117',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ TAFOYA FRIDA SOFIA', 'usuario' => '24411070200119',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ VALENCIA ZOE ARANZAZU', 'usuario' => '24411070200124',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERRERA VAZQUEZ ADILENNE', 'usuario' => '24411070200137',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LAGUNA LARA VALENTINA', 'usuario' => '24411070200142',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LARA CARRILLO JUAN DIEGO', 'usuario' => '24411070200143',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA CARRANZA YERIK ANTONIO', 'usuario' => '24411070200144',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEMUS TAPIA EMILY GUADALUPE', 'usuario' => '24411070200147',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LONA CALLENTE LAURA MELISSA', 'usuario' => '24411070200148',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ CABRERA ARIANA JACQUELIN', 'usuario' => '24411070200150',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MAGAÑA MAGAÑA GABRIEL', 'usuario' => '24411070200158',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MAGAÑA VENTURA EDER ANTONIO', 'usuario' => '24411070200160',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ ARIAS CHRISTIAN MICHEL', 'usuario' => '24411070200162',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23082007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ AVILA MAXIMILIANO', 'usuario' => '24411070200163',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDEL BARRIENTOS GEAN CARLO', 'usuario' => '24411070200168',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDEZ GUTIERREZ JOSUE', 'usuario' => '24411070200172',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MONTERO REYES JUAN PABLO', 'usuario' => '24411070200180',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NUÑEZ SOTO OSCAR DANIEL', 'usuario' => '24411070200197',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PELAGIO RODRIGUEZ SANTIAGO', 'usuario' => '24411070200208',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ ARREDONDO ADRIAN', 'usuario' => '24411070200210',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ HERNANDEZ DILAN BLADIMIR', 'usuario' => '24411070200214',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ MEDINA LUIS GILBERTO', 'usuario' => '24411070200215',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ GONZALEZ FERNANDA GUADALUPE', 'usuario' => '24411070200220',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ PIÑON FERNANDO', 'usuario' => '24411070200224',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAYA RAMIREZ MARIANO VLADIMIR', 'usuario' => '24411070200232',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAZO AVILA FABIAN RODOLFO', 'usuario' => '24411070200233',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ CERVANTES ANGEL ARMANDO', 'usuario' => '24411070200244',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ GALLARDO AXEL ANTONY', 'usuario' => '24411070200246',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALAZAR MUÑOZ KEVIN DANIEL', 'usuario' => '24411070200258',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VARELA RODRIGUEZ VICTOR ALEJANDRO', 'usuario' => '24411070200276',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ NEGRETE CESAR RIGOBERTO', 'usuario' => '24411070200281',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA GUTIERREZ ELIAS', 'usuario' => '24411070200284',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZAMBRANO HERNANDEZ GABRIEL', 'usuario' => '24411070200290',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALFARO ESTRADA JOSE ALEXANDER', 'usuario' => '24411070200007',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARRON LOPEZ EMILY ADRIANA', 'usuario' => '24411070200033',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BOMBELA VENTURA RENATO', 'usuario' => '24411070200037',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BRIBIESCA FLORES BRANDON YANDEL', 'usuario' => '24411070200039',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CENDEJAS MARTINEZ LEONARDO', 'usuario' => '24411070200063',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES DOMINGUEZ VALERIA', 'usuario' => '24411070200066',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES NEGRETE MARIA CELESTE', 'usuario' => '24411070200099',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA MARTINEZ LEONARDO', 'usuario' => '24411070200107',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ ARREDONDO ANTONIO REMEDIOS', 'usuario' => '24411070200110',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ MEJIA BRANDON ANTONIO', 'usuario' => '24411070200114',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ PEÑA DENISSE ALEXA', 'usuario' => '24411070200115',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUEVARA ZAVALA BRANDON OCIEL', 'usuario' => '24411070200121',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26032006",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ ANGEL EMMANUEL', 'usuario' => '24411070200129',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JUAREZ MENDOZA CHRISTIAN MIGUEL', 'usuario' => '24411070200140',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JUAREZ ROJAS MARIA DE JESUS', 'usuario' => '24411070200141',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ AYALA ALLYSON NICOLE', 'usuario' => '24411070200149',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ RAMIREZ ROSA IVONNE', 'usuario' => '24411070200154',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ SOTELO LESLY', 'usuario' => '24411070200155',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARES GONZALEZ DANNA CAMILA', 'usuario' => '24411070200161',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ NEGRETE PAOLA VALERIA', 'usuario' => '24411070200167',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEJIA ROMERO NATALIA', 'usuario' => '24411070200171',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA DUARTE ALAN EMILIANO', 'usuario' => '24411070200173',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MIRELES GONZALEZ KARLA DENISSE', 'usuario' => '24411070200177',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MIRELES ROSALES MAXIMO ULISES', 'usuario' => '24411070200178',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MONCADA ARRIAGA JOSE ANGEL', 'usuario' => '24411070200179',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MOSQUEDA AYALA EVELYN YUBETZIA', 'usuario' => '24411070200183',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MOSQUEDA FIGUEROA DANIELA PAOLA', 'usuario' => '24411070200185',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MUÑOZ VEGA GIOVANNI', 'usuario' => '24411070200188',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MURILLO AYALA LISSETH GUADALUPE', 'usuario' => '24411070200189',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAVARRETE DUARTE DIEGO', 'usuario' => '24411070200192',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NEGRETE GALVAN ANDREA GUADALUPE', 'usuario' => '24411070200194',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'OROZCO CARRILLO FABIAN DOSANTOS', 'usuario' => '24411070200200',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ORTEGA HERRERA LISSETH CAMILA', 'usuario' => '24411070200201',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ORTEGA MADRIGAL MATEO GUADALUPE', 'usuario' => '24411070200202',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ORTIZ AVILA EMILY SAMANTHA', 'usuario' => '24411070200204',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ORTIZ MIRELES DIANA MICHEL', 'usuario' => '24411070200205',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PLANCARTE BALTAZAR RONALDO', 'usuario' => '24411070200218',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ ESTRADA CRISTINA JOCELYN', 'usuario' => '24411070200219',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ PEREZ IRENE DE LA LUZ', 'usuario' => '24411070200223',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ RIVERA LUIS ANGEL', 'usuario' => '24411070200226',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMOS GARCIA KEIRY DESIREE', 'usuario' => '24411070200229',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIOS ALVAREZ ROXANA GUADALUPE', 'usuario' => '24411070200236',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIOS GARCIA MARIANA', 'usuario' => '24411070200237',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIOS SALDAÑA FERNANDO', 'usuario' => '24411070200238',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ TULA FRANCISCO EMMANUEL', 'usuario' => '24411070200248',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROSALES NOLASCO VANESSA', 'usuario' => '24411070200253',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SANTIAGO AGUILAR DANIELA PAOLA', 'usuario' => '24411070200262',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES LUNA IKER MATIAS', 'usuario' => '24411070200269',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ ZAMBRANO RUBEN GAEL', 'usuario' => '24411070200283',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZARAGOZA LEON RAUL', 'usuario' => '24411070200294',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALVARADO GALLARDO EMMANUEL', 'usuario' => '24411070200012',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARMENTA BARRON MARIO ALBERTO', 'usuario' => '24411070200017',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARZOLA GARNICA JOSUE EDUARDO', 'usuario' => '24411070200021',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARAJAS FLORES ARMANDO', 'usuario' => '24411070200028',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BECERRA CANCHOLA AXEL YAHIR', 'usuario' => '24411070200034',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BRAVO RODRIGUEZ EVELYN', 'usuario' => '24411070200038',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09042009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMACHO MARTINEZ JENNIFER', 'usuario' => '24411070200047',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO NEGRETE JOSE DE JESUS', 'usuario' => '24411070200056',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CEDILLO FRAUSTO CARLOS EDUARDO', 'usuario' => '24411070200062',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES ZARAGOZA ANDREA LISSETH', 'usuario' => '24411070200074',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ TORRES NATALIE ESMERALDA', 'usuario' => '24411070200080',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FACIO GOMEZ VALENTINA', 'usuario' => '24411070200091',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES MEDINA ANGELA PAOLA', 'usuario' => '24411070200097',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA LEMUS ALVARO EDUARDO', 'usuario' => '24411070200106',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA RAMIREZ CESAR ADRIAN', 'usuario' => '24411070200108',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LORENZO VALERIO KENIA VALENTINA', 'usuario' => '24411070200156',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDEL MARTINEZ MARIA DE LOS ANGELES', 'usuario' => '24411070200169',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA DUARTE TERESITA PAOLA', 'usuario' => '24411070200174',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MIRANDA GARCIA DULCE REGINA', 'usuario' => '24411070200176',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MORALES CANCHOLA HEIDI NATASHA', 'usuario' => '24411070200181',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAJERA ANDRADE JOSE ANDRES', 'usuario' => '24411070200191',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NEGRETE HERNANDEZ ALEJANDRO', 'usuario' => '24411070200195',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ TORRES ROMAN ANTONIO', 'usuario' => '24411070200227',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ VARGAS FERNANDO SALVADOR', 'usuario' => '24411070200228',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24072009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAYA MUÑOZ JUAN DIEGO', 'usuario' => '24411070200231',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'REYES HERNANDEZ GUSTAVO EDUARDO', 'usuario' => '24411070200234',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIVERA GONZALEZ ALLISON', 'usuario' => '24411070200239',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIVERA SANCHEZ URIEL VICENTE', 'usuario' => '24411070200241',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ ESPITIA ANA SOFIA', 'usuario' => '24411070200245',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ ROSALES ROBERTO CARLOS', 'usuario' => '24411070200247',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROJAS LOPEZ ARELY', 'usuario' => '24411070200249',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROJAS LOPEZ HECTOR', 'usuario' => '24411070200250',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROSAS BARRIOS JESUS', 'usuario' => '24411070200254',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16092009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RUIZ VILLA JUAN CARLOS', 'usuario' => '24411070200255',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28122009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALAZAR LEMUS HANNA DENISSE', 'usuario' => '24411070200257',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SANCHEZ GONZALEZ DYLAN YANIXAN', 'usuario' => '24411070200260',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21102009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SILVA RIOS ABISAI', 'usuario' => '24411070200264',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SUAREZ ARREDONDO HILARY MICHELLE', 'usuario' => '24411070200265',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TEJEDA VALENCIA LUNA CAELI', 'usuario' => '24411070200266',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10082009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES ACOSTA KARLA YASMIN', 'usuario' => '24411070200267',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES GUTIERREZ JOSE GUADALUPE', 'usuario' => '24411070200268',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24112009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES URRUTIA NATALIA', 'usuario' => '24411070200272',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27052009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES VARGAS VANESSA SCHOENSTATT', 'usuario' => '24411070200273',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VALADEZ RIOS MELINA SARAI', 'usuario' => '24411070200275',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14032009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ PRADO BRIATNA NAHOMI', 'usuario' => '24411070200282',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA LOPEZ FERNANDA SELENE', 'usuario' => '24411070200285',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA ORTIZ ANDREA', 'usuario' => '24411070200286',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04022009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA ZEPEDA GABRIELA JOCELYN', 'usuario' => '24411070200288',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20012009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZAVALA CAMPOS JESUS MARTIN', 'usuario' => '24411070200296',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24062009",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCALA HERNANDEZ MARIA DE JESUS', 'usuario' => '23411070200005',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCALA HERRERA IVANNA JOLETTE', 'usuario' => '23411070200006',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCOCER GARCIA JAIME LISSANDRO', 'usuario' => '23411070200008',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ANDRADE BARRERA OFELIA ARIZBETH', 'usuario' => '23411070200011',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARREGUIN VENTURA JOCELYN DANIELA', 'usuario' => '23411070200012',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ASCENCIO NAVARRO ANDREA', 'usuario' => '23411070200014',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AVILA MAGAÑA EDUARDO ALBERTO', 'usuario' => '23411070200015',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AVILA PEREZ JACQUELINE ELIZABETH', 'usuario' => '23411070200016',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27082007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AYALA MALDONADO BRIANA MARELY', 'usuario' => '23411070200017',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABEZA MARTINEZ KIMBERLY VANESSA', 'usuario' => '23411070200028',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANCHOLA VARGAS FATIMA DEL CARMEN', 'usuario' => '23411070200032',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CENDEJAS CORONA GABRIEL', 'usuario' => '23411070200039',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CHAVEZ TORRES KAREN JOSELYN', 'usuario' => '23411070200054',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DUARTE HERNANDEZ ITZEL CANDELARIA', 'usuario' => '23411070200070',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FERNANDEZ ROJAS DULCE MARIA', 'usuario' => '23411070200079',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES AVILA CESAR GAEL', 'usuario' => '23411070200081',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FRAUSTO LOPEZ VERONICA IVONNE', 'usuario' => '23411070200084',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ AGUIRRE REGINA', 'usuario' => '23411070200095',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ PICENO PAMELA NAOMI', 'usuario' => '23411070200102',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOVEA GUTIERREZ GIOVANNA YOCELIN', 'usuario' => '23411070200105',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ RODRIGUEZ DANIELA', 'usuario' => '23411070200110',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ BOMBELA ESTEFANIA', 'usuario' => '23411070200114',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ HERNANDEZ DENISSE CAROLINA', 'usuario' => '23411070200118',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ RIOS JIASHI REGINA', 'usuario' => '23411070200122',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERRERA MARTINEZ CHRISTIAN ALBERTO', 'usuario' => '23411070200127',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LAGUNA TORRES MICHAEL OCTAVIO', 'usuario' => '23411070200133',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LIMON GOVEA KARLA VANESSA', 'usuario' => '23411070200144',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ AVILA KIMBERLY ANALI', 'usuario' => '23411070200151',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MADRIGAL ALCOCER KEILLY YANIRA', 'usuario' => '23411070200155',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ GALVAN LEONARDO', 'usuario' => '23411070200166',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ MARTINEZ LESLI GUADALUPE', 'usuario' => '23411070200169',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PACHECO NAVARRO URIEL', 'usuario' => '23411070200211',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27092007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ CARDENAS CLAUDIA SOPHIA', 'usuario' => '23411070200217',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ CERVANTES KIMBERLY GUADALUPE', 'usuario' => '23411070200219',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ PEREZ OSIEL TADEO', 'usuario' => '23411070200223',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ RODRIGUEZ ESTRELLA', 'usuario' => '23411070200225',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PICENO ALMANZA RONALDO', 'usuario' => '23411070200227',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ GARCIA GABRIEL ARTURO', 'usuario' => '23411070200233',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SALAZAR ALONSO FERNANDA ITZEL', 'usuario' => '23411070200263',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BONILLA NARANJO YOSGAR EDUARDO', 'usuario' => '23411070200023',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BORJA VILLANUEVA PRISCILA', 'usuario' => '23411070200305',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABEZA GONZALEZ NAOMI', 'usuario' => '23411070200027',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA HERNANDEZ NOHEMI', 'usuario' => '23411070200029',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES CONRRIQUEZ JIMENA', 'usuario' => '23411070200041',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES GONZALEZ CARMEN VANESSA', 'usuario' => '23411070200042',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES HERNANDEZ ANGELES DE JESUS', 'usuario' => '23411070200045',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES REYES MARLENNE JACQUELINE', 'usuario' => '23411070200047',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES VENTURA NATALIA', 'usuario' => '23411070200049',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CHAVEZ NARANJO FATIMA JIMENA', 'usuario' => '23411070200051',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CHAVEZ SANCHEZ JULIO CESAR', 'usuario' => '23411070200053',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ESPITIA CAMPOS SANDRA QUETZALLI', 'usuario' => '23411070200076',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04052007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ESPITIA REYES BLANCA ESTELA', 'usuario' => '23411070200077',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ BARRON ANGEL ROBERTO', 'usuario' => '23411070200093',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ MEDINA PAULA ALONDRA', 'usuario' => '23411070200101',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27092007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUEVARA NAVARRO SERGIO', 'usuario' => '23411070200107',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ CONTRERAS FATIMA DEL ROSARIO', 'usuario' => '23411070200115',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ PELAGIO MELISSA', 'usuario' => '23411070200121',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ VELAZQUEZ JOSE PAUL', 'usuario' => '23411070200124',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JUAREZ ALONSO JIMENA', 'usuario' => '23411070200130',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEMUS MENDOZA OWEN EMILIANO', 'usuario' => '23411070200142',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LINARES TAFOYA ESMERALDA', 'usuario' => '23411070200148',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11102007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MACIEL BORJAS CHRISTIAN THOMAS', 'usuario' => '23411070200154',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ CISNEROS DORA FERNANDA', 'usuario' => '23411070200165',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ GARCIA PAOLA', 'usuario' => '23411070200167',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MUÑOZ ALVARADO ALEJANDRA GUADALUPE', 'usuario' => '23411070200193',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MURILLO MEZA CAMILA MICHELLE', 'usuario' => '23411070200197',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'OBLEA RAYA KELLY AZUCENA', 'usuario' => '23411070200206',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PACHECO PEREZ SAMANTHA MICHELLE', 'usuario' => '23411070200213',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ CERVANTES BENYAMIN JOSHEP', 'usuario' => '23411070200218',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ JAIME JENNIFER YAJANNI', 'usuario' => '23411070200221',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26102007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ REYES ALEXIS GUADALUPE', 'usuario' => '23411070200237',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RANGEL CANCHOLA KATHERYNE FERNANDA', 'usuario' => '23411070200239',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIOS PACHECO RENATA GUADALUPE', 'usuario' => '23411070200247',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16042007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALCOCER AVILA JOSE ARMANDO', 'usuario' => '23411070200007',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CHAVEZ ROSAS ESTRELLA ARANZASU', 'usuario' => '23411070200052',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ LOMELI LEONARDO', 'usuario' => '23411070200062',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DE LA PAZ VARGAS ANAYELI', 'usuario' => '23411070200066',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GORDILLO DE LA PAZ PATRICIA', 'usuario' => '23411070200104',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JUAREZ ALCALA JAVIER YAEL', 'usuario' => '23411070200129',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA TORRES NOEMI GUADALUPE', 'usuario' => '23411070200141',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LOPEZ VENTURA MONTSERRATH', 'usuario' => '23411070200152',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ GONZALEZ ALAN MIGUEL', 'usuario' => '23411070200168',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ RIVERA ARLETH GUADALUPE', 'usuario' => '23411070200224',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ SANCHEZ BRYAN JESUS', 'usuario' => '23411070200226',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PRADO GARCIA ROCIO LIZBETH', 'usuario' => '23411070200229',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ LOPEZ CLAUDIA GUADALUPE', 'usuario' => '23411070200234',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAYA GUTIERREZ ANDREA CAMILA', 'usuario' => '23411070200241',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAYA PIZAÑA EVELYN MARIANA', 'usuario' => '23411070200242',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18102006",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'REYES OBLEA CANDELARIA', 'usuario' => '23411070200244',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIVERA REYES MAYRA XIMENA', 'usuario' => '23411070200248',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIVERA RODRIGUEZ ARELI LIZBETH', 'usuario' => '23411070200249',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ DUARTE XIMENA JOCELYN', 'usuario' => '23411070200254',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ HERNANDEZ ARIANA SARAHI', 'usuario' => '23411070200256',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ RIOS SOFIA FERNANDA', 'usuario' => '23411070200259',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROJAS ARIAS MARIA GUADALUPE', 'usuario' => '23411070200261',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ROSAS BARRIOS ALONDRA LIZBETH', 'usuario' => '23411070200262',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SANCHEZ GUEVARA MERLINA HAZEL', 'usuario' => '23411070200264',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SERAFIN PEREZ CLAUDIA WENDOLINE', 'usuario' => '23411070200267',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SOTO NOLASCO EDWIN ADRIAN', 'usuario' => '23411070200270',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SOTO RODRIGUEZ KARINA EBOLET', 'usuario' => '23411070200271',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TINAJERO FIGUEROA ANAHI', 'usuario' => '23411070200277',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES RAZO ANGELA CAROL', 'usuario' => '23411070200280',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VARGAS PEÑA ANDREA', 'usuario' => '23411070200285',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ GOVEA GUADALUPE', 'usuario' => '23411070200289',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VEGA VARGAS DAMARIS ALEXA', 'usuario' => '23411070200293',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZARATE ALVAREZ HUGO ALBERTO', 'usuario' => '23411070200303',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"11092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZARATE MARTINEZ CAMILA GUADALUPE', 'usuario' => '23411070200304',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AGUIRRE RAMOS CHRISTIAN ALEJANDRO', 'usuario' => '23411070200003',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARAJAS PAZ OSCAR GERARDO', 'usuario' => '23411070200019',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CABRERA NAVARRO JUAN DANIEL', 'usuario' => '23411070200030',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO GARCIA OSWALDO', 'usuario' => '23411070200033',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO ROJAS MARCO ANTONIO', 'usuario' => '23411070200034',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CHAVEZ CENDEJAS DANIELA', 'usuario' => '23411070200050',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CONTRERAS BRAVO JOSE MANUEL', 'usuario' => '23411070200056',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CONTRERAS PEREZ GIOVANNY', 'usuario' => '23411070200057',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ LEON MIGUEL STIVEN', 'usuario' => '23411070200061',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ NAVARRO JOSE FERNANDO', 'usuario' => '23411070200064',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DOMINGUEZ CERVANTES OLIVER ISAAC', 'usuario' => '23411070200067',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA SALAZAR LUIS ANGEL', 'usuario' => '23411070200091',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18062007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ LONA EZEQUIEL', 'usuario' => '23411070200094',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ ARROYO MARIANA ALEXANDRA', 'usuario' => '23411070200096',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ TORRES JUAN PABLO', 'usuario' => '23411070200103',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ LOPEZ JORGE ALEXIS', 'usuario' => '23411070200119',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'JUAREZ JUAREZ OSCAR JESUS', 'usuario' => '23411070200131',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA MARTINEZ GUILLERMO', 'usuario' => '23411070200137',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA MENDOZA JESUS EMILIANO', 'usuario' => '23411070200139',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LINARES GUTIERREZ FABIOLA', 'usuario' => '23411070200146',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MADRIGAL MENDOZA OSCAR EMMANUEL', 'usuario' => '23411070200157',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDEL FLORES DIEGO', 'usuario' => '23411070200173',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDEL GARCIA JESUS DEL CARMEN', 'usuario' => '23411070200174',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDEL VAZQUEZ JUAN JOSE', 'usuario' => '23411070200175',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MORALES CHAVEZ AXEL', 'usuario' => '23411070200188',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MORALES HERNANDEZ DIEGO', 'usuario' => '23411070200189',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MORALES LOPEZ FRANCISCO', 'usuario' => '23411070200190',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MOSQUEDA LOPEZ EMIR', 'usuario' => '23411070200192',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MURILLO AYALA JAZMIN', 'usuario' => '23411070200196',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23102006",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAVARRETE ARELLANO JONATHAN ALBERTO', 'usuario' => '23411070200199',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NOLASCO BRAVO CARLOS DANIEL', 'usuario' => '23411070200203',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'OBLEA GARCIA EMILIANO', 'usuario' => '23411070200205',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PACHECO ORTIZ BETZABE', 'usuario' => '23411070200212',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIZO CENDEJAS MARIANA GUADALUPE', 'usuario' => '23411070200250',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIZO MORALES EMMANUEL', 'usuario' => '23411070200251',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ CONTRERAS PEDRO', 'usuario' => '23411070200253',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ GONZALEZ KARLA GUADALUPE', 'usuario' => '23411070200255',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"06062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SERVIN MURILLO PERLA JOSEFINA', 'usuario' => '23411070200268',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VARGAS MORALES ALEJANDRO', 'usuario' => '23411070200284',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ VAZQUEZ MIRIAM GUADALUPE', 'usuario' => '23411070200292',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA GARCIA ISABEL GUADALUPE', 'usuario' => '23411070200297',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA LEDESMA NATALIA GUADALUPE', 'usuario' => '23411070200298',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'AGUILAR RAYA AXEL ALEJANDRO', 'usuario' => '23411070200001',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALATORRE CANCHOLA AYMAR ROXANA', 'usuario' => '23411070200004',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARRON LEDESMA BRANDON RAMON', 'usuario' => '23411070200020',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BONILLA MARTINEZ KARLA LIZBETH', 'usuario' => '23411070200022',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BRAVO RODRIGUEZ GERARDO ALEXANDER', 'usuario' => '23411070200026',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CAMARILLO LUGO LUCILA MARLEN', 'usuario' => '23411070200031',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CARRERA ROJAS VALERIA', 'usuario' => '23411070200037',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES RIVERA ALEJANDRO', 'usuario' => '23411070200048',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CONCHA LOPEZ LUVIA LIZETH', 'usuario' => '23411070200055',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ GOMEZ EDWIN FERNANDO', 'usuario' => '23411070200060',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ LOPEZ MIGUEL ANGEL', 'usuario' => '23411070200063',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GALLO ESPINOSA ZULEYMA GUADALUPE', 'usuario' => '23411070200085',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA ENRIQUEZ SOFIA YOHALI', 'usuario' => '23411070200087',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15022007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GARCIA FRAUSTO JUAN DIEGO', 'usuario' => '23411070200088',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ CABELLO MARIA GUADALUPE', 'usuario' => '23411070200108',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ ARROYO IDALIA MARISELA', 'usuario' => '23411070200112',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ LOPEZ JOSE JOEL', 'usuario' => '23411070200120',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERRERA DUARTE OMAR', 'usuario' => '23411070200126',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA CERVANTES JOEL SANTIAGO', 'usuario' => '23411070200134',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEMUS NUÑEZ VERONICA GABRIELA', 'usuario' => '23411070200143',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LINARES TAFOYA JOSE GUADALUPE', 'usuario' => '23411070200149',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LONA BRAVO VALERIA', 'usuario' => '23411070200150',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ ALCALA LUIS MANUEL', 'usuario' => '23411070200162',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"08072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ CHAVEZ ALDO DANIEL', 'usuario' => '23411070200164',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ RIOS ALISSON DAYANA', 'usuario' => '23411070200172',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDRANO ALATORRE ANETH ABDELALI VENUS', 'usuario' => '23411070200177',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDRANO CABRERA JUAN ALFONSO', 'usuario' => '23411070200178',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA DUARTE LEONARDO RAUL', 'usuario' => '23411070200181',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MUÑOZ AVILA SEBASTIAN', 'usuario' => '23411070200194',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MUÑOZ CENDEJAS CHRISTIAN ANTONIO', 'usuario' => '23411070200195',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAVARRETE RIVERA JOSE JUAN', 'usuario' => '23411070200200',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NEGRETE CHAVOYA ANGEL EDUARDO', 'usuario' => '23411070200202',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ORTEGA MADRIGAL JUAN MANUEL', 'usuario' => '23411070200208',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ CERVANTES NAETHAN SANTIAGO', 'usuario' => '23411070200220',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PLANCARTE LOPEZ JONATHAN ADRIAN', 'usuario' => '23411070200228',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SANCHEZ MARTINEZ BRISSA JHOANA', 'usuario' => '23411070200265',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TULE GALVAN DIANA', 'usuario' => '23411070200283',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ GARCIA LUIS URIEL', 'usuario' => '23411070200288',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BARAJAS FLORES HANNA PAULINA', 'usuario' => '23411070200018',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BRAVO CAMPOS JAZMIN GUADALUPE', 'usuario' => '23411070200024',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CANO VENTURA EVELYN RUBI', 'usuario' => '23411070200035',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES GUTIERREZ JOSE ANTONIO', 'usuario' => '23411070200044',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ ARREDONDO ANGEL DE JESUS', 'usuario' => '23411070200058',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ELIZARRARAS AVILA ANA LUISA', 'usuario' => '23411070200073',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ENRIQUEZ GONZALEZ ERICK EMILIO', 'usuario' => '23411070200074',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FLORES PLANCARTE FATIMA', 'usuario' => '23411070200083',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21122007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GOMEZ ANGEL ADRIANA CAMILA', 'usuario' => '23411070200092',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ HERNANDEZ EDWIN', 'usuario' => '23411070200098',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GONZALEZ HERNANDEZ IRVING', 'usuario' => '23411070200099',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUTIERREZ GARCIA MARIA MAGDALENA', 'usuario' => '23411070200109',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ GONZALEZ MIRIAM CANDELARIA', 'usuario' => '23411070200116',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ TAFOYA CESAR GIOVANNY', 'usuario' => '23411070200123',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA MENDOZA JESUS', 'usuario' => '23411070200138',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"03092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LINARES GARCIA LUIS IVAN', 'usuario' => '23411070200145',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LINARES ORTEGA RAUL', 'usuario' => '23411070200147',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MAGDALENO MORALES KIARA', 'usuario' => '23411070200160',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MAQUEDA CERVANTES JESUS MIGUEL', 'usuario' => '23411070200161',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ ARELLANO ANA MARIA', 'usuario' => '23411070200163',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ MOLINA ARTURO GAEL', 'usuario' => '23411070200170',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MEDRANO GUERRERO EDGAR', 'usuario' => '23411070200179',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA GARCIA BRYAN ALEXANDER', 'usuario' => '23411070200182',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA PEÑA JENNIFER', 'usuario' => '23411070200183',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MIRELES LINARES GENESIS VICTORIA', 'usuario' => '23411070200186',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MORALES MADRIGAL LIZBETH PAULINA', 'usuario' => '23411070200191',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19042007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'NAVARRETE ALVARADO MARIO ALBERTO', 'usuario' => '23411070200198',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31102006",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PACHECO CAMPOS ALHONDRA GUADALUPE', 'usuario' => '23411070200209',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PELAGIO RIOS BRISA ABRIL', 'usuario' => '23411070200214',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEÑA GONZALEZ JOSE MANUEL', 'usuario' => '23411070200215',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'QUIROZ MONTEJANO JONATHAN MIGUEL', 'usuario' => '23411070200230',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ RAMIREZ VICTOR HUGO', 'usuario' => '23411070200236',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RIOS MARTINEZ KATIA GUADALUPE', 'usuario' => '23411070200246',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ CANO ALVARO', 'usuario' => '23411070200252',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SOLIS LOPEZ CARLOS ARTURO', 'usuario' => '23411070200269',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05032007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TEJEDA HERNANDEZ LYANEE IRAIS', 'usuario' => '23411070200275',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"05082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES MUÑOZ CHRISTOPHER JULIAN', 'usuario' => '23411070200278',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VASQUEZ VENTURA JESUS', 'usuario' => '23411070200287',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ JUAREZ SARAHI GUADALUPE', 'usuario' => '23411070200290',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENEGAS VAZQUEZ MARIA DEL CARMEN', 'usuario' => '23411070200296',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"31122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA RANGEL FATIMA MAREINA', 'usuario' => '23411070200300',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ALTAMIRANO RAMIREZ MIREYA', 'usuario' => '23411070200010',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ARRIAGA LOPEZ MELANY ALEXANDRA', 'usuario' => '23411070200013',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BERBER CANO DAFNE', 'usuario' => '23411070200021',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'BRAVO GALVAN JULIETA', 'usuario' => '23411070200025',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"21022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CARDENAS MARTINEZ JESUS', 'usuario' => '23411070200036',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERDA ESTRADA ANGEL ALEJANDRO', 'usuario' => '23411070200040',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"17072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES GONZALEZ JUAN MANUEL', 'usuario' => '23411070200043',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CERVANTES MENDOZA JIMENA CORAL', 'usuario' => '23411070200046',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"10082008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'CRUZ CENDEJAS ZULEMA', 'usuario' => '23411070200059',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DOMINGUEZ SALAZAR BRENDA CECILIA', 'usuario' => '23411070200068',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"13032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'DUARTE TAFOYA GUADALUPE', 'usuario' => '23411070200071',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"29032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'FELIPE ORTIZ YULIANA GUADALUPE', 'usuario' => '23411070200078',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GAONA HERNANDEZ JUAN DANIEL', 'usuario' => '23411070200086',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"22042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'GUEVARA HERNANDEZ FERNANDA', 'usuario' => '23411070200106',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ ALONSO JACQUELINE', 'usuario' => '23411070200111',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25062008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERNANDEZ GONZALEZ NOE GUADALUPE', 'usuario' => '23411070200117',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'HERRERA ARREGUIN ADRIAN TADEO', 'usuario' => '23411070200125',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LAGUNA GOMEZ CITLALI ENCARNACION', 'usuario' => '23411070200132',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20032008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LEDESMA PLANCARTE CHRISTOPHER GIOVANNI', 'usuario' => '23411070200140',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"18092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'LORENZO ZAMORA FRANCISCO JULIAN', 'usuario' => '23411070200153',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"09112008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MAGAÑA MENDOZA JULIANA', 'usuario' => '23411070200159',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"25072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MARTINEZ NEGRETE ANA KAREN', 'usuario' => '23411070200171',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"28092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MENDOZA ROSALES JONATHAN ULISES', 'usuario' => '23411070200184',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"27072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'MONTES ARIAS NATALI SOFIA', 'usuario' => '23411070200187',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"14052008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PACHECO HERNANDEZ ARLETH CAROLINA', 'usuario' => '23411070200210',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"20092008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ CAMARILLO SALVADOR', 'usuario' => '23411070200216',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12012008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'PEREZ OBLEA EDGAR GIOVANNI', 'usuario' => '23411070200222',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"15022008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ CANCHOLA JUANA MARELY', 'usuario' => '23411070200232',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"23042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RAMIREZ TORRES LUIS DAVID', 'usuario' => '23411070200238',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"02042007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ MENDOZA BLANCA JOCELYN', 'usuario' => '23411070200257',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"12102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'RODRIGUEZ VAZQUEZ JORGE', 'usuario' => '23411070200260',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'SUAREZ SALAZAR LEONARDO NOE', 'usuario' => '23411070200272',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"01042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TEJEDA VALENCIA REGINA ALETVIA', 'usuario' => '23411070200276',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30042008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES PANTOJA MARIA VALERIA', 'usuario' => '23411070200279',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"19122008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'TORRES VAZQUEZ JULIETA GUADALUPE', 'usuario' => '23411070200282',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"30072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VAZQUEZ PEREZ CARLOS MANUEL', 'usuario' => '23411070200291',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"07062007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VELAZQUEZ GORDILLO PABLO EMMANUEL', 'usuario' => '23411070200294',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"24102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VENTURA LOPEZ NELLY DANIELA', 'usuario' => '23411070200299',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"04072008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'VILLEGAS GUTIERREZ JOSSAN TADEO', 'usuario' => '23411070200301',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"26102008",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 
[ 'nombre' => 'ZARAGOZA GUERRERO FERNANDA PAOLA', 'usuario' => '23411070200302',
            'tipo' => 'ALUMNO', // o cualquier valor que se use en tu sistema
            'password' =>"16092007",
            'created_at' => now(),
            'updated_at' => now(),
        ],


 




        ]);
    }
}
