<?php 
    
    class ClassPHP{
        function suma($num1, $num2) {
            return $num1+$num2;
        }
        function resta($num1, $num2) {
            return $num1-$num2;
        }
        function tabla_x_num($numX) {
            $tablaRes = array();
            for ($vuelta=1; $vuelta < 11; $vuelta++) { 
                $tablaRes[$vuelta] = array();

                $tablaRes[$vuelta][0] = $numX;
                $tablaRes[$vuelta][1] = $vuelta;
                $tablaRes[$vuelta][2] = $numX*$vuelta;
            }

            return json_encode($tablaRes);
        }
        function horoscopo() {
            $signosZodiacales = [
                "aries", "tauro", "géminis", "cáncer", "leo", "virgo", 
                "libra", "escorpio", "sagitario", "capricornio", "acuario", "piscis"
            ];
        
            // $signo_param = strtolower($signo_param);
        
            $messages = [
                "aries" => "Eres valiente y enérgico.",
                "tauro" => "Eres confiable y paciente.",
                "géminis" => "Eres adaptable y curioso.",
                "cáncer" => "Eres emocional y protector.",
                "leo" => "Eres generoso y creativo.",
                "virgo" => "Eres analítico y detallista.",
                "libra" => "Eres equilibrado y justo.",
                "escorpio" => "Eres apasionado y determinado.",
                "sagitario" => "Eres optimista y honesto.",
                "capricornio" => "Eres disciplinado y prudente.",
                "acuario" => "Eres innovador y original.",
                "piscis" => "Eres compasivo y artístico."
            ];
            return json_encode($messages);
        }
    }

    $server = new SoapServer(
        null, 
        array('uri' => 'urn:webservices') // urn basado en uri 
    ); 
    $server->setClass('ClassPHP');
    $server->handle();
?>