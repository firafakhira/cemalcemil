<!-- Haifa Salsabila 1301160170 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="fira/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/fira/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/fira/bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<style type="text/css">
	 #navb{
        background-color: #ffffff;
        font-family: papyrus;
      }
      #nav_logo {
        background-color: transparent;
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
      #nav_button{
      margin-top: 16px;
      }
      #nav_button img{
        width: 30px;
        height: auto;
      }
      #nav_button button{
        background-color: #abe64d;
        color: #ffffff;
        margin-left: 20px;
      }
      #nav_button button:hover{
        background-color: #f26c4f;
        color: #ffffff;
        margin-left: 20px;
      }
      </style>
</head>
<body>
<nav class="navbar fixed-top bg-black" id="navb">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-lg-2" id="nav_logo">
          <img src="<?php echo base_url(); ?>assets/haifa/Logo.png" style="width: 100%;">
        </div>
        <div class="col-6 col-lg-7" id="nav_list">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown link
                    </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
            </ul>
            </div> 
            <ul>
              <li style="font-family: Papyrus;"><a href="<?php echo site_url('home') ?>"> Home </a></li>
              <li style="font-family: Papyrus;"><a href="<?php echo site_url('menu') ?>"> Menu </a></li>
              <li style="font-family: Papyrus;"><a href="<?php echo site_url('order') ?>"> Order Now! </a></li> 
            </ul>
        </div><br><br><br>
        <!-- Karina Aulia Dini 1301164342 -->
           <div class="col-6 col-lg-3" id="nav_button">
          <?php if(empty($this->session->nama)) : ?>
            <a href="<?php echo site_url('login') ?>">
              <button type="button" class="btn btn-md" id="login" >Login</button></a>
            <a href="<?php echo site_url('join') ?>">
              <button type="button" class="btn btn-md" id="join" >Join Us</button></a>
          <?php else: ?>
            <?php echo $this->session->nama ?>
            <img src="<?php echo base_url(); ?>assets/karin/profil.jpg">
            
                <button type="button" onclick="location.href='<?php echo site_url('login/logout');?>'" class="btn btn-sm" id="logout">Log Out</button>
          <?php endif; ?>
    </div>
  </nav>

</body>
</html>