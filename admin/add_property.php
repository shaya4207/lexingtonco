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
          ADD A NEW PROPERTY
        </div>
        <form action="add_property_.php" method="post" enctype="multipart/form-data" class="adminForm">
          <table cellpadding="0" cellspacing="0" class="adminTable">
            <tr>
              <td align="left" class="adminLabels">
                <label for="property_name">Name</label>
              </td>
              <td align="left">
                <input class="adminInput" id="property_name" type="text" name="property_name" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_address" class="adminLabels">Address</label>
              </td>
              <td align="left">
                <input class="adminInput" id="property_address" type="text" name="property_address" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_city" class="adminLabels">City</label>
              </td>
              <td align="left">
                <input class="adminInput" id="property_city" type="text" name="property_city" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_state" class="adminLabels">State</label>
              </td>
              <td align="left">
                <select id="property_state" class="adminInput" name="property_state">
                  <option selected disabled value=""></option>
                  <?php
                    $q = mysql_query("SELECT states_id,states_name FROM us_states");
                    while($r = mysql_fetch_assoc($q)) {
                  ?>
                      <option value="<?php echo $r['states_id'];?>"><?php echo $r['states_name'];?></option>
                  <?php
                    }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_zip" class="adminLabels">Zip</label>
              </td>
              <td align="left">
                <input type="text" class="adminInput" id="property_zip" name="property_zip" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_prop_type" class="adminLabels">Property Type</label>
              </td>
              <td align="left">
                <input type="text" class="adminInput" id="property_prop_type" name="property_prop_type"/>
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_built" class="adminLabels">Year Built</label>
              </td>
              <td align="left">
                <input type="text" class="adminInput" id="property_built" name="property_built" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_renovated" class="adminLabels">Year Renovated</label>
              </td>
              <td align="left">
                <input type="text" class="adminInput" id="property_renovated" name="property_renovated" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_total_sq_ft" class="adminLabels">Total Sq. Ft</label>
              </td>
              <td align="left">
                <input type="text" class="adminInput" id="property_total_sq_ft" name="property_total_sq_ft" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_avail_space" class="adminLabels">Available space</label>
              </td>
              <td align="left">
                <input type="text" class="adminInput" id="property_avail_space" name="property_avail_space" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_description" class="adminLabels">Description</label>
              </td>
              <td align="left">
                <textarea class="adminInput" id="property_description" name="property_description"></textarea>
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_website" class="adminLabels">Website</label>
              </td>
              <td align="left">
                <input type="text" class="adminInput" id="property_website" name="property_website" />
              </td>
            </tr>
            <tr>
              <td align="left">
                <label for="property_image" class="adminLabels">Image</label>
              </td>
              <td align="left">
                <input type="file" id="property_image" name="property_image" />
              </td>
            </tr>
            <tr style="background: #d6d6d6">
              <td colspan="2">
                <table cellpadding="0" cellspacing="0" id="contacts_table">
                  <tr class="tr_property_lease_contact_name">
                    <td align="left">
                      <label for="property_lease_contact[][name]" class="adminLabels">Lease Contact</label>
                    </td>
                    <td align="left">
                      <input type="text" class="adminInput" id="property_lease_contact[][name]" name="property_lease_contact[1][name]" />
                    </td>
                  </tr>
                  <tr class="tr_property_lease_contact_email">
                    <td align="left">
                      <label for="property_lease_contact[][email]" class="adminLabels">Lease Contact Email</label>
                    </td>
                    <td align="left">
                      <input type="text" class="adminInput" id="property_lease_contact[][email]" name="property_lease_contact[1][email]" />
                    </td>
                  </tr>
                  <tr class="tr_lease_contact_add">
                    <td colspan="2" align="right">
                      <a href="#" id="lease_contact_add" class="adminSubmitS">Add Another Contact</a>
                    </td>
                  </tr>                 
                </table>
              </td>
            </tr>
            <tr>
              <td align="right" colspan="2"><input type="submit" class="adminSubmit" style="float:none;" /></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
  </div>
<div id="footer"><div class="wrapper"><img src="../images/Properties_footer.gif" width="960" height="27" style="background-repeat:no-repeat;" />
    <?php include("../footer.php"); ?></div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#lease_contact_add").click(function() {
      add_lease_contacts();
      return false;
    });
  });
  function add_lease_contacts() {
    $("#contacts_table").children("tr").eq(0).clone().appendTo("#contacts_table");
    $("#contacts_table").children("tr").eq(1).clone().appendTo("#contacts_table");
//    $("#contacts_table tr:first,#contacts_table tr:second").clone().appendTo("#contacts_table");
//    var tr_name = $(".tr_property_lease_contact_name");
//    var tr_email = $(".tr_property_lease_contact_email");
    
//    $(".tr_lease_contact_add").before(tr_name).before(tr_email);
//    alert(tr_name);
  };
</script>
</body>
</html>