<html>
<?php include 'data/common/head.php' ?>
<body>
<?php include 'data/common/side_feedback.php'; ?>

<center>
<table>
<tbody>
        <!-- Full Start (This Contain Two tables (Right and Left)) -->
	<tr>
		<td class="left" valign="top">

		<!-- Left Table Start -->     
		<table class="left_container" valign="top" align="left" border="0" cellpadding="0" cellspacing="0">
			<!--First Row of Left Table start -->
			<tr>
				<td valign="top">	
				<?php include 'data/common/logo.php'; ?>
				</td>
			</tr>
			<!--First Row of Left Table End -->
			<!--Second Row of Left Table Start -->
			<tr>
				<td width="300px" valign="top" style="height:250px;" >
        	        	<p><a> Latest News </a> </p>
	        	        <marquee direction="up"
        	        	onmouseover="this.setAttribute('scrollamount', 1, 0);"
	                	onmouseout="this.setAttribute('scrollamount', 2, 0);" scrollamount= 3  >
		                <p><a> Released Cursive HandWriting Video Lesson # 1 (From A to I in Capital letters) </a> </p>
		                <p><a> Cursive HandWriting Video Lesson # 2 Coming Soon (From I to R in Capital letters) </a> </p>
		                <p><a> Cursive HandWriting Video Lesson # 3 Coming Soon (From S to Z in Capital letters) </a> </p>
				</marquee> 
				</td>
			</tr>
			<tr>
				<td width="300px" valign="top" style="height:257px; padding-left=100px;" >
		                <p><a> Click to Buy </a> </p>
				<?php include 'data/common/main_page_adv.php'; ?>
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
    <!-- First Row of Right Table starts (Top Space) -->
			<?php 
			include 'data/common/main_menu.php'; 
			include 'data/common/description_index.php';
			?>
			

    <!-- Third Row of Right Table Ends -->
		</table>
    <!-- Right Table End -->
		</td>
	</tr>

<tr>
<td class="left">
<div>
<?php include 'data/common/footer_left.php'; ?>
</div>
<!-- Full Table End -->
</td>
<td class="right">
<?php include 'data/common/footer_right.php'; ?>
</td>
</tr>


</tbody>
</table>
</center>

</body>
</html>
