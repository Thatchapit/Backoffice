
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backoffice - Prdouct Category Manage</title>
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
            <div class="page-logo"> <a href="index.php" style="padding-top: 7px;"> <img src="images/logo.png" style="height:25px;margin-right: 5px;"> LOYALTY GROUP </a>                </div>
            <!-- END LOGO -->
            <div class="library-menu"> <span class="one">-</span> <span class="two">-</span> <span class="three">-</span> </div>
            <div class="top-nev-mobile-togal"><i class="glyphicon glyphicon-cog"></i></div>
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <!--  TOP NAVIGATION MENU -->
                <div class="hor-menu  hor-menu-light hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <!-- DOC: Remove data-hover="megamenu-dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
                        <li class="classic-menu-dropdown active"> <a href="index.php"><i class="icon-user fa-fw"></i></a> </li>
                    </ul>

                </div>
                <!--  TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right">


                    <!-- START USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user"> <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">  <span class="username username-hide-on-mobile"></span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-default">


                            <li> <a href="logout.php"> <i class="icon-key"></i> Log Out </a> </li>
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
     
                  <li class="nav-item "> <a class="nav-link" href="index.php"> <i class="fa fa-home"></i> <span class="title">Home</span> </a></li>
                  <li class="nav-item"> <a class="nav-link nav-toggle" href="data_dictionary.php"> <i class="fa fa-list-alt"></i> <span class="title">Data Dictionary</span></a>
                 </li>
                  <li class="nav-item active"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-cubes"></i> <span class="title">Prdouct</span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="nav-item active"> <a class="nav-link" href="product_category_view.php"> <span class="title">Prdouct Category</span> </a> </li>
                    <li class="nav-item "> <a class="nav-link" href="product_item_view.php"> <span class="title">Prdouct Items</span> </a> </li>
                 </ul>
                </li>
     
                <li class="nav-item"> <a class="nav-link nav-toggle" href="popup.php"> <i class="fa fa-window-maximize"></i> <span class="title">Popup</span> </a>
               
                 </li>
     
                 <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-file-text-o"></i> <span class="title">Jobs</span><span class="arrow"></span></a>
                 <ul class="sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="jobs_view.php"> <span class="title">Job</span> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="job_user.php"> <span class="title">Resume</span> </a> </li>
                 </ul>
                 </li>
     
     
                 <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-gear"></i> <span class="title">Setting</span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="home_page.php"> <span class="title">Home Page</span> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="ourstory.php"> <span class="title">Ourstory Page</span> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="contact.php"> <span class="title">Contact Page</span> </a> </li>
  <li class="nav-item"> <a class="nav-link" href="meta.php"> <span class="title">Meta & Title</span> </a> </li>
                 </ul>
                </li>
     
     
     
           </ul>
            </div>
        </div>
        <!-- End page sidebar wrapper -->
        <!-- Start page content wrapper -->
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Prdouct Category Manage</h2>
                        <ol class="breadcrumb">
                            <li> <a href="index.php">Home</a> </li>
                            <li> <a href="product_category_view.php">Prdouct Category</a> </li>
                            <li class="active"> <a> Prdouct Category Manage</a> </li>

                        </ol>
                    </div>
                    <div class="col-lg-12"> </div>
                </div>
                <div class="wrapper-content ">
                    <div class="row">

                                        <div class="col-lg-6">
                                        <div class="ibox float-e-margins">
                                            <div class="widgets-container">
                                                <h5>Thai Language</h5>
                                                <hr>
                                                <form id="form_validation" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="mode" value="add">
                                                    <div class="form-group">
                                                        <label for="Title TH">Title</label>
                                                        <input class="form-control m-t-xxs" name="title_th" placeholder="ระบุ Title" type="text">
                                                    </div>
                                     
                                                    <div class="form-group">
                                                        <label for="Description">Short Description</label>
                                                        <textarea class="form-control" name="short_description_th" cols="30" rows="10" placeholder="ระบุ Short Description" ></textarea>
                                                        </td>
                                                       
                                                    </div>
            
                                            
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="col-lg-6">
                                        <div class="ibox float-e-margins">
                                            <div class="widgets-container">
                                                <h5>Eng Language</h5>
                                                <hr>
                                                <div class="form-group">
                                                <label for="Title EN">Title</label>
                                                <input class="form-control m-t-xxs" name="title_en" placeholder="Enter Title" type="text">
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="Description">Short Description</label>
                                                <textarea class="form-control" name="short_description_en" cols="30" rows="10" placeholder="Enter Short Description" ></textarea>
                                             
                                                       
                                            </div>

                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
            
                                            <div class="ibox-content collapse in">
                                                <div class="widgets-container">
                                                    <!-- Basic Validation -->
                                                    <div class="row clearfix">
            
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="card">
                                                            
                                                                <div class="col-12">
                                            
            
                                                                       <label class="col-md-3 control-label">Image Brand</label>
                                                                    <div class="col-md-3">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> <img data-src="holder.js/300x300" alt="..."></div>
                                                                            <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
                                                                                <span class="fileinput-exists">Change</span>
                                                                                <input type="file" name="image_meta-file" id="image_meta" required>
                                                                                </span> <a href="#" class="btn btn-default fileinput-exists"
                                                                                    data-dismiss="fileinput">Remove</a> </div>
                                                                        </div>
                                                                    </div>
            
                                                                    
            
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                </div>

                                    <div class="col-md-12 " style="margin-top:15px;">
                                                        <button type="submit" class="btn aqua m-t-xs bottom15-xs">Submit</button>
                                                        <button type="clear " class="btn btn-warning m-t-xs bottom15-xs">Clear</button>
                                                    </div>
                                                    </form>
                                                    </div>
                                                    </div>
                                </div>
                            </div>

                        </div>
                                       <!-- start footer -->
                <div class="footer">

                    <div> POWER by LOYALTY GROUP</div>
                </div>
                    </div>
                    
                </div>



 
            </div>
        </div>
    </div>
 
    <!-- Go top -->
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
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
<script type="text/javascript" src="assets/js/vendor/bootstrap-wysiwyg.js" charset="UTF-8"></script>
<script type="text/javascript" src="assets/js/vendor/jquery.hotkeys.js" charset="UTF-8"></script>
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
   <script type="text/javascript" src="assets/selectize.js-master/dist/js/standalone/selectize.js"></script>
   <script type="text/javascript" src="assets/js/holder.min.js"></script>
<!-- pace js -->
<script src="assets/js/vendor/pace/pace.min.js"></script>
<!-- Sparkline -->
<script src="assets/js/vendor/jquery.sparkline.min.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script>
      
        $(document).ready(function() {
           var image_banner = false;
            var image_icon = false;
            var image_meta = false;
            var image_thumbnail = false;
            var editor_description;
            var editor_description_text;

            $(".editor").click(function(){
                editor_description = $(this);
                $("#editor").html(editor_description.html());
            });
          

          $(".addDescription").click(function(){
            var content = $("#editor").html();
           editor_description.html(content);

          });

          $("#image_thumbnail").change(function () {

                var file = this.files[0];
                if (typeof file === "undefined") {
                    //$('button[type="submit"]').prop('disabled', false);
                    image_thumbnail = false;
                    checkImage();
                } else {
                    displayPreview(file, 450, 450, 250,"image_thumbnail");
                }
            });

      


            $("#image_banner").change(function () {

                var file = this.files[0];
                if (typeof file === "undefined") {
                    //$('button[type="submit"]').prop('disabled', false);
                    image_banner = false;
                    checkImage();
                } else {
                    displayPreview(file, 1280, 450, 450,"image_banner");
                }
            });

      


            $("#image_icon").change(function () {

                var file = this.files[0];
                if (typeof file === "undefined") {
                    //$('button[type="submit"]').prop('disabled', false);
                    image_icon = false;
                    checkImage();
                } else {
                    displayPreview(file, 120, 120, 250,"image_icon");
                }
            });

           $("#image_meta").change(function () {

                var file = this.files[0];
                if (typeof file === "undefined") {
                    //$('button[type="submit"]').prop('disabled', false);
                    image_meta = false;
                    checkImage();
                } else {
                    displayPreview(file, 1200, 628, 250,"image_meta");
                }
            });


          
            var _URL = window.URL || window.webkitURL;

            function displayPreview(files, limit_width, limit_height, limit_size,type) {
       
                var img = new Image(),
                    fileSize = Math.round(files.size / 1024);


                img.onload = function () {
                    var width = this.width,
                        height = this.height,
                        imgsrc = this.src;

                   
                      if (fileSize > limit_size || width != limit_width || height != limit_height) 
                      {
                            alert("Image size doesn't match");
                            switch (type) {
                                case "image_banner":
                                image_banner = true;
                                break;
                                 case "image_icon":
                                 image_icon = true;
                                break;
                                 case "image_meta":
                                 image_meta = true;
                                break;
                                case "image_thumbnail":
                                image_thumbnail = true;
                                break;
                                
                                default: 
                                image_banner = false;
                                image_icon = false;
                                image_meta = false;
                                image_thumbnail = false;
                                break;
                            }

                            checkImage();
  
                       } else {
                            switch (type) {
                                case "image_banner":
                                image_banner = false;
                                break;
                                 case "image_icon":
                                 image_icon = false;
                                break;
                                 case "image_meta":
                                 image_meta = false;
                                break;
                                case "image_thumbnail":
                                image_thumbnail = false;
                                break;
                                 
                            
                                default: 
                                image_banner = false;
                                image_icon = false;
                                image_meta = false;
                                image_thumbnail = false;
                                break;
                            }

                            checkImage();
                        
                       }
                        

                };
                img.src = _URL.createObjectURL(files);
               
            }

            


            function checkImage(){
          
                if(image_banner || image_icon || image_meta || image_thumbnail){
                    $('button[type="submit"]').prop('disabled', true);
                }else{
                    $('button[type="submit"]').prop('disabled', false);
                }
            }
            
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
                   formData.append('description_th', $('.description_th_editor').html());
                  formData.append('description_en', $('.description_en_editor').html());
                var url = "ajax/ajax_product_category.php"; // the script where you handle the form input.

                $.ajax({
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function (data) {
                        if (mode == "edit") {
                          //  console.log(data);
                         // window.location.href = "store.php";
                         location.reload();
                        } else {

                           // console.log(data);
                         //  window.location.href = "store.php";
                         location.reload();
                        }
                    }
                });


            });
   
        });
    </script>
    <script>

            $('#select-state').selectize({
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    }
});

				</script>
</body>

</html>