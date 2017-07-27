<?php
     require_once('../assets/PHP-MySQLi-Database-Class-master/MysqliDb.php');
    require_once('connect.php');
    require_once('../assets/grafika-master/src/autoloader.php');
    use Grafika\Grafika; // Import package

    // Create editor
    $editor = Grafika::createEditor();


    $detail = $_POST['description'];
    $detail2 = $_POST['description2'];
    $detail3 = $_POST['description3'];

 

                $date = new DateTime();
                $result = $date->format('Y-m-d H:i:s');

                $data = Array (
               "detail" => $detail,
               "detail2" => $detail2,
               "detail3" => $detail3,
               "modified_by" => 1,
               "modified_date" => $result
                );
               


            $db->where ('id', 1);
            if ($db->update ('about', $data))
                echo $db->count . ' records were updated';
            else
                echo 'update failed: ' . $db->getLastError();
       
?>