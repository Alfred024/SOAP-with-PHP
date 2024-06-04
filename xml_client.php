<?php 
    # W3Schools service
    // $URL = 'https://www.w3schools.com/xml/tempconvert.asmx';

    // $client = new SoapClient($URL."?wsdl");
    // $res = $client->;

    //$URL_SOAP = 'https://tigger.celaya.tecnm.mx/ws/soapserver_conacad.php?wsdl';
    $URL_SOAP = 'http://172.20.141.223/WS_exa/EspiasSoap.php?wsdl';
    // $client = new SoapClient(
    //     null, 
    //     array(
    //         'location' => $URL_SOAP,
    //         'uri' => 'urn:webservices'
    //     )
    // );
    $client = new SoapClient($URL_SOAP);
    //var_dump($client);
    //$espias = $client->getPaises(); 
    //var_dump($client->__getFunctions());
    //var_dump($client->getEspias('A', 1));
    $response = $client->getEspias('A', 1);
    //$espiasProcessed = explode('{', $response);
    var_dump($response);

    // $countries = array();

    // // Procesar cada par de valores
    // for ($i = 0; $i < count($items); $i += 2) {
    //     $country_name = $items[$i];
    //     list($country_code, $value) = explode(':', $items[$i + 1]);
    //     $countries[] = array('name' => $country_name, 'code' => $country_code, 'value' => (int)$value);
    // }
    // var_dump($countries);

    //$URL_REST = 'http://172.20.141.223/WS_exa/wsRestFul.php';
    //$response_rest = file_get_contents('http://172.20.141.223/WS_exa/wsRestFul.php');
        // Obtener avisos
        // $avisos = $client->avisos();
        // var_dump($avisos);

        // Obtener materias de un alumno
        // $materias_alumno = $client->materias_alumno("21030761@itcelaya.edu.mx");
        // echo($materias_alumno);

    // $client = new SoapClient(
    //     null, 
    //     array(
    //         'location' => 'http://localhost/divisas/xml_server.php',
    //         'uri' => 'urn:webservices'
    //     )
    // );
    // echo($client->suma(10, 20));
    
    // $jsonRes = json_decode($client->horoscopo());
    // var_dump($jsonRes);
    // foreach ($jsonRes as $jsonRow) {
    //     echo($jsonRow);
    // }
?>