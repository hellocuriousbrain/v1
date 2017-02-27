<?php
function descrip($currpageId) {
    $file_laction = "../../data/txt/";
        $file_ext = ".txt";
$des_filename = $file_laction . $currpageId . $file_ext;
?>
<tr>
        
        <td align="center"  >
            <div class = "extractor" align="center">
            <div class = "Mrsextractor" align="center">
<?php
    $f = fopen ($des_filename, "r");
    $ln= 0;
    $line= fgets ($f);
        print ($line);
    fclose ($f);
?>            <hr>
            <div class = "Mrsextractor_2" align = "Center">
            <img src="../../data/image/<?php echo $currpageId?>.png" width="700" height="120" />
            </div>
            <div class = "Mrsextractor_2" align = "Center">
<?php
$file1 = $des_filename;
$lines = file($file1);

foreach($lines as $line_num  => $line)
{
    if($line_num != 0)
echo $line;
}
?>
                           </div>


       </div>
   </div>

            
    </td>
    </tr>

<?php } ?>
