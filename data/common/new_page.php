<?php
function new_page($currpageId) {
   ?>

<html>
<?php include 'misc/head.php' ?>
<body>
<?php include 'misc/side_feedback.php'; ?>

<center>
<table >
<tbody>
<!-- Full Start (This Contain Two tables (Right and Left)) -->
	<tr>
		<td class="left" valign="top">
    		<!-- Left Table Start -->     
		<table class="left_container" align="left" border="0" cellpadding="0" cellspacing="0">
			<!--First Row of Left Table start -->
			<tr>
				<td valign="top">
				<?php include 'misc/logo.php'; ?>
				</td>
			</tr>
			<!--First Row of Left Table End -->

			<!--Second Row of Left Table Start -->
			<tr>
				<td width="250px" valign="top" style="height:377px;" >
				<?php 
					include  "advertisement/left_".$currpageId."_adv.php"; 
				?>
				</td>
			</tr>
 
			<tr>
				<td width="250px" valign="top" style="height:377px;" >
				<?php include "quick_links/quick_links_".$currpageId.".php"; ?>
				</td>
			</tr>
       
			<!--Second Row of Left Table Ends -->
		</table>
		</td>
		<!-- Left Table End -->

		
		<td class="right" valign="top">
		<!-- Right Table Start -->
		<table class="right_container" align="right" border="0" cellpadding="0"
		    cellspacing="0" >

			<?php
				include 'misc/main_menu.php';
				include 'misc/description.php';
				descrip($currpageId); 
			?>
		</table>
		</td>
	</tr>

<tr>
<td class="left">
<div>
<?php include 'misc/footer_left.php'; ?>
</div>
<!-- Full Table End -->
</td>
<td class="right">
<?php include 'misc/footer_right.php'; ?>
</td>
</tr>


  </tbody>
</table>

</center>
</body>
</html>


<?php } ?>
