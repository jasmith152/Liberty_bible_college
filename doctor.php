<?php
$page_title = 'Doctor Page';
$matatag_description = '';
include('header.php');
?>
<div class="content" align="center">
    <?php
$file_contents = file_get_contents('content/doctor.txt');
echo stripslashes($file_contents);
?>
    </div><!-- end .content -->
    <br />
<?php
include('footer.php');
?>