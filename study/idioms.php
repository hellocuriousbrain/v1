<html>
<?php include '../data/common/head.php' ?>
<body>
<?php include '../data/common/side_feedback.php'; ?>

<center>
<table >
<tbody>
<!-- Full Start (This Contain Two tables (Right and Left)) -->
	<tr>
		<td class="left">
    		<!-- Left Table Start -->     
		<table class="left_container" align="left" border="0" cellpadding="0" cellspacing="0">
			<!--First Row of Left Table start -->
			<tr>
				<td valign="top">
				<?php include '../data/common/logo.php'; ?>
				</td>
			</tr>
			<!--First Row of Left Table End -->

			<!--Second Row of Left Table Start -->
			<tr>
				<td width="250px" valign="top" style="height:377px;" >
				<div>
				<?php 
					$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
					$currpageId = substr($currpage, 0 , -4);
					include  "../data/common/left_".$currpageId."_adv.php"; 
				?>
				</div>
 
				<div>
				<?php include "../data/common/quick_links_".$currpageId.".php"; ?>
				</div>
       
			   	</td>
			</tr>
			<!--Second Row of Left Table Ends -->
		</table>
		</td>
		<!-- Left Table End -->

		
		<td class="right">
		<!-- Right Table Start -->
		<table class="right_container" align="right" border="0" cellpadding="0"
		    cellspacing="0" >

			<?php
				$currpageId = substr($currpage, 0 , -4); 
				include '../data/common/main_menu.php';
				include '../data/common/description.php';
				descrip($currpageId); 
			?>
		</table>
		</td>
	</tr>

<tr>
<td class="left">
<div>
<?php include '../data/common/footer_left.php'; ?>
</div>
<!-- Full Table End -->
</td>
<td class="right">
<?php include '../data/common/footer_right.php'; ?>
</td>
</tr>


  </tbody>
</table>

</center>
</body>
</html>

