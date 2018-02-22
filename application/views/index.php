 <html>
    <body>
        <table>
            <?php 
                
                /*
                * $nome contem os nomes dos astros na ordem de saída
                * $resultado é uma matriz onde cada linha X contem as informacoes do planeta de indice X em $nome
                */
                
                for($i = 0; $i < 26; $i++){
                    echo '<tr><td>' . $nome[$i] . "</td><td>"   .$resultado[$i]['grau'] . " " 
                                                                .$resultado[$i]['signo'] . " "
                                                                .$resultado[$i]['minuto'] . "' " 
                                                                .$resultado[$i]['segundo'] . "\"</td>";
                }
            ?>
        </table>
    </body>
</html>
