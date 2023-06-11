<?php
$servername = "localhost";
$username = "root";
$password = "Lyl021108@";
$database = "wbdatabase";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  // 执行数据库插入操作
  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

  if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>

