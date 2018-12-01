<!-- Karina Aulia Dini 1301164342 -->
<html>
  <head>
    <title> Rating </title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!-- <script src="src/bootstrap-rating-input.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/karin/bootstrap-rating-input.min.js"></script>
    <style>
      
      #nav_logo {
      background-color: transparent;
      padding-top: 20px;
      padding-left: 30px;
      }

      #nav_list{
        margin-top: 18px;
        display: inline;
      }
      
      #nav_list ul li{
        display: inline;
        list-style: none;
        padding: 10px;
        color: black;
      }
      
      #nav_list ul li a{
        text-decoration: none;
        color: black;
      }
      
      #nav_list ul li a:hover{
        text-decoration: none;
        color: orange;
      }
    
      #nav_profil{
        background-color: white;
      }
      
      #nav_profil a {
        font-size: 18px;
        float: left;
        margin-top: 19px;
        margin-left: 60px;
        text-decoration: none;
        color: black;
      }
      
      #nav_profil a:hover{
        font-size: 18px;
        float: left;
        margin-top: 19px;
        margin-left: 60px;
        color: orange;
        text-decoration: none;
      }
      
      #nav_profil img {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        margin-top: 15px;
        float: right;
      }

      body{
        background-color: #ffffff;
        font-family: papyrus;
      }

      #bod{
        width: 100%;
        text-align: center;
        background-color: #ffffff;
        height: 100%;
        padding: 0px 30px 30px 30px;
      }

      #rate{
        width: auto;
        padding: 20px 20px 20px 20px;
        background-color: #abe64d;
      }

      #driver h2{
        font-family: papyrus;
      }

      #driver img{
        background-color: transparent;
        width: 220px;
        height: auto;
        padding-top: 30px;
        padding-bottom: 30px;
      }

      #rting{
        text-align: center;
        width: auto;
      }

      #feedback{
        font-family: papyrus;
        font-size: 20px;
      }

      #rting input{
        height: 20px;

      }

      .rating {
        color: yellow;
        line-height: 32px;
      }

      #bintang {
        font-size: 60px;
        color: orange;
      }

      #footer{
        background-color: #dedfdb;
        text-align: center;
        padding: 20px;
      }

    </style>
    <script>
      $(function(){
        $('input').on('change', function(){
      document.formrating.submit();
        });
      });
    </script>
  </head>
  <body>
    <nav class="navbar fixed-top bg-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-lg-2" id="nav_logo">
          <img src="<?php echo base_url(); ?>assets/karin/logo.png" style="width: 100%;">
        </div>
        <div class="col-6 col-lg-7" id="nav_list">
          <ul>
            <li><a href="home.html"> Home </a></li>
            <li><a href="menu.html"> Menu </a></li>
            <li><a href="order.html"> Order Now! </a></li> 
          </ul>
        </div>
      
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <div class="container-fluid" id="bod">
    <div class="container mx-auto" id="rate">
   <!--    Haifa Salsabila 1301160170 dan Monica Dessy Amanda 1301164542 -->
      <?php
$atribut = array(
  'class' => 'form mx-auto',
  'id' => 'driver',
  'name'=> 'formrating'
);
echo form_open('ratingcem/ratingdrver/',$atribut);
      ?>
        <div class="text-center">
          <h2> Feedback Driver </h2>
          <img src="<?php echo base_url(); ?>assets/karin/driver.jpg" class="rounded" alt="Driver">
        </div>
        <div class="form-group mx-auto" id="rating">
          <div class="text-center">
            <p id="feedback"> Mohon masukkan rating untuk driver : </p>
            <p id="bintang"><input type="number" name="rating" id="rating-empty-clearable" class="rating" data-size="lg" data-clearable/>
              <input type="hidden" name="iddriver" value="<?php echo $iddriver;?>"></p>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="container-fluid" id="footer">
    <div class="row" id="footer">
      <div class="col-lg-4">
        <h6> Ketentuan Layanan </h6>
        <h6> Kebijakan Privasi</h6>
      </div>
      <div class="col-lg-4">
        <img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo.png" style="width: 30%;">
      </div>
      <div class="col-lg-4">
        <h6> @2018 CEMAL-CEMIL INDONESIA </h6>
      </div>
    </div>
  </div>
  </body>
</html>
