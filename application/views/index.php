<!-- Formulario para o mapa astral -->

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
                    <div class="container">
                        <h2>Faça o seu mapa</h2>
                        <p align="justify" style="margin-bottom: 10px">Morbi accumsan volutpat orci, vitae finibus erat sagittis a. Etiam a gravida enim, non venenatis dui. Sed ac enim massa. Integer fermentum arcu nec euismod aliquet. Curabitur sit amet arcu commodo, faucibus ex fermentum, dapibus orci. Ut imperdiet eros quis ipsum dictum, quis cursus libero aliquam. </p>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"placeholder="exemplo@email.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="fuso">Fuso</label>
                                    <input type="text" class="form-control" id="fuso" name="fuso" placeholder="Fuso">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="data">Data</label>
                                    <input type="text" class="form-control" id="data" name="data">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="hora">Horário</label>
                                    <input type="text" class="form-control" id="hora" name="hora">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="verao" name="verao" >
                                    <label class="form-check-label" for="verao" style="margin-left: 1px;">
                                        Selecione caso você tenha nascido durante o horário de verão
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn ma-btn" >Enviar</button> 
                        </form>
                        <?php echo form_close();?>
                    </div> 
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

    </body>
</html>

                        
                    
