<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Plantilla CodeIgniter 3.0</title>

        <link rel="shortcut icon" href="<?php echo base_url() ?>application/images/favicon.ico" />


        <link href="/css/plantilla.css" type="text/css" media="screen" rel="stylesheet"/>
        <link href="/libraries/bootstrap-3.3.5/css/bootstrap.css" type="text/css" rel="stylesheet"/>
        <link href="/css/letra.css" type="text/css" media="screen" rel="stylesheet"/>

        <script language="javascript" type="text/javascript" src="<?php echo base_url() ?>application/js/jquery-2.1.4.min.js"></script>
<!--        <script language="javascript" type="text/javascript" src="<?php echo base_url() ?>application/libraries/jquery-ui-1.11.4/jquery-ui.min.js"></script>-->

        <script type="text/javascript">

            $(document).ready(function() {

                var val_auth = '<?php echo $error; ?>';
                if (val_auth == 'true') {
                    $("#error_auth").show('slow');
                }
                else {
                    $("#error_auth").hide('slow');
                }

            });

        </script>
    </head>

    <body>
        <div class="container-fluid">
            <div id="sombra" style="border-radius: 20px 20px 20px 20px;">
                <div id="raiz_login" style="border-radius: 20px 20px 20px 20px;">

                    <!-- ENCABEZADO -->
                    <div id="sistema" style="border-radius: 20px 20px 0px 0px;">
                        <img style="border-radius: 20px 20px 0px 0px;" src="<?php echo base_url() ?>application/images/bannerSAC.png" class="img-responsive"/>
                    </div>

                    <!-- CUERPO -->
                    <div id="contenido">
                        <br /><br /><br />
                        <div align="center">
                            <form action="<?php echo base_url() ?>index.php/ctr_login/logonBd" method="post" id="login" name="login" class="form-horizontal">
                                <table align="center" class="table-responsive">
                                    <tr>
                                        <td colspan="2">
                                            <div class="error_auth" id="error_auth" align="center" style="display: none;">Por favor Ingrese con un usuario Admitido</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            &nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="usuario" class="col-sm-11 control-label">Usuario:&nbsp;</label>
                                        </td>
                                        <td>
                                            <input name="usuario" type="text" class="form-control" id="usuario" maxlength="30" size="30" placeholder="Nombre de Usuario"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="clave" class="col-sm-11 control-label">Clave:&nbsp;</label>
                                        </td>
                                        <td>
                                            <input name="clave" type="password" class="form-control" id="clave" maxlength="30" size="30" placeholder="Clave"/>
                                        </td>     
                                    </tr>
                                    <tr align="center">
                                        <td colspan="2">
                                            <div id="mns_error"></div>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td colspan="2"><br>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-9">
                                                    <input type="submit" name="entrar" id="entrar" value="Entrar" class="btn btn-primary"/>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                </table> 
                            </form>
                        </div>
                        <br /><br />
                        <span style="color:red;">Este sistema esta optimizado para visualizarse en:</span>
                        <br /><br />
                        
                         <a href="http://www.creativecommonsvenezuela.org.ve/" target="_blank">
                            <img src="sacma_git/images/creativeCommons.jpg" style="width: 60px; height: 30px;" />
                            
                        </a>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <a href="http://www.mozilla.com/es-AR/" target="_blank">
                            <img src="/images/firefox.png" style="width: 38px; height: 38px;" />
                        </a>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <a href="https://www.google.es/chrome/browser/desktop/index.html" target="_blank">
                            <img src="/images/chr_ome.png" style="width: 34px; height: 34px;" />
                        </a>
                    </div>

                    <!-- PIE DE PAGINA -->
                    <div id="pie" style="border-radius: 0px 0px 20px 20px;">
                        <p class="EstiloPie">
                            <br />
                            &copy; <?php date_default_timezone_set('GMT');
echo date("Y"); ?> Ministerio del Poder Popular para la Alimentaci&oacute;n
                            <br />
                            Av. Andr&eacute;s Bello, Edificio Las Fundaciones, Caracas
                            <br />
                            Tel&eacute;fonos: (0212)3957474 / 0500-MINPAL(646725)-1
                            <br />
                            RIF: G-20004327-0
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
