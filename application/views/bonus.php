<!-- Monica Dessy Amanda 1301164452 -->
<!DOCTYPE html>
<html>
<head>
    <title>Cemal-Cemil</title>

    <!-- Load your Bootstrap CSS Library Here -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/monica/bootstrap/css/bootstrap.min.css">

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
        #kunjungi{
            background-color: #abe64d;
            padding: 50px;
        }
        #footer{
            background-color: #dedfdb;
            text-align: center;
            padding: 20px;
        }
        body{
            background-color: #ffffff;
            font-family: papyrus;
        }
        #bonus{
            margin-top: 100px;
            background-color: #dedfdb;
            text-align: center;
            padding: 20px;
        }
        /*WHEEL*/
        td.the_wheel{
            background-image: url(<?php echo base_url(); ?>assets/monica/jquery/javascript-winwheel-2.7.0/examples/pins_and_sound_wheel/wheel_back.png);
            background-position: center;
            background-repeat: none;
        }
        /* Do some css reset on selected elements */
        div.power_controls{
            margin-right:70px;
        }
        div.html5_logo{
            margin-left:70px;
        }
        /* Styles for the power selection controls */
        table.power{
            background-color: #cccccc;
            cursor: pointer;
            border:1px solid #333333;
        }
        table.power th{
            background-color: white;
            cursor: default;
        }
        td.pw1{
            background-color: #6fe8f0;
        }
        td.pw2{
            background-color: #86ef6f;
        }
        td.pw3{
            background-color: #ef6f6f;
        }
        /* Style applied to the spin button once a power has been selected */
        .clickable{
            cursor: pointer;
        }
        /* Other misc styles */
        .margin_bottom{
            margin-bottom: 5px;
        }
    </style>

    <!--Load your JQuery Plugin here!-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/monica/jquery/javascript-winwheel-2.7.0/Winwheel.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

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
                        <li><a href="<?php echo site_url('home') ?>"> Home </a></li>
                        <li><a href="<?php echo site_url('menu') ?>"> Menu </a></li>
                        <li><a href="<?php echo site_url('order') ?>"> Order Now! </a></li> 
                    </ul>
                </div>
                <div class="col-6 col-lg-3" id="nav_button">
                    <a href="login.html">
                        <button type="button" class="btn btn-md" id="login" >Member</button></a>
                    <!-- <a href="join.html">
                        <button type="button" class="btn btn-md" id="join" >Join Us</button></a> -->
                </div>
            </div>
        </div>
    </nav>
<!-- BONUS -->
    <div class="container-fluid" id="bonus">
        <h4 style="color: black;">TOTAL HARGA</h4>
    </div>
<!-- WHEEL -->
    <div class="container" id="wheel">
        <h5 style="text-align: center;"> anda berkesempatan memenangkan bonus! spin sekarang juga!</h5>
        <div class="row">
            <div class="col-2 col-lg-2" id="bonus_kiri"></div>
            <div class="col-8 col-lg-8" id="bonus_tengah">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <div class="power_controls">
                                <br />
                                <br />
                                <table class="power" cellpadding="10" cellspacing="0">
                                    <tr>
                                        <th align="center">Power</th>
                                    </tr>
                                    <tr>
                                        <td width="78" align="center" id="pw3" onClick="powerSelected(3);">High</td>
                                    </tr>
                                    <tr>
                                        <td align="center" id="pw2" onClick="powerSelected(2);">Med</td>
                                    </tr>
                                    <tr>
                                        <td align="center" id="pw1" onClick="powerSelected(1);">Low</td>
                                    </tr>
                                </table>
                                <br />
                                <img id="spin_button" src="<?php echo base_url(); ?>assets/monica/jquery/javascript-winwheel-2.7.0/examples/pins_and_sound_wheel/spin_off.png" alt="Spin" onClick="startSpin();" />
                                <!-- <br /><br />
                                &nbsp;&nbsp;<a href="#" onClick="resetWheel(); return false;">Play Again</a><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(reset) -->
                            </div>
                        </td>
                        <td width="438" height="582" class="the_wheel" align="center" valign="center">
                            <canvas id="canvas" width="434" height="434">
                                <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
                            </canvas>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-2 col-lg-2" id="bonus_kanan"></div>
        </div>
        <script>
            var theWheel = new Winwheel({
                'numSegments'  : 8,     // Specify number of segments.
                'outerRadius'  : 216,   // Set outer radius so wheel fits inside the background.
                'textFontSize' : 20,    // Set font size as desired.
                'segments'     :        // Define segments including colour and text.
                [
                   {'fillStyle' : '#eae56f', 'text' : 'Kurang Beruntung'},
                   {'fillStyle' : '#89f26e', 'text' : 'xxx'},
                   {'fillStyle' : '#7de6ef', 'text' : 'Potongan harga 5%'},
                   {'fillStyle' : '#e7706f', 'text' : 'GRATIS'},
                   {'fillStyle' : '#eae56f', 'text' : 'Coba lagi'},
                   {'fillStyle' : '#89f26e', 'text' : 'Free Ongkir'},
                   {'fillStyle' : '#7de6ef', 'text' : 'xxx'},
                   {'fillStyle' : '#e7706f', 'text' : 'Hampir!'}
                ],
                'animation' :           // Specify the animation to use.
                {
                    'type'     : 'spinToStop',
                    'duration' : 15,
                    'spins'    : 8,
                    'callbackFinished' : alertPrize,
                    'callbackSound'    : playSound,   // Function to call when the tick sound is to be triggered.
                    'soundTrigger'     : 'pin'        // Specify pins are to trigger the sound, the other option is 'segment'.
                },
                'pins' :
                {
                    'number' : 16   // Number of pins. They space evenly around the wheel.
                }
            });
            var audio = new Audio('<?php echo base_url(); ?>assets/monica/jquery/javascript-winwheel-2.7.0/examples/pins_and_sound_wheel/tick.mp3');  // Create audio object and load tick.mp3 file.

            function playSound(){
                // Stop and rewind the sound if it already happens to be playing.
                audio.pause();
                audio.currentTime = 0;

                // Play the sound.
                audio.play();
            }
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters
            function alertPrize(indicatedSegment){
                alert("Selamat ! anda mendapatkan " + indicatedSegment.text);
            }
            // Code below for the power controls etc which is entirely optional. You can spin the wheel simply by
            // calling theWheel.startAnimation();
            var wheelPower    = 0;
            var wheelSpinning = false;
            // Function to handle the onClick on the power buttons.
            function powerSelected(powerLevel){
                // Ensure that power can't be changed while wheel is spinning.
                if (wheelSpinning == false){
                    // Reset all to grey incase this is not the first time the user has selected the power.
                    document.getElementById('pw1').className = "";
                    document.getElementById('pw2').className = "";
                    document.getElementById('pw3').className = "";

                    // Now light up all cells below-and-including the one selected by changing the class.
                    if (powerLevel >= 1){
                        document.getElementById('pw1').className = "pw1";
                    }
                    if (powerLevel >= 2){
                        document.getElementById('pw2').className = "pw2";
                    }
                    if (powerLevel >= 3){
                        document.getElementById('pw3').className = "pw3";
                    }
                    // Set wheelPower var used when spin button is clicked.
                    wheelPower = powerLevel;
                    // Light up the spin button by changing it's source image and adding a clickable class to it.
                    document.getElementById('spin_button').src = "<?php echo base_url(); ?>assets/monica/jquery/javascript-winwheel-2.7.0/examples/pins_and_sound_wheel/spin_on.png";
                    document.getElementById('spin_button').className = "clickable";
                }
            }
            // Click handler for spin button.
            function startSpin(){
                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false){
                    // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                    // to rotate with the duration of the animation the quicker the wheel spins.
                    if (wheelPower == 1){
                        theWheel.animation.spins = 3;
                    } else if (wheelPower == 2){
                        theWheel.animation.spins = 8;
                    }else if (wheelPower == 3){
                        theWheel.animation.spins = 15;
                    }
                    // Disable the spin button so can't click again while wheel is spinning.
                    document.getElementById('spin_button').src       = "<?php echo base_url(); ?>assets/monica/jquery/javascript-winwheel-2.7.0/examples/pins_and_sound_wheel/spin_off.png";
                    document.getElementById('spin_button').className = "";

                    // Begin the spin animation by calling startAnimation on the wheel object.
                    theWheel.startAnimation();

                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = true;
                }
            }
            // Function for reset button.
            function resetWheel(){
                theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
                theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
                theWheel.draw();                // Call draw to render changes to the wheel.

                document.getElementById('pw1').className = "";  // Remove all colours from the power level indicators.
                document.getElementById('pw2').className = "";
                document.getElementById('pw3').className = "";

                wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again.
            }
        </script>
    </div>
<!-- BUTTON -->
    <div class="container-fluid">   
        <div class="row">
            <a href="<?php echo site_url('driver/getD') ?>">
            <button type="button" class="btn btn-md" id="btnOK" >OK</button>
        </div>
    </div>
<!-- KUNJUNGI -->
    <div class="container-fluid" id="kunjungi">
        <center>    
        <h3 style="color: #ffffff; margin-bottom: 30px;"> KUNJUNGI </h3>
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <a href="https://www.facebook.com/">
                    <img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_facebook.png" id="logo_fb" style="width: 50px;">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_instagram.png" id="logo_ig" style="width: 50px;">
                </a>
                <a href="https://www.youtube.com/">
                    <img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_youtube.png" id="logo_yt" style="width: 50px;">
                </a>
                <a href="https://www.twitter.com/">
                    <img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_twitter.png" id="logo_tw" style="width: 50px;">
                </a>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </center>
    </div>
<!-- FOOTER -->
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
</body>
</html>
