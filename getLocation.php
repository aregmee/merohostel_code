<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$gender = strval($_GET['gender']);
$conn=mysqli_connect('localhost','root','iam@@$#!M','merohost_el');
$sql="SELECT DISTINCT(location) FROM hostel WHERE gender = '$gender' ORDER BY location";
$result =$conn->query($sql);
echo "<select class=\"ui dropdown\" name = \"location\">";
while($row = $result->fetch_assoc()) {
    $location = $row["location"];
    if($location == NULL)
        continue;
    echo "<option value = \"$location\">$location</option>";
}
echo "</select>";
$conn->close();
?>
</body>
</html>
