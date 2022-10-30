<?php
$draiver_host_db = "mysql:host=builotqfurta4hn3tpbs-mysql.services.clever-cloud.com;dbname=builotqfurta4hn3tpbs;port=3306";
$user = "ugxpcosnx8mmz8wu";
$password = "RM3HabNU2Tuj3S9ilTlZ";
try {
    $conn = new PDO($draiver_host_db, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed";
}
?>
<?php
// $draiver_host_db = "mysql:host=localhost;dbname=traningwebsite;port=3307";
// $user = "root";
// $password = "";
// $port = 3307;
// try {
//     $conn = new PDO($draiver_host_db, $user, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "connection failed";
// }
?>
