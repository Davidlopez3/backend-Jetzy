

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid  #ccc;
}

tr{
	 background: #ffbf80;
}
</style>
</head>
<body>

<?php
$host = "----------------------";
$username = "----------------------";
$password = "--------------------";
$dbname = "-------";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname)or die;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Events, Time,FROM Past Events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table><tr><th>Events</th><th>Time</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Event"]. " </td><td>" . $row["Time"]. "</td></tr>";
    }
    echo "</table>";
    <img src="portfolio-header.jpg">
} else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>

