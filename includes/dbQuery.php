<?php
require($_SERVER['DOCUMENT_ROOT'] . "/audit/includes/config.php");
try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $except) {
    echo "Échec de la connexion", $except->getMessage();
    exit();
}
$query = "SELECT `auditContentText` FROM `auditContent` WHERE `auditContentId` = 1;";
$preparedQuery = $conn->prepare($query);
$preparedQuery->execute();
$result=$preparedQuery->fetch(PDO::FETCH_ASSOC);
echo "<p>".$result["auditContentText"]."</p>";
