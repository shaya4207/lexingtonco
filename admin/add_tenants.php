<?php
  require('../inc/db.inc');
  if(!isset($_GET['prop']) || empty($_GET['prop'])) {
    echo "No ID";
    exit;
  } else {
    $prop = $_GET['prop'];
  }
?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <form action="add_tenants_.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="tenants_property_id" value="<?php echo $prop?>"/>
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td align="left">Name</td><td align="left"><input type="text" name="tenants_name" /></td>
        </tr>
        <tr>
          <td align="left">Sq Ft</td><td align="left"><input type="text" name="tenants_sq_feet" /></td>
        </tr>
        <tr>
          <td align="left">Number</td><td align="left"><input type="text" name="tenants_number" /></td>
        </tr>
        <tr>
          <td align="left">Vacant</td><td align="left"><input type="checkbox" name="tenants_vacant" /></td>
        </tr>
        <tr>
          <td align="left">Anchor</td><td align="left"><input type="checkbox" name="tenants_anchor" /></td>
        </tr>
        <tr>
          <td align="right" colspan="2"><input type="submit" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>