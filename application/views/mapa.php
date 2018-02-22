
        <div class="container-fluid" style="margin-top: 10px">

            <div class="row">
                <!-- sidebar de anúncios -->
                <div class="col-sm-2">
                    ad
                </div>

                <!-- conteudo principal -->
                <div class="col-lg-6">
                    <?php
                        echo form_open('Mapa/salvaDados');
                    ?>

                    <table class= "table table-striped">     
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
                </div>       
                <!-- sidebar de news -->
                <div class="col-md-4">
                    <div class="card border-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Blog</div>
                        <div class="card-body">
                            <h5 class="card-title">Saiba tudo sobre a sua lua</h5>
                            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p align="right"><a href="#" class="ma-a"> Leia mais</a></p>
                        </div>
                        
                    </div>

                    <div class="card border-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Blog</div>
                        <div class="card-body">
                            <h5 class="card-title">Saiba tudo sobre o seu sol</h5>
                            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p align="right"><a href="#" class="ma-a"> Leia mais</a></p>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal cadastrar -->
        <div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="modalMostrar" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Seu mapa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">  
                <table class= "table table-striped">     
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn custombtn" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>

    </body>
</html>

                        
                    