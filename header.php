<?php 
	include('classes.php'); 
?>

<!--This site is written and maintained by: Michael Wilke at EnArch Technologies-->

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<?php 
		if ($uacheck->ismobile()) {
			echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">';
		}
		if (isset($desc)) {
			echo '<meta name="description" content="'.$desc.'">';
		}
	?>


	<link rel="stylesheet" type="text/css" href="/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="/css/mobilestyles.css" />


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="/scripts.js"></script>


	<link rel="icon" type="image/png" href="favicon.png">

	<link rel="apple-touch-icon" href="apple-icon.png" />

	<title>
		<?php echo $pageTitle; ?>
	</title>
		<?php echo $headerstuff; ?>
	</head>

<body onLoad="load();">
	<div id="fb-root">
    </div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=298960316797315";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="newnav">
	<a href="/" class="newnavitem" style="border-left: 0px;">Home</a>
	<a href="/Team" class="newnavitem">Team 2501</a>
	<a href="#" class="newnavitem">Item2</a>
	<a href="/Sponsors" class="newnavitem">Our Sponsors</a>
	<a href="#" class="newnavitem">Item3</a>
	<a href="#" class="newnavitem">Item4</a>
	<a href="#" class="newnavitem">Item5</a>
	<a href="#" class="newnavitem">Item6</a>
	<a href="/Search" class="newnavitem" style="border-right: 0px;">Search</a>
</div>

<div id="website">
<div id="nav">
<a href="/"><img src="/resources/images/Logos/Logomono.png" alt="logo" id="logo"></a>
<div id="headerimg1" class="headerimg" style="width: 100%; height: 130px; background: url('/images/Slideshow/slideshow1.png'); z-index: 0; position: relative;"></div>

</div>
