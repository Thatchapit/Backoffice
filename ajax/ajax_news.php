<?php
     require_once('../assets/PHP-MySQLi-Database-Class-master/MysqliDb.php');
    require_once('connect.php');
    require_once('../assets/grafika-master/src/autoloader.php');
    use Grafika\Grafika; // Import package
date_default_timezone_set("Asia/Bangkok");
    // Create editor
    $editor = Grafika::createEditor();
       $mode = $_POST['mode'];
           if(isset($_POST['id'])){
        $id = $_POST['id'];
        }
    
       if($mode == "del"){

       print_r($_POST);       
    $data = Array ("is_del" => 1);


     $db->where ('id', $id);
            if ($db->update ('news', $data))
                echo $db->count . ' records were updated';
            else
                echo 'update failed: ' . $db->getLastError();
       }else{
    $title = $_POST['name'];
    $detail = $_POST['description'];
    $status = 0;
    $type = $_POST['type'];
 

 
    $TARGET_PATH_DESKTOP = "../images/news/desktop/";
    $TARGET_PATH_MOBILE = "../images/news/mobile/";
    $imagename = "";
    $image_mobile_name = "";


    if(isset($_POST['checkbox'])){
     $status = 1;
    }

 if(isset($_FILES['image_desktop-file']) && $_FILES['image_desktop-file']['name'] != "" ){
      $image_desktop = $_FILES['image_desktop-file'];
      $TARGET_PATH_DESKTOP .= $image_desktop['name'];
        if (move_uploaded_file($image_desktop['tmp_name'], $TARGET_PATH_DESKTOP))
        {
          $imagename = $image_desktop['name'];
        }
    }else{
        $imagename = $_POST['old_desktop'];
    }

    if(isset($_FILES['image_mobile-file'])&& $_FILES['image_mobile-file']['name'] != ""){
         $image_mobile = $_FILES['image_mobile-file'];
         $TARGET_PATH_MOBILE .= $image_mobile['name'];
        if (move_uploaded_file($image_mobile['tmp_name'], $TARGET_PATH_MOBILE))
        {
          $image_mobile_name = $image_mobile['name'];
        }
    }else{
        if($mode == "add"){
            if($imagename != ""){
                $editor->open( $image1, $TARGET_PATH_DESKTOP );
                $editor->resizeExactHeight( $image1, 400 );
                $editor->save( $image1, "../images/news/mobile/m_".$imagename);
                $image_mobile_name = "m_".$imagename;
            }
        }else{
                $image_mobile_name = $_POST['old_mobile'];
        }
    }

 
    $data = Array ("title" => $title,
               "detail" => $detail,
               "desktop_img" => $imagename,
               "mobile_img" => $image_mobile_name,
               "type" => $type,
               "status" => $status,
               "create_by" => 1
    );



    if($mode == "add"){
   

    $id = $db->insert ('news', $data);
        if ($id)
            echo 'user was created. Id=' . $id;
        else
            echo 'insert failed: ' . $db->getLastError();
    }else{
        if(isset($id) && $id != 0){
            $date = new DateTime();
                $result = $date->format('Y-m-d H:i:s');

                $data = Array ("title" => $title,
               "detail" => $detail,
               "desktop_img" => $imagename,
               "mobile_img" => $image_mobile_name,
               "type" => $type,
               "status" => $status,
               "modified_by" => 1,
               "modified_date" => $result
    );


            $db->where ('id', $id);
            if ($db->update ('news', $data))
                echo $db->count . ' records were updated';
            else
                echo 'update failed: ' . $db->getLastError();
        }
    }
       }
?>