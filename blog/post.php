<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Perch Blog Example Listing Page</title>
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="rss.php" />
	<link href="../css/main.css" rel="stylesheet" media="screen, projection">
	<link rel="stylesheet" href="blog.css" type="text/css" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.php" />
</head>
<body>

<?php perch_layout('global.header'); ?>

<!--CONTENT FOR DIFFERENT PAGES BEGINS HERE-->

<div id="mainBannerBlog" role="banner">
	<div id="boxContainer">
		<div id="box1Give">
			<h1>The FUMC Grapevine</h1>
			<ul>
				<li><a href="http://forestvilleumc.org/blog/post.php?s=2013-12-29-download-the-latest-issue-of-the-grapevine-in-pdf-format#anchor"><span>&#10013;</span>The Grapevine in PDF</a></li>
				<li><a href="http://forestvilleumc.org/blog/post.php?s=2013-05-01-worship-schedule-for-may-2013#anchor"><span>&#10013;</span>Worship Schedule</a></li>
				<li><a href="http://forestvilleumc.org/blog/archive.php?cat=pastors-corner#anchor"><span>&#10013;</span>Pastor's Corner</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="blogContainer">
	<section id="postContent" role="main">

		<?php perch_blog_post(perch_get('s')); ?>

		<div class="tags">
		<?php perch_blog_post_tags(perch_get('s')); ?>
		</div>

	</section>

	<div id="dateGal" role="column">
		<div id="social">
			<h2>Connect with FUMC</h2>
			<ul class="icons">
				<li>
					<a href="#"<i class="foundicon-rss">
						<p>Subscribe via RSS</p>
					</i></a>
				</li>
				<li>
					<a href="https://twitter.com/intent/user?screen_name=ForestvilleUMC"<i class="foundicon-twitter">
						<p>Follow us on Twitter</p>
					</i></a>
				</li>
				<l1>
					<a href="https://www.facebook.com/ForestvilleUnitedMethodistChurch"target="_blank"<i class="foundicon-facebook">
					<p>Like us on Facebook</p>
					</i></a>
				</li>
			</ul>
		</div>
		<div id="categories">
		<?php perch_blog_categories(); ?>
		</div>
		<div id="archive">
		<?php perch_blog_date_archive_months(); ?>
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


