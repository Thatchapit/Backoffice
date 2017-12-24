<?php
       require_once('assets/PHP-MySQLi-Database-Class-master/MysqliDb.php');
        require_once('ajax/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Backoffice - สินค้าและโปรโมชั่น</title>
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
    <!-- Sweetalert Css -->
    <link href="assets/sweetalert/sweetalert.css" rel="stylesheet" />
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
             <li class="nav-item"> <a class="nav-link" href="hightlight.php"> <i class="fa fa-star"></i> <span class="title">Hightlight</span> </a></li>
             <li class="nav-item active"> <a class="nav-link" href="product.php"> <i class="fa fa-shopping-basket "></i> <span class="title">สินค้าและโปรโมชั่น</span> </a></li>
             <li class="nav-item"> <a class="nav-link" href="store.php"> <i class="fa fa-cubes"></i> <span class="title">ร้านค้า</span> </a></li>
             <li class="nav-item"> <a class="nav-link" href="news.php"> <i class="fa fa-file-text"></i> <span class="title">ข่าวสาร/ประชาสัมพันธ์</span> </a></li>
             <li class="nav-item "> <a class="nav-link" href="activity.php"> <i class="fa fa-calendar"></i> <span class="title">กิจกรรม</span> </a></li>
             <li class="nav-item "> <a class="nav-link" href="join.php"> <i class="fa fa-handshake-o"></i> <span class="title">ร่วมเป็นส่วนหนึ่งกับเรา</span> </a></li>
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
          <h2>สินค้าและโปรโมชั่น </h2>
          <ol class="breadcrumb">
            <li> <a href="index.html">Home</a> </li>
            <li  class="active">  <strong><a>สินค้าและโปรโมชั่น</a> </strong> </li>
           
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
                   <div class="align-right">
                             <a href="productsetting.php"><button type="button" class="btn btn-primary waves-effect">
                              สร้างหัวข้อใหม่
                             </button></a>
                            </div>
                            <br/>
                  <div >
                    <table id="example" class="table  responsive nowrap table-bordered" cellspacing="0" width="100%">
                      <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ภาพประกอบ</th>
                                            <th>เพิ่มภาพ</th>
                                            <th>หัวข้อ</th>
                                            <th>ประเภท</th>
                                            <th>สร้างเมื่อ</th>
                                            <th>เครื่องมือ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ภาพประกอบ</th>
                                            <th>เพิ่มภาพ</th>
                                            <th>หัวข้อ</th>
                                            <th>ประเภท</th>
                                            <th>สร้างเมื่อ</th>
                                            <th>เครื่องมือ</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php

                                        $db->where('is_del',0);
                                            $db->orderBy("create_date","DESC");
                                            
                                            $results = $db->get('product_promotion');
                                            for ($i=0; $i < count($results) ; $i++) { 
                                          
                                          
                                        ?>
                                
                                        <tr>
                                            <td><?php echo  $i+1 ?></td>
                                            <td><img src="images/product/desktop/<?php echo $results[$i]['desktop_img'] ?>" alt="" height="150"></td>
                                            <td><!-- Add Image icon by Icons8 -->
<a href="productsetting_img.php?id=<?php echo  $results[$i]['id'] ?>"><img class="icon icons8-Add-Image" width="40" height="40" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAA70lEQVRoQ+1Z0RXDIAiMa3SejJKxOkrn6RrNj36UvrxDMYL28osRjgMETdvkX5rc/o0AvBlMj9fz422ERT8BWLzX49/1GHjvR+jKJHP2h4FlAESrTsWxagaWAeAdUsWRzQz8LQAZgq2OcGOAAPIxTQassVv6Hes+w6sQc4A5kCe1q9jt3WogPd1zgADEOEYGZL2WJ2Dt/MoyyjIKyigKKYYQQ4gh9H1pPF07jZJcK3ebyLQGonVmAEjBKHlzNzrKQKSnGgDa0Euuvhv1MhDphQDQBtHk673QRPMwsmd+BhDC6PLQD3oa5xGAxkt3rjkB728B9x3Qi0sAAAAASUVORK5CYII="></a></td>
                                            <td><?php echo $results[$i]['title'] ?></td>
                                            <td><?php echo $results[$i]['type'] != 0 ? "โปรโมชั่น" : "สินค้า"  ?></td>
                                            <td><?php echo $results[$i]['create_date'] ?></td>
                                            <td><a href="productsetting.php?id=<?php echo  $results[$i]['id'] ?>"><button type="button" class="btn btn-warning waves-effect"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;แก้ไข</button></a>&nbsp;&nbsp;<button type="button" data-type="cancel" data-id="<?php echo  $results[$i]['id'] ?>" class=" del_btn btn btn-danger waves-effect"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;ลบ</button></td>
                                            
                                        </tr>
                                  
                                            <?php } ?>
                                    </tbody>
                    </table>
                  </div>
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
<!-- pace js -->
<script src="assets/js/vendor/pace/pace.min.js"></script>
<!-- Sparkline -->
<script src="assets/js/vendor/jquery.sparkline.min.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

   <script src="assets/sweetalert/sweetalert.min.js"></script>
<script>
      
        $(document).ready(function() {
            // Flexible table

            $('#example').DataTable();

      $('button').on('click', function () {
        var type = $(this).data('type');
      var id = $(this).data('id');
         if (type === 'cancel') {
            showConfirmMessage(id);
        }
    });

          function showConfirmMessage(id) {
    swal({
        title: "คุณแน่ใจที่จะลบ?",
        text: "คุณต้องการที่จะลบหัวข้อนี้ใช่ไหม",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
                        var url = "ajax/ajax_product.php"; // the script where you handle the form input.
                        
                $.ajax({
                    url: url ,
                    data: { 'mode' : 'del','id' : id},
                    type: 'POST',
                    success: function (data) {
                           // console.log(data);
                            location.reload();
  
                    }
                });
    });
}
          
        });
    </script>
</body>
</html>
