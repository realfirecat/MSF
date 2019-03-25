<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flashcards";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, content FROM flashcards";
$result = $conn->query($sql);
$fc_title = array();
$fc_content = array();
$test = "<p>test</p>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //$fc_title[] = "id: " . $row["id"]. " - Title: " . $row["title"]. " - Content: " . $row["content"]. "<br>";
        $fc_title[] = $row["title"];
        $fc_content[] = $row["content"];
    }
} else {
    echo "0 results";
}
echo $fc_title[5]."<br>";
echo $fc_content[5];
$conn->close();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>MSF</title>
</head>

<body>
<?php
    echo $test;
?>
</body>
</html>
