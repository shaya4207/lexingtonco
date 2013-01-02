<?php
  require('../inc/db.inc');
?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <form action="add_property_.php" method="post" enctype="multipart/form-data">
      <input type="text" name="name" /><br />
      <input type="text" name="address" /><br />
      <input type="text" name="city" /><br />
      <select name="state">
        <option selected disabled value=""></option>
        <?php
          $q = mysql_query("SELECT id,name FROM us_states");
          while($r = mysql_fetch_assoc($q)) {
        ?>
            <option value="<?php echo $r['id'];?>"><?php echo $r['name'];?></option>
        <?php
          }
        ?>
      </select><br />
      <input type="text" name="zip" /><br />
      <input type="text" name="lease_contact[]" /><br />
      <input type="text" name="lease_contact[]" /><br />
      <input type="text" name="lease_contact[]" /><br />
      <select name="prop_type">
        <option selected disabled value=""></option>
        <?php
          $q = mysql_query("SELECT id,name FROM prop_types");
          while($r = mysql_fetch_assoc($q)) {
        ?>
            <option value="<?php echo $r['id'];?>"><?php echo $r['name'];?></option>
        <?php
          }
        ?>
      </select><br />
      <input type="text" name="built" /><br />
      <input type="text" name="renovated" /><br />
      <input type="text" name="total_sq_ft" /><br />
      <input type="text" name="avail_space" /><br />
      <textarea name="description"></textarea><br />
      <input type="text" name="website" /><br />
      <input type="file" name="image" /><br />
      <input type="submit" />
    </form>
  </body>
</html>