<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1"> </br>
                    <h3 class="well" align="center" > Atualizar Contato </h3>
                    <div class="row">
                    <div class="col-sm-4"></div> <div class="col-sm-4">
             
                    <form class="form-horizontal" action="../backend/update.php?id=<?php echo @$_GET['id']; ?>" method="post">
                        
                      <div class="control-group <?php echo !empty($nomeErro)?'error':'';?>">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <input name="nome" class="form-control" size="50" type="text"  placeholder="Nome" value="<?php echo !empty($nome)?$nome:'';?>">
                            <?php if (!empty($nomeErro)): ?>
                                <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                        
                       <div class="control-group <?php echo !empty($enderecoErro)?'error':'';?>">
                        <label class="control-label">Endereço</label>
                        <div class="controls">
                            <input name="endereco" class="form-control" size="80" type="text"  placeholder="Endereço" value="<?php echo !empty($endereco)?$endereco:'';?>">
                            <?php if (!empty($enderecoErro)): ?>
                                <span class="help-inline"><?php echo $enderecoErro;?></span>
                            <?php endif; ?>
                        </div>
                       </div>
                        
                       <div class="control-group <?php echo !empty($telefoneErro)?'error':'';?>">
                        <label class="control-label">Telefone</label>
                        <div class="controls">
                            <input name="telefone" class="form-control" size="30" type="text"  placeholder="Telefone" value="<?php echo !empty($telefone)?$telefone:'';?>">
                            <?php if (!empty($telefoneErro)): ?>
                                <span class="help-inline"><?php echo $telefoneErro;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                        
                        <div class="control-group <?php echo !empty($email)?'error':'';?>">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input name="email" class="form-control" size="50" type="text"  placeholder="Email" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailErro)): ?>
                                <span class="help-inline"><?php echo $emailErro;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                        
                        <div class="control-group <?php echo !empty($sexoErro)?'error':'';?>">
                        <label class="control-label">Sexo</label>
                        <div class="controls">
                            <input name="sexo" class="form-control" size="1" type="text"  placeholder="Sexo" value="<?php echo !empty($sexo)?$sexo:'';?>">
                            <?php if (!empty($sexoErro)): ?>
                                <span class="help-inline"><?php echo $sexoErro;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      
                        <br/>
                      <div class="form-actions">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="submit" class="btn btn-success">Atualizar</button>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <a href="../../index.php" type="btn" class="btn btn-danger">Voltar</a>
                        </div>
                    </form>
                </div>    
                             
    </div> 
  </body>
</html>

