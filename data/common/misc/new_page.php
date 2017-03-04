<?php
function new_page($currpageId) {
   ?>

<html>
<?php include 'head.php' ?>
<body>
<?php include_once("analyticstracking.php") ?>
<?php include_once("facebooksdk.php") ?>
<?php include 'side_feedback.php'; ?>
				<?php
					include  "side_fb_share_background.php";
				fb_share_bg($currpageId); 
				?>
				<?php
					include  "../data/common/fb_share/side_fb_share_".$currpageId.".php";
				?>

<center>
<table  style="background-color:white">
<tbody>
<!-- Full Start (This Contain Two tables (Right and Left)) -->
	<tr>
		<td class="left" valign="top">
    		<!-- Left Table Start -->     
		<table class="left_container" align="left" border="0" cellpadding="0" cellspacing="0">
			<!--First Row of Left Table start -->
			<tr>
				<td valign="top">
				<?php include 'logo.php'; ?>
				</td>
			</tr>
			<!--First Row of Left Table End -->

			<!--Second Row of Left Table Start -->
			<tr>
				<td width="250px" valign="top" style="height:377px;" >
				<?php
					include  "../data/common/advertisement/left_".$currpageId."_adv.php";
				?>
				</td>
			</tr>
 
			<tr>
				<td width="250px" valign="top" style="height:377px;" >
				<?php include "../data/common/quick_links/quick_links_".$currpageId.".php"; ?>
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
				include 'main_menu.php';
				include 'description.php';
				descrip($currpageId); 
			?>
		</table>
		</td>
	</tr>

<tr>
<td class="left">
<div>
<?php include 'footer_left.php'; ?>
</div>
<!-- Full Table End -->
</td>
<td class="right">
<?php include 'footer_right.php'; ?>
</td>
</tr>


  </tbody>
</table>

</center>
<script type='text/javascript'>
    var pubID = '15987CL14359';

    (function(d, t) {
    var s = document.createElement('script');s.type = 'text/javascript';
    s.async = true;s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv1.js';
    document.getElementsByTagName('body')[0].appendChild(s);
    }());
</script>
</body>
</html>


<?php } ?>
