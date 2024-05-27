<?php 
    # W3Schools service
    // $URL = 'https://www.w3schools.com/xml/tempconvert.asmx';

    // $client = new SoapClient($URL."?wsdl");
    // $res = $client->;

    // $URL = 'https://tigger.celaya.tecnm.mx/ws/soapserver_conacad.php?wsdl';
    // $client = new SoapClient($URL);
    // // var_dump($client->__getFunctions());

    // $materias_alumno = $client->materias_alumno("21030761@itcelaya.edu.mx");
    // echo($materias_alumno);

    // nuSoap

    $client = new SoapClient(
        null, 
        array(
            'location' => 'http://localhost/divisas/xml_server.php',
            // 'location' => 'http://localhost/divisas/xml_server.php',
            'uri' => 'urn:webservices'
        )
    );
    // var_dump($client->__getFunctions());
    echo($client->suma(10, 20));
    
    $jsonRes = json_decode($client->horoscopo());
    var_dump($jsonRes);
    foreach ($jsonRes as $jsonRow) {
        echo($jsonRow);
    }
?>