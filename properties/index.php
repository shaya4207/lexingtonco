<?php
  require('../inc/db.inc');
  if(isset($_GET['s'])) {
    $s = $_GET['s'];
  } else {
    $s = 0;
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROPERTIES OF LEXINGTON INTERNATIONAL</title>
<?php $page = 'lease'; ?>
<?php $state= 'Albama'; ?>
<link href="../reset.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../lexington.js"></script>
</head>

<body>
<div class="sitewrap">
  <div id="top"><img src="../images/facebook.gif" style="float:right;" width="17" height="16" alt="facebook" /><img src="../images/twitter.gif" style="float:right" width="17" height="16" alt="twitter" /></div>
  <div id="nav">
    <?php include("../navigation.php"); ?>
  </div>
  <div id="center">
    <div class="text" style="min-height:850px;">
      <?php
        $i = 0;
        $q = mysql_query("SELECT p.*,s.*,t.* FROM properties p LEFT JOIN us_states s ON s.states_id = p.property_state LEFT JOIN prop_types t ON t.prop_id = p.property_prop_type WHERE s.states_id = $s");
        while($r = mysql_fetch_assoc($q)) {
          if($i == 0) {
      ?>
            <div class="title">
              PROPERTIES FOR LEASE IN <?php echo strtoupper($r['states_name']);?>
            </div>
      <?php
          }
      ?>
          <div class="Prlist" style="margin-top:140px;">
            <?php
              if($r['property_image'] == 1) {
            ?>
                <div class="img" style="margin-top:50px;">
                  <img src="../prop_images/<?php echo $r['property_id'] . $r['property_image_ext'];?>" width="120" height="97" alt="<?php echo $r['property_name'];?>" />
                </div>
            <?php
              }
            ?>
            <span class="blue" style="color:#f1b8bca;">
              <a href="./single/?prop=<?php echo $r['property_id'];?>"><?php echo $r['property_name'];?></a>
            </span><br/>
            <?php echo $r['property_address'] . ", " . $r['property_city'] . ", " . $r['states_abbr'];?><br/>
            <br/>
            Anchor Stores: <?php // echo $r['tenants_name'];?><br/>
            Property Type: <?php echo $r['prop_name'];?><br/>
            <br/>
            <br/>
            <?php
              $lease_contact = unserialize($r['property_lease_contact']);
              if(count($lease_contact) == 1) {
            ?>
                <span class="bold" style="font-size:11px;">Leasing Contact:</span><br/>
            <?php
              } else if(count($lease_contact) > 1) {
            ?>
                <span class="bold" style="font-size:11px;">Leasing Contacts:</span><br/>
            <?php
              }
              foreach($lease_contact as $v) {
            ?>
                <span style="font-size:11px"><?php echo $v['name'];?>, <a href="mailto:<?php echo strtolower($v['email']);?>"><?php echo strtolower($v['email']);?></a></span><br/>
            <?php
              }
            ?>
          </div>
      <?php
          $i++;
        }
      ?>
      
      
      
      
      
      
      
        

        
      <img src="../images/Properties_byState_divider.gif" style="padding-left:-52px;" width="608" height="57" />
      </div>
    <div class="rightStates">
	<div class="choose">Choose<br/>another<br/>state below:</div><br/>
	<?php include("../rightnav.php"); ?>
    </div>
    <div class="para2" style="margin-top:15px;">
      <div class="title2">LEASE SPACE</div>
      <br/>
      <img src="../images/leasing_map.gif" width="106" height="113" />
      <div class="view">View Our<br/>
        Leasing<br/>
        Portfolio<br/>
        <br/>
        <a href="../properties.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Portfolio_Click','','../images/Homepage_click_hover.gif',1)"><img src="../images/Homepage_click.gif" name="Portfolio_Click" width="80" height="20" border="0" id="Portfolio_Click" /></a> </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="wrapper"><img src="../images/footer_top.gif" width="960" height="27" style="background-repeat:no-repeat;" />
    <?php include("footer.php"); ?>
  </div>
</div>
</body>
</html>