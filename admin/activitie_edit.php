<?php
    include "connect.php";
    session_start();
    if(empty($_SESSION['a_id']))
	{
		header('Location: index.php');
	}
	$id = $_GET['id'];
	$select = mysqli_query($conn,"SELECT * FROM activitie_master where id = '".$id."' ")or die(mysqli_error($conn));
	$f = mysqli_fetch_assoc($select);
?>

<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Admin | Activitie</title>
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
        <link href="../assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
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
                                <a href="project.php">Activitie Index</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Activitie Edit</span>
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
										<i class="fa fa-list"></i>Activitie Edit </div>
									<div class="tools">
										<a href="javascript:;" class="collapse"> </a>
										<a href="#portlet-config" data-toggle="modal" class="config"> </a>
										<a href="javascript:;" class="reload"> </a>
										<a href="javascript:;" class="remove"> </a>
									</div>
								</div>
								<div class="portlet-body form">
									<!-- BEGIN FORM-->
									<form action="activitie_editcode" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="ab_id" value="<?php echo $id; ?>">
										<div class="form-body">
											<!-- <div class="form-group">
												<label class="col-md-3 control-label">Title</label>
												<div class="col-md-6">
													<input type="text" name="title" value="<?php //echo $f['name'];?>" class="form-control input-circle" required>
												</div>
											</div> -->
											<div class="form-group">
												<label class="col-md-3 control-label">Heading</label>
												<div class="col-md-6">
													<input type="text" name="heading" value="<?php echo $f['heading'];?>" class="form-control input-circle" required>
												</div>
											</div>
											<?php /*<div class="form-group">
												<label class="col-md-3 control-label">Category</label>
												<div class="col-md-6">
													<select class="form-control input-circle" name="category" required>
														<option value="">Select</option>
														<?php 
															$menu = mysqli_query($conn,"select * from menu_master where is_active = 0 ");
															$no = 1;
															while($menu_fetch = mysqli_fetch_assoc($menu)){
                                                                if($menu_fetch['id'] != 1 && $menu_fetch['id'] != 2){
														?>
														<option value="<?php echo $menu_fetch['id']; ?>" <?php if($menu_fetch['id'] == $f['category']){ echo 'selected'; } ?>> <?php echo $menu_fetch['name']; ?></option>
														<?php }  } ?>
													</select>
												</div>
											</div> */ ?>
											
											
											
											<!-- <div class="form-group">
												<label class="col-md-3 control-label">date</label>
												<div class="col-md-6">
													<input type="date" name="date" value="<?php echo $f['date'];?>" class="form-control input-circle" >
												</div>
											</div> -->
											
											<!-- <div class="form-group">
												<label class="col-md-3 control-label">Fabrics</label>
												<div class="col-md-6">
													<input type="text" name="fabrics" value="<?php echo $f['fabrics'];?>" class="form-control input-circle" >
                                                    <small>note : every fabric separate by comma (,) like : abc,xyz,pqrs</small>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">Size</label>
												<div class="col-md-6">
													<input type="text" name="size" value="<?php echo $f['size'];?>" class="form-control input-circle" >
												</div>
											</div> -->
											
											 <!-- <div class="form-group">
												
												<label class="col-md-3 control-label">Sort-Description</label>
												<div class="col-md-6">
												<textarea type="text" name="text" class="form-control input-circle ckeditor" cols="30" rows="3" required><?php echo $f['description']; ?></textarea>
												</div>
											</div> -->
                                                                    
                                            <div class="form-group">
												<label class="col-md-3 control-label">Project Information *</label>
												<div class="col-md-6">
												<textarea type="text" name="location" class="form-control input-circle ckeditor" cols="30" rows="4" required><?php echo $f['location']; ?></textarea>
												</div>
											</div> 

											<div class="form-group">
												<label class="col-md-3 control-label">Select Image</label>
												<div class="col-md-6">
													<input type="file" class="from-control input-circle" name="file"><br>
													<caption>Image Size : 950 *  500 px</caption><br><br>
													<input type="hidden" name="image"  value ="<?php echo $f['fichimg']; ?>" class="from-control input-circle">
													
													<img src="../images/<?php echo $f['fichimg']; ?>" width="300px" />
												</div>
											</div>
                                            
                                                
                                            
                                            <!-- <div class="form-group">
                                                <label class="col-md-3 control-label">icon</label>
                                                <div class="col-md-6">
                                                    <input type="file" class="from-control input-circle" name="icon" accept="image/*" ><br>
                                                 <input type="hidden" name="icon_old"  value ="<?php echo $f['url']; ?>" class="from-control input-circle">                                                    
                                                    <img src="../images/<?php echo $f['url']; ?>" width="100px" />
                                                    <caption>Image Size : 280 *  350 px</caption><br><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Right side image</label>
                                                <div class="col-md-6">
                                                    <input type="file" class="from-control input-circle" name="file2" accept="image/*" ><br>
                                                 <input type="hidden" name="file2_old"  value ="<?php echo $f['fabrics']; ?>" class="from-control input-circle">                                                    
                                                    <img src="../images/<?php echo $f['fabrics']; ?>" width="300px" />
                                                    <caption>Image Size : 280 *  350 px</caption><br><br>
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group">
												<label class="col-md-3 control-label">PDF</label>
												<div class="col-md-6">
													<input type="file" name="pdf" value="" accept=".pdf" class="form-control input-circle" onchange="validateFileSize(this)" >
												</div>
                                                <input type="hidden" name="pdf_old"  value ="<?php echo $f['fabrics']; ?>" class="from-control input-circle"><br>
													<caption>PDF size 5MB limit</caption><br><br>
											</div>

                                            <div class="form-group">
												<label class="col-md-3 control-label">Docx</label>
												<div class="col-md-6">
													<input type="file" name="docx" value="" accept=".doc,.docx" class="form-control input-circle"  onchange="validateFileSize(this)">
												</div>
                                                <input type="hidden" name="docx_old"  value ="<?php echo $f['size']; ?>" class="from-control input-circle"> <br>
													<caption>Docx size 5MB limit</caption><br><br>
											</div> -->

										</div>
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<input type="submit" name="submit" value="Submit" class="btn btn-circle green">
													<a href="activitie.php" class="btn btn-circle grey-salsa btn-outline">Cancel</a>
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
        <script src="../assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="node_modules/bootpopup/bootpopup.min.js"></script>
		 <script src="../assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
         <script>
            function validateFileSize(input) {
                if (input.files && input.files[0]) {
                    if (input.files[0].size > 5000000) { // 1048576 bytes = 1 MB
                        alert("The selected file size is too large. Please select a file less than 5MB.");
                        input.value = ''; // Clear the file input field.
                    }
                }
            }
            </script>
    </body>
</html>