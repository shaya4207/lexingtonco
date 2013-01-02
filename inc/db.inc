<?php
  $link = mysql_connect('localhost', 'root', '') or die('Connect: ' . mysql_error());
  $db = mysql_select_db('lexingtonco', $link) or die('DB: ' . mysql_error());