<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project By Using Raw PHP</title>
</head>
<body>
    <?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

echo "<p> Thank You For Your Submission ,$name!</p>";
echo "<p>Your Email is : $mail</p>";
echo "<p>Your Message is : $message</p>";
echo "<p>$message</p>";

}else{
    echo "<p> Error! This is a Invalid Action</p>";
}
// Output query string parameters using $_GET

if(!empty($_GET)){
echo "<h1>This is for Query String Parameters:</h1>";
echo "<ul>";
foreach($_GET as $key => $value){
    echo "<li> $key : $value</li>";
}
echo "</ul>";

}
 // Output all request parameters using $_REQUEST
 if (!empty($_REQUEST)) {
    echo "<h2>All Request Parameters:</h2>";
    echo "<ul>";
    foreach ($_REQUEST as $key => $value) {
      echo "<li>$key: $value</li>";
    }
    echo "</ul>";
  }

    ?>

</body>
</html>