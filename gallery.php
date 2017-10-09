<?php include("header.php"); ?>

	<h1>Welcome to da hooood</h1>

	
	<?php include("SQLInjection.php"); ?>


	<?php include("sessionHijacking.php"); ?>

	
	<ul>
		<?php

			$dir = new DirectoryIterator("uploadedFiles");

			foreach($dir as $fileinfo){
				if (!$fileinfo->isDot()) {
					echo "<li><img src=\"uploadedFiles/" . $fileinfo->getFilename() . "\"</li>";
				}
			}	
			
		?>
		<img src="">
	</ul>

	<!--

	<form id="login" action="#" method="GET">
			<div class="row">
				<label for="username"></label><br/>
				<input type="text" name="username" id="username" class="input" value="" size="90" placeholder="Username" required="">
			</div>
			<div class="row">
				<label for="password"></label><br/>
				<input type="password" name="password" id="password" value="" size="90" placeholder="Password" required="">
			</div>
			<input type="submit" name="submitbutton" id="submitbutton" value="Login">
		</form>
	-->

<?php include("footer.php"); ?>