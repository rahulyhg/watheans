<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MapaNatal {
    
    //A variável $dataNascimento deve ser um DateTime, coordenadas geograficas em decimal
    function calcular($dataNascimento, $longitude, $latitude, $fusoHorario, $isHorarioVerao){
        
        //Localização dos arquivos do Swiss Ephemeris Library
        $libPath = APPPATH.'libraries'.DIRECTORY_SEPARATOR.'sweph'.DIRECTORY_SEPARATOR;
        
        
        //Conversão da data de nascimento para UTC 
        $diferença = $fusoHorario * 3600;
        $dataNascimentoUTC = strtotime($dataNascimento->format('Y-m-d H:i:s')) - $diferença - ($isHorarioVerao ? 3600 : 0);
        
        
        $dia = date('d.m.Y', $dataNascimentoUTC);
        $hora = date('H:i:s', $dataNascimentoUTC);
        
        
        //Execução do Swiss. Opções de linha de comando: https://www.astro.com/cgi/swetest.cgi?arg=-h&p=0
        exec ($libPath."swetest -edir$libPath -b$dia -ut$hora -p0123456789 -eswe -house$longitude,$latitude, -fPls -g, -head", $saida);
        
        /* Cada linha da saída se torna um array com os seguintes elementos
         * 0 - Nome do astro
         * 1 - Longitude do astro
         * 2 - Velocidade por dia
         * Planetas são índices de 0 - 9, casas astrologicas 10 - 21, demais informações 22 - 25
         */
        foreach ($saida as $indice => $linha) {
            $linha = explode(',',$linha);
            $nome[$indice] = $linha[0];
            $longitudeSaida[$indice] = $linha[1];
            
            if($indice < 10)
                $velocidade[$indice] = $linha[2];
        }
        
        for($i = 0; $i < 26; $i++){
            $resultado[$i] = $this->getSignoPosicao($longitudeSaida[$i]);
            
            if($i < 10)
                $resultado[$i]['velocidade'] = $velocidade[$i];
        }
        
        return $resultado;
    }
    
    
    function getSignoPosicao($longitude){

        $signos = array (0 => 'Ari', 'Tau', 'Gem', 'Can', 'Leo', 'Vir', 'Lib', 'Sco', 'Sag', 'Cap', 'Aqu', 'Pis');
  
        //determina o signo e a posição
        $numeroSigno = floor($longitude / 30);
        $posicaoNoSigno = $longitude - ($numeroSigno * 30);
        $grau = floor($posicaoNoSigno);
        $minutoCompleto = ($posicaoNoSigno - $grau) * 60;
        $minutoArredondado = floor($minutoCompleto);
        $segundo = round(($minutoCompleto - $minutoArredondado) * 60);

        //acrescenta 0 na frente de números com um algarismo só
        if ($grau < 10) $grau = "0" . $grau;
        if ($minutoArredondado < 10) $minutoArredondado = "0" . $minutoArredondado;
        if ($segundo < 10) $segundo = "0" . $segundo;
  
        // chr(34) são aspas duplas
        return array("grau" => $grau, "signo" => $signos[$numeroSigno], "minuto" => $minutoArredondado, "segundo" => $segundo);
    }
    
    function getAstroNames(){
        
        return array(0 => 'Sol', 'Lua', 'Mercurio', 'Venus', 'Marte', 'Jupiter', 'Saturno', 'Urano', 'Netuno', 'Plutao', 'Casa 1', 'Casa 2', 'Casa 3', 'Casa 4', 'Casa 5',
                                'Casa 6', 'Casa 7', 'Casa 8', 'Casa 9', 'Casa 10', 'Casa 11', 'Casa 12', 'Ascendente', 'Meio Ceu', 'ARMC', 'Vertex');
    }
    
}

?>
