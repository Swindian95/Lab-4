<?php include("header.php"); ?>




<?php include("book-search.php"); ?>

	<?php


		$searchtitle = "";
		$searchauthor = "";

		if (isset($_POST) && !empty($_POST)) {
		# Get data from form
		    $searchtitle = trim($_POST['searchtitle']);
		    $searchauthor = trim($_POST['searchauthor']);
		}

//	if (!$searchtitle && !$searchauthor) {
//	  echo "You must specify either a title or an author";
//	  exit();
//	}

		$searchtitle = addslashes($searchtitle);
		$searchtitle = htmlentities($searchtitle);
		$searchauthor = addslashes($searchauthor);
		$searchauthor = htmlentities($searchauthor);
		

		# Open the database
		@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

		if ($db->connect_error) {
		    echo "could not connect: " . $db->connect_error;
		    printf("<br><a href=index.php>Return to home page </a>");
		    exit();
		}

		# Build the query. Users are allowed to search on title, author, or both

		$query = " select * from books";
		if ($searchtitle && !$searchauthor) { // Title search only
		    $query = $query . " where title like '%" . $searchtitle . "%'";
		}
		if (!$searchtitle && $searchauthor) { // Author search only
		    $query = $query . " where author like '%" . $searchauthor . "%'";
		}
		if ($searchtitle && $searchauthor) { // Title and Author search
		    $query = $query . " where title like '%" . $searchtitle . "%' and author like '%" . $searchauthor . "%'"; // unfinished
		}

		//echo "Running the query: $query <br/>"; # For debugging


		  # Here's the query using an associative array for the results
		//$result = $db->query($query);
		//echo "<p> $result->num_rows matching books found </p>";
		//echo "<table border=1>";
		//while($row = $result->fetch_assoc()) {
		//echo "<tr><td>" . $row['bookid'] . "</td> <td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
		//}
		//echo "</table>";
		 

		# Here's the query using bound result parameters
		    // echo "we are now using bound result parameters <br/>";
		    $stmt = $db->prepare($query);
		    $stmt->bind_result($bookid, $title, $author, $reserved, $duedate);
		    $stmt->execute();

		    echo '<table bgcolor="#dddddd" cellpadding="6">';
		    echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserve</td> <td>Reserved?</td>  </b> </tr>';
		    while ($stmt->fetch()) {
		    	if ($reserved == 0) {
		    		$reserved ='NO';
		    	} else { 
		    		$reserved = 'YES';
		    	}
		        echo "<tr>";
		        echo "<td> $title </td><td> $author </td>";
		        echo '<td><a href="reserveBook.php?bookid=' . urlencode($bookid) . '"> Reserve </a></td>';
		        echo "<td>$reserved</td>";
		        echo "</tr>";
		    }
		    echo "</table>";


	?>
	



	<!--
	<h1>Browse through our books here!</h1>

	
	<form id="browse" action="#" method="GET">
			<div class="row">
				<label for="name"></label><br/>
				<input type="text" name="book" id="book" class="input" value="" size="90" placeholder="Search for a title" required="">
			</div>
			<input type="submit" name="submitbutton" id="submitbutton" value="Search">
	</form>
	-->

<?php include("footer.php"); ?>