<?php
  require('../inc/db.inc');
?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <form action="add_property_.php" method="post" enctype="multipart/form-data">
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td align="left">Name</td><td align="left"><input type="text" name="name" /></td>
        </tr>
        <tr>
          <td align="left">Address</td><td align="left"><input type="text" name="address" /></td>
        </tr>
        <tr>
          <td align="left">City</td><td align="left"><input type="text" name="city" /></td>
        </tr>
        <tr>
          <td align="left">State</td><td align="left"><select name="state">
        <option selected disabled value=""></option>
        <?php
          $q = mysql_query("SELECT id,name FROM us_states");
          while($r = mysql_fetch_assoc($q)) {
        ?>
            <option value="<?php echo $r['id'];?>"><?php echo $r['name'];?></option>
        <?php
          }
        ?>
      </select></td>
        </tr>
        <tr>
          <td align="left">Zip</td><td align="left"><input type="text" name="zip" /></td>
        </tr>
        <tr>
          <td align="left">Lease Contact</td><td align="left"><input type="text" name="lease_contact[]" /></td>
        </tr>
        <tr>
          <td align="left">Lease Contact</td><td align="left"><input type="text" name="lease_contact[]" /></td>
        </tr>
        <tr>
          <td align="left">Lease Contact</td><td align="left"><input type="text" name="lease_contact[]" /></td>
        </tr>
        <tr>
          <td align="left">Property Type</td><td align="left"><select name="prop_type">
        <option selected disabled value=""></option>
        <?php
          $q = mysql_query("SELECT id,name FROM prop_types");
          while($r = mysql_fetch_assoc($q)) {
        ?>
            <option value="<?php echo $r['id'];?>"><?php echo $r['name'];?></option>
        <?php
          }
        ?>
      </select></td>
        </tr>
        <tr>
          <td align="left">Year Built</td><td align="left"><input type="text" name="built" /></td>
        </tr>
        <tr>
          <td align="left">Year Renovated</td><td align="left"><input type="text" name="renovated" /></td>
        </tr>
        <tr>
          <td align="left">Total Sq. Ft</td><td align="left"><input type="text" name="total_sq_ft" /></td>
        </tr>
        <tr>
          <td align="left">Available space</td><td align="left"><input type="text" name="avail_space" /></td>
        </tr>
        <tr>
          <td align="left">Description</td><td align="left"><textarea name="description"></textarea></td>
        </tr>
        <tr>
          <td align="left">Website</td><td align="left"><input type="text" name="website" /></td>
        </tr>
        <tr>
          <td align="left">Image</td><td align="left"><input type="file" name="image" /></td>
        </tr>
        <tr>
          <td align="right" colspan="2"><input type="submit" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>