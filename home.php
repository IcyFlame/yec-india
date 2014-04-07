<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Home-yec</title>
<style>body{overflow:hidden;color:rgba(0,0,0,0.8);font-family:TheanoModernRegular, Georgia, Times, serif;background:gray;}
#nav{list-style-type:none;margin:0;padding:0;overflow:hidden;}
#nav li{float:left;width:12.37%;padding-top:3px;padding-bottom:3px;border-left:1px solid rgba(0,0,0,0.6);cursor:pointer;}
#nav li:visited {background:rgba(0,0,0,0.8);}
#nav li:hover   {background:rgba(0,0,0,0.8);}
#nav li:active  {background:rgba(0,0,0,0.8);}
#story{background:white;left:10%;position:absolute;margin-top:-1%;width:80%;height:102%;}
a.visited:white;
</style>
<script src="jquery.js"></script>
<script>$(function(){
	$("#start").click(function(){$("body").load("index.php");});
	$("#home").click(function(){$("#content").hide();$("#data").show();});
	$("#about").click(function(){$("#data").hide();$("#content").show("About_us.php");$("#content").load("About_us.php");});
	$("#events").click(function(){$("#data").hide();$("#content").show();$("#content").load("events.php");});
	$("#mission").click(function(){$("#data").hide();$("#content").show();$("#content").load("mission.php");});
	
	});</script>
</head>
<body><div id="story"><table width="100%" height="10%" style="position:absolute;margin-top:-0.5%;">
<tr height="100px"><td width="15%"><img src="images/logo.jpg" height="100px"></td><td align="left" width="85%" valign="center" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;color:#3BB9FF;">Youth Energy Commission</td></tr></table><ul id="nav" style="left:10%;position:absolute;margin-top:10%;border:2px solid rgba(0,0,0,0.6);border-radius:20px;color:white;text-align:center;height:3.5%;width:80%;background:#3BB9FF"><li id="home">Home</li><li id="about"><a href="About_us.php">About Us</a></li><li id="mission">Missions</li><li id="events">Events</li><li id="articles"><a href="aeticles.php">Articles</a></li><li id="news">News</li><li id="chapters">Chapters</li><li id="contacts">Contacts</li></ul><div id="content" style="left:5%;position:absolute;margin-top:15%;width:90%;height:60%;"></div><table id="data" width="90%" height="60%" style="left:5%;position:absolute;margin-top:15%;">
<tr height="50%"><td colspan="4">Youth Energy Commission aims to become a catalyst for accelerating the growth of youth in the energy sector. YEC would provide a common platform for interaction between the academia, industries and the government, thus providing the youth with the opportunities to explore exciting career prospects in energy sector. For the first time in India, youth would get a chance to voice its opinion directly to the policymakers. A series of conferences, networking events, venture capital pitches, events, exhibitions and chance to write articles and policy papers is what awaits the youth.<h3 style="font-size: 20px;color: #777;text-align: center;">Innovation Showcase Pavilion at Clean Energy Ministerial 4</h3>
					<p>The purpose of this document is to propose an event(s) to highlight the innovation theme at the fourth Clean Energy Ministerial (CEM4) meeting in New Delhi, India. Such a theme was proposed by the Government of India at the outset of the Ministerial meeting discussions.  The proposed event is an innovation showcase pavilion on the sidelines of the Ministerial meeting, along the lines of the successful U.S. Advanced Research Projects Agency – Energy (ARPA-E) Innovation Summit....<a href="events.php">read more</a></p>
</td></tr><tr height="50%"><td colspan="1" style="border:1px solid">News Pics Scrolling</td><td colspan="1" style="border:1px solid">News Data </td><td colspan="1" style="border:1px solid">Articles Pics Scolling</td><td colspan="1" style="border:1px solid">Article Data</td></tr></table></div><div id="start" align="left" style="bottom:10px;position:absolute;cursor:pointer;"><img src="images/home.png" height="40px" width="40px"></div><div style="bottom:10px;right:0px;position:absolute;">If fb,etc links required it can be added here..........</div>
</body>
</html>
