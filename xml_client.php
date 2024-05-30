<?php 
    # W3Schools service
    // $URL = 'https://www.w3schools.com/xml/tempconvert.asmx';

    // $client = new SoapClient($URL."?wsdl");
    // $res = $client->;

    $URL = 'https://tigger.celaya.tecnm.mx/ws/soapserver_conacad.php?wsdl';
    $client = new SoapClient($URL);
    // var_dump($client->__getFunctions());

        // Obtener avisos
        // $avisos = $client->avisos();
        // var_dump($avisos);

        // Obtener materias de un alumno
        // $materias_alumno = $client->materias_alumno("21030761@itcelaya.edu.mx");
        // echo($materias_alumno);

    $client = new SoapClient(
        null, 
        array(
            'location' => 'http://localhost/divisas/xml_server.php',
            'uri' => 'urn:webservices'
        )
    );
    // echo($client->suma(10, 20));
    
    $jsonRes = json_decode($client->horoscopo());
    // var_dump($jsonRes);
    // foreach ($jsonRes as $jsonRow) {
    //     echo($jsonRow);
    // }
?>