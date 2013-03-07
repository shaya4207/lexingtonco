<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lexington Realty International</title>
<link href="../reset.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../lexington.js"></script>
</head>
<body onload="MM_preloadImages('../images/Homepage_click_hover.gif')">
<div class="sitewrap">
  <div id="top"><img src="../images/facebook.gif" style="float:right;" width="17" height="16" alt="facebook" /><img src="../images/twitter.gif" style="float:right" width="17" height="16" alt="twitter" /></div>
  <div id="nav">
    <?php include("../navigation.php"); ?>
  </div>
  <div id="home">
    <div id="center2">
      <div class="Prtext">
        <div class="title">
          LEXINGTON REALTY ADMIN BACKEND
        </div>
        
        <?php
          require('../inc/db.inc');
          
          $id = $_POST['property_id'];
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

          $q = mysql_query("UPDATE properties SET property_name = '$property_name', property_address = '$property_address', property_city = '$property_city', property_state = '$property_state', property_zip = '$property_zip', property_lease_contact = '$property_lease_contact', property_prop_type = '$property_prop_type', property_built = '$property_built', property_renovated = '$property_renovated', property_total_sq_ft = '$property_total_sq_ft', property_avail_space = '$property_avail_space', property_description = '$property_description', property_website = '$property_website' WHERE property_id = '$id';");

          if($q) {
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
                  if(!$sql) {
                    echo "<span class='blue'>Update Error: " . mysql_error() . "(Property Image)</span>";
                  }
                }else{
                  echo "<span class='blue'>Upload Error: " . mysql_error() . "(Property Image)</span>";
                  exit;
                }
              }
            }
            if(isset($_FILES['property_area_map']) && !empty($_FILES['property_area_map'])) {
              if($_FILES['property_area_map']['error'] == "0") {
                
                $dir = "../prop_downloads/";
                $name = $_FILES['property_area_map']['name'];
                $upload = move_uploaded_file($_FILES['property_area_map']['tmp_name'],$dir.'/' . $id . "_area_" . $name);
                if($upload){
                  $sql = mysql_query("UPDATE properties SET property_area_map = 'area_$name' WHERE property_id = $id");
                  if(!$sql) {
                    echo "<span class='blue'>Update Error: " . mysql_error() . "(Property Area Map)</span>";
                  }
                }else{
                  echo "<span class='blue'>Upload Error: " . mysql_error() . "(Property Area Map)</span>";
                  exit;
                }
              }
            }
            if(isset($_FILES['property_demog']) && !empty($_FILES['property_demog'])) {
              if($_FILES['property_demog']['error'] == "0") {

                $dir = "../prop_downloads/";
                $name2 = $_FILES['property_demog']['name'];
                $upload = move_uploaded_file($_FILES['property_demog']['tmp_name'],$dir.'/' . $id . "_demog_" . $name2);
                if($upload){
                  $sql = mysql_query("UPDATE properties SET property_demog = 'demog_$name2' WHERE property_id = $id");
                  if(!$sql) {
                    echo "<span class='blue'>Update Error: " . mysql_error() . "(Property Demographics)</span>";
                  }
                }else{
                  echo "<span class='blue'>Upload Error: " . mysql_error() . "(Property Demographics)</span>";
                  exit;
                }
              }
          }
        ?>
          <span class="blue">Property for <?php echo $property_name;?> successfully updated!</span><br/>
          <span style="display:block;font-size:1.8em;font-weight:bold;text-align:center;margin-bottom:8px">What would you like to do now?</span><br/>
          <a class="adminLinks" href="./add_property.php">Add Another Property</a>
          <a class="adminLinks" href="./add_tenants.php?prop=<?php echo $id;?>">Add Tenants For This Property</a>
          <a class="adminLinks" href="./siteplanupload.php?property_id=<?php echo $id;?>">Create a Site Map for This Property?</a>
        <?php
        } else {
          echo "<span class='blue'>Insert Error: " . mysql_error() . "</span><br/>";
        }
        ?>
      </div>
    </div>
  </div>
  </div>
<div id="footer"><div class="wrapper"><img src="../images/Properties_footer.gif" width="960" height="27" style="background-repeat:no-repeat;" />
    <?php include("../footer.php"); ?></div>
</div>
</body>
</html>