<!-- Haifa Salsabila 1301160170 -->
<!DOCTYPE html>
<html>
<head>
 <title>Choose Driver ~ Cemal Cemil</title>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--     <link rel="stylesheet" href="fira/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/fira/jquery/jquery-3.3.1.min.js"></script>
<!--     <script src="<?php echo base_url(); ?>assets/fira/bootstrap/js/bootstrap.min.js"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
     <style type="text/css">
     
      .slider {
          width: 80%;
          margin: 30px auto;
      }

      .slick-slide {
          margin: 10px 10px;
      }

      .slick-slide img {
         width: 100%;
          height: 100px;
      }

      .slick-prev:before,
      .slick-next:before {
          color: black;
      }

      .slick-slide {
          transition: all ease-in-out .3s;
          opacity: .2;
      }
    
      .slick-active {
          opacity: .5;
      }

      .slick-current {
          opacity: 1;
      }
      .isi{
        background-image: url("<?php echo base_url(); ?>assets/haifa/Driver/Haifa.png");
        height: 576px;
        margin-top: 90px;
      }
    </style>

<body>
    <?php
      $this->load->view('header'); ?>
    <div class="isi">
    <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 250px;margin-left: 455px;" >Cari Driver</button>

          <a href="<?php echo site_url('ratingcem/index/'.$driver[0]->idDriver) ?>">
         <button style="float:right;margin-top: 200px;" type="button" class="btn btn-default" data-dismiss="modal">Next</button>
  </div>
  <!-- Modal -->
</div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="margin-right: 250px;"> Driver Anda</h4>
        </div>
        <div class="modal-body">
          <?php
          // var_dump($driver);
            echo $driver[0]->namaDriver."<br>";
            echo $driver[0]->noPlat."<br>";
            echo $driver[0]->noHp."<br>";?>
            <img class="rounded-circle" src="<?php echo base_url(); ?>assets/<?php echo $driver[0]->gambar;?>" width= "300" height="300"> 
            <?php echo form_open("Driver/getId"); ?>
                <input type="hidden" name="nim" class="form-control" id="nim" value="$driver[0]->idDriver" required>
            <?php echo form_close(); ?>

            <?php echo form_open("Driver/nama"); ?>
               <input type="hidden" name="nim" class="form-control" id="nim" value="$driver[0]->namaDriver" required>
            <?php echo form_close(); ?>
            
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Next</button>
        </div>
      </div>
      
    </div>

</div>
  <?php
     $this->load->view('footer'); ?>
</body>

</html>