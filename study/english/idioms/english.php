<html>
<?php include '../../data/common/head.php' ?>
<body>
<?php include '../../data/common/side_feedback.php'; ?>
    <center>
<div style="display:inline;">
        <div class = "first">
        <!-- Full Start (This Contain Two tables (Right and Left)) -->
<table >
<tr>
<td>

    <!-- Left Table Start -->     
<table class="left_container" align="left" border="0" cellpadding="0" cellspacing="0">
    <!--First Row of Left Table start -->
<?php include '../../data/common/logo.php'; ?>
<!--First Row of Left Table End -->


<!--Second Row of Left Table Start -->
<tr>
    <td width="200px" valign="top" style="height:377px;" >
        <div>
<?php include '../../data/common/left_menu.php'; ?>
<?php 
$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
curPageName($currpage);
?>
        </div>
        
        <div >
<?php include '../data/common/quick_links.php' ?>

        </div>

    </td>
</tr>
<!--Second Row of Left Table Ends -->
</table>

    <!-- Left Table End -->

    <!-- Right Table Start -->
<table class="right_container" align="right" border="0" cellpadding="0"
    cellspacing="0" >
     <?php include '../data/common/main_menu.php'; ?>    
<?php include '../data/common/description.php' ?>

    <?php 
$currpageId = "background";
descrip($currpageId); 
?>
    
    <!-- Third Row of Right Table Ends -->
</table>

    <!-- Right Table End -->

</td>
</tr>
</table>

</div>


<div>
 <?php include '../data/common/footer.php'; ?>

</div>

<!-- Full Table End -->

</center>

</body>
</html>


