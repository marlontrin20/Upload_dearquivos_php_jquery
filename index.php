<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Optional theme -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <h1>Upload de arquivos.</h1>
            <div class="jumbotron">
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <div class="row">
                    <div class="col-xs-12 col-md-4">

                        <!--##action="carregaArquivo.php" arquivo PHP onde será feito o programa para carregar as imagens-->
                        <!--## é importante colocar o enctype="multipart/form-data" para que funcione o upload-->
                        <form id="target" action="carregaArquivo.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <!--##multiple="" serve para selecionar multiplas imagens--> 
                                <!--##não esqueça de colocar o [] em arquivos[] como array sempre que quiser pegar diversas imagens-->
                                <input type="file" name="arquivos[]" id="file" multiple="multiple">
                            </div>
                            <button type="submit" class="btn btn-default" id="enviaImg">Submit</button>

                        </form>

                    </div>
                    <div class="col-xs-6 col-md-8">
                        <div class="col-md-12" id="boxMsg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--############## Pode usar o jquery googleapis se quiser -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/jsUpload.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->

    </body>
</html>

