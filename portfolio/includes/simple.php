<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name: <br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="50" autofocus />
		</label>
	</div>
    <br />
	<div>	
		<label>
			Email: <br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="50" />
		</label>
	</div>
    <br />
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Message: <br /><textarea name="message" cols="54" rows="4" placeholder=" " tabindex="30"></textarea>
		</label>
	</div>	
    <br />
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
    <br />
	<div>
		<input type="submit" value="Submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
