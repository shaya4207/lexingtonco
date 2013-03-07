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
      <div class="title" style="float:none;"><?php echo strtoupper($r1["property_name"]);?> SITE PLAN</div>
      <?php
        }
      ?>
      
        <?php
          $q4 = mysql_query("SELECT siteplan_image_ext,siteplan_areas FROM siteplan WHERE siteplan_property_id = $prop");
          while($r4 = mysql_fetch_assoc($q4)) {
            $image_ext = $r4['siteplan_image_ext'];
            $areas = unserialize($r4['siteplan_areas']);
        ?>
              <img src="../../../images/siteplan/<?php echo $prop . "." . $image_ext;?>" alt="Site Plan" usemap="#map" id="siteplan" />
              <map id="map" name="map">
        <?php
                foreach($areas as $v) {
                  $tenant_number = $v['tenant_number'];
                  $q5 = mysql_query("SELECT tenants_vacant FROM tenants WHERE tenants_number = '$tenant_number' AND tenants_property_id = $prop");
                  while($r5 = mysql_fetch_assoc($q5)) {
                    $tenants_vacant = $r5['tenants_vacant'];
                    if(!empty($tenants_vacant) && !is_null($tenants_vacant)) {
                      $vacant = "data-maphilight='{\"fillColor\":\"2a7ad3\",\"fillOpacity\":\"0.7\"}'";
                    } else {
                      $vacant = "";
                    }
                    echo '<area href="#" shape="poly" coords="' . $v['tenant_areas'] . '" ' . $vacant . 'alt="' . $tenant_number .'" title="' . $tenant_number .'">';
                  }
                }
        ?>
              </map>
        <?php
          }
        ?>
      <div class="Tchart">
      	<div class="topbar">
          <div class="row1">NO</div>
          <div class="row2">TENANT</div>
          <div class="row3">SQUARE FT</div>
        </div>
        <div class="whitebar"></div>
        <div class="tenants_cont">
        <?php
          $q = mysql_query("SELECT tenants_number,tenants_name,tenants_sq_feet FROM tenants WHERE tenants_property_id = $prop");
          while($r = mysql_fetch_assoc($q)) {
        ?>
          <div id="tenant_<?php echo $r['tenants_number'];?>">
            <span class="row1"><?php echo $r["tenants_number"];?></span>
            <span class="row2"><?php if(!empty($r['tenants_name'])){echo $r["tenants_name"];} else { echo "&nbsp;";}?></span>
            <span class="row3"><?php echo $r["tenants_sq_feet"];?></span>
          </div>
        <?php
          }
        ?>
        </div>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script type="text/javascript" src="../../../maphilight.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#siteplan").maphilight();
      areas_click();
      $(".tenants_cont div:nth-child(2n+1)").addClass("bluebar");
      $(".tenants_cont div:nth-child(2n+0)").addClass("whitebar");
    });
    
    function areas_click() {
      $("area").on('click',function() {
        $(".tenants_cont").children("div").removeClass("bluebar");
        $(".tenants_cont").children("div").removeClass("whitebar");
//        $(".tenants_cont div:nth-child(2n+0)").removeClass("whitebar");
        var id = $(this).attr("title");
        var tenant = $("#tenant_" + id);
        $(".tenants_cont").prepend(tenant);
        $(".tenants_cont div:nth-child(2n+1)").addClass("bluebar");
        $(".tenants_cont div:nth-child(2n+0)").addClass("whitebar");
        return false;
      })
    }
  </script>
</body>
</html>