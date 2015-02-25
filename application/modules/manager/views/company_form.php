<!DOCTYPE html>
<html class="no-js">
    
    <head>
    <title>Manager</title>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        
        <link rel="icon" type="image/x-icon" href="<?php echo base_url() . 'assets/fonts/fashion.ico'?>" />
        <link type="text/css" href="<?php echo base_url() .'assets/ionicons/css/ionicons.css' ?>" rel="stylesheet" media="screen">
        <link type="text/css" href="<?php echo base_url() .'assets/dist/css/table_bootstrap.css' ?>" rel="stylesheet" media="screen">
        <link type="text/css" href="<?php echo base_url() .'assets/bootstrap/css/bootstrap-responsive.min.css'?>" rel="stylesheet" media="screen">
        <link type="text/css" href="<?php echo base_url() .'assets/vendors/easypiechart/jquery.easy-pie-chart.css'?>" rel="stylesheet" media="screen">
        <link type="text/css" href="<?php echo base_url() .'assets/script/jquery/jquery-ui.css' ?>" rel="stylesheet" media="screen">
        
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/script/jquery/jquery-ui.js'; ?>"></script>

        <script src="<?php echo base_url(). 'assets/vendors/modernizr-2.6.2-respond-1.1.0.min.js'?>"></script>
          <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/js/jquery.datatables/bootstrap-adapter/css/datatables.css'; ?>" /> 
        
        <link type="text/css" href="<?php echo base_url() .'assets/bootstrap/css/bootstrap.css' ?>" rel="stylesheet">

        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.datatables/jquery.datatables.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.datatables/bootstrap-adapter/js/datatables.js'; ?>"></script>
        <link type="text/css" href="<?php echo base_url() .'assets/css/ad_styles.css' ?>" rel="stylesheet" media="screen">
    </head>
    
    <body>

        <?php
              $username = $this->session->userdata('username');
        ?>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Manager Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li><a href="<?php echo base_url(). 'home/index'?>">Home Page</a></li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $username?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" data-toggle="modal" data-target="#myModal">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'user/logout'?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Reports <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    
                                    <li>
                                        <a href="#">Excel</a>
                                    </li>
                                    <li>
                                        <a href="#">PDF</a>
                                    </li>
                                    <!-- <li class="divider"></li> -->
                                </ul>
                            </li>
                            <li>
                                <a  href="<?php echo base_url(). 'manager/messages'?>">Messages</a>
                            </li>
                            <li>
                                <a  href="<?php echo base_url(). 'manager/admin'?>">Admins</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Deactivations<i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'manager/dtype'?>">Type List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'manager/dcat'?>">Category List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'manager/dcomp'?>">Company List</a>
                                    </li>
                                    <li>
                                        <div class="divider"></div>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'manager/dadmin'?>">Admin List</a>
                                    </li>
                                </ul>
                            </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

  
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="<?php echo base_url(). 'manager/home'?>"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'manager/productsview'?>"><span class="badge badge-alert pull-right"><?php echo $productnumber?></span> Product View</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'manager/messages'?>"><span class="badge badge-inverse pull-right"><?php echo $messagenumber?></span> Messages</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'manager/category'?>"><span class="badge badge-success pull-right"><?php echo $categorynumber?></span> Categories</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'manager/type'?>"><span class="badge badge-warning pull-right"><?php echo $typenumber?></span> Types</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'manager/company'?>"><span class="badge badge-info pull-right"><?php echo $companynumber?></span> Company</a>
                        </li>
                        
                        
                    </ul>
                </div>
                
                <!--/span-->
    
        
                <div class="span9" id="content">



                    
                    <div class="row-fluid addlength">
                        <!-- <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success</h4>
                          Logged in succesfully</div> -->
                          <div class="navbar">
                              <div class="navbar-inner">
                                  <ul class="breadcrumb">
                                      <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                                      <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                                      <li>
                                          <a href="#">Dashboard</a> <span class="divider">|</span>  
                                      </li>
                                      
                                      <li class="active">Company</li>
                                  </ul>
                              </div>
                          </div>
                      </div>

                      

                      <div class="span9" id="content">
                      

                  
                    <div class="row-fluid addlength">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">New Company</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
          <!-- BEGIN FORM-->
          <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() . 'manager/create_company'?>" class="form-horizontal black" role="form">
            <?php 
                                  echo form_open_multipart(base_url().'manager/create_company');
                              ?>
                        <fieldset>
              <div class="alert alert-error hide">
                <button class="close" data-dismiss="alert"></button>
                Please complete filling the form
              </div>
              <div class="alert alert-success hide">
                <button class="close" data-dismiss="alert"></button>
                Product has been added successfully
              </div>

                <div class="control-group">
                  <label class="control-label">Company Name<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="companyname" data-required="1" required value="<?php echo set_value('companyname'); ?>" class="span6 m-wrap form-control"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Location<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="companylocation" data-required="1" required value="<?php echo set_value('companylocation'); ?>" class="span6 m-wrap form-control"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Address<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="companyaddress" data-required="1" required value="<?php echo set_value('companyaddress'); ?>" class="span6 m-wrap form-control"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Phone Number<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="companypnumber" data-required="1" required value="<?php echo set_value('companypnumber'); ?>" class="span6 m-wrap form-control"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Email<span class="required">*</span></label>
                  <div class="controls">
                    <input type="text" name="companyemail" data-required="1" required value="<?php echo set_value('companyemail'); ?>" class="span6 m-wrap form-control"/>
                  </div>
                </div>

                
                
              
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Enter Company</button>
                  <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
                        <?php 
                                    echo form_close();
                                 ?>
          </form>
          <!-- END FORM-->
        </div>
          </div>
      </div>
                     
        </div>



                    

                   <div class="row-fluid addlength">
                        <div class="span12">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Companies</div>
                                    <div class="pull-right"><span class="badge badge-info"><?php echo $companynumber?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="table-responsive">
                                    <table class="table table-striped datatable" id="companytable">
                                        <thead>


                                            <tr>
                                                <th>#</th>
                                                <th>Company Name</th>
                                                <th>Location</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Date / Time Registered</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php echo $companies_table; ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>

                    </div>


                  





                </div>
            </div>
            
        <!--/.fluid-container-->


                        <hr>
            <footer class="span12">
                <p>&copy; MareWill Fashion 2015</p>
            </footer>
        </div>

        

        <script src="<?php echo base_url(). 'assets/bootstrap/js/bootstrap.js'?>"></script>
        <script src="<?php echo base_url(). 'assets/vendors/easypiechart/jquery.easy-pie-chart.js'?>"></script>
        <script src="<?php echo base_url(). 'assets/js/ad_scripts.js'?>"></script>
        
        <!--<script src="<?php echo base_url(). 'assets/js/jquery-2.1.1.min.js'?>"></script>-->
        <script>
        $(function() {
            
        });
        </script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
        <script type="text/javascript">
            $('#companytable').dataTable();
            $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
            $('.dataTables_length select').addClass('form-control');
        </script>
    </body>

</html>
        