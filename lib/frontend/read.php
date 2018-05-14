<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>

    <?php
        include_once("../backend/read.php");
    ?>

    <body>
        <div class="container">
            <div class="span10 offset1">
                <h3 class="well" align="center"> Listar Contatos </h3> </br></br>
                <div class="row">
                <div class="col-sm-4"></div> <div class="col-sm-4">
            
                
                <div class="form-horizontal">                   
                    <div class="control-group">
                        <label class="control-label"> <b> Name </b></label>
                        <div class="controls">
                            <label class="carousel-inner">
                                 <?php echo $data['nome'];?> </br>
                            </label>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label"> <b> Endereço </b> </label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['endereco'];?> </br>
                            </label> 
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label"> <b>Telefone </b> </label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['telefone'];?> </br>
                            </label> 
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label"> <b>Email </b></label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['email'];?> </br>
                            </label> 
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label"> <b>Sexo </b> </label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['sexo'];?> </br>
                            </label>
                        </div>
                    </div>
                    <br/>
                    <div aling="center" class="form-actions">
                        <a href="../../index.php" type="btn" class="btn btn-primary">Voltar</a>
                    </div>
                </div>    
                </div>
            </div>
        </div>
    </body>
</html>

