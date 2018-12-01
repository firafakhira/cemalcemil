<!-- Karina Aulia Dini 1301164342 -->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/karin/bootstrap.min.css">
	<style type="text/css">
		#navb {
			background-color: white;
			height: auto;
			width: 100%;
		}

		h1 {
			margin-top: 10px;
			font-family: corbel;
			margin-left: 40px;
			color: black;
			font-family: corbel;
			text-align: center;
		}

		#bod {
			margin: 90px 20px 30px 20px;
			width: 100%;
		}

		@media (max-width: 991px) {
			/* Ini biar dia deteksi ukuran layarnya, kalo ukuran layar dibawah 991px dia bakal pake yang ini */
			#bod {
				margin: 200px 20px 30px 20px !important;
			}
		}

		#signup {
			width: auto;
			padding: 25px;
			border: solid;
			border-width: 2px;
			border-color: #abe64d;
			border-radius: 20px;
			background-color: #abe64d;
		}

		#nav_logo {
			background-color: white;
		}

		body {
			font-family: corbel;
			background-image: url("<?php echo base_url(); ?>assets/karin/bgbgbg.jpg");
			padding: 20px;
		}


		#nav_list{
			margin-top: 18px;
			display: inline;
			background-color: white;
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
			background-color: white;
			padding-top: 20px;
			width: 70px;
		}

		#nav_button button{
			background-color: #abe64d;
			border-color: #abe64d;
		}

		body{
			background-image: url("<?php echo base_url(); ?>assets/karin/bgbgbg.jpg");
			background-size: 380px;
			background-blend-mode: darken;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/karin/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<nav class="navbar fixed-top bg-black" id="navb">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-2" id="nav_logo">
					<img src="<?php echo base_url(); ?>assets/karin/logo.png" style="width: 100%;">
				</div>
				<div class="col-6 col-lg-7" id="nav_list">
					<ul>
						<li><a href="<?php echo site_url('home') ?>"> Home </a></li>
						<li><a href="<?php echo site_url('menu') ?>"> Menu </a></li>
						<li><a href="<?php echo site_url('order') ?>"> Order Now! </a></li> 
					</ul>
				</div><br><br><br>
				<div class="col-6 col-md-3" id="nav_button">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Sign In
					</button>
					<div class="dropdown-menu">
					  <form class="px-4 py-3">
					    <div class="form-group">
					      <label for="exampleDropdownFormEmail1">Email address</label>
					      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
					    </div>
					    <div class="form-group">
					      <label for="exampleDropdownFormPassword1">Password</label>
					      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
					    </div>
					    <div class="form-check">
					      <input type="checkbox" class="form-check-input" id="dropdownCheck">
					      <label class="form-check-label" for="dropdownCheck">
					        Remember me
					      </label>
					    </div>
					    <button type="submit" class="btn btn-primary">Sign in</button>
					  </form>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">New around here? Sign up</a>
					  <a class="dropdown-item" href="#">Forgot password?</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
		<div class="container mx-auto" id="bod">
			<div class="row">
				<form class="form mx-auto" id="signup">
				  <div class="form-group" id="su"><h1>Driver Sign Up</h1></div>
				  <div class="form-group">
				  	<label for="nama">Nama</label>
				     <div class="form-row">
	    				<div class="col">
	    				  <input type="text" class="form-control" placeholder="Nama Awal" id="nama">
				    	</div>
					    <div class="col">
					      <input type="text" class="form-control" placeholder="Nama Akhir">
					    </div>
					 </div>
				  </div>
				  <div class="form-row">
					    <div class="form-check">
					          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
				          <label class="form-check-label" for="gridRadios1">
				            Laki-Laki
				          </label>
				        </div>
				   </div><br>
				   <div class="form-row">
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				          <label class="form-check-label" for="gridRadios2">
					         Perempuan
				          </label>
				        </div>
				  </div><br>
				  <div class="form-row">
				    <div class="form-group col-md-4">
				      <label for="inputState">Tanggal</label>
				      <select id="inputState" class="form-control">
				        <option selected>Choose...</option>
				        <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option>
				      </select>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">Bulan</label>
				      <select id="inputState" class="form-control">
				        <option selected>Choose...</option>
				        <option>Januari</option><option>Februari</option><option>Maret</option><option>April</option><option>Mei</option><option>Juni</option><option>Juli</option><option>Agustus</option><option>September</option><option>Oktober</option><option>November</option><option>Desember</option>
				      </select>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">Tahun</label>
				      <select id="inputState" class="form-control">
				        <option selected>Choose...</option>
				        <option>1970</option><option>1971</option><option>1972</option><option>1973</option><option>1974</option><option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-group">
				      <label for="inputNomor">Nomor Ponsel</label>
				      <input type="email" class="form-control" id="inputNomor" placeholder="+62">
				  </div>
				  <div class="form-group">
				      <label for="inputCity">City</label>
				      <input type="text" class="form-control" id="inputCity" placeholder="City">
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Address</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="Jl. 1234">
				  </div>
				  <div class="form-group">
				  	<label for="Kendaraan">Kendaraan</label>
				     <div class="form-row">
	    				<div class="col">
	    				  <input type="text" class="form-control" placeholder="Type Kendaraan" id="tipr">
				    	</div>
					    <div class="col">
					      <input type="text" class="form-control" placeholder="Nomor Plat">
					    </div>
					 </div>
				  </div>
				  <div class="form-group">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="Email@gmail.com">
				  </div>
				  <div class="form-group">
				      <label for="inputPassword4">Password</label>
				      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
				    </div>
				  <button type="submit" class="btn btn-primary">Daftar</button>
				</form>
			</div>
		</div>
</body>
</html>