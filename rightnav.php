<?php
  if(isset($_GET['s'])) {
    $s = $_GET['s'];
  } else if(isset($_GET['prop'])) {
    $id = $_GET['prop'];
    $q = mysql_query("SELECT property_state FROM properties WHERE property_id = $id");
    while($r = mysql_fetch_assoc($q)){
      $s = $r['property_state'];
    }
  }
?>

<div id="Rnav">
<ul>
  <?php
    $q1 = mysql_query("SELECT s.states_id,s.states_name FROM properties p LEFT JOIN us_states s ON s.states_id = p.property_state ORDER BY s.states_name ASC");
    while($r1 = mysql_fetch_assoc($q1)) {
  ?>
      <li <?php if($r1['states_id'] == $s) { echo "class='lion'";} ?>><a href=""><?php echo ucfirst($r1['states_name']);?></a></li>
  <?php
    }
    /*
<?php if($state=='Albama'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Alabama</a></li>
<?php if($state=='Connecticut'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Connecticut</a></li>
<?php if($state=='Georgia'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Georgia</a></li>
<?php if($state=='Indiana'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Indiana</a></li>
<?php if($state=='Iowa'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Iowa</a></li>
<?php if($state=='Michigan'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Michigan</a></li>
<?php if($state=='Minnesota'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Minnesota</a></li>
<?php if($state=='Mississippi'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Mississippi</a></li>
<?php if($state=='Missouri'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Missouri</a></li>
<?php if($state=='New Jersey'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">New Jersey</a></li>
<?php if($state=='New York'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">New York</a></li>
<?php if($state=='North Carolina'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">North Carolina</a></li>
<?php if($state=='Ohio'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Ohio</a></li>
<?php if($state=='Pennsylvania'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Pennsylvania</a></li>
<?php if($state=='South Dakota'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">South Dakota</a></li>
<?php if($state=='Tennessee'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Tennessee</a></li>
<?php if($state=='Wisconsin'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Wisconsin</a></li>
<?php if($state=='Virginia'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="">Virginia</a></li>
     * 
     */
  ?>
</ul>
</div>
