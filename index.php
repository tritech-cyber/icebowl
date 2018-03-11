<!DOCTYPE html>
<html><head><title>0000 1010 . 1000 0001 . 0000 0001 . 0001 0010</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/icebowl.css" rel="stylesheet">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home">home</a>
	  <a href="https://10.183.1.30:443">https</a>
  <a href="html/">html</a>
   <a href="php/">php</a>
  <a href="downloads/">downloads</a>
  <a href="phpform/">phpform</a>
    <a href="app/">app</a>
     <a href="code/">code</a>
   <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="row">
	<div class="col-8	links" >
	<?php
	$amurl = array('icebowl.ioe','zulu.ioe');
	$pmurl = array('icebowl.ioe','zulu.ioe');
	//				  red       green     blue       yellow     cyan     magenta   orange     green2   violet    magenta2   blue2     green3   dark gray  light gray   tan     tan2
	$ncolor = array('#B35050','#50B350' ,'#5050B3' ,'#B3B350','#50B3B3','#B350B3','#DC7F32','#32DC7F','#7F32DC' ,'#DC327F','#327FDC','#7FDC32','#505050','#B3B3B3','#FDF6E3' ,'#FFEDBF');
	$fcolor = array('#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#000',	'#000');
		echo "<center>";
		for ($i = 0; $i< 16; $i++){
			$r = rand(0, 11);
				echo "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$i]."; color:".$fcolor[$i]."'><b>$i</b></span>";
		
		}
		
		// ************************************************************************
		echo "<br /> <br />AM <br />";
		for ($i = 1; $i< 21; $i++){
			$r = rand(0, 11);
				$link  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'><b>$i</b></span>";
				echo "<a href = 'http:10.183.1.".$i."' target = '_blank'>$link</a>";
				if ($i == 6) echo "<br />";
				if ($i == 12) echo "<br />";
				if ($i == 16) echo "<br />";
				
		}
		// ************************************************************************	
			echo "<br /> <br />PM <br />";
		for ($i = 1; $i< 21; $i++){
			$r = rand(0, 11);
				$link  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'><b>$i</b></span>";
				echo "<a href = 'http:10.183.2.".$i."' target = '_blank'>$link</a>";
				if ($i == 6) echo "<br />";
				if ($i == 12) echo "<br />";
				if ($i == 16) echo "<br />";
				
		}
		// ************************************************************************	
		
		echo "</center>";
		
	?>
</div>

</div>

<hr />
<center>
	0000 1010 . 1011 0111 . 0000 0001 . 0001 0010 <br />
	<div class = "bbox"><a href = "https://www.nitrotype.com/" target = "_blank"> nitrotype.com </a></div><br />
	<div class = "bbox"><a href = "http://thetypingcat.com/" target = "_blank"> the typing cat </a></div><br />
	<div class = "bbox"><a href = "python/" target = "_blank"> python </a></div><br />
	<div class = "bbox"><a href = "https://www.netacad.com/courses/packet-tracer-download/" target = "_blank">Packet Tracer Register</a></div>

</center>	


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
