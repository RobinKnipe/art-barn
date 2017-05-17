<html>
<head>
    <meta name="robots" content="noindex,nofollow" />
    <title>Home</title>
    <script language="javascript" type="text/javascript">
        var currentPic = false;
        function loadPicture(pic)
        {
            currentPic = pic;
            var _img = document.getElementById("img");
            _img.innerHTML = "<img src=\"images/gallery/pics/" + pic + ".jpg\" alt=\"" + pic + "\" style=\"cursor: pointer;\" />";
            _img.style.zIndex = "2";
            _img.style.width = "100%";
            _img.style.height = "436px";
            var _cls = document.getElementById("cls");
            _cls.style.zIndex = "3";
            _cls.style.visibility = "visible";
            document.getElementById("content").style.zIndex = "1";
        }
        function closePicture()
        {
            if (currentPic)
            {
                currentPic = false;
                var _img = document.getElementById("img");
                _img.innerHTML = "";
                _img.style.zIndex = "1";
                _img.style.width = "0px";
                _img.style.height = "0px";
                var _cls = document.getElementById("cls");
                _cls.style.zIndex = "2";
                _cls.style.visibility = "hidden";
                document.getElementById("content").style.zIndex = "3";
            }
        }
        function getHR()
        {
            var ran = Math.floor(Math.random() * 6);
            if (ran < 1) return "<img src=\"images/hr/red-brush.jpg\" style=\"text-align: center;\">";
            else if (ran < 2) return "<img src=\"images/hr/green-brush.jpg\" style=\"text-align: center;\">";
            else if (ran < 3) return "<img src=\"images/hr/blue-brush.jpg\" style=\"text-align: center;\">";
            else if (ran < 4) return "<img src=\"images/hr/purple-brush.jpg\" style=\"text-align: center;\">";
            else if (ran < 5) return "<img src=\"images/hr/yellow-brush.jpg\" style=\"text-align: center;\">";
            else return "<img src=\"images/hr/orange-brush.jpg\" style=\"text-align: center;\">";
        }
    </script>
</head>
<body style="text-align: left; font-family: Sans-Serif;">
    <div id="content" style="width: 100%; background-color: White; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px; position: absolute; top: 0px; z-index: 3">
        <div style="width: 80%;">
            <h1 style="text-align: left; padding-top: 0px;">Welcome to the Art Barn</h1>
            <p style="text-align: justify;">
                We run our courses in beautiful rural
                <strong style="text-decoration: noone; font-weight: normal;">France</strong>
                for painters of all abilities, and we especially welcome beginners.
            </p>
            <p style="text-align: justify;">
                Our week long
                <strong style="text-decoration: noone; font-weight: normal;">courses</strong>
                are held in the Spring and Autumn.
            </p>
            <p style="text-align: justify; padding-bottom: 0px; margin-bottom: 5px;">
                Our <strong style="text-decoration: noone; font-weight: normal;">painting holidays</strong>
                are run by Roy and Michelle Knipe.
                <br />
                Roy provides <strong style="text-decoration: noone; font-weight: normal;">tuition</strong>
                and Michelle looks after the administration and co-ordination of courses.
            </p>
            <p style="text-align: center; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 5px;">
                <script language="javascript" type="text/javascript">
                    document.write(getHR());
                </script>
            </p>
            <p style="text-align: justify; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 5px;">
                <strong>Roy Knipe</strong>&nbsp; is a professional artist and  illustrator with many years
                experience working for major national and international clients. He has won awards for his
                work both in the UK and the USA. He has undertaken private commissions from portraiture to
                landscape. He is an experienced teacher and has been a part time lecturer on B A
                Illustration courses in various UK colleges. He has also run an evening class targeted at
                beginners.
                <br />
                Roy works in a wide variety of media, from watercolour to oils.
            </p>
            <p style="text-align: center; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 5px;">
                <script language="javascript" type="text/javascript">
                    document.write(getHR());
                </script>
            </p>
            <p style="text-align: justify; padding-top: 0px; margin-top: 0px;">
                If you are interested to see some of
                <a href="http://www.google.co.uk/search?hl=en&q=roy+knipe&btnG=Google+Search&meta=">Roy's work</a>,
                please feel free to "<a href="http://www.google.com">Google</a>" him,
                (<strong style="text-decoration: none; font-weight: normal;">Roy Knipe</strong>) while
                his website is being redesigned.
            </p>
        </div>
        <div style="width: 120px; position: fixed; top: 0px; right: 0px; text-align: center;">
            <h3>Gallery</h3>
            <marquee id="gallery" direction="down" scrollamount="6" width="120" height="425" style="right: 0px; text-align: center; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
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
		print "<br />\n<img src=\"./images/gallery/thumbs/$pic\" alt=\"" . substr($pic, 0, strlen($pic)-4);
		print " - click to enlarge\" onmousedown=\"loadPicture('" . substr($pic, 0, strlen($pic)-4) . "');\"";
		print " onmouseover=\"document.getElementById('gallery').scrollamount=0;\" onmouseout=\"document.getElementById('gallery').scrollamount=6;\"";
		print " style=\"cursor: pointer; padding-top: 5px; padding-bottom: 5px;\" />\n";
	}
?>
            </marquee>
        </div>
    </div>
    <div id="cls" style="visibility: hidden; position: fixed; top: 5px; right: 5px; width: 16px; height: 16px; z-index: 2;">
        <img src="images/close.gif" alt="Close" onmousedown="closePicture();" style="cursor: pointer;" />
    </div>
    <div id="img" onmousedown="closePicture();" style="background-color: White; height: 460; text-align: center; position: fixed; top: 0px; width: 100%; z-index: 1;"></div>
</body>
</html>
