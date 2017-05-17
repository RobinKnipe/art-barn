<?php
	$thumbs = opendir("./images/gallery/thumbs");
	$i = 0;
	while($file = readdir($thumbs))
	{
		if(!is_dir($file))
		{
			if((strcmp(strtolower(substr($file, strlen($file)-4, strlen($file))), ".jpg") == 0)
				&& ($f = fopen("./images/gallery/pics/$file", "r")))
			{
				$pics[$i++] = "$file";
				fclose($f);
			}
		}
	}
	closedir($thumbs);

	foreach($pics as $pic)
	{
		print "<br />\n";
		print "<img src=\"./images/gallery/thumbs/$pic\" alt=\"" . substr($pic, 0, strlen($pic)-4);
		print " - click to enlarge\" onmousedown=\"loadPicture('$pic');\" ";
		print "style=\"text-align: center; cursor: pointer; padding-top: 5px; padding-bottom: 5px;\" />\n";
	}
?>
