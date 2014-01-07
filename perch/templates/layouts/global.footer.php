
<footer id="mainFooter" role="banner">
	<div id="footerContainer">
		<div id="contactFollow">
			<h1>Forestville UMC</h1>
			<ul>
				<li>6550 Covey Road Forestville, CA 95436</li>
				<li>Office Hours Mon-Fri 8 a.m. – Noon</li> 
				<li>Phone: <a href="tel:7078872020" class="phone">(707) 887-2020</a></li> 
			</ul>
			<h4>Follow Us</h4>
			<a href="https://twitter.com/ForestvilleUMC" class="twitter-follow-button" data-show-count="false">Follow @ForestvilleUMC</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<iframe src="http://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2FForestvilleUnitedMethodistChurch&amp;layout=button_count&amp;show_faces=false&amp;colorscheme=light&amp;font=arial&amp;width=450&amp;appId=518983021479578" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px;" allowTransparency="true"></iframe>
		</div>		
		<div id="calendarList">
			<h1>Upcoming Events</h1>
			<?php perch_events_custom(array(
			'filter'=>'eventDateTime',
			'match'=>'gte',
			'value'=>date('Y-m-d'), 
			'count'=>30,
			'sort'=>'eventDateTime',
			'sort-order'=>'ASC',
			'template' => 'events/listing/event-list-footer.html',));?>
			<p class="more"><a href="/calendar.php">See All</a> &rarr;</p>
		</div>
		<div id="newsletter">
			<h1>Contact Us</h1>
					<?php
    		$name = $_POST['name'];
    		$email = $_POST['email'];
    		$message = $_POST['message'];
    		$from = 'forestvilleumc.org'; 
    		$to = 'danajwright@gmail.com';
    		$to = 'forestvilleumc@att.net'; 
    		$subject = 'Hello';

	    	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
		?>

	    <?php if (isset($_POST['email'])){
    	    echo "<p class='message'>Thanks, your message has been sent!";
        	echo "</p>";
    	}?>
			<form method="post" action="#newsletter">
  				<p><input id="one" name="name" placeholder="name"></p>
  				<p><input id="two" name="email" placeholder="email"></p>
  				<p><textarea id="three" name="message" placeholder="type message here..."></textarea></p>
  				<p><input id="submit" type="submit" name="submit" value="Submit"></p>
			</form> 
		</div>	

	</div>

	<footer id="superFooter" role="banner">
		<p>© 2013 Forestville United Methodist Church. All rights reserved. Site development by <a href="http://www.linkedin.com/in/danajwright" a name="#newsletter" target="_blank">Dana J. Wright</a></p>
	</footer>
</footer>
