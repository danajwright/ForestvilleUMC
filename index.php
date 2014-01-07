<?php include ('perch/runtime.php'); ?>

<!DOCTYPE HTML>

<body>

<?php perch_layout('global.header'); ?>

<!--CONTENT FOR DIFFERENT PAGES BEGINS HERE--> 

<div id="mainBanner" role="banner">
	<div id="boxContainer">
		<?php perch_content('Banner Box1'); ?>
		<?php perch_content('Banner Box2'); ?>
	</div>	
</div>

<section id="content" role="main">
	<article id="welcome">
		<h1>Welcome</h1>
		<?php perch_content('welcome'); ?>
		<h1>Worship Services</h1>
		<?php perch_content('worship services'); ?>
	</article>
	<article id="findUs">
		<h1>Find Us</h1>
		<?php perch_content('map'); ?>
		<a href="http://bit.ly/12uSTih" target="google_maps">
 		<img id="mapPng" src="img/map.png"/></a>
	</article>	
</section>

<!--CONTENT FOR DIFFERENT PAGES IS ENDS HERE--> 


<?php perch_layout('global.footer'); ?>

<?php perch_layout('global.menu'); ?>


</body>

</html>