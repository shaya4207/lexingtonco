<?php
//echo "<pre>";
//print_r($_POST);
//exit;
  require('../inc/db.inc');
  
  $name = $_POST['name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $state = $_POST['state'];
  $lease_contact = serialize($_POST['lease_contact']);
  $prop_type = $_POST['prop_type'];
  $built = $_POST['built'];
  $renovated = $_POST['renovated'];
  $total_sq_ft = $_POST['total_sq_ft'];
  $avail_space = $_POST['avail_space'];
  $description = $_POST['description'];
  $website = $_POST['website'];
  
  $q = mysql_query("INSERT INTO properties(name,address,city,state,zip,lease_contact,prop_type,built,renovated,total_sq_ft,avail_space,description,website)VALUES('$name','$address','$city','$state','$zip','$lease_contact','$prop_type','$built','$renovated','$total_sq_ft','$avail_space','$description','$website')");

  if($q) {
    $id = mysql_insert_id();
    if(isset($_FILES['image']) && !empty($_FILES['image'])) {
      if($_FILES['image']['error'] == "0") {
        $filetype = $_FILES['image']['type'];
        $type = array('image/gif', 'image/jpeg', 'image/png',
          'application/x-shockwave-flash', 'image/psd', 'image/bmp',
          'image/tiff', 'image/tiff', 'application/octet-stream',
          'image/jp2', 'application/octet-stream', 'application/octet-stream',
          'application/x-shockwave-flash', 'image/iff', 'image/vnd.wap.wbmp', 'image/xbm');

        $ext = array('gif', 'jpg', 'png', 'swf', 'psd', 'bmp',
          'tiff', 'tiff', 'jpc', 'jp2', 'jpf', 'jb2', 'swc',
          'aiff', 'wbmp', 'xbm');

        $comb = array_combine($type, $ext);
        
        
        
        $dir = "../prop_images/";
        $upload = move_uploaded_file($_FILES['image']['tmp_name'],$dir.'/'.$id.'.'.$comb[$filetype]);
        if($upload){
          $sql = mysql_query("UPDATE properties SET image = 1, image_ext = '.$comb[$filetype]' WHERE id = $id");
          
          echo "All was successful!!";
        }else{
          echo "Upload Error: " . mysql_error();
        }
      }
    }
  } else {
    echo "Insert Error: " . mysql_error();
  }

  
  