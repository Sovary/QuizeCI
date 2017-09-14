
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Login</title>

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


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Quiz Board</strong> </h3>
                </div> 

                <?php $error = $this->session->flashdata("error"); ?>
                <div class="panel-body">
                <?php echo $error; ?>
                <form class="form-horizontal m-t-20" action="<?= base_url(); ?>user/login" method="POST">
                    
                    <div class="form-group <?php if(form_error('username')){echo'has-error';} ?>">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " type="text" name="username" value="<?php echo  set_value('username');  ?>" required="" placeholder="Username">
                        </div>
                        <p style="color:red"><?php echo form_error('username'); ?></p>
                    </div>

                    <div class="form-group <?php if(form_error('password')){echo'has-error';} ?>">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password" name="password" value="" required="" placeholder="Password">
                        </div>
                        <p style="color:red"><?php echo form_error('password'); ?></p>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-6">
                            <button class="btn btn-inverse btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light m-b-5" type="button" onclick="window.location='<?php echo $fbLoginURL;?>'"> <i class="fa fa-facebook-official"></i> <span>Log In</span> </button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="<?php echo base_url(); ?>user/register">Create an account</a>
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