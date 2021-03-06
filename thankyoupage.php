<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Mitsubishi</title>
  <base href="/">
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <link rel="icon" type="image/png" href="favicon.ico" />

  <!-- add to homescreen for ios -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta http-equiv="Content-Language" content="es"/>
    <meta charset="UTF-8">
    <meta name="Keywords" content=""/>
    <meta name="Description" content="Telefonica"/>
    <meta name="Distribution" content="global"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Robots" content="all"/>
    <style>
    @import "../node_modules/bootstrap/scss/bootstrap";

    @font-face {
      font-family: mmcregular;
      src: url('assets/fonts/MMC-Regular.woff');
      }

      @font-face {
        font-family: mmcbold;
        src: url('assets/fonts/MMC-Bold.woff');
        }

      @font-face {
        font-family: mmclight;
        src: url('assets/fonts/MMC-Medium.woff');
        }



    * {
      font-family: mmcregular;
    }

    body{
      background: #000;
    }
    a:hover {
      text-decoration: none;
    }
    .nav {
      height: 80px !important;
    }
    .promo-contianer {
      width: 100%;
      height: auto;
      background:#5BC500 !important;
      color: #fff;
      text-align: center;
      padding: 0.1%;
      font-family: telefonicalight;
      font-size: 30px;
    }
    .col-50-call {
      width: 50%;
      float: left;
      height: 500px;
      overflow: hidden;
      color:#000;
    }
    .btnclosemobile {
        background: #AA4A9B;
        padding:0 2%;
    }
    .curvegreen {
      background-image: url('../src/assets/img/verde-round.png');
      background-repeat: no-repeat;
      background-size: contain;
      width: 150px;
      height: 150px;
      overflow: hidden;
      color:#fff;
      text-align: center;
      position: fixed;
      bottom: 0%;
      right: 0%;
      padding: 1.5% 0 0 0;
      font-size: 18px;
      z-index: 8;
      font-family: mmclight;
      line-height: 1;
    }
    .curvamorada {
        background-image: url('../src/assets/img/morador.png');
        background-repeat: no-repeat;
        background-size: contain;
        width: 200px;
        height: 200px;
        overflow: hidden;
        color: #fff;
        text-align: center;
        padding: 2% 0 0 0;
        font-size: 23px;
        position: fixed;
        bottom: 5%;
        right: 10%;
        z-index: 8;
        font-family: mmclight;
        line-height: 1;
    }
    .bold-num-m {
      font-family: mmcbold;
      font-size: 30px;
    }
    .menu-header {
      overflow: hidden;
      background: transparent;
      position: fixed;
      width: 100%;
      height:140px;
      top: 0;
      left: 0;
      z-index: 1;
    }
    .navegacionbar {
      padding: 1% 5%;
    }
    .textobanner {
      overflow: hidden;
      position: absolute;
      width: 45%;
      height: auto;
      top:15%;
      left: 2%;
      padding: 0 3%;
      background: rgba(0,0,0,0);
      color:#fff;
    }
    .imgunovisual {
      position: absolute;
      z-index: 2;
      bottom:5%;
      left: 5%;
    }
    .form-pop-container {
      width: 400px;
      height: auto;
      overflow: hidden;
      display: flex;
      justify-content: center;
      color:#fff;
      margin-top:10%;
      background:#5bc500;
      margin-left: 35%;
      border-radius: 2px 2px 2px 2px;
      -moz-border-radius: 2px 2px 2px 2px;
      -webkit-border-radius: 2px 2px 2px 2px;
      border: 0px solid #000000;
      position:relative;
    }
    #slider {
      width: 100%;
      height: auto;
      overflow: hidden;
    }
    .describelandingpromo {
      width: 100%;
      height: auto;
      overflow: hidden;
      padding: 0 4%;
    }
    .close-button-pop-todo {
      background:#AA4A9B;
      color:#fff;
      position:absolute;
      top:0;
      right:0;
      z-index: 5;
      cursor: pointer;
      width: 30px;
      height: 30px;
    }
    .close-button-pop-todo:hover {
      background:#00a9e0;
    }
    .caruselcomplete {
      width:100%;
      height:800px;
      overflow:hidden;
      float:left;
    }
    .caruselcompleteinicio {
      width:100%;
      height:700px;
      overflow:hidden;
      float:left;
    }
    .carousel-inner  {
      height:800px !important;
    }
    .carousel-innerinicio  {
      height:600px !important;
    }
    .carousel-item  {
      width:100%;
      height:500px !important;
      background: #5bc500;
    }
    .carousel-item-inicio  {
      width:100%;
      height:600px !important;
      background: #5bc500;
      background-repeat: no-repeat !important;
      background-size: cover !important;
    }
    .curveimg {
      position: absolute;
      z-index: 1;
      bottom: 0;
    }
    .whitebar {
      background: #fff !important;
    }
    @keyframes transformBanner {
    	0% {
          transform: scale(1);
    	}
    	50% {
          transform: scale(1.03);
    	}
      100% {
        transform: scale(1);
      }
    }

    @-webkit-keyframes transformBanner {
    	0% {
    		transform: scale(1);
    	}
      50% {
          transform: scale(1.03);
    	}
      100% {
        transform: scale(1);
      }
    }

    @keyframes transformBannerDos {
    	0% {
          transform: scale(1);
    	}
    	50% {
          transform: scale(1.03);
    	}
      100% {
        transform: scale(1);
      }
    }

    @-webkit-keyframes transformBannerDos {
    	0% {
    		transform: scale(1);
    	}
      50% {
          transform: scale(1.03);
    	}
      100% {
        transform: scale(1);
      }
    }
    .pop-up-container-form {
      background:rgba(255,255,255,0.7);
      width: 100%;
      height: 100%;
      overflow: hidden;
      position:fixed;
      top:10%;
      left:0;
      z-index:15;
      text-align: center;
    }
    .imgunovisual img {
      width: 80%;
      height:auto;
    }
    .textobanner h5 {
      font-size:4vw;
      line-height: 1;
      font-family: telefonicaextralight !important
    }
    .imgsec {
      position: absolute;
      z-index: 2;
      bottom:15%;
      left: 0;
      width: 90%;
    }
    .circle {
      background:#000;
      position: absolute;
      top:0;
      left:0;
      width: 120%;
      height:400px;
      margin-left: -5%;
      -moz-border-radius: 0 0 140% 160%;
      -webkit-border-radius: 0 0 140% 160%;
      border-radius:0 0% 140% 160%;
      z-index: 0;
    }
    .textoenthan {
      position: absolute;
      z-index:1;
      top:15%;
      left:23%;
      font-size: 60px;
      font-family: telefonicaextralight !important;
      line-height: 1;
      text-align: center;
    }
    .texto-thankyoupage {
      overflow: hidden;
      text-align:center;
    }
    .wrap-logos {
      width: 100%;
      height: auto;
      overflow: hidden;
      padding:2% 30%;
    }
    .text-logo-padd {
      margin-top:10%;
    }
    .class-50-logo {
      width: 50%;
      height:auto;
      float:left;
      overflow: hidden;
      font-size:2vh;
    }
    .container-thankyoupage {
      overflow: hidden;
      width: 100%;
      height: 600px;
      text-align: center;
      color:#fff;
      position: relative;
    }
    .redes-thank {
      margin-top:0;
    }
    .imagesection {
      position: relative;
      overflow: hidden;
    }

    .bar-gray {
      background: #50535a;
      color:#fff;
      padding: 1%;
      text-align: center;
      width: 100%;
      height: auto;
      overflow: hidden;
    }
    .promocionactivauno {
      background: #00a9e0;
      color:#fff;
      text-align: center;
      font-size: 45px;
      padding:4% 6%;
    }
    .promocionactivados {
      background: #5bc500;
      color:#fff;
      text-align: center;
      font-size: 45px;
      padding:4% 6%;
    }
    .miniTitleThank {
      font-size:30px;
    }
    .call-fixed-container {
      background:#AA4A9B;
      color:#fff;
      text-align:center;
      padding:1% 1%;
      width:300px;
      height:auto;
      position:fixed;
      top:20%;
      right:0;
      z-index:10;
      font-size:25px;
      -webkit-box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      -moz-box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      border-radius: 4px 4px 4px 4px;
      -moz-border-radius: 4px 4px 4px 4px;
      -webkit-border-radius: 4px 4px 4px 4px;
      cursor: pointer;
    }
    .col-50 {
      width: 50%;
      height: 55vh;
      float: left;
      font-family: mmcregular;
      line-height: 1.2;
      position: relative;
    }
    .container-carrusel {
      overflow: hidden;
      padding: 0;
      text-align: center;
      margin: 5% auto;
      display: flex;
      justify-content: center;
    }
    .headerplan {
      background: #00a9e0;
    }
    .cta-general {
      background: #AA4A9B;
      color:#fff;
      border-radius: 4px 4px 4px 4px;
      -moz-border-radius: 4px 4px 4px 4px;
      -webkit-border-radius: 4px 4px 4px 4px;
      border: 0px solid #000000;
      font-size: 20px;
      text-align: center;
      padding: 2% 3%;
      -webkit-box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      -moz-box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      margin:5% 20%;
      cursor: pointer;
    }
    .imguno {
      position: absolute;
      bottom:0;
      right: 0;
      z-index: 1;
      width:60%;
    }
    .imgcarrusel {
      width: 33.3333%;
      height: auto;
      overflow: hidden;
      text-align: center;
      float: left;
    }
    .imgcarrusel img {
      width: 148px;
      height: auto;
    }
    .show {
      display: block !important;
    }
    .hide {
      display: none !important;
    }
    #promocionesactivas{
      height: 55vh;
      overflow: hidden;
    }
    #planesdisponibles{
      overflow: hidden;
    }
    .container-planes {
      text-align: center;
      font-family: mmcregular;
      padding: 5% 0;
    }
    .container-planes h2 {
      font-size: 60px;
      font-family: mmcregular !important;
    }
    .division {
      width: 100%;
      height: 1px;
      overflow: hidden;
      background: #9E9E9E;
      margin-top:2%;
    }
    .formularioleads {
      position: relative;
      overflow:hidden;
    }
    .container-form {
      position: relative;
      text-align: center;
      padding: 5% 6%;
      margin-top:5%;
    }
    .container-form h2 {
      font-size:30px;
      font-weight: 900;
    }
    .container-form p {
      font-size:25px;
    }
    .textosection {
        padding: 15% 7%;
        font-family: mmcregular !important;
    }
    .rojo-main {
      color:#c20404;
    }
    .textosection h2 {
      font-family: mmcregular !important;
      font-size: 40px;
    }
    .inputfor {
        padding: 5px;
        border-top: 0px solid #ccc;
        border-left: 0px solid #ccc;
        border-right: 0px solid #ccc;
        border-bottom: 1px solid #ccc;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 16px;
    }
    .formulario-container {
      background: #fff;
      width: 30%;
      float:left;
      height: 540px;
      overflow: hidden;
      position: relative;
      border-radius: 2px 2px 2px 2px;
      -moz-border-radius: 2px 2px 2px 2px;
      -webkit-border-radius: 2px 2px 2px 2px;
      border: 0px solid #000000;
      -webkit-box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      -moz-box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      position: absolute;
      z-index: 3;
      top:8%;
      right: 5%;
    }
    .sideinput {
      width: 100%;
      height: auto;
      margin: 1% 0;
      position: relative;
    }
    .call-form-container {
      overflow: hidden;
    }
    .input-form {
      background-color: rgb(194, 4, 4);
      color:#fff;
      border: 0px solid #000000;
      font-size: 15px;
      text-align: center;
      padding: 2% 1%;
      width: 100%;
      margin-top:0%;
    }
    .footer-container {
      width: 100%;
      height: auto;
      overflow: hidden;
      padding: 0 10%;
    }
    .logotel {
      width: 300px;
      height: auto;
    }
    .footer-col-50 {
      width: 50%;
      height: auto;
      overflow: hidden;
      padding:1%;
      float: left;
      font-family: mmcregular;
    }
    .call-to {
      background: #AA4A9B;
      color:#fff;
      width: 300px;
      height: auto;
      padding:2% 5%;
      text-align: center;
      border-radius: 2px 2px 2px 2px;
      -moz-border-radius: 2px 2px 2px 2px;
      -webkit-border-radius: 2px 2px 2px 2px;
      -webkit-box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      -moz-box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      margin-top:8%;
      font-size: 24px;
      cursor: pointer;
      display: none;
    }
    .promo-container {
      font-size:12px;
      padding:0 10%;
      text-align:center;
      margin-top:5%;
    }

    .container-text-footer {
      overflow: hidden;
    }
    .redes-icons {
      width: 30px;
      height: auto;
      margin:0 1%;
    }
    .imgdosform {
      display: none;
    }
    .container-mobile-button {
      display: none;
    }
    .formulario-container-web {
      display: none;
    }
    .phoneiconmobile {
      width: 15px;
      height: auto;
      padding: 2% 0;
      margin-right: 5%;
    }

    .phoneicon {
      width: 18px;
      height: auto;
      margin-top:-1%;
    }
    .plancontainer {
      width: 300px;
      height: auto;
      margin:0 2%;
      float:left;
      border:1px solid #d3d4d3;
      color:#fff;
      text-align: center;
      overflow: hidden;
    }
    .headerplan {
      font-size:60px;
      padding:10% 0;
    }
    .rowplan {
      color:#50535a;
      font-family: mmcregular;
      padding:5% 5%;
      margin: 0 5%;
      border-bottom: 1px solid #d3d4d3;
      font-size: 22px;
    }
    .rowplanB {
      color:#50535a;
      font-family: mmcregular;
      padding:5% 5%;
      margin: 0 5%;
      font-size: 22px;
    }
    .rowplana {
      color:#50535a;
      font-family: mmcregular;
      padding:5% 5%;
      margin: 0 5%;
      font-size: 22px;
    }
    .ico-tele {
      width:25px;
      height:25px;
      margin:0 4%;
    }
    .logoredesilimitado {
      width:50px;
      height:auto;
      overflow:hidden;
      margin:0 0.5%;
    }
    #paqueteIlimitado {
      text-align:center;
      margin:5% 0;
      overflow: hidden;
      width:100%;
      height:auto;
    }
    .container-paquete-ilimitado {
      width: 100%;
      height: auto;
      text-align: center;
      padding:5% 0;
      font-family: mmcregular !important;
      overflow: hidden;
    }
    .titleh {
      font-family: mmcregular !important;
      line-height: 1.2;
      font-size:60px;
    }
    .avisocheck {
      width:100%;
      overflow:hidden;
      height:auto;
      margin:10% 0 5% 0;
      padding-bottom: 1%;
    }
    .banderas {
      width:150px;
      height:auto;
    }
    .mini-container {
      width: 25%;
      overflow:hidden;
      float:left;
      font-family: mmcregular !important;
      line-height: 1.2;
      font-size: 30px;
      padding:2% 2%;
      border-right: 1px solid #50535a!important;
      height:250px;
    }
    .secciondospadding {
      padding-top:15%;
    }
    .numbig {
      font-size:6vh;
    }
    .wrap-loading {
      background: rgba(255,255,255,0.5);
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 2;
      top:0;
      left: 0;
      position: absolute;
      text-align: center;
    }
    .wrap-loading img {
      padding-top:30%;
    }
    .msg_error {
      overflow: hidden;
      width: 100%;
      height: auto;
      color:#da0b0b;
    }
    .wrap-cookies {
      background: rgba(0,0,0,0.5);
      color:#fff;
      position: fixed;
      width: 100%;
      height: auto;
      z-index: 10;
      bottom: 0;
      left: 0;
      font-size: 12px;
      line-height: 1.6;
      padding: 1% 5%;
    }
    .btn-cookies {
      background: #000;
      color:#fff;
      padding: 0.2% 4%;
      cursor: pointer;
      width: 200px;
      text-align: center;
      position: absolute;
      z-index: 3;
      right: 5%;
      bottom:2%;
    }
    /*Medida General phone*/
    @media only screen and (max-width: 667px) {

      .plancontainer {
        width: 100%;
        float:left;
        margin-top:2%;
      }
      .bannertres {
        background-size: contain !important;
      }
      .curvegreen {
          width: 120px;
          height: 120px;
          bottom: -4%;
          padding: 5% 0 0 0;
      }
      .curvamorada {
        padding: 5% 0 0 0;
      }
      .wrap-cookies {
        font-size: 5px;
        line-height: 1.1;
        padding: 3% 5%;
    }
    .btn-cookies {
      padding: 1.5% 0;
      background: #000;
        color: #fff;
        cursor: pointer;
        width: 100px;
        text-align: center;
        position: absolute;
        z-index: 3;
        right: 5%;
        bottom: 0;
    }
    .container-carrusel {
      display: block;
      padding: 0 10%;

    }
    .circulomobile {
      margin-top:5%;
    }
      .call-fixed-container {
        display: none !important;
      }
      .redes-sociales-footer {
        margin-top:5%;
        margin-bottom: 2%;
      }
      .formulario-container-web {
        width: 100%;
        height: 700px;
        top:0;
        left: 0;
        background: #00a9e0;
        color:#fff;
        position: fixed;
        z-index:10;
        overflow: hidden;
      }
      .container-mobile-button {
        width: 50%;
        height:auto;
        padding:1% 1% 0 1%;
        overflow: hidden;
        text-align: center;
        position: fixed;
        background: transparent;
        color:#fff;
        bottom: 30%;
        right: 0;
        z-index: 9;
        cursor: pointer;
        display: block;
        background: #AA4A9B;
        -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        border-radius: 4px 4px 4px 4px;
        -moz-border-radius: 4px 4px 4px 4px;
        -webkit-border-radius: 4px 4px 4px 4px;
        margin-right: -5%;
      }

      .col-50{
        width: 100% !important;
      }

      .close-button {
        position: absolute;
        font-size:24px;
        top:1%;
        right:3%;
        cursor: pointer;
        z-index: 10;
      }
      .formulario-container {
        display: none;
      }

      .container-form {
        margin-top:10%;
      }
      .textobanner {
        overflow: hidden;
        position: absolute;
        width: 90%;
        height: auto;
        top: 15%;
        left: 5%;
        padding: 0 3%;
        background: rgba(0, 0, 0, 0);
        color: #fff;
        text-align: center;
        font-family: mmcregular !important;
      }

      #slider {
        width:100%;
        height:700px !important;
        overflow: hidden;
      }
      #paqueteIlimitado {
        text-align: center;
        margin: 5% 0;
        overflow: hidden;
        width: 100%;
        height: auto;
        padding: 0;
    }
    .mini-container {
      width: 50%;
      overflow: hidden;
      float: left;
      font-family: mmcregular !important;
      line-height: 1.2;
      font-size: 30px;
      padding: 2%;
      border-right: 1px solid #50535a !important;
      height: 250px;
      margin-top: 5%;
    }
    .numbig {
      font-size: 5vh;
    }
    #barsideparrallax {
      width: 100%;
      height: 400px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
    }

    .titleh {
        font-family: mmcregular !important;
        line-height: 1.2;
        font-size: 40px;
    }
    .mini-container {
      width: 50%;
      overflow: hidden;
      float: left;
      font-family: mmcregular !important;
      line-height: 1.2;
      font-size: 25px;
      padding: 2%;
      border-right: 1px solid #50535a !important;
      height: 250px;
      margin-top: 5%;
      padding: 5%;
    }
      .imgslide {
        height: 450px;
        width: auto !important;
        margin-left: -75%;
      }
      .textobanner h5 {
        font-size:6vh;
      }
      .promo-contianer {
        font-size: 2.5vh;
      }
      .promo-contianer {
        left: 2%;
      }
      .caruselcomplete {
        width:100%;
        height:220px;
      }
      .imgunovisual img {
        width: 90%;
      }
      .nav {
        padding: 2% 0;
        position: fixed !important;
        top:0;
        left: 0;
        width: 100%;
      }
      .promocionactivauno {
        font-size:25px;
        height: 30vh;
      }
      .promocionactivados {
        height: 30vh;
      }
     .imguno {
        width: 80%;
        height: auto;
        margin-top:-5%;
      }
      .imgcarrusel {
        width: 100%;
        height: auto;
      }
      .mobilenodisplay {
        display:none;
      }
      .col-50-call {
        width: 100%;
        height: auto;
      }
      .call-to {
        margin-top:70%;
        margin-left: 5%;
      }
      .call-form-container {
        background: url('../src/assets/img/Internet-en-casa.jpg');
        background-size: cover;
        height: 600px;
      }

      .footer-container {
        margin-top:10%;
        height: 30px;
      }
      .footer-col-50 {
        width: 100%;
        height: auto;
        overflow: hidden;
        padding: 1%;
        text-align: center;
        float: left;
        font-family: mmcregular;
      }
      .promocionactivados {
        font-size: 25px;
      }
      #callmobile{
        overflow: hidden;
        cursor: pointer;
      }
      .minilogo {
        width: 80px;
        position: absolute;
        z-index: 9;
        top:2%;
        left: 5%;
      }
      .imgdosform {
        position: absolute;
        z-index: 3;
        bottom: 0;
        right:0;
        display: block;
        width: 40%;
        height: auto;
      }
      .formularioleads {
        height:100%;
      }
      .container-thankyoupage {
        height: 500px;
      }
      .textoenthan {
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 5%;
        font-size: 20px;
        font-family: telefonicaextralight !important;
        line-height: 1;
        text-align: center;
    }
    }

    /*Ipad Portrait*/
    @media only screen and (min-width : 768px) and (max-width : 1023px) {

      .formulario-container {
        background: #fff;
        width: 100%;
        float: left;
        height: 487px;
        overflow: hidden;
        position: relative;
        border-radius: 2px 2px 2px 2px;
        -moz-border-radius: 2px 2px 2px 2px;
        -webkit-border-radius: 2px 2px 2px 2px;
        border: 0px solid #000000;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    }
    .container-form {
        position: relative;
        text-align: center;
        padding: 5% 6%;
        margin-top: 2%;
    }
    .caruselcomplete {
        width: 100%;
        height: 400px;
        overflow: hidden;
        float: left;
    }
    .mini-container {
        width: 25%;
        overflow: hidden;
        float: left;
        font-family: mmcregular !important;
        line-height: 1.2;
        font-size: 25px;
        padding: 2% 2%;
        border-right: 1px solid #50535a !important;
        height: 250px;
    }
    .numbig {
        font-size: 4vh;
    }
    .titleh {
        font-family: mmcregular !important;
        line-height: 1.2;
        font-size: 60px;
        padding: 0 15%;
    }
    #barsideparrallax {
      background-size: contain;
    }
    .form-pop-container {
        width: 400px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        color: #fff;
        margin-top: 30%;
        background: #5bc500;
        margin-left: 25%;
    }
    .container-thankyoupage {
        overflow: hidden;
        width: 100%;
        height: 800px;
    }
    .textoenthan {
        position: absolute;
        z-index: 1;
        top: 20%;
        left: 5%;
      }
    }

    #slider {


        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }


    /* Reset Select */
    select {
      -webkit-appearance: none;
      -moz-appearance: none;
      -ms-appearance: none;
      appearance: none;
      outline: 0;
      box-shadow: none;
      border: 0 !important;
      background: #2c3e50;
      background-image: none;
    }
    /* Remove IE arrow */
    select::-ms-expand {
      display: none;
    }
    /* Custom Select */
    select {
      position: relative;
      display: flex;
      width: 100%;
      height: auto;
      line-height: 3;
      background: #fff !important;
      overflow: hidden;
      padding: 2%;

    }
    select {
      flex: 1;
      padding: 0 .5em;
      color: #7d7a7a !important;
      cursor: pointer;
      border-bottom:1px solid #ccc !important;
    }
    /* Arrow */
    .select::after {
      content: '\25BC';
      position: absolute;
      top: 0;
      right: 0;
      padding: 0 1em;
      background: #34495e;
      cursor: pointer;
      pointer-events: none;
      -webkit-transition: .25s all ease;
      -o-transition: .25s all ease;
      transition: .25s all ease;
    }
    /* Transition */
    .select:hover::after {
      color: #f39c12;
    }
    .leyendamini {
      font-size:10px !important;
      line-height: 1;
      text-align:left;

    }
    .cont-total {
      margin-top:10%;
    }
    .logomain {
      width: 130% !important;
      margin:1%;
    }
    .title-form {
      font-size: 15px;
    }
    .texto-cont-form {
      color:#fff;
      font-size: 25px;
      position: absolute;
      z-index: 7;
      top:30%;
      left: 10%;
      width: 40%;
      text-align: center;
      font-weight: 900;
      overflow: hidden;
    }
    .textop {
      line-height: 0.8;
      font-size: 35px;
    }
    .mini-text {
      font-size: 15px !important;
      margin-top:5%;
      padding: 0 5%;
      font-size: 20px;
      line-height: 1.2;
    }

    /*Medida General phone*/
    @media only screen and (max-width: 667px) {
        .texto-cont-form {
          top:12% !important;
          width: 80%;
        }

        .textop {
          line-height: 0.6;
          font-size: 25px;
      }
      .formulario-container {
        display: block;
        width: 90%;
        height: 400px;
        top:27%;
      }
    }

    .slider {
      max-width: 100%;
      height: 700px;
      position: relative;
      background:rgba(0,0,0,0.5);
    }
    .slide1,.slide2,.slide3,.slide4,.slide5 {
      position: absolute;
      width: 100%;
      height: 100%;
    }
    .slide1 {
      background: url('../src/assets/img/banners/montero-back-normal-1.jpg')no-repeat center;
          background-size: cover;
        animation:fade 15s infinite;
    -webkit-animation:fade 15s infinite;

    }
    .slide2 {
      background: url('../src/assets/img/banners/montero-back-normal-2.jpg')no-repeat center;
          background-size: cover;
        animation:fade2 15s infinite;
    -webkit-animation:fade2 15s infinite;
    }
    .slide3 {
        background: url('../src/assets/img/banners/montero-back-normal-3.jpg')no-repeat center;
          background-size: cover;
        animation:fade3 15s infinite;
        -webkit-animation:fade3 15s infinite;
    }
    @keyframes fade
    {
      0%   {opacity:1}
      33.333% { opacity: 0}
      66.666% { opacity: 0}
      100% { opacity: 1}
    }
    @keyframes fade2
    {
      0%   {opacity:0}
      33.333% { opacity: 1}
      66.666% { opacity: 0 }
      100% { opacity: 0}
    }
    @keyframes fade3
    {
      0%   {opacity:0}
      33.333% { opacity: 0}
      66.666% { opacity: 1}
      100% { opacity: 0}
    }



    .changeColor {
      background-color:#000;
    }
    /*Medida General phone*/
    @media only screen and (max-width: 667px) {
        .mini-text {
          font-size: 12px !important;
          margin-top: 5%;
          padding: 0 5%;
          font-size: 20px;
          line-height: 1.2;
        }

          .menu-header {
            height: 120px;
            position: absolute;
            background: transparent
          }
          .nav {
              padding: 2% 0;
              position: absolute !important;
              top: 0;
              left: 0;
              width: 100%;
          }
          .formulario-container {
            display: block;
            width: 90%;
            height: 600px;
            margin-top:15%;
          }
          .logomain {
            width: 90% !important;
            margin: 1% 200%;
            text-align: center;
          }
          .slider {
            max-width: 100%;
            height: 1000px;
            position: relative;
        }
      }
      .container-shadow {
        overflow: hidden;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.6);
        position: relative;
      }
    p.placeholder-select{
       color: #777777;
        font-size: 16px;
        position: absolute;
        top:1%;
        left: 0;
        z-index: 1;
    }
    </style>

</head>
<body>
  <div id="Thankyoupage" class="container-thankyoupage">
    <div class="circle"></div>
  <div class="textoenthan">
    <div class="texto-thankyoupage">
      <img src="assets/img/nav-logo-light.svg" alt="Thankyoupage Mitsubishi México"/>
      <p  class="rojo-main">¡GRACIAS POR TU REGISTRO!</p>
      <p class="miniTitleThank">Pronto te estaremos contactando</p>
    <!--  <img src="../../../assets/img/moji.png" alt="Telefonica">-->
    </div>
        <p class="redes-thank">
          <a href="https://www.facebook.com/mitsubishimex/" target="_blank" onclick="gtag('event', 'clic', {'event_category' : 'thankyoupage','event_label' : 'facebook'});"><img src="../../../assets/img/logo-facebook.png" alt="Redes Sociales Telefonica" class="redes-icons"></a>
          <a href="https://twitter.com/mitsubishimex" target="_blank" onclick="gtag('event', 'clic', {'event_category' : 'thankyoupage','event_label' : 'twitter'});"><img src="../../../assets/img/logotipo-twitter.png" alt="Redes Sociales Telefonica" class="redes-icons"></a>
          <a href="https://www.instagram.com/mitsubishimex/?hl=es-la" target="_blank" onclick="gtag('event', 'clic', {'event_category' : 'thankyoupage','event_label' : 'instagram'});"><img src="../../../assets/img/logo-instagram.png" alt="Redes Sociales Telefonica" class="redes-icons"></a>
      </p>
  </div>
  </div>

</body>
</html>
