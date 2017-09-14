<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Quiz online">
        

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Quiz Player</title>

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

        <!-- sweet alerts -->
        <link href="<?php echo base_url();?>dragon/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="<?php echo base_url();?>dragon/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>dragon/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Plugins css -->
        <link href="<?php echo base_url();?>dragon/assets/notifications/notification.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
        .corrected{background: rgb(51, 184, 108);border-radius: 25px;color: white;margin-top: 5px;}
        .wrong{    background: rgba(239, 83, 80, 0.66);border-radius: 25px; color: white;margin-top: 5px;}
        </style>
        <script src="<?php echo base_url();?>dragon/js/modernizr.min.js"></script>
        <script type="text/javascript">
            window.heng=<?php if(!empty($rs)) echo json_encode($rs);?>;
        </script>
    </head>



    <body class="widescreen fixed-left-void">
        
        <!-- Begin page -->
        <div id="wrapper" class="forced enlarged">
        
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
                            <div class="col-sm-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="label label-inverse" id="q_state">0 / 0</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-info" id="correct_state">0</span>
                                        Correct
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-danger" id="wrong_state">0</span>
                                        Incorrected
                                    </li>
                                    <li class="list-group-item">
                                        
                                        Total Score
                                        <span class="badge" id="score_state">0 / 0</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-9">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading"> 
                                        <h3 id="q" class="panel-title" style="font-size:16px;text-transform:none;font-weight: normal;" ></h3> 
                                    </div> 
                                    <div class="panel-body" id="options"></div> 

                                </div>
                                <button id="q_ck" class="btn btn-info waves-effect waves-light btn-lg w-lg m-b-5">Next</button>
                            </div>
                            
                        </div>


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

        <!-- sweet alerts -->
        <script src="<?php echo base_url();?>dragon/assets/sweet-alert/sweet-alert.min.js"></script>
        
        <!-- CUSTOM JS -->
        <script src="<?php echo base_url();?>dragon/js/jquery.app.js"></script>

        <script src="<?php echo base_url();?>dragon/assets/notifications/notify.min.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/notifications/notify-metro.js"></script>
        <script src="<?php echo base_url();?>dragon/assets/notifications/notifications.js"></script>


       
        <script type="text/javascript">
        function options(a){var b="";return $.each(a,function(a,c){b+="<div class='row'>",b+="<div class='col-md-12'> ",b+="<div class='radio radio-single'> ",b+="<input type='radio' id='"+c.ans_id+"' name='option'> ",b+="<label for='"+c.ans_id+"'>"+c.answer+"</label> ",b+="</div></div></div>"}),b}var index=0,con_index=0,score=0,state_correct=0,state_wrong=0,q_state=1,len=heng.length,pause=2e3,i,j,temparray,chunk=100,container=[];for(i=0,j=len;i<j;i+=chunk)temparray=heng.slice(i,i+chunk),container.push(temparray);$("#q_state").text(q_state+"/"+container[con_index].length),$("#q").text("Q. "+container[con_index][index].quiz+" ("+container[con_index][index].quiz_mark+"pt)"),$("#options").empty().append(options(container[con_index][index].answer));for(var totalScore=0,p=0;p<container[con_index].length;p++)totalScore+=container[con_index][p].quiz_mark;$("#score_state").text("0/"+totalScore),$("#q_ck").on("click",function(a){for(var b=container[con_index][index].answer.length,c=!1,d=0;d<b;d++)$("input[type='radio']")[d].checked&&(c=!0);if(!c)return void $.Notification.autoHideNotify("error","bottom center","Answer this question before move to the next!");for(var d=0;d<b;d++){var e=$("input[type='radio']")[d].id;"1"==container[con_index][index].answer[d].ans_corrected&&$("#"+e).closest(".row").addClass("corrected"),$("input[type='radio']")[d].checked&&"0"==container[con_index][index].answer[d].ans_corrected&&($("#"+e).closest(".row").addClass("wrong"),state_wrong+=1),"1"==container[con_index][index].answer[d].ans_corrected&&$("input[type='radio']")[d].checked&&(state_correct+=1,score+=parseFloat(container[con_index][index].quiz_mark))}for(var f=0,g=0;g<container[con_index].length;g++)f+=container[con_index][g].quiz_mark;$("[type='radio']").prop("disabled",!0),$("button").prop("disabled",!0),$("#correct_state").text(state_correct),$("#wrong_state").text(state_wrong),$("#score_state").text(score+"/"+f),index>=len-1||(index==container[con_index].length-1&&setTimeout(function(){--q_state,$("#q_state").text(q_state+"/"+container[con_index].length),swal({title:"You got "+score+"/"+f+" scores",text:"<p>Answer correct <span class='badge badge-info'>"+state_correct+"</span> times </p> <p>Answer incorrect <span class='badge badge-danger'>"+state_wrong+"</span> times</p>",html:!0,imageUrl:"https://cdn1.iconfinder.com/data/icons/flat-rounded-long-shadow-icons/493/like.png"},function(){score=0;var a=0;state_correct=0,state_wrong=0,q_state=1,$("#score_state").text(score+"/"+a),$("#correct_state").text(state_correct),$("#wrong_state").text(state_wrong),$("#q_state").text(q_state+"/"+container[con_index].length);for(var b=0;b<container[con_index].length;b++)a+=container[con_index][b].quiz_mark})},pause),setTimeout(function(){index==container[con_index].length-1&&con_index==container.length-1&&swal({title:"You got "+score+"/"+f+" scores",text:"<p>Answer correct <span class='badge badge-info'>"+state_correct+"</span> times </p> <p>Answer incorrect <span class='badge badge-danger'>"+state_wrong+"</span> times</p>",html:!0,closeOnConfirm:!1,imageUrl:"https://cdn1.iconfinder.com/data/icons/flat-rounded-long-shadow-icons/493/like.png"},function(){swal({title:"Good job!",text:"You have accomplished whole of questions replay press OK",type:"success"},function(){location.reload()})}),++q_state,$("#q_state").text(q_state+"/"+container[con_index].length),index==container[con_index].length-1?(index=0,con_index<container.length-1&&con_index++):con_index<=container.length-1&&index++,$("#q").text("Q. "+container[con_index][index].quiz+" ("+container[con_index][index].quiz_mark+"pt)").hide().fadeIn(1e3),$("#options").empty().append(options(container[con_index][index].answer)).hide().fadeIn(1e3),$("button").prop("disabled",!1)},pause))});
        </script>
    
    </body>
</html>