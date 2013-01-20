<?php
  require('../../../inc/db.inc');
  if(isset($_GET['prop'])) {
    $prop = $_GET['prop'];
  } else {
    $prop = 0;
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROPERTIES OF LEXINGTON INTERNATIONAL</title>
<?php $page = 'lease'; ?>
<link href="../../../reset.css" rel="stylesheet" type="text/css" />
<link href="../../../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../lexington.js"></script>
</head>

<body>
<div class="sitewrap">
  <div id="top"><img src="../../../images/facebook.gif" style="float:right;" width="17" height="16" alt="facebook" /><img src="../../../images/twitter.gif" style="float:right" width="17" height="16" alt="twitter" /></div>
  <div id="nav">
    <?php include("../../../navigation.php"); ?>
  </div>
  <div id="center">
    <div class="Sptext" style="padding-bottom:52px;">
      <?php
        $q1 = mysql_query("SELECT property_name FROM properties WHERE property_id = $prop");
        while($r1 = mysql_fetch_assoc($q1)) {
      ?>
      <div class="title"><?php echo strtoupper($r1["property_name"]);?> SITE PLAN</div>
      <?php
        }
      ?>
      <img src="../../../images/Properties/countryclub/CC_SitePlan.jpg" width="940" height="574" alt="CC Site Plan" />
      <div class="Tchart">
      	<div class="topbar">
          <div class="row1">NO</div>
          <div class="row2">TENANT</div>
          <div class="row3">SQUARE FT</div>
        </div>
        <div class="whitebar"></div>
        <?php
          $q = mysql_query("SELECT tenants_number,tenants_name,tenants_sq_feet FROM tenants WHERE tenants_property_id = $prop");
          $i=1;
          while($r = mysql_fetch_assoc($q)) {
            if($i%2) {
          ?>
              <div class="whitebar">
          <?php
            } else {
          ?>
              <div class="bluebar">
          <?php
            }
        ?>
            <div class="row1"><?php echo $r["tenants_number"];?></div>
            <div class="row2"><?php echo $r["tenants_name"];?></div>
            <div class="row3"><?php echo $r["tenants_sq_feet"];?></div>
          </div>
        <?php
          $i++;
          }
        ?>        
        <br/><br/>
      <a href="../?prop=<?php echo $prop;?>"><img src="../../../images/goback.gif" width="23" height="23" /></a> go back to this property's detail page</div>
      <div class="legend">
      <div class="line"><div class="future"></div>FUTURE<br/>EXPANSION</div><br/><br/>
      <div class="vacant"></div>VACANT<br/><br/>
      <div class="occupied"></div>OCCUPIED<br/>
      </div>
      </div>
      </div>
      </div> 
      </div>
  </div>
</div>
<div id="footer"><div class="wrapper"><img src="../../../images/Properties_footer.gif" style="background-repeat:no-repeat;" />
    <?php include("footer.php"); ?></div>
</div>
</body>
</html>