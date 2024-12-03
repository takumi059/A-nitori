<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomSize = htmlspecialchars($_POST['roomSize']);
    session_start();
    $_SESSION['roomSize'] = $roomSize; // セッションに部屋の広さを保存
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画像を選択</title>
</head>
<body>
    <h1>画像を選んでください</h1>
    <form action="last_page.php" method="POST">
        <div>
            <input type="radio" id="image1" name="selectedImage" value="images/image1.jpg" required>
            <label for="image1">
                <img src="images/image1.jpg" alt="部屋1" style="width:200px; height:auto;">
            </label>
        </div>
        <div>
            <input type="radio" id="image2" name="selectedImage" value="images/image2.jpg">
            <label for="image2">
                <img src="images/image2.jpg" alt="部屋2" style="width:200px; height:auto;">
            </label>
        </div>
        <div>
            <input type="radio" id="image3" name="selectedImage" value="images/image3.jpg">
            <label for="image3">
                <img src="images/image3.jpg" alt="部屋3" style="width:200px; height:auto;">
            </label>
        </div>
        <button type="submit">次へ</button>
    </form>
</body>
</html>
