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
		<section id="blogContent" role="main">
		   <?php
		        // defaults for all modes
		        $posts_per_page = 20;
		        $template 		= 'blog_post_in_list.html';
		        $sort_order		= 'DESC';
		        $sort_by		= 'postDateTime';

		        // Have we displayed any posts yet?
		        $posts_displayed = false;

		        /*
		        	perch_get() is used to get options from the URL.

					e.g. for the URL
						/blog/archive.php?cat=news

					perch_get('cat') would return 'news' because cat=news.


					The code below looks for different options in the URL, and then displays different types of listings based on it.
		        */


		        /* --------------------------- POSTS BY CATEGORY --------------------------- */
		        if (perch_get('cat')) {
		            echo '<h1>Posts by Category: '.perch_blog_category(perch_get('cat'), true).'</h1>';

		            perch_blog_custom(array(
							'category'   => perch_get('cat'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }


		        /* --------------------------- POSTS BY TAG --------------------------- */
		        if (perch_get('tag')) {
		            echo '<h1>Posts by Tag: '.perch_blog_tag(perch_get('tag'), true).'</h1>';

		            perch_blog_custom(array(
							'tag'   	 => perch_get('tag'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }



		        /* --------------------------- POSTS BY DATE RANGE --------------------------- */
		        if (perch_get('year')) {

					$year              = intval(perch_get('year'));
					$date_from         = $year.'-01-01 00:00:00';
					$date_to           = $year.'-12-31 23:59:59';
					$title_date_format = '%Y';


		            // Month and Year?
		            if (perch_get('month')) {
						$month             = intval(perch_get('month'));
						$date_from         = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
						$date_to           = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
						$title_date_format = '%B, %Y';
		            }

		            echo '<h1>Posts by Date: '.strftime($title_date_format, strtotime($date_from)).'</h1>';

		            perch_blog_custom(array(
							'filter'     => 'postDateTime',
							'match'      => 'eqbetween',
							'value'      => $date_from.','.$date_to,
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }



		        /* --------------------------- POSTS BY AUTHOR --------------------------- */
		        if (perch_get('author')) {

		        	echo '<h1>Posts by '.perch_blog_author(perch_get('author'), array(
		        											'template' => 'author_name.html',
		        											), true).'</h1>';


		        	perch_blog_custom(array(
							'author'   	 => perch_get('author'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }


		      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */

		      	if ($posts_displayed == false) {

		      		// No other options have been used; no posts have been displayed yet.
		      		// So display all posts.

		      		echo '<h1>Archive</h1>';

		      		perch_blog_custom(array(
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		      	}

		    ?>
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


