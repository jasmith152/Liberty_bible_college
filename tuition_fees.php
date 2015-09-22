<?php
$page_title = 'Tuition & Fees Page';
$matatag_description = '';
include('header.php');
?>
<div class="content" align="center">
<?php
$file_contents = file_get_contents('content/tuition_fees.txt');
echo stripslashes($file_contents);
?>
    </div><!-- end .content -->
    <br />
<?php
include('footer.php');
?>