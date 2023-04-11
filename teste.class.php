<?php
//Importação
require_once("pessoa.class.php");

    $pessoa = new Pessoa();
    //Passar um valor para o método setNome
    $pessoa->setNome($_POST['nome']);
    //Passar um valor para o método setTelefone
    $pessoa->setTelefone($_POST['telefone']);
    //Passar um valor para o método setOrigem
    $pessoa->setOrigem($_POST['origem']);
    //Passar um valor para o método setDataContato
    $pessoa->setDataContato($_POST['datacontato']);
    //Passar um valor para o método setObservacao
    $pessoa->setObservacao($_POST['observacao']);

?>

<DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>     
      
      <title>Formulario</title>
  </head>
  <body>
  <body class="bg-body-secondary">
      <div class="container text-center bg-body-secondary">
          <div class="row">
              <div class="col-1">
                &nbsp
              </div>
              <div class="col bg-primary">
                  <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                      <div class="container-fluid">
                          <a class ="navbar-brand" href="#">SISTEMA WEB</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                              <div class="navbar-nav">
                                  <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                                  <a class="nav-link" href="#">Consultar</a>
                              </div>
                          </div>
                      </div>
                  </nav>
              </div>
              <div class="col-1">
                  &nbsp
              </div>
          </div>
          <div class="row">
              <div class="col-1">
                &nbsp
              </div>


              <div class="col bg-white">

                <div style="margin-left: 300px">
                <p style="margin-right: 300px" class="text-start fs-5"> <br> <strong>Consultar - Contatos Agendados </strong></p>
               
               
                <div style="margin-right: 300px" >
                    <div style="padding-top: 10px" >
                        <div class="row bg-primary">

                            <div class="col">
                                <strong> Nome </strong>
                            </div>

                            <div class="col">
                                <strong> Telefone </strong>
                            </div>

                            <div class="col">
                                <strong> Origem </strong>
                            </div>

                            <div class="col">
                                <strong> Contato </strong>
                            </div>

                            <div class="col">
                                <strong> Observação </strong>
                            </div>

                        </div>
                    </div>
                </div>

                    <div style="margin-right: 300px">
                        <div class="container text-center">
                            <div style="padding-top: 10px">

                                <div class="row">

                                    <div class="col">
                                        <?php echo $pessoa->getNome()?>
                                    </div>

                                <div class="col">
                                    <?php echo $pessoa->getTelefone()?>
                                </div>

                                 <div class="col">
                                    <?php echo $pessoa->getOrigem()?>
                                </div>

                                <div class="col">
                                    <?php echo $pessoa->getDataContato()?>
                                </div>

                                <div class="col">
                                    <?php echo $pessoa->getObservacao()?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                   

                    


                      
              
                