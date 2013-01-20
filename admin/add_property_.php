<?php
//echo "<pre>";
//print_r($_POST);
//exit;
  require('../inc/db.inc');
  
  $property_name = $_POST['property_name'];
  $property_address = $_POST['property_address'];
  $property_city = $_POST['property_city'];
  $property_zip = $_POST['property_zip'];
  $property_state = $_POST['property_state'];
  $property_lease_contact = serialize($_POST['property_lease_contact']);
  $property_prop_type = $_POST['property_prop_type'];
  $property_built = $_POST['property_built'];
  $property_renovated = $_POST['property_renovated'];
  $property_total_sq_ft = $_POST['property_total_sq_ft'];
  $property_avail_space = $_POST['property_avail_space'];
  $property_description = $_POST['property_description'];
  $property_website = $_POST['property_website'];
  
  $q = mysql_query("INSERT INTO properties(property_name,property_address,property_city,property_state,property_zip,property_lease_contact,property_prop_type,property_built,property_renovated,property_total_sq_ft,property_avail_space,property_description,property_website)VALUES('$property_name','$property_address','$property_city','$property_state','$property_zip','$property_lease_contact','$property_prop_type','$property_built','$property_renovated','$property_total_sq_ft','$property_avail_space','$property_description','$property_website')");

  if($q) {
    $id = mysql_insert_id();
    if(isset($_FILES['property_image']) && !empty($_FILES['property_image'])) {
      if($_FILES['property_image']['error'] == "0") {
        $filetype = $_FILES['property_image']['type'];
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
        $upload = move_uploaded_file($_FILES['property_image']['tmp_name'],$dir.'/'.$id.'.'.$comb[$filetype]);
        if($upload){
          $sql = mysql_query("UPDATE properties SET property_image = 1, property_image_ext = '.$comb[$filetype]' WHERE property_id = $id");
          
          echo "All was successful!!";
        }else{
          echo "Upload Error: " . mysql_error();
        }
      }
    }
  } else {
    echo "Insert Error: " . mysql_error();
  }

  
  