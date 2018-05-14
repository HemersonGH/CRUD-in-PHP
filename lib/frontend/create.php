<!DOCTYPE html>
<!-- <href = "../bankend/create.php"> -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
          <h3 class="well" align="center"> Adicionar Contato </h3>
            <div clas="span10 offset1">
                <div class="row">
                  <div class="col-sm-4"></div>

                  <div class="col-sm-4">
                    <form class="form-horizontal" action="../backend/create.php" method="post">
                        <br/><br/><br/>
                        <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                            <label class="control-label">Name</label>
                            <div class="controls">
                                <input size= "50" name="nome" class="form-control" type="text" placeholder="Name" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                                <?php if(!empty($nomeErro)): ?>
                                    <span class="help-inline"><?php echo $nomeErro;?></span>
                                <?php endif;?>
                            </div>
                        </div>

                        <div class="control-group <?php echo !empty($enderecoErro)?'error ': '';?>">
                            <label class="control-label">Address</label>
                            <div class="controls">
                                <input size="50" name="endereco" class="form-control" type="text" placeholder="Address" required="" value="<?php echo !empty($endereco)?$endereco: '';?>">
                                <?php if(!empty($emailErro)): ?>
                                <span class="help-inline"><?php echo $enderecoErro;?></span>
                                <?php endif;?>
                        </div>
                        </div>

                        <div class="control-group <?php echo !empty($telefoneErro)?'error ': '';?>">
                            <label class="control-label">Phone</label>
                            <div class="controls">
                                <input size="50" name="telefone" class="form-control" type="text" placeholder="Phone" required="" value="<?php echo !empty($telefone)?$telefone: '';?>">
                                <?php if(!empty($emailErro)): ?>
                                <span class="help-inline"><?php echo $telefoneErro;?></span>
                                <?php endif;?>
                        </div>
                        </div>

                        <div class="control-group <?php echo !empty($emailErro)?'error ': '';?>">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input size="50" name="email" class="form-control" type="text" placeholder="Email" required="" value="<?php echo !empty($email)?$email: '';?>">
                                <?php if(!empty($emailErro)): ?>
                                <span class="help-inline"><?php echo $emailErro;?></span>
                                <?php endif;?>
                        </div>
                        </div>

                        <div class="control-group <?php echo !empty($sexoErro)?'error ': '';?>">
                            <label class="control-label" >Sex</label>
                            <div class="controls">
                                <input size="1" name="sexo" class="form-control" type="text" placeholder="Sex" required="" value="<?php echo !empty($sexo)?$sexo: '';?>">
                                <?php if(!empty($sexoErro)): ?>
                                <span class="help-inline"><?php echo $sexoErro;?></span>
                                <?php endif;?>
                        </div>
                        </div>
                        <div class="form-actions" align="center">
                            <br/>
                            <div align="center">
                              <button type="submit" class="btn btn-success">Add</button>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="../../index.php" type="btn" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </body>
</html>
