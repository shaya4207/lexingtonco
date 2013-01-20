<?php
  require('../inc/db.inc');
  
  $tenants_property_id = mysql_real_escape_string($_POST['tenants_property_id']);
  $tenants_name = mysql_real_escape_string($_POST['tenants_name']);
  $tenants_sq_feet = mysql_real_escape_string($_POST['tenants_sq_feet']);
  $tenants_number = mysql_real_escape_string($_POST['tenants_number']);
  if(isset($_POST['tenants_vacant']) && !empty($_POST['tenants_vacant'])) {
    $tenants_vacant = 1;
  } else {
    $tenants_vacant = 0;
  }
  if(isset($_POST['tenants_anchor']) && !empty($_POST['tenants_anchor'])) {
    $tenants_anchor = 1;
  } else {
    $tenants_anchor = 0;
  }
  
  $q = mysql_query("INSERT INTO `tenants`(`tenants_number`,`tenants_name`,`tenants_sq_feet`,`tenants_property_id`,`tenants_vacant`,`tenants_anchor`) VALUES ('$tenants_number','$tenants_name','$tenants_sq_feet','$tenants_property_id','$tenants_vacant','$tenants_anchor');");
  if(!$q) {
    die("INSERT: " . mysql_error());
  }