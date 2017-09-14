    
            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                        <?php if(!$this->session->userdata('user_profile')){?>
                            <img src="http://www.w3schools.com/w3css/img_avatar3.png" alt="" class="thumb-md img-circle">
                        <?php }else{?>
                            <img src="<?php echo $this->session->userdata('user_profile'); ?>" alt="" class="thumb-md img-circle">
                        <?php }?>
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#"  aria-expanded="false"><?php echo $this->session->userdata("user_name");?> </a>
                                
                            </div>
                            
                            <p class="text-muted m-0"><?php echo $this->session->userdata("user_level");?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="./" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-tasks"></i><span> Management </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url();?>quiz/manage_q">Quiz</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>quiz/play" class="waves-effect"><i class="fa fa-play-circle"></i><span> My Quiz </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 