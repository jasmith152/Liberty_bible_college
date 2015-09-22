<?php
$page_title = 'Payments Page';
$matatag_description = '';
include('header.php');
?>
<div class="content" align="center">
<table align="center" width="770" border="0" cellspacing="3" cellpadding="3">
  <tr align="center">
    <td style="font-family:Arial, Helvetica, sans-serif;font-size:xx-large;color:#000;font-weight:bold"> Monthly Payments</td>
    <td><a href="" target="_blank"><img src="Images/cooltext1064605938.png" width="221" height="54" onMouseOver="this.src='Images/cooltext1064605938MouseOver.png'" onMouseOut="this.src='Images/cooltext1064605938.png'" /></a></td>
  </tr>
</table>

<?php
$file_contents = file_get_contents('content/payments.txt');
echo stripslashes($file_contents);
?>
</div><!-- end .content -->
<br />
<?php
include('footer.php');
?>