


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Su Nutri - Sistema Experto</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Su Nutri</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">                   
                    <li class="dropdown">
                        <a href="../salir.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                    </li>
                </ul>
                
                <!-- /.navbar-top-links -->                
              <?php  require_once "navbar.php";  // se incluye archivo del navbar ?>
               
            </nav>
            <!-- /#page-wrapper --> 
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header bold h1"><i class="fa fa-user fa-fw"></i> Perfil</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row  </form>-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading h2 bold"> Datos de la Cuenta </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="form-group col-lg-6">
                                                    <label>Usuario</label>
                                                    <input class="form-control" value="SusiGomez1"  pattern="[A-Za-z0-9_-]{1,15}" title="No se Pueden utilizar caracteres especiales (! + * < > ? ¿ @ )" required>
                                                </div>                                                
                                                <div class="form-group col-lg-6">
                                                    <label>Contraseña</label>
                                                    <input type="password" class="form-control" value="dadsadsad" pattern="[A-Za-z0-9_-]{1,15}" title="No se Pueden utilizar caracteres especiales (! + * < > ? ¿ @ )" required>
                                                </div>
                                                <div class="form-group col-lg-6 justify-content-center">
                                                    <button type="input" class="btn btn-outline btn-success">
                                                        <font style="vertical-align: inherit;"></font>
                                                        <font style="vertical-align: inherit;"><i class="fa fa-refresh fa-fw"></i> Actualizar Datos</font>
                                                    </button>
                                                </div>  
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading h2 bold"> Datos Personales </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form role="form">
                                            <div class="form-group col-lg-6">
                                                <label>Nombre/es</label>
                                                <input class="form-control" value="Susana Natividad" required>
                                            </div>                                                
                                            <div class="form-group col-lg-6">
                                                <label>Apellido/s</label>
                                                <input  class="form-control" value="Gomez" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>CUIT</label>
                                                <input type="text" class="form-control" value="123456789"  pattern="[0-9]{1,10}" title="Solo se permiten NUMEROS!" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Correo</label>
                                                <input type="email" class="form-control" required >
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Telefono</label>
                                                <input type="text" class="form-control"  pattern="[0-9]{1,15}" title="Numero Completo sin 15, espacios o guiones" required >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Direccion</label>
                                                <input type="text" class="form-control"  pattern="[A-Za-z0-9_-]{1,15}" title="No se Pueden utilizar caracteres especiales (! + * < > ? ¿ @ )" required >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Matricula Profesional</label>
                                                <input number="text" class="form-control"  pattern="[0-9]{1,10}" title="Solo se admiten NUMEROS." required >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Titulo </label>
                                                <input type="text" class="form-control"  pattern="[A-Za-z]{1,30}" title="No se Pueden utilizar caracteres especiales (! + * < > ? ¿ @ )" required >
                                            </div>
                                            <div class="form-group col-lg-6 justify-content-center align-items-center">
                                                <button type="input" class="btn btn-outline btn-success">
                                                    <font style="vertical-align: inherit;"></font>
                                                    <font style="vertical-align: inherit;"><i class="fa fa-refresh fa-fw"></i> Actualizar Datos</font>
                                                </button>
                                            </div>                                            

                                        </form>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>   
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>