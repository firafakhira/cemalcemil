<!-- Haifa Salsabila 1301160170 -->
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Data Akun ~ Cemal-Cemil</title>

	<!-- Load your Bootstrap CSS Library Here -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/monica/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!-- Load your CSS Style Here! -->
	<style type="text/css">
		
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
            color: #f26c4f;
        }
        #nav_button{
            margin-top: 16px;
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
        #menu_kiri{
            margin-top: 10px;
            background-color: #dedfdb;
            text-align: center;
            padding: 30px;
        }
        #menu_kanan{
            margin-top: 10px;
            background-color: #dedfdb;
            text-align: center;
            padding: 30px;
        }
            body{
            background-color: #ffffff;
            font-family: papyrus;
        }
        #slide{
            margin-top: 87px;
        }
        #slide_caption{
            color: #000000;
        }
        
        #kunjungi{
            background-color: #abe64d;
            padding: 50px;
        }
        #footer{
            background-color: #dedfdb;
            text-align: center;
            padding: 20px;
        }
        
        .zoom {
            display:inline-block;
            position: relative;
        }
        .zoom:after {
            content:'';
            display:block; 
            width:33px; 
            height:33px; 
            position:absolute; 
            top:0;
            right:0;
            background:url(<?php echo base_url(); ?>assets/monica/jquery/zoom-master/icon.png);
        }
	</style>

	<!-- Load your Bootstrap JS Library Here -->
	<script src="<?php echo base_url(); ?>assets/monica/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!-- NAVBAR -->
	  <nav class="navbar fixed-top bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-lg-2" id="nav_logo">
                    <img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo_pth.jpg" style="width: 100%;">
                </div>
                <div class="col-6 col-lg-7" id="nav_list">
                    <ul>
                        <li><a href="<?php echo site_url('datatransaksi') ?>"> Data Transaksi </a></li>
						<li><a href="<?php echo site_url('inputMenuC') ?>"> Data Menu </a></li>
						<li><a href="<?php echo site_url('datadriver') ?>"> Data Driver </a></li>
                        <li><a href="<?php echo site_url('dataakun') ?>"> Data Akun </a></li>
                    </ul>
                </div>
                <!-- //Karina Aulia Dini 1301164342 -->
                <div class="col-6 col-lg-3" id="nav_button">
                        <button type="button" onclick="location.href='<?php echo site_url('login/logout');?>'" class="btn btn-sm" id="logout">Log Out</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- end karin -->
<!-- ISI BARU -->
	<!-- s -->>
		<h1 style="margin-top: 100px; text-align: center;"> Data Akun</h1>
		<!-- <button style="margin-left: 480px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahMalmilFood">Input Akun</button>

		<div class="col-md-12"> -->

	<!-- <div id="tambahMalmilFood" class="modal" role="dialog" tabindex="-1" aria-labelledby="tambahMalmilFood" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Tambah Data Akun</h4>
                </div>
                <?php //echo form_open("dataakun/add"); ?>
                    <div class="modal-body">
                    	<div class="form-group">
                            <label class="control-label" for="nim">Id</label>
                            <input type="hidden" name="id" class="form-control" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nim">nama</label>
                            <input type="text" name="email" class="form-control" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nama">nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nama">Ponsel</label>
                            <input type="text" name="Ponsel" class="form-control" id="Ponsel" required>
                        </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
                    </div>
                <?php //echo form_close(); ?>
            </div>
        </div>
    </div>
	</div> -->
	<div class="container" style="margin-top: 20px">
    <div class="col-md-12">
        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th> No</th>
                    <th> Email</th>
                    <th> nama</th>
                    <th> Nomor Hp</th>
                    <th> <center>Action</center></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($cemalcemilFood as $food) {
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $food->email;?></td>
                    <td><?php echo $food->nama; ?></td>  
                    <td><?php echo $food->ponsel; ?></td>            
                    <td style="text-align: center;">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $food->email; //7.lengkapi ini ?>">Edit</button>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $food->email;//7.lengkapi ini ?>">Delete</button>
                    </td>
                </tr>
                    <div id="edit<?php echo $food->email;//8.lengkapi ini?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Akun</h4>
                                </div>
                                <?php echo form_open("dataakun/edit"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
<!--                                         <label class="control-label" for="nim">NIM</label> -->
                                        <input type="text" class="form-control" disabled value="<?php echo $food->email; //8.lengkapi ini?>" id="email">
                                        <input type="hidden" name="email" class="form-control" value="<?php echo $food->email;//8.lengkapi ini?>" id="email" required>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telepon">nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $food->nama;//8.lengkapi ini?>" id="nama" required>
                                    </div>
                                    <div class="form-group">
			                            <label class="control-label" for="nama">Ponsel</label>
			                            <input type="text" name="ponsel" class="form-control" id="ponsel" required>
			                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>

                    <div id="hapus<?php echo $food->email//9.lengkapi ini ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                    <?php echo form_open("dataakun/hapus"); ?>
                                    <input type="hidden" name="email" class="form-control" value="<?php echo $food->email;//9.lengkapi ini?>" id="email" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>


                <?php } ?>                                
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>



<!-- KUNJUNGI -->
	
<!-- FOOTER -->
  <?php
     $this->load->view('footer'); ?>
</body>
</html>