
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url();?>dragon/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url();?>dragon/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>dragon/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
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
    <body>

        <?php $msg = $this->session->flashdata("msg"); ?>
        <div class="wrapper-page">
            <?php if($msg){?>
            <div class="alert alert-success">
                <?php echo $msg; ?>
            </div>
            <?php }?>
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                   <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
                </div> 
                <div class="panel-body">
                <form class="form-horizontal m-t-20" action="<?php echo base_url();?>user/reg" method="POST">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="email" type="email" required="" placeholder="Email">
                        </div>
                        <p style="color:red"><?php echo form_error('email'); ?></p>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="username" type="text" value="<?php echo  set_value('username');  ?>" required="" placeholder="Username">
                        </div>
                        <p style="color:red"><?php echo form_error('username'); ?></p>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
                        </div>
                        <p style="color:red"><?php echo form_error('password'); ?></p>
                    </div>
                   
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Register</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="<?php echo base_url();?>/user/login">Already have account?</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>
        <script src="<?php echo base_url();?>dragon/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>dragon/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>dragon/js/waves.js"></script>
        <script src="<?php echo base_url();?>dragon/js/wow.min.js"></script>
        <script src="<?php echo base_url();?>dragon/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>dragon/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url();?>dragon/js/jquery.app.js"></script>
	
	</body>
</html>