<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">

</head>
<body>

<?php
echo '<h2>'; echo $_POST['bName']; echo '의 책리스트 </h2>';

$conn = mysqli_connect('localhost','root','useruser','library');
$sql = "SELECT * FROM book WHERE publisher = '".$_POST['bName']."'";
$result = mysqli_query($conn, $sql);


echo '<table border="1">';
echo '<tr>';
echo ' <th> 책이름 </th> <th> 출판사 </th>';
echo '</tr>';

while($row = mysqli_fetch_array($result)) {
echo '<tr>';
echo '<td>'; echo "{$row['bookname']}";echo '</td>';
echo '<td>'; echo "{$row['publisher']}";echo '</td>';
echo '</tr>';
}

echo '</table>';

?>
</body>
</html>