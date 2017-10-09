<?php include("header.php"); ?>

	<h1>Contact Us</h1>

	<form id="contactform" action="#" method="GET">
			<div class="row">
				<label for="name"></label><br/>
				<input type="text" name="name" id="name" class="input" value="" size="90" placeholder="Your Name" required="">
			</div>
			<div class="row">
				<label for="email"></label><br/>
				<input type="email" name="email" id="email" value="" size="90" placeholder="Your Email" required="">
			</div>
			<div class="row">
				<label for="message"></label><br>
				<textarea id="message" class="input" name="message" rows="10" cols="86" placeholder="Your Message" required=""></textarea>
			</div>
			<input type="submit" name="submitbutton" id="submitbutton" value="Send Email">
		</form>

<?php include("footer.php"); ?>
