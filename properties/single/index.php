<?php
  require('../../inc/db.inc');
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
<title>COUNTRY CLUB ALABAMA LEXINGTON INTERNATIONAL</title>
<?php $page = 'lease'; ?>
<?php $state= 'Albama'; ?>
<link href="../../reset.css" rel="stylesheet" type="text/css" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../lexington.js"></script>
</head>

<body>
<div class="sitewrap">
  <div id="top"><img src="../../images/facebook.gif" style="float:right;" width="17" height="16" alt="facebook" /><img src="../../images/twitter.gif" style="float:right" width="17" height="16" alt="twitter" /></div>
  <div id="nav">
    <?php include("../../navigation.php"); ?>
  </div>
  <div id="center">
    <div class="text" style="font-size:11px; padding-bottom:45px;">
      <?php
        $q = mysql_query("SELECT p.*,s.* FROM properties p LEFT JOIN us_states s ON s.states_id = p.property_state WHERE p.property_id = $prop");
        while($r = mysql_fetch_assoc($q)) {
      ?>
          <div class="title">
            PROPERTIES FOR LEASE IN <?php echo strtoupper($r['s_name']);?>
          </div>
          <span class="blue">
            <?php echo $r['property_name'];?>
          </span>
          <img src="../../prop_images/<?php echo $r['property_id'] . $r['property_image_ext'];?>" width="558" height="302" /><br/>
          <br/>
          <div class="textleft" style="margin-bottom:52px;">
            <span class="smallblue">
              <?php echo $r['property_name'];?>
            </span>
            <br/>
            <span class="13" style="font-size:13px;"><?php echo $r['property_address'];?>,<br/><?php echo $r['property_city'];?>, <?php echo $r['property_s_abbr'] . " " . $r['property_zip'];?></span><br/>
            <br/>
            <span class="tinyblue">Anchor Stores</span><br/>
            <?php
              $q3 = mysql_query("SELECT tenants_name FROM tenants WHERE tenants_property_id = $prop AND tenants_anchor = 1 ORDER BY tenants_name ASC");
              while ($r3 = mysql_fetch_assoc($q3)) {
                echo $r3["tenants_name"] . "<br />";
              }
            ?>
            <br/>
            <span class="tinyblue">Property Type</span><br/>
            <?php echo $r['property_prop_type'];?><br/>
            <br/>
            <span class="tinyblue">Built</span><br/>
            <?php echo $r['property_built'];?><br/>
            <br/>
            <span class="tinyblue">Renovated</span><br/>
            <?php echo $r['property_renovated'];?><br/>
            <br/>
            <span class="tinyblue">Total Square Feet</span><br/>
            <?php echo $r['property_total_sq_ft'];?><br/>
            <br/>
            <span class="tinyblue">Tenants</span><br/>
            <?php
              $q2 = mysql_query("SELECT tenants_name FROM tenants WHERE tenants_property_id = $prop");
              while($r2 = mysql_fetch_assoc($q2)) {
                echo $r2["tenants_name"] . "<br/>";
              }
            ?>
            <br/>
            <span class="tinyblue">Space Available</span><br/>
            <?php echo $r["property_avail_space"];?><br/>
            <br/>
          </div>
          <div class="textmid">
            <?php
              $lease_contact = unserialize($r['property_lease_contact']);
              if(count($lease_contact) == 1) {
            ?>
                <span class="smallblue">Leasing Contact:</span><br/>
            <?php
              } else if(count($lease_contact) > 1) {
            ?>
                <span class="smallblue">Leasing Contacts:</span><br/>
            <?php
              }
              foreach($lease_contact as $v) {
              ?>
                <div style="float:left;margin-right:15px;">
                  <span class="13" style="font-size:13px;"><?php echo $v['name'];?></span><br/><a href="mailto:<?php echo strtolower($v['email']);?>"><?php echo strtolower($v['email']);?></a>
                </div>
              <?php
              }
            ?>
            <div style="clear:both">&nbsp;</div>
            <br/>
            <br/>
            <?php echo nl2br($r['property_description']);?>
          </div>
        <div class="textright"> <span class="smallblue" style="color:#cd2129">DOWNLOADS</span><br/>
          <br/>
          <br/>
          <img src="../../images/Properties_Detail_pdf.gif" width="18" height="17" /><a href="CCmap.pdf"> Area Map</a><br/>
          <br/>
          <img src="../../images/Properties_Detail_pdf.gif" width="18" height="17" /><a href="CCDemo.pdf"> Demographics</a><br/>
          <br/>
          <br/>
          <img src="../../images/bullet_red.gif" width="4" height="5" /><a href="CCdownloads.php"><span style="line-height:15px;"> Click here<br/>
          &nbsp; for additional<br/>
          &nbsp; downloads</span></a><br/>
          <br/>
          <img src="../../images/bullet_red.gif" width="4" height="5" /><a href="./siteplan/?prop=<?php echo $prop;?>" > View Site Plan</a><br/>
          <?php
            if(!empty($r["property_website"])) {
              if(substr(strtolower($r["property_website"]),0,4) != "http") {
                $r["property_website"] = "http://" . $r["property_website"];
              }
          ?>
            <br/>
            <img src="../../images/bullet_red.gif" width="4" height="5" /><a href="<?php echo $r["property_website"];?>" onclick="window.open(this.href); return false;"> Visit Website</a>
          <?php
            }
          ?>
        </div>
      <?php
        }
      ?>
      <img src="../../images/Properties/countryclub/countryclub_2.jpg" width="401" height="229" alt="Country Club" /> </div>
    <div class="rightStates" style="height:930px;">
    <div class="choose">Choose<br/>another<br/>state below:</div><br/>
      <?php include("../../rightnav.php"); ?>
    </div>
    <div class="para2" style="margin-top:15px;">
      <div class="title2">LEASE SPACE</div>
      <br/>
      <img src="../../images/leasing_map.gif" width="106" height="113" />
      <div class="view">View Our<br/>
        Leasing<br/>
        Portfolio<br/>
        <br/>
        <a href="../../properties.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Portfolio_Click','','../../images/Homepage_click_hover.gif',1)"><img src="../../images/Homepage_click.gif" name="Portfolio_Click" width="80" height="20" border="0" id="Portfolio_Click" /></a> </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="wrapper"><img src="../../images/footer_top.gif" width="960" height="27" style="background-repeat:no-repeat;" />
    <?php include("footer.php"); ?>
  </div>
</div>
</body>
</html>