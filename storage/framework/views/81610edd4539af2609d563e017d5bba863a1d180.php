<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/frontend/trackMee.css')); ?>"/>
        <script src="main.js"></script>
        <style>
            body{
                background-image: url("<?php echo e(asset('/photos/Night-Sky-Wallpaper-in-HD-Resolution-wpc2007362.jpg')); ?>") ;
                background-repeat: no-repeat;
                background-attachment:fixed;
                color:white;
                font-family: serif;
            }
            li{

            }

        </style>
    </head>
    <body>
        <div >
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:  #009933;border-color:  #1f7a1f;border:transparent;">

                <div class="container-fluid " >
                    <div class="navbar-header">
                        <a class="navbar-brand" href="javascript::void(0)" style="color: white;font-family:serifs"><span class="glyphicon glyphicon-eye-open"></span> TrackMee</a>
                    </div>
                    <div>
                        <ul id="nav-link" class="nav navbar-nav" style="text-align: right; ">

                            <li id="home" class=" active"><a   href="<?php echo e(route('index')); ?>"  style="color: white;font-family:serifs">Home</a></li>
                            <li  id="about" onclick="changer("about")"><a  href="<?php echo e(route('about')); ?>"  style="color: white;font-family:serifs">About</a></li>
                            <li id="contact" onclick="changer("contact")"><a  href="<?php echo e(route('contact')); ?>"  style="color: white;font-family:serifs">Contact</a></li>
                        </ul>
                    </div>

                </div>



            </nav>
            <?php echo $__env->yieldContent('content'); ?>
            <nav class="navbar navbar-inverse navbar-fixed-bottom" style="background-color:#009933 ;border-color:  #1f7a1f;border:transparent;">

                <div class="container-fluid " >


                    <div style="font-family: serif">
                        <br>

                        <h4><strong><p style="text-align: center;">Developed by Drubo, Minhaz, Kafi, Jahid</p></strong></h4>
                    </div>

                </div>



            </nav>
        </div>

        <script type="text/javascript">
            $(function(){
		$('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('.nav a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})



        </script>

    </body>
</html>