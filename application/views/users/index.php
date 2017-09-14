<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Quiz online.">
        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url();?>dragon/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url();?>dragon/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        
        <link href="<?php echo base_url();?>dragon/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url();?>dragon/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?php echo base_url();?>dragon/css/waves-effect.css" rel="stylesheet">
        <!-- Custom Files -->
        <link href="<?php echo base_url();?>dragon/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>dragon/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url();?>dragon/js/modernizr.min.js"></script>
        
    </head>



    <body class="widescreen fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper" class="forced">
        
            <?php include_once("dragon/master/nav_head.php");?>

            <?php include_once("dragon/master/nav_left.php");?>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="fa fa-question-circle"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $totalQuizes;?></span>
                                        Total Questions
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="fa fa-users"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $totalUsers;?></span>
                                        Total Users
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                           
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End row-->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <?php include_once("dragon/master/nav_foot.php");?>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url();?>dragon/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>dragon/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>dragon/js/waves.js"></script>
        <script src="<?php echo base_url();?>dragon/js/wow.min.js"></script>
        <script src="<?php echo base_url();?>dragon/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>dragon/js/jquery.scrollTo.min.js"></script>
   
       
        <!-- Counter-up -->
        <script src="<?php echo base_url();?>dragon/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>dragon/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="<?php echo base_url();?>dragon/js/jquery.app.js"></script>

       

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    
    </body>
</html>