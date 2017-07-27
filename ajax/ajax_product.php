<?php
     require_once('../assets/PHP-MySQLi-Database-Class-master/MysqliDb.php');
    require_once('connect.php');
    require_once('../assets/grafika-master/src/autoloader.php');
    use Grafika\Grafika; // Import package

    // Create editor
    $editor = Grafika::createEditor();
 
       $mode = $_POST['mode'];
           if(isset($_POST['id'])){
        $id = $_POST['id'];
        }
    


       if($mode == "del"){
   
    $data = Array ("is_del" => 1);


     $db->where ('id', $id);
            if ($db->update ('product_promotion', $data))
                echo $db->count . ' records were updated';
            else
                echo 'update failed: ' . $db->getLastError();
       }else{
    $title = $_POST['name'];
    $detail = $_POST['description'];
    $status = 0;
    $type = $_POST['type'];
    if(isset( $_POST['old_other'])){
    $oldImage = $_POST['old_other'];
    }else{
        $oldImage = array();
    }
 

 
    $TARGET_PATH_DESKTOP = "../images/product/desktop/";
    $TARGET_PATH_MOBILE = "../images/product/mobile/";

    $imagename = "";
    $image_mobile_name = "";
    $image_other_name = array();


    if(isset($_POST['checkbox'])){
     $status = 1;
    }
  
        for ($i=0; $i < count($_FILES['image_other']['name']); $i++) { 
     $TARGET_PATH_OTHER = "../images/product/other/";



             if($_FILES['image_other']['name'][$i] != "" ){
            $image_other = $_FILES['image_other'];
      $TARGET_PATH_OTHER .= $image_other['name'][$i];
        if (move_uploaded_file($image_other['tmp_name'][$i], $TARGET_PATH_OTHER))
        {
          $image_other_name[$i] = $image_other['name'][$i];
        }

        }else{
        

             if($mode == "add"){
                $image_other_name[$i] = "";
             }else{
                 if(count($oldImage) != 0){
                        
                     if(isset($oldImage[$i])){
                            $image_other_name[$i] = $oldImage[$i];
                     }else{
                           $image_other_name[$i] = "";
                     }
                
                 }else{
                       $image_other_name[$i] = "";
                 }
             }
        }
            
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
                $editor->save( $image1, "../images/product/mobile/m_".$imagename);
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
               "create_by" => 1,
               "imageOther1" => $image_other_name[0] ,
               "imageOther2" => $image_other_name[1],
               "imageOther3" => $image_other_name[2]
    );



    if($mode == "add"){
   

   $id = $db->insert ('product_promotion', $data);
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
               "modified_date" => $result,
               "imageOther1" => $image_other_name[0] ,
               "imageOther2" => $image_other_name[1],
               "imageOther3" => $image_other_name[2]
    );

               

            $db->where ('id', $id);
            if ($db->update ('product_promotion', $data))
                echo $db->count . ' records were updated';
            else
                echo 'update failed: ' . $db->getLastError();
        }
    }
       }
?>