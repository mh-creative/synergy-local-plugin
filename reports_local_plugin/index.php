<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "moodle";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";


// Setup HTML Display
echo <<<EOT

<table border="1" cellspacing="0" cellpadding="2" width="80%" align="center">
<tr>
<th>username</th>
<th>lastname</th>
<th>firstname</th>
<th>email</th>
</tr>
EOT;

// Query data within the database
$sql = "SELECT username, lastname, firstname, email FROM mdl_user";
$result = $conn->query($sql);

if ($result) 
    { // Return the result of the query, loop through results and echo results within table
        while($row = $result->fetch_assoc()) {
            echo "\t<tr>\n";
            echo "\t\t<td>{$row['username']}</td>\n";
            echo "\t\t<td>{$row['lastname']}</td>\n";
            echo "\t\t<td>{$row['firstname']}</td>\n";
            echo "\t\t<td>{$row['email']}</td>\n";
            echo "\t</tr>\n";
        }
    } 
else 
    { // If no user found echo "No Users Found"
        echo "\t<tr>\n\t\t<td colspan=\"4\">No Users Found.</td>\n\t</tr>\n";
    } 

echo <<<EOT
</table>

EOT;

?>

