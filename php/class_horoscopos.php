<?php

    class Espias{

        function action($action){
            switch ($action) {
                case 'getHoroscopo':

                    $pais = 'DE';
                    $banderaSRC = "https://flagsapi.com/$pais/flat/64.png";
                    $signo = $_REQUEST['signo'];

                    if($signo === ""){
                        return '';
                    }

                    // 1.- Consumir los signos del webservice
                    $client = new SoapClient('http://172.20.141.223/WS_exa/EspiasSoap.php?wsdl');
                    // $horoscopo = $client->getEspias($signo, 0);
                    // $horoscopo = $client->getPaises();
                    // $horoscopoArray = json_decode($horoscopo, true);
                    var_dump($client->getPaises());
                    // 2.- Obtner los que incluayn el valor de $_REQUEST['signo']
                    // $resultado = array_filter($horoscopoArray, function($key) use ($signo) {
                    //     return strpos($key, $signo) !== false;
                    // }, ARRAY_FILTER_USE_KEY);
                   
                    // 3.- Mostrar los 
                    // $htmlOutput = "";
                    // foreach ($resultado as $key => $value) {
                    //     $htmlOutput .= '<div onclick="return horoscopos(\'getSignoHoroscopo\')" class="text-align-center width-100 bg-light-gray padding-5" style="border: solid gray 1px; cursor: pointer;">
                    //         <p>'.$key.'</p>
                    //     </div>';
                    // }
                    // return $htmlOutput;
                break;
            }
        }

    }

    $horoscopoyObject = new Espias();
    if(isset($_REQUEST['action'])){
        echo $horoscopoyObject->action($_REQUEST['action']);
    }
?>


