<?php 
	$headerstuff = '<style type="text/css">a{ color:#09F;}</style>';
	$pageTitle = "MPA Robotics - Home";
	#$desc = "This is a description";
	include('header.php');
	flush();
?>

<div id="content" class="navDisabled">
</div>

<!-- Begin Content Exp -->
<div id="sponsors">
	<h1>SPNSORS HERE</h1>

	<div id="sponsorswoosh" class="swoosh">
		<a href="http://www.nasa.gov/"><img src="/images/Sponsors/nasa.png" class="sponsors" id="nasa" alt="Nasa" /></a>
		<a href="http://jcpenney.com"><img src="/images/Sponsors/jcpenny.svg" class="sponsors" id="jcpenny" alt="jcpenny" /></a>
		<a href="http://moundsparkacademy.org/currentfamilies/parentsassociation/"><img src="/images/Sponsors/mpapa.png" class="sponsors" id="mpapa" alt="MPA Parents Association" /></a>
		<a href="/Sponsors" id="moresponsors">More Sponsors -></a>
	</div>
</div>

<div id="abouttheteam">
	<div id="teaminfo">
		<h1>Upcoming Events</h1>
			<p style="line-height:1.5;">Fans of robotics should also be getting ready for the 2013 season.  Kickoff will be January 7th, and we will be competing at Mariucci Arena in March.
		<br />
		<br />
		<p>Photos from Woodbury Days are located in the <a href="http://team3926.org/Media">Media</a> tab of the website.</p>
	</div>
</div>

<!--
<div id="mobilecontent">
<br />
<br />
<?php include('mobilefooter.php'); ?>
</div> -->

<!-- End Content Exp -->

</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>
