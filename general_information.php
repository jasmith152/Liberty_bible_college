<?php
$page_title = 'General Information Page';
$matatag_description = '';
include('header.php');
?>
<div class="content" align="center">
    <?php
$file_contents = file_get_contents('content/general_information.txt');
echo stripslashes($file_contents);
?>
    </div><!-- end .content -->
    <br />
<?php
include('footer.php');
?>