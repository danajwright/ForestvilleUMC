

<?php include ('perch/runtime.php'); ?>

<!DOCTYPE HTML>

<head>
<meta charset="UTF-8">
<title>Calendar</title>
<meta name="viewport" content="width=device-width">
<link href="css/main.css" rel="stylesheet" media="screen, projection">
</head>

<body>

<?php perch_layout('global.header'); ?>

<!--CONTENT FOR DIFFERENT PAGES BEGINS HERE--> 

<div id="mainBannerCal" role="banner">
<div id="boxContainer">
		<div id="box1Cal">
			<h1>Forestville UMC Calendar</h1>
			<ul>
				<li><a href="#special"><span>&#10013;</span>Special Events</a></li>
				<li><a href="#reoccuring"><span>&#10013;</span>Church Programs</a></li>
				<li><a href="#community"><span>&#10013;</span>Community Programs</a></li>
			</ul>
		</div>
	</div>	
</div>

<div id="calContainer"> <a name="special">
	<section id="calContent" role="main">
		<article id="event">
			<?php perch_events_custom(array(
			'template' => 'events/listing/event-list-main.html',	
			'filter'=>'eventDateTime',
			'match'=>'gte',
			'value'=>date('Y-m-d'),
			'count'=>30,
			'sort'=>'eventDateTime',
			'sort-order'=>'ASC',
			));?> 		
		</article>
		<div id="reoccuring"> <a name="reoccuring">
			<h1>Church Programs and Activities</h1>
			<p class="sub">Times may vary, please contact the church office for more information.</p>
			<?php perch_content('calendar-regular'); ?>
		</div>
		<div id="reoccuring"> <a name="community">
			<h1>Community Programs and Activities</h1>
			<p class="sub">Times may vary, please contact the church office for more information.</p>
			<?php perch_content('community'); ?>
		</div>
	</section>
	<div id="dateGal" role="column">
		<div id="social">
			<h2>Connect with FUMC</h2>
			<ul class="icons">
				<li>
					<a href="#"<i class="foundicon-rss">
						<p>Subscribe via RSS</p></a>
				</li>
				<li>
					<a href="https://twitter.com/intent/user?screen_name=ForestvilleUMC"<i class="foundicon-twitter">
						<p>Follow us on Twitter</p></a>
				</li>
				<l1>
					<a href="https://www.facebook.com/ForestvilleUnitedMethodistChurch"target="_blank"<i class="foundicon-facebook">
						<p>Like us on Facebook</p></a>
				</li>
			</ul>		
		</div>	
		<div id="gallery">
			<?php perch_gallery_album_images('fun-church-events', array(
   			'template'=>'cal_album.html' ));?>
		</div>
	</div>
</div>

<!--CONTENT FOR DIFFERENT PAGES IS ENDS HERE--> 

<?php perch_layout('global.footer'); ?>

<?php perch_layout('global.menu'); ?>


</body>

</html>