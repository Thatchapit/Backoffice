<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Backoffice - ข่าวสาร/ประชาสัมพันธ์</title>
<!-- dataTables -->
<link href="assets/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assets/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="assets/css/fixedHeader.dataTables.min.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css">
<!-- slimscroll -->
<link href="assets/css/jquery.slimscroll.css" rel="stylesheet">
<!-- Fontes -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/simple-line-icons.css" rel="stylesheet">
<link href="assets/css/buttons.css" rel="stylesheet">
<!-- animate css -->
<link href="assets/css/animate.css" rel="stylesheet">
<!-- top nev css -->
<link href="assets/css/page-header.css" rel="stylesheet">
<!-- adminui main css -->
<link href="assets/css/main.css" rel="stylesheet">
<!-- Light theme css -->
<link href="assets/css/light.css" rel="stylesheet">
<!-- media css for responsive  -->
<link href="assets/css/main.media.css" rel="stylesheet">
 <link href="assets/light-gallery/css/lightgallery.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="page-header-fixed ">
<div class="page-header navbar navbar-fixed-top">
  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner ">
    <!-- BEGIN LOGO -->
    <div class="page-logo"> <a href="index.html"> <img class="logo-default" alt="logo" src="assets/images/logo.png"> </a> </div>
    <!-- END LOGO -->
    <div class="library-menu"> <span class="one">-</span> <span class="two">-</span> <span class="three">-</span> </div><div class="top-nev-mobile-togal"><i class="glyphicon glyphicon-cog"></i></div>
    <!-- BEGIN TOP NAVIGATION MENU -->
 <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
<!--  TOP NAVIGATION MENU -->
                <div class="hor-menu  hor-menu-light hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <!-- DOC: Remove data-hover="megamenu-dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
                        <li class="classic-menu-dropdown active"> <a href="index.html"><i class="icon-user fa-fw"></i></a> </li>
                    </ul>
                
                </div>
                <!--  TOP NAVIGATION MENU -->
      <ul class="nav navbar-nav pull-right">
      
       
        <!-- START USER LOGIN DROPDOWN -->
<li class="dropdown dropdown-user"> <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown"  class="dropdown-toggle" href="javascript:;">  <span class="username username-hide-on-mobile"> Susan Wenscombe</span> <i class="fa fa-angle-down"></i> </a>
          <ul class="dropdown-menu dropdown-menu-default">
       
          
            <li> <a href="login.html"> <i class="icon-key"></i> Log Out </a> </li>
          </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END HEADER INNER -->
</div>
<div class="clearfix"> </div>
<div class="page-container">
  <!-- Start page sidebar wrapper -->
  <div class="page-sidebar-wrapper">
    <div class="page-sidebar">
      <ul class="page-sidebar-menu  page-header-fixed ">
       
        <li class="active">

             <li class="nav-item"> <a class="nav-link" href="index.php"> <i class="fa fa-home"></i> <span class="title">Home</span> </a></li>
             <li class="nav-item "> <a class="nav-link" href="about.php"> <i class="fa fa-id-card-o"></i> <span class="title">เกี่ยวกับเรา</span> </a></li>
             <li class="nav-item active"> <a class="nav-link" href="hightlight.php"> <i class="fa fa-star"></i> <span class="title">Hightlight</span> </a></li>
             <li class="nav-item"> <a class="nav-link" href="product.php"> <i class="fa fa-shopping-basket "></i> <span class="title">สินค้าและโปรโมชั่น</span> </a></li>
             <li class="nav-item"> <a class="nav-link" href="store.php"> <i class="fa fa-cubes"></i> <span class="title">ร้านค้า</span> </a></li>
             <li class="nav-item"> <a class="nav-link" href="news.php"> <i class="fa fa-file-text"></i> <span class="title">ข่าวสาร/ประชาสัมพันธ์</span> </a></li>
             <li class="nav-item "> <a class="nav-link" href="activity.php"> <i class="fa fa-calendar"></i> <span class="title">กิจกรรม</span> </a></li>
             <li class="nav-item"> <a class="nav-link" href="join.php"> <i class="fa fa-handshake-o"></i> <span class="title">ร่วมเป็นส่วนหนึ่งกับเรา</span> </a></li>
             <li class="nav-item"> <a class="nav-link" href="contact.php"> <i class="fa fa-phone"></i> <span class="title">ติดต่อเรา</span> </a></li>      

      </ul>
    </div>
  </div>
  <!-- End page sidebar wrapper -->
  <!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2>Hightlight</h2>
          <ol class="breadcrumb">
             <li> <a href="index.html">Home</a> </li>
            <li> <a>Hightlight</a> </li>
            <li class="active"> <strong><?php echo isset($_GET['id'])? "แก้ไข" : "เพิ่ม"  ?>Hightlight</strong> </li>
          </ol>
        </div>
        <div class="col-lg-12"> </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              
              <div class="ibox-content collapse in">
                <div class="widgets-container">
              
                  <?php
    if(isset($_GET['id'])){
          require_once('assets/PHP-MySQLi-Database-Class-master/MysqliDb.php');
          require_once('ajax/connect.php');
          $db->where ("id", $_GET['id']);
          $data = $db->getOne ("hightlight");
        ?>
                <!-- Basic Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                           
                            <div class="body">
                                <form id="form_validation" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="mode" value="edit">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                    <label class="form-label">หัวข้อ</label>
                                    <div class="form-group form-float">
                                        
                                            <input type="text" class="form-control" name="name" value="<?php echo $data['title']; ?>" required>
                                          
                                    </div>


                                    <label class="form-label">รายละเอียด</label>
                                    <div class="form-group form-float">
                                     
                                            <textarea name="description" cols="30" rows="5" class="form-control no-resize" required><?php echo $data['detail']; ?></textarea>
                                          
                                      
                                    </div>



                                    <div class="row clearfix" id="aniimated-thumbnials">
                                        <div class="col-sm-3">
                                            <label class="form-label">ภาพปัจจุบัน Desktop</label><br/>
                                            <a href="images/hightlight/desktop/<?php echo $data['desktop_img']; ?>" class="thumbnailImage" data-sub-html="">
                                        <img  width="150" class="img-responsive thumbnail" src="images/hightlight/desktop/<?php echo $data['desktop_img']; ?>">
                                        <input type="hidden" name="old_desktop" value="<?php echo $data['desktop_img']; ?>">
                                    </a>
                                        </div>

                                        <div class="col-sm-3">
                                           <label class="form-label">ภาพปัจจุบัน Mobile</label><br/>
                                            <a href="images/hightlight/mobile/<?php echo $data['mobile_img']; ?>" class="thumbnailImage" data-sub-html="">
                                        <img  width="150" class="img-responsive thumbnail" src="images/hightlight/mobile/<?php echo $data['mobile_img']; ?>">
                                         <input type="hidden" name="old_mobile" value="<?php echo $data['mobile_img']; ?>">
                                    </a>
                                        </div>
                                        <div class="col-sm-12"></div>

                                         <div class="col-sm-3">
                                           <label class="form-label">ภาพสำหรับ Desktop</label><br/>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                                  <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image_desktop-file" id="image_desktop" >
                                                    </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                                </div>
                                          </div>
                                           <div class="col-sm-3">
                                           <label class="form-label">ภาพสำหรับ Mobile</label><br/>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                                  <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                    <input type="file"  name="image_mobile-file">
                                                    </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                                </div>
                                          </div>

                                  

   <div class="col-sm-12"><br/></div> </div>

                                         
           

                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <label class="form-label">ประเภท</label>
                                                  <div class="form-group">
                                                    <input type="radio" value="0" name="type" checked="checked" id="male" class="with-gap">
                                                    <label for="male">Hightlight</label>

                                                    
                                                </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">สถานะซ่อน/แสดง</label>
                                            <div class="form-group">
                                                <?php if($data['status'] == 1){
                                                $check = 'checked="checked"';
                                            }else{
                                                 $check = '';
                                            } ?>
                                                <input type="checkbox" id="checkbox" name="checkbox" <?php echo $check ?>>
                                                <label for="checkbox">Show Item</label>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
    }else{
?>

     <!-- Basic Validation -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           
                                <div class="body">
                                    <form id="form_validation" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="mode" value="add">
                                        <label class="form-label">หัวข้อ</label>
                                        <div class="form-group form-float">
                                            
                                                <input type="text" class="form-control" name="name" required>
                                              
                                           
                                        </div>


                                        <label class="form-label">รายละเอียด</label>
                                        <div class="form-group form-float">
                                           
                                                <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                               
                                        </div>



                                        <div class="row clearfix">
                                           <div class="col-sm-3">
                                           <label class="form-label">ภาพสำหรับ Desktop</label><br/>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                                  <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image_desktop-file" id="image_desktop" required>
                                                    </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                                </div>
                                          </div>
                                           <div class="col-sm-3">
                                           <label class="form-label">ภาพสำหรับ Mobile</label><br/>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                                  <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                    <input type="file"  name="image_mobile-file">
                                                    </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                                </div>
                                          </div>
                                        
                                        </div>
                                        <br/>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label class="form-label">ประเภท</label>
                                                <div class="form-group">
                                                    <input type="radio" value="0" name="type" checked="checked" id="male" class="with-gap">
                                                    <label for="male">Hightlight</label>

                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">สถานะซ่อน/แสดง</label>
                                                <div class="form-group">
                                                    <input type="checkbox" id="checkbox" name="checkbox" checked="checked">
                                                    <label for="checkbox">Show Item</label>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                  
               
                    <!-- #END# Basic Validation -->
                    <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
       
                        
<!-- start footer -->
<div class="footer">
        <div class="pull-right">
          <ul class="list-inline">
            <li><a title="" href="index.html">Dashboard</a></li>
            <li><a title="" href="mailbox.html"> Inbox </a></li>
            <li><a title="" href="blog.html">Blog</a></li>
            <li><a title="" href="contacts.html">Contacts</a></li>
          </ul>
        </div>
        <div> <strong>Copyright</strong> AdminUI Company &copy; 2017 </div>
      </div>
    </div>
  </div>
</div>
<!-- Go top -->
<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<!-- Go top -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/vendor/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/jasny-bootstrap.min.js" charset="UTF-8"></script>
<!-- slimscroll js -->
<script type="text/javascript" src="assets/js/vendor/jquery.slimscroll.js"></script>
<!-- dataTables-->
<script type="text/javascript" src="assets/js/vendor/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/js/vendor/dataTables.bootstrap.min.js"></script>
<!-- js for print and download -->
<script type="text/javascript" src="assets/js/vendor/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/buttons.flash.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/jszip.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/pdfmake.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/vfs_fonts.js"></script>
<script type="text/javascript" src="assets/js/vendor/buttons.html5.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/buttons.print.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/dataTables.fixedHeader.min.js"></script>
  <script src="assets/light-gallery/js/lightgallery-all.js"></script>
<!-- pace js -->
<script src="assets/js/vendor/pace/pace.min.js"></script>
<!-- Sparkline -->
<script src="assets/js/vendor/jquery.sparkline.min.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script>
      
        $(document).ready(function() {
            // Flexible table

            $('#example').DataTable();

     $('#aniimated-thumbnials').lightGallery({
                thumbnail: true,
                selector: '.thumbnailImage'
            });
 

      var mode = $('input[name="mode"]').val();
    console.log(mode);
            $("#form_validation").submit(function (e) {
                 $('button[type="submit"]').text("Loading...");
                $('button[type="submit"]').prop('disabled', true);
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                var url = "ajax/ajax_hightlight.php"; // the script where you handle the form input.

                $.ajax({
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function (data) {
                        if (mode == "edit") {
                          //  console.log(data);
                         location.reload();
                        } else {

                            //console.log(data);
                           window.location.href = "hightlight.php";
                        }
                    }
                });


            });
   
        });
    </script>
</body>
</html>
