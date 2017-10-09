<?php



$database = array();
$database[] = array("title" => "The Alchemist", "author" => "Paulo Coelho");
$database[] = array("title" => "Win or Learn", "author" => "John Kavanaugh");
$database[] = array("title" => "The Monk Who Sold His Ferrari", "author" => "Robin Sharma");
$database[] = array("title" => "The Universe In A Nutshell", "author" => "Stephen Hawking");

			
			echo '<table id="getbooks" cellpadding="10">';
            echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserve</td> </b> </tr>';


            foreach ($database as $book) {
                    $title = $book["title"];
                    $author = $book["author"];
                    echo "<tr>";
                    echo "<td> $title </td><td> $author </td>";
                    echo '<td><a href="reserve.php?reservation=' . urlencode($title) . '"> Reserve </a></td>';
                    echo "</tr>";
                }
                echo "</table>";

?>