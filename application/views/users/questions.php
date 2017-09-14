<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Quiz online">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Managment Quiz</title>

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

        <!-- DataTables -->
        <link href="<?php echo base_url();?>dragon/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        
        <!-- sweet alerts -->
        <link href="<?php echo base_url();?>dragon/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
    
        <!-- Plugins css -->
        <link href="<?php echo base_url();?>dragon/assets/notifications/notification.css" rel="stylesheet" />

        <style type="text/css">
        .ellipse{
            white-space: nowrap;
            width: 495px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        </style>
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
                                    <li><a href="#">Quiz</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-lg-12">
                                    <div class="panel panel-color panel-primary">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Question Input</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">Question</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" id="question" class="form-control" placeholder="e.g What is oui?">
                                                    </div>
                                                    <div class="col-sm-2">
                                                      <input type="number" id="mark" required class="form-control" placeholder="Score">
                                                    </div>
                                                </div>
                                                <div id="ans">
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <div class="input-group m-t-10">
                                                                <span class="input-group-btn">
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" name="answer">
                                                                        <label for="inlineRadio1"> Inline One </label>
                                                                    </div>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Answer">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="btn waves-effect waves-light btn-danger" onclick="remove(this);"><i class="fa fa-trash"></i></button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <div class="input-group m-t-10">
                                                                <span class="input-group-btn">
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" name="answer">
                                                                        <label for="inlineRadio1"> Inline One </label>
                                                                    </div>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Answer">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="btn waves-effect waves-light btn-danger" onclick="remove(this);"><i class="fa fa-trash"></i></button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <div class="input-group m-t-10">
                                                           <a href="javascript:void(0);" id="addmore">Add Answer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group m-b-0">
                                                    <div class="col-sm-offset-2 col-sm-9">
                                                      <button type="button" class="btn btn-primary waves-effect waves-light" id="btnCreate">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->

                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Questions List</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="table-responsive">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Question</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                    <?php foreach($quizes as $item){?>
                                                        
                                                        <tr>
                                                            <td><p class="ellipse"><?php echo $item->quiz_question?></p></td>
                                                            <td><button type="button" class="btn waves-effect waves-light btn-danger" onclick="delete_q('<?php echo $item->quiz_id?>')"><i class="fa fa-trash"></i></button></td>
                                                        </tr>
                                                        
                                                    <?php }?>
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


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
        <script src="<?php echo base_url();?>dragon/assets/chat/moment-2.2.1.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- CUSTOM JS -->
        <script src="<?php echo base_url();?>dragon/js/jquery.app.js"></script>

        <script src="<?php echo base_url();?>dragon/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/datatables/dataTables.bootstrap.js"></script>
        <!-- sweet alerts -->
        <script src="<?php echo base_url();?>dragon/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/notifications/notify.min.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/notifications/notify-metro.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/notifications/notifications.js"></script>

       

        <script type="text/javascript">
            function remove(a){$(a).closest(".form-group").remove()}function delete_q(a){swal({title:"Are you sure?",text:"You will not be able to recover this record",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Yes, delete it!",cancelBUttonText:"No, cancel",closeOnConfirm:!1},function(b){b&&$.ajax({url:"<?= base_url(); ?>quiz/destroy/",method:"POST",data:{quiz_id:a},success:function(a){a=JSON.parse(a),a.msg?(swal("Done","Record has been deleted!","success"),location.reload()):swal("Error","Invalid delete","error")}})})}$("#addmore").on("click",function(){var a="";a+="<div class='form-group'><div class='col-sm-offset-2 col-sm-10'><div class='input-group m-t-10'><span class='input-group-btn'><div class='radio radio-info radio-inline'><input type='radio' name='answer'><label> Inline One </label></div> </span><input type='text' class='form-control' placeholder='Answer'><span class='input-group-btn'><button type='button' class='btn waves-effect waves-light btn-danger' onclick='remove(this);'><i class='fa fa-trash'></i></button></span> </div> </div> </div>",$("#ans").append(a)}),$("#datatable").dataTable(),$("#btnCreate").on("click",function(a){var b=$("#question").val(),c=$("#mark").val(),d={},e=[];$('[name="answer"]').each(function(a,b){var c=$(b).closest("span.input-group-btn").next();c.val().length<1&&$(this).closest(".form-group").remove(),$(b).is(":checked")?e.push({ans:!0,txt:c.val()}):e.push({ans:!1,txt:c.val()})}),d.q=b,d.ans=e;var f={ans:JSON.stringify(d),question:b,mark:parseFloat(c).toFixed(1)};$.post("insert",f,function(a){a=JSON.parse(a),a.STATUS===!0?$.Notification.autoHideNotify("success","top right","Question is inserted!"):$.Notification.autoHideNotify("error","top right",a.MSG)})});
        </script>
    
    </body>
</html>
