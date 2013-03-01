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
    <div id="center">
      <div class="Sptext" style="padding-bottom: 52px;">
        <div class="title">
          CREATE SITE PLAN
        </div>
        <?php
          require('../inc/db.inc');
          
          if(!isset($_GET) || !isset($_GET['property_id']) && !isset($_POST['property_id'])) {
            echo "please choose property";
          } else if(isset($_GET) && isset($_GET['property_id']) && !isset($_POST['property_id'])) {
            $property_id = $_GET['property_id'];
            $q = mysql_query("SELECT * FROM siteplan WHERE siteplan_property_id = '$property_id'");
            if(mysql_num_rows($q) == 0) {
        ?>
              <form action="./siteplanupload.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="property_id" value="<?php echo $property_id;?>" />
                <input type="file" name="siteplan_image" /><br/>
                <input type="submit" value="Upload SitePlan" />
              </form>
        <?php
            } else {
              $q = mysql_query("SELECT siteplan_image_ext FROM siteplan WHERE siteplan_property_id = $property_id");
              while($r = mysql_fetch_assoc($q)) {
                $image_ext = $r['siteplan_image_ext'];
        ?>
                <input type="text" name="tenant_num" size="3" id="tenant_number" />
                <input type="text" name="siteplan_areas[]" size="75" id="siteplan_areas" />
                <input type="submit" value="Add Tenant" id="add_map_area" />
                <img src="../images/siteplan/<?php echo $property_id . '.' . $image_ext;?>" width="940" id="siteplan_create" usemap="#map" />
                <map name="map" id="map"></map>
        <?php
              }
            }
          } else if(isset($_POST['property_id']) && isset($_FILES['siteplan_image'])) {
            if($_FILES['siteplan_image']['error'] == 0) {
              $id = $_POST['property_id'];
              
              $filetype = $_FILES['siteplan_image']['type'];
              $type = array('image/gif', 'image/jpeg', 'image/png','image/bmp');
              $ext = array('gif', 'jpg', 'png', 'bmp');
              $comb = array_combine($type, $ext);
              
              $newExt = $comb[$filetype];

              $dir = "../images/siteplan/";
              $upload = move_uploaded_file($_FILES['siteplan_image']['tmp_name'],$dir.'/'.$id.'.'.$newExt);
              if($upload) {
                $q = mysql_query("INSERT INTO siteplan (siteplan_property_id,siteplan_image_ext) VALUES ('$id','$newExt')");
                if(!$q) {
                  echo "error inserting " . mysql_error();
                } else {
                  header("Location: ./siteplanupload.php?property_id=$id");
                }
              } else {
                echo "issue uploading";
              }
            } else {
              echo "file couldn't upload";
            }
            echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><pre>";
            print_r($_POST);
            print_r($_FILES);
            echo "</pre>";
          }
        ?>
        <br/>
        <br/>
        <br/>
        <br/>
      </div>
    </div>
  </div>
<div id="footer"><div class="wrapper"><img src="../images/Properties_footer.gif" width="960" height="27" style="background-repeat:no-repeat;" />
    <?php include("../footer.php"); ?></div>
</div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script type="text/javascript" src="../maphilight.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      if($("#siteplan_create")) {

        $('#siteplan_create').click(function(e) {
          var offset = $(this).offset();
      $("#siteplan_create").maphilight();
          var xArea = Math.floor(e.pageX - offset.left);
          var yArea = Math.floor(e.pageY - offset.top);
          
          if($("#siteplan_areas").val().length == 0) {
            $("#siteplan_areas").val(xArea + "," + yArea);
          } else {
            var curVal = $("#siteplan_areas").val();
            $("#siteplan_areas").val(curVal + "," + xArea + "," + yArea);
          }
        }); 
      }
      
      $("#add_map_area").on('click',function() {
        var tenant_number = $("#tenant_number").val();
        var areas = $("#siteplan_areas").val();
        
        var newArea = '<area href="#" shape="poly" coords="' + areas + '" alt="' + tenant_number + '" title="' + tenant_number + '">';
        $("#map").append(newArea);
        
        $("#tenant_number,#siteplan_areas").val('');
//        alert(areas);
      })
      $("#siteplan_create").maphilight();
    })
  </script>
</body>
</html>