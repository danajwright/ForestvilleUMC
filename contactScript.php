<!--Contact form script--> 

	<?php
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$message = $_POST['message'];
    	$from = 'From: TangledDemo'; 
    	$to = 'danajwright@gmail.com'; 
    	$subject = 'Hello';

	    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	?>


    <?php if (isset($_POST['emailJS'])){
        echo "<p class='message'>Javascript 1.0 worked!!! Your e-mail address is " .$_POST['emailJS'];
        echo "</p>";
    }?>

<!---

	<?php
	if ($_POST['submit']) {
		if ($name != '' && $email != '') {
    		if (mail ($to, $subject, $body, $from)) { 
        		echo '<p>Your message has been sent!</p>';
    			} else { 
        			echo '<p>Something went wrong, please try again.</p>'; 
    			}
        	} else {
        		echo '<p>You need to fill in all required fields!!</p>';
			}
	}
	?>
-->    

<!--Contact form script ENDS HERE--> 