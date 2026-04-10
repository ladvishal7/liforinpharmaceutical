<?php 
    include('connect.php');
    session_start();
    if(empty($_SESSION['a_id']))
	{
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title> Admin | General </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->	
			<?php include "header.php"; ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php include "sidebar1.php"; ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <?php //include "theme_panel.php"; ?>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="dashboard.php">Dashboard</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="general_index.php">General</a>
                                <!-- <i class="fa fa-circle"></i> -->
                            </li>
                            
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                              <!--  <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    
                                </ul>-->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    
                
                    <!-- END PAGE TITLE-->
                    <br/>
                    <!-- END PAGE HEADER-->
                         <div class="row">
                                    <div class="col-md-6">
                                        <div class="portlet box red">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Upload Logo </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                   <!--  <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a> -->
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="uplode.php" method="post" enctype="multipart/form-data">
                                                    <div class="form-body"> 
                                                    <div class="form-group">
                                                            <label class="control-label">Select Logo</label>
                                                            <div class="col-md-3">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="input-group input-large">
                                                                        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                            <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                            <span class="fileinput-filename"> </span>
                                                                        </div>
                                                                        <span class="input-group-addon btn default btn-file">
                                                                            <span class="fileinput-new"> Select file </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="logo_img" required> </span>
                                                                        <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div><br/>
                                                    <div class="text-center">

													 <?php 
														$select = mysqli_query($conn,"SELECT * FROM rasco_logo WHERE social_category = 'logo' ")or die(mysqli_error($conn));
														while($fetch_img = mysqli_fetch_assoc($select)) {  
														   $_SESSION['id'] = $fetch_img['logo_id']; ?>
															 <img src="images/<?php echo $fetch_img['logo_img']; ?>" alt="Logo Image" width="120px" height="100px">
													<?php }  ?>
															
                                                    </div><br/>
                                                    <div class="form-actions">
                                                        <input type="submit" name="btnsubmit" value="Submit" class="btn green">
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                            <div class="col-md-6">
                                                <div class="portlet box purple">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-gift"></i>Upload Social Media</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse"> </a>
                                                            <!-- <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                            <a href="javascript:;" class="reload"> </a>
                                                            <a href="javascript:;" class="remove"> </a> -->
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                                                        <!-- <form > -->
                                                            <div class="form-actions top right">
                                                             <a class="btn red btn-outline sbold" data-toggle="modal" href="#basic"> Add </a> 
                                                             <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                                                                    <div class="modal-dialog text-left">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                                <h4 class="modal-title">Add Social Media</h4>
                                                                            </div>
                                                                            <div class="modal-body">  
                                                                                <form action="uplode.php" method="post">
                                                                                    <div class="form-body">
                                                                                        <div class="form-group">
                                                                                            <label class="control-label">Enter Social Media Name</label>
                                                                                            <input type="text" class="form-control" name="s_name">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label">Enter Social Media Url</label>
                                                                                            <input type="text" class="form-control" name="s_url">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label">Social Media icon</label>
                                                                                            <input type="text" class="form-control" name="logo_img" require>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input type="submit" name="submit" Value="Submit" class="btn green">
                                                                                            <button type="button" class="btn default">Cancel</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                    
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                            </div>
                                                            <div class="form-body">
                                                                <div>
                                                                    <table class="table table-borderd" >
                                                                        <th> Social Media Name </th>
                                                                        <th> Delete </th>
                                                                        <?php 
                                                                        //fetch social media data
                                                                            $select_social = mysqli_query($conn,"SELECT * FROM rasco_logo where is_active = 0 && social_category = 'social' ")or die(mysqli_error($conn));
                                                                            while($social = mysqli_fetch_assoc($select_social)){?>
                                                                            <tr>
                                                                                <td><?php echo $social['social_name']; ?></td>
                                                                                <td><a href="uplode.php?id=<?php echo $social['logo_id']; ?>" class="btn red" onclick="return confirm('Are You Sure ?');">Delete</td>
                                                                            </tr>

                                                                        <?php  }
                                                                        ?>
                                                                    </table>
                                                                </div>
                                                             </div>
                                                        <!-- </form> -->
                                                        <!-- END FORM-->
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                 <div class="portlet box yellow">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Contact Deatils </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <!-- <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a> -->
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="#" class="form-horizontal">
                                                    <div class="form-actions top">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <a href="contact_add.php" class="btn green" style="float:right;">Add Contact Details</a>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-body table-responsive">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th> No. </th>
                                                                <th> Name </th>
                                                                <th> Map </th>
                                                                <th> Phone No. </th>
																<th> mobile No. </th>
                                                                <th> Email </th>
                                                                <th> Address </th>
                                                                <th> Edit </th>
                                                                <th> Delete </th>
                                                            </tr>
                                                            <?php 
                                                                $select_contact = mysqli_query($conn,"SELECT * FROM rasco_contact1 where is_active=0")or die(mysqli_error($conn));
                                                                $n = 1;
                                                                while($contact = mysqli_fetch_assoc($select_contact)){
                                                            ?>    
                                                            <tr>
                                                                <td><?php echo $n; ?></td>
                                                                <td><?php echo $contact['c_name']; ?></td>
                                                                <td><iframe src="<?php echo $contact['c_map']; ?>" width="100" height="100" frameborder="0" style="border:0" allowfullscreen></iframe></td>
																 <td><?php echo $contact['c_phno']; ?></td>
                                                                <td><?php echo $contact['c_mno']; ?></td>
                                                                <td><?php echo $contact['c_email']; ?></td>
                                                                <td><?php echo $contact['c_address']; ?></td>
                                                                <td><a href="contact_edit.php?cid=<?php echo $contact['c_id']; ?>" class="btn green" >Edit </a></td>
                                                                <td><a href="uplode.php?cid=<?php echo $contact['c_id']; ?>" class="btn red" onclick="return confirm('Are You Sure ?');" >Delete</a></td>
                                                            </tr>
                                                                <?php $n++; } ?>
                                                        </table>
                                                        
                                                        
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                 </div>
                                 </div>
                             </div>
                                                                        
                     </div>

                     
                
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
      <?php include "footer.php"?>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <script src="../assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>