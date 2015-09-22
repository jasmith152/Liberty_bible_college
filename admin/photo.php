<?php
$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");
?>
<?php
// Establish GET & POST variables
import_request_variables("gp");
$PHP_SELF = $_SERVER['PHP_SELF'];

if ($submititem=="yes"){

  // Grab uploaded images
  $photo_name = 'image';
  for ($j=1; $j<=20; $j++) {
  	if (!empty($_FILES['imgfile'.$j]['name'])) {
      $uploaddir = '/home/newconceptshairsalon/public_html/photo/';
      $uploadfile{$j} = $uploaddir.$photo_name."_$j.jpg";
	  $img_name{$j} = $photo_name."_$j.jpg";
      if (move_uploaded_file($_FILES['imgfile'.$j]['tmp_name'], $uploadfile{$j})) {
          //print "File is valid, and was successfully uploaded. ";
          //print "Here's some more debugging info:\n";
          //print_r($_FILES);
          shell_exec('chmod a+r ../uploads/'.$img_name1);
		  header('Location:'.$PHP_SELF.'?msg=file uploaded successfully');
      } else {
          print "Possible file upload attack!  Here's some debugging info:\n";
          print_r($_FILES);
          exit;
      }
  	}
  }
  
}else{
	
	echo "<html>\n<head>\n";
	$title = "Add Photo";
	echo "	<title>$title</title>\n";
	echo "  <link href='styles.css' rel='stylesheet' media='screen'>\n";
	echo "</head>\n<body>\n";
	echo "<h1>$title</h1>\n";
	if (!empty($msg)) {
		echo "<p class='msg'>$msg</p>\n";
	}
	echo "<div class='column_header'><a href='index.php'>Back to Main Menu</a></div>\n";
	echo "<form action='$PHP_SELF' enctype='multipart/form-data' method='post' name='additem'>\n";
	echo "<div align='center'><table width='75%' border='0' cellpadding='2' cellspacing='2'>\n";
	echo " <tr>\n";
	echo "  <td><span class='instructions'>Please use.jpg images only. Images width should be approx. 425 pixels.</span><br /><br /><div class='column_header'>Photo 1: <input type='file' size='20' name='imgfile1' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 2: <input type='file' size='20' name='imgfile2' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 3: <input type='file' size='20' name='imgfile3' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 4: <input type='file' size='20' name='imgfile4' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 5: <input type='file' size='20' name='imgfile5' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 6: <input type='file' size='20' name='imgfile6' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 7: <input type='file' size='20' name='imgfile7' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 8: <input type='file' size='20' name='imgfile8' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 9: <input type='file' size='20' name='imgfile9' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 10: <input type='file' size='20' name='imgfile10' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 11: <input type='file' size='20' name='imgfile11' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 12: <input type='file' size='20' name='imgfile12' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 13: <input type='file' size='20' name='imgfile13' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 14: <input type='file' size='20' name='imgfile14' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 15: <input type='file' size='20' name='imgfile15' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 16: <input type='file' size='20' name='imgfile16' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 17: <input type='file' size='20' name='imgfile17' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 18: <input type='file' size='20' name='imgfile18' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 19: <input type='file' size='20' name='imgfile19' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><div class='column_header'>Photo 20: <input type='file' size='20' name='imgfile20' /></div></td>\n";
	echo " </tr>\n";
	echo " <tr>\n";
	echo "  <td><input type='submit' name='submit' value='Submit' />&nbsp;<input type='reset' name='reset' /></td>\n";
	echo " </tr>\n";
	echo "</table></div>\n";
	echo "<input type='hidden' name='submititem' value='yes' />\n";
	echo "</form>\n";
    echo "</body>\n</html>\n";
}

?>
