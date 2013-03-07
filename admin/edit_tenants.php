<?php
  require('../inc/db.inc');
?>
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
          EDIT A PROPERTY
        </div>
        <?php
          if(!isset($_GET['property_id'])) {
        ?>
            <form action="edit_tenants.php" method="get">
              <select name="property_id">
                <option selected="selected" disabled="disabled"></option>
                <?php
                  $q = mysql_query("SELECT `property_id`,`property_name` FROM properties ORDER BY `property_name`");
                  while($r = mysql_fetch_assoc($q)) {
                    $id = $r["property_id"];
                    $name = $r["property_name"];
                    echo "<option value='$id'>$name</option>";
                  }
                ?>
              </select>
              <input type="submit" class="adminSubmit" value="Choose Property" style="float:none;"/>
            </form>
        <?php
          } else {
            echo "hid";
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