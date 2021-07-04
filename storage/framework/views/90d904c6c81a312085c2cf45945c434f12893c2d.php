<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin-<?php echo $__env->yieldContent('title'); ?>
        </title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/backend/trackMee.css')); ?>"/>
        <script src="<?php echo e(asset('/jQuery/jquery-3.3.1.js')); ?>"></script>
        <script src="<?php echo e(asset('/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/fontawesome-free-5.0.8/fontawesome-free-5.0.8/svg-with-js/js/fontawesome-all.js')); ?>"></script>
        <script src="main.js"></script>
        <style>
            body{
                /*background-image: url("<?php echo e(asset('/photos/Night-Sky-Wallpaper-in-HD-Resolution-wpc2007362.jpg')); ?>") ;
                //background-repeat: no-repeat;
                //background-attachment:fixed;
                color:white;
                font-family: serif;*/
            }
            ul li {


            }
            .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{
                background-color: #009933;
                color: white;
            }
            .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover {
                color: #fff;
                background-color: #009933;
            }
            .dropdown-menu {
                /*display: block;
                padding: 3px 20px;
                clear: both;
                font-weight: 400;
                line-height: 1.42857143;
                color: #fff;*/
                background-color: #009933;
            }
            /*white-space: nowrap;
            
        }*/
            .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
                color: #262626;
                text-decoration: none;
                background-color:  #207511;

            }
            /*dropdowns.less:70*/
            .dropdown-menu>li>a {
                display: block;
                padding: 3px 20px;
                clear: both;
                font-weight: 400;
                line-height: 1.42857143;
                color: #fff;
                white-space: nowrap;
            }

        </style>
    </head>
    <body>
    </head>
<body>
    <div class="container">
        <!--        -->
        <div class="row" style="height:10px">
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#009933 ;border-color:  #1f7a1f;border:transparent;">

                <div class="container-fluid" >


                    <div style="font-family: serif">
                        <br>
                        <ul id="nav-link" class="nav navbar-nav" style="text-align: right; ">
                            <li style="color:white;">
                                <h4>Admin-Dashboard</h4></li>
                            <li class="dropdown">
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown" >
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-family: seri;color: white"><?php echo e(session('loggedUser')->username); ?>

                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                                    <li><a href="<?php echo e(route('logout.index')); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

                                </ul>
                            </li> 
                            </li>
                        </ul>
                    </div>

                </div>



            </nav>
        </div>
        <br>


        <br>
        <br>
        <div class="row">

            <aside class="main-sidebar">
                <div class="Main-sidebar">
                    <div class="col-md-2">

                        <ul class="nav nav-pills nav-stacked">

                            <li class="active">
                                <a href="<?php echo e(route('admin.tracker.unlock')); ?>">Unlock Account</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo e(route('admin.tracker.show')); ?>">Trackers</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo e(route('admin.device.show')); ?>">Devices</a>
                            </li>
                            <li class="active">
                                <a href="#">Reports</a>
                            </li>
                            <li class="active">
                                <a href="#">Log Files</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo e(route('admin.employee.show')); ?>">Employees</a>
                            </li>
                            <li class="active">
                                <a href="#">Authorities</a>
                            </li>

                        </ul> 


                    </div>
                </div>
            </aside>
            <div class="col-md-10" style="color:black">
                <br>
                <br>
                <br>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>


    </div>
    <script>

funcion change(id)
{


}

    </script>
</body>
</html>