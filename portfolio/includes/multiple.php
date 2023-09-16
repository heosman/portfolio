<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
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
        Name: <br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<br />
<div>	
    <label>
        Email: <br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<br />
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        Size of canvas?<br />
        <select name="Size of canvas paper?" required="required" title="Size of canvas paper is required" tabindex="50">
            <option value="">Select</option>
            <option value="4 in. x 5 in.">4 in. x 5 in. &nbsp;~&nbsp; $20.00 </option>
            <option value="5 in. x 4 in.">5 in. x 4 in. &nbsp;~&nbsp; $20.00 </option>
            <option value="5 in. x 5 in.">5 in. x 5 in. &nbsp;~&nbsp; $25.00 </option>

        </select>
    </label>
</div>
<br />
    <div>	
    <fieldset>
        <legend>Medium type?</legend>
        <input type="radio" name="Commission types" value="Acrylic" 
        required="required" title="Commission type is required" tabindex="50" /> Acrylic <br />
        <input type="radio" name="Commission types" value="Watercolor" /> Watercolor <br />
        <input type="radio" name="Commission types" value="Gouache" /> Gouache <br />
    </fieldset>
</div>
<br />
<div>	
    <label>
        Detail of your request:<br /><textarea name="Comments" cols="36" rows="4" placeholder=" " tabindex="60"></textarea>
    </label>
</div>	
<br />
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<br />
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

