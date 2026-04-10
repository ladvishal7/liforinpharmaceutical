<?php
  session_start ();
 
    if(empty($_SESSION['a_id']))
	{
		header('Location: index.php');
	}
  include 'connect.php';
  /*if(!empty($_GET['id'])){
	  $prid = $_SESSION['prid'] = $_GET['id'];
  }else{
	  $prid = $_SESSION['prid'];
  }*/
  $select = mysqli_query($conn,"select * from project_img where  is_deleted = 0");
?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Admin | Video</title>
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
                                <a href="#">Video Index</a>
                                <!--<i class="fa fa-circle"></i>-->
                            </li>
                            <li>
                                <span></span>
                            </li>
                        </ul>
						<?php
								if(!empty($_SESSION['msg1'])){
								?>
						   <div id="myModal" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content" style="margin: 0 auto;">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" style="text-align:center;"><?php echo $_SESSION["msg1"];?></h4>
									</div>
									<div class="modal-body" style="text-align:center;">
										<img src="images/success.png" alt="success" style="width:30px;height:30px;">
										<b style="color:green">Your Data Is Successfully</b>
									</div>
								</div>
							</div>
						</div>
						<?php 
							unset($_SESSION["msg1"]); 
							?>
									<?php }?>
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
                    <h3 class="page-title"> Video Index
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                   <div class="row">
						<div class="col-md-12">
						<div class="text-right" style="padding:5px;">
							<!-- <a href="project.php" class="btn primary">Back </a> -->
							<a href="project_add_img.php" class="btn green">Add </a>
						</div>
							<div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-image"></i>Video List </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <!--<a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table text-center table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
													<th> Video </th>
                                                    <th> Edit </th>
                                                    <th> Delete </th>
													<th> Status </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php 
												$n = 1;
												while($row = mysqli_fetch_assoc($select)){
											?>
                                                <tr>
                                                    <td> <?php echo $n ?> </td>
												    <td> <iframe width="150" src="<?php echo $row['img']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" ></iframe></td>
                                                 	<td><a href="project_edit_img.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" style="font-size:30px;color:green;" aria-hidden="true"></i></a></td>
                                                    <td><a href="project_dlt_img.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are You Sure ?');"><i class="fa fa-trash-o" style="font-size:30px;color:red;" aria-hidden="true"></i></a></td>
													<td><a class="" href="project_index1_img.php?id1=<?php echo $row["id"];?>&status=<?php echo $row['is_active'] ?>" ><?php if($row["is_active"] == 0){ echo "<img src='images/eye.png' style='width:25px;'>"; }else if($row["is_active"]==1){ echo "<img src='images/deactive.png' style='width:25px;'>"; } ?></a></td>
                                                   
                                                </tr>
                                               <?php 
											      $n++;
												}
											?>
                                            </tbody>
                                        </table>
                                    </div>
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
        <!-- END THEME LAYOUT SCRIPTS -->
		<script type="text/javascript">
			$(document).ready(function(){
				$("#myModal").modal('show');
			});
		</script>
    </body>
</html>