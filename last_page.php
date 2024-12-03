<?php
session_start();
$roomSize = $_SESSION['roomSize'] ?? '不明';
$selectedImage = htmlspecialchars($_POST['selectedImage']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
</head>
<body>
    <h1>結果</h1>
    <p>これがおすすめです！（仮） </p>
    <img src="<?php echo $selectedImage; ?>" alt="コーディネート後の部屋" style="width:300px; height:auto;">

    <a href="first_page.php" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px;">最初のページに戻る</a>
</body>
</html>
