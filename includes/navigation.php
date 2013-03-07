<ul>
  <?php if($page=='home'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="http://<?php echo $file?>/index.php" style="margin-right:4px;">HOME</a></li>
  <?php if($page=='about'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="http://<?php echo $file?>/about.php">ABOUT US</a> </li>
  <?php if($page=='lease'){?><li class="lion"><?php } else { ?><li><?php } ?> <a href="http://<?php echo $file?>/properties.php">PROPERTIES FOR LEASE</a> </li>
  <?php if($page=='contact'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="http://<?php echo $file?>/contact.php">CONTACT US</a></li>
</ul>
