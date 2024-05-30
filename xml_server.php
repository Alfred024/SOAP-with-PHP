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
                "piscis" => "Eres compasivo y artístico.",
                "ariel" => "Eres valiente y lleno de energía.",
                "tauri" => "Eres confiable y paciente, siempre constante.",
                "gemma" => "Eres adaptable y curiosa, siempre explorando.",
                "carlo" => "Eres emocional y protector con los tuyos.",
                "leonardo" => "Eres generoso y muy creativo.",
                "virgina" => "Eres analítica y detallista, nunca se te escapa nada.",
                "librio" => "Eres equilibrado y justo en todas tus acciones.",
                "scorpio" => "Eres apasionado y determinado en todo lo que haces.",
                "sagita" => "Eres optimista y siempre honesto.",
                "capri" => "Eres disciplinado y prudente, siempre calculando los riesgos.",
                "aquilo" => "Eres innovador y original en tus ideas.",
                "piscino" => "Eres compasivo y tienes una vena artística.",
                "arex" => "Eres valiente y nunca te das por vencido.",
                "tavro" => "Eres confiable y siempre paciente con los demás.",
                "gemin" => "Eres adaptable y te encanta aprender cosas nuevas.",
                "cani" => "Eres emocional y cuidas de los que amas.",
                "leox" => "Eres generoso y tu creatividad no tiene límites.",
                "virg" => "Eres analítico y siempre atento a los detalles.",
                "libri" => "Eres equilibrado y siempre buscas la justicia.",
                "escor" => "Eres apasionado y tu determinación es inquebrantable.",
                "sagi" => "Eres optimista y tu honestidad es valorada por todos.",
                "capro" => "Eres disciplinado y siempre prudente.",
                "aqua" => "Eres innovador y tu originalidad destaca.",
                "pisco" => "Eres compasivo y tienes un gran talento artístico.",
                "ares" => "Eres valiente y siempre estás lleno de energía.",
                "taurus" => "Eres confiable y paciente, siempre constante en tus esfuerzos.",
                "geminus" => "Eres adaptable y curioso, siempre buscando aprender.",
                "cancerio" => "Eres emocional y protector con los que amas.",
                "leonis" => "Eres generoso y tu creatividad es admirable.",
                "virgi" => "Eres analítico y detallista, siempre atento.",
                "libran" => "Eres equilibrado y justo en tus acciones.",
                "escorp" => "Eres apasionado y determinado en tus metas.",
                "sagitt" => "Eres optimista y tu honestidad es destacable.",
                "caprico" => "Eres disciplinado y siempre prudente en tus decisiones.",
                "aquarius" => "Eres innovador y tu originalidad te distingue.",
                "piscinus" => "Eres compasivo y tienes una gran vena artística.",
                "arista" => "Eres valiente y tu energía es contagiosa.",
                "tauron" => "Eres confiable y tu paciencia es inagotable.",
                "gemmi" => "Eres adaptable y te encanta la curiosidad.",
                "cance" => "Eres emocional y siempre proteges a los tuyos.",
                "leoma" => "Eres generoso y tu creatividad no tiene igual.",
                "virgom" => "Eres analítico y nunca dejas pasar un detalle.",
                "librin" => "Eres equilibrado y siempre buscas justicia.",
                "escorpi" => "Eres apasionado y tu determinación es firme.",
                "sagitta" => "Eres optimista y siempre honesto.",
                "capron" => "Eres disciplinado y tu prudencia te guía.",
                "aquari" => "Eres innovador y tus ideas son únicas.",
                "piscini" => "Eres compasivo y tu arte es inspirador.",
                "aria" => "Eres valiente y siempre lleno de energía.",
                "tauros" => "Eres confiable y paciente, un pilar de fortaleza.",
                "geminix" => "Eres adaptable y curioso, siempre investigando.",
                "canceri" => "Eres emocional y protector con quienes amas.",
                "leoza" => "Eres generoso y tu creatividad brilla.",
                "virgus" => "Eres analítico y detallista, siempre observando.",
                "librina" => "Eres equilibrado y justo, siempre en busca de armonía.",
                "escorpion" => "Eres apasionado y determinado en tus objetivos.",
                "sagitari" => "Eres optimista y tu honestidad es notable.",
                "capricornus" => "Eres disciplinado y prudente, siempre calculando.",
                "aquarios" => "Eres innovador y tu originalidad es evidente.",
                "pisces" => "Eres compasivo y artístico, siempre creativo.",
                "arielius" => "Eres valiente y lleno de energía constante.",
                "taurex" => "Eres confiable y tu paciencia es notable.",
                "geman" => "Eres adaptable y siempre curioso por aprender.",
                "cancri" => "Eres emocional y muy protector.",
                "leonix" => "Eres generoso y creativo en todo lo que haces.",
                "virgul" => "Eres analítico y detallista en todo.",
                "librinix" => "Eres equilibrado y justo en todas tus acciones.",
                "escorpix" => "Eres apasionado y tu determinación es sólida.",
                "sagit" => "Eres optimista y siempre honesto.",
                "caprin" => "Eres disciplinado y prudente, siempre cauteloso.",
                "aquaron" => "Eres innovador y tu originalidad destaca.",
                "piscix" => "Eres compasivo y tienes un gran talento artístico.",
                "arion" => "Eres valiente y enérgico, siempre activo.",
                "tauroxin" => "Eres confiable y paciente, siempre constante.",
                "geminor" => "Eres adaptable y curioso, siempre aprendiendo.",
                "cancron" => "Eres emocional y protector con los tuyos.",
                "leoma" => "Eres generoso y muy creativo.",
                "virgini" => "Eres analítica y detallista, siempre observando.",
                "librino" => "Eres equilibrado y justo en todas tus acciones.",
                "escorpo" => "Eres apasionado y determinado en tus metas.",
                "sagitorn" => "Eres optimista y siempre honesto.",
                "capriton" => "Eres disciplinado y prudente, siempre calculando.",
                "aquariusx" => "Eres innovador y original en todas tus ideas.",
                "piscisx" => "Eres compasivo y tienes una gran vena artística.",
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