<?php 

    include('connect.php');
    session_start();
    $level = $_GET['level'] ?? '';
    $id = $_GET['id'] ?? '';
    if(empty($_SESSION['a_id']))
	{
		header('Location: index.php');
	}
	$id = $_GET['id'];
	$select = mysqli_query($conn,"SELECT * FROM menu_master where id = '".$id."'")or die(mysqli_error($conn));
	$f = mysqli_fetch_assoc($select);
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
        <title>Admin | Category</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
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
            <?php include "sidebar.php"; ?>
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
                                <a href="menu.php">Our Category</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Our Category Edit</span>
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
                    <h3 class="page-title"> 
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                   <div class="row">
						<div class="col-md-12">
							<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-list"></i>Category edit </div>
										<div class="tools">
											<a href="javascript:;" class="collapse"> </a>
											<a href="#portlet-config" data-toggle="modal" class="config"> </a>
											<a href="javascript:;" class="reload"> </a>
											<a href="javascript:;" class="remove"> </a>
										</div>
									</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="our_services_editcode" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                 <input type="hidden" name="parent_id" value="<?= $f['parent_id']?>">
                                                 <input type="hidden" name="level" value="<?php echo $level ?>">
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-3 control-label">Name</label>
														<div class="col-md-6">
															<input type="hidden" name="ser_id" value="<?php echo $f['id'];?>" class="form-control input-circle" required>
															<input type="text" name="name" value="<?php echo $f['name'];?>" class="form-control input-circle" required>
														</div>
													</div>
                                                <?php /* if(!empty($f['level']) && $f['level'] == '2'){ ?>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Select</label>
                                                        <div class="col-md-6">
                                                            <select  name="text" class="form-control input-circle" required>
                                                                <option value="1" <?=  ($f['text'] == 1)? 'selected' : '' ?>>Detail</option>
                                                                <option value="2" <?=  ($f['text'] == 2)? 'selected' : '' ?>>Key Founder</option>
                                                                <option value="3" <?=  ($f['text'] == 3)? 'selected' : '' ?>>List with PDF</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php } */ ?>
                                                
                                                    <!-- <div class="form-group">
                                                        <label class="col-md-3 control-label">Image*</label>
                                                        <div class="col-md-6">
                                                            <input type="file" name="file"  class="form-control input-circle" >
                                                            <input type="hidden" name="image" value="<?= $f['img']?>">
                                                            <img src="../images/<?= $f['img']?>" width="100" >
                                                        </div>
                                                    </div>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Tag</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="video"  value="<?= $f['video']?>" class="form-control input-circle" required>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <?php if(!empty($f['level']) && $f['level'] == '21a2'){ ?>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Video*</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="video"  value="<?= $f['video']?>" placeholder="src=https://" class="form-control input-circle" >
                                                                <small>&lt;ifrem  src="https://www.youtube.com/embed/..." &gt; copy src in url and pest here.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                       
                                                        <label class="col-md-3 control-label">Sort-Description</label>
                                                        <div class="col-md-6">
                                                        <textarea type="text" name="text" class="form-control input-circle ckeditor" cols="30" rows="3" required><?= $f['text']?></textarea>
                                                        </div>
                                                    </div>
                                                <?php } ?>
												</div>
                                                <div class="form-actions">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<input type="submit" name="submit" value="Submit" class="btn btn-circle green">
															<a href="menu.php?id=<?= $f['parent_id']?>&level=<?= $f['level'] ?>" class="btn btn-circle grey-salsa btn-outline">Cancel</a>
														</div>
													</div>
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
       <?php include "footer.php"; ?>
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
		 <script src="../assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function() {
                $('#parent_id').on('change', function() {
                    var parent_id = this.value;
                        
                    $.ajax({
                        url: "menu_ajax",
                        type: "POST",
                        datatype: "json",
                        data: {
                            parent_id: parent_id
                        },
                        cache: false,
                        success: function(result){
                            $("#sub_parent_id").html(result); 
                        }
                    });                    
                }); 
            }); 
        </script>
    </body>

</html>