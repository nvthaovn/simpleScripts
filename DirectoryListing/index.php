Dir: <br/>
<ul>
<?php
$filelist = array();
if ($handle = opendir(".")) {
    while ($entry = readdir($handle)) {
		if($entry!='.' && $entry!='..' && $entry!='static' && $entry!='index.php'){
			echo '<li><a href="/'.$entry.'">'.$entry.'</a></li>';
		}
    }
    closedir($handle);
}
?>
</ul>
