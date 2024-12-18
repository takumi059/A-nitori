<?php
// データベース接続情報
$servername = "localhost";
$username = "root";
$password = "0509";
$dbname = "商品";

// データベース接続
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗: " . $conn->connect_error);
}

// 家具情報を取得するクエリ
$sql = "SELECT id, 商品名, URL, 色 FROM 家具";
$result = $conn->query($sql);

$家具 = [];

if ($result->num_rows > 0) {
    // 取得した家具情報を配列に格納
    while ($row = $result->fetch_assoc()) {
        $家具[] = $row;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
    <style>
        img {
            width: 300px;
            height: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>結果</h1>
    <form>
        <label for="furnitureSelect">家具を選んでください:</label>
        <select id="furnitureSelect">
            <option value="">選択してください</option>
            <!-- PHPで動的に家具の選択肢を表示 -->
            <?php foreach ($家具 as $item): ?>
                <?php
                // 商品名と色を基に画像ファイル名を生成
                $imageFileName = str_replace(' ', '-', htmlspecialchars($item['商品名'])) . '-' . urlencode(htmlspecialchars($item['色'])) . '.jpg';
                ?>
                <option value="<?php echo $item['id']; ?>" data-image="furniture/<?php echo $imageFileName; ?>" data-url="<?php echo htmlspecialchars($item['URL']); ?>">
                    <?php echo htmlspecialchars($item['商品名']); ?>（<?php echo htmlspecialchars($item['色']); ?>）
                </option>
            <?php endforeach; ?>
        </select>
    </form>

    <div id="furnitureDetails">
        <p>選択した家具の画像:</p>
        <img id="selectedFurnitureImage" src="" alt="選択された家具の画像" style="display:none;">
    </div>

    <a href="index.html">最初のページに戻る</a>

    <script>
        document.getElementById('furnitureSelect').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const imageSrc = selectedOption.getAttribute('data-image');
            const url = selectedOption.getAttribute('data-url');
            const imageElement = document.getElementById('selectedFurnitureImage');

            if (imageSrc) {
                imageElement.src = imageSrc;
                imageElement.style.display = 'block';

                // 画像をクリックしたらURLに遷移
                imageElement.onclick = function() {
                    window.location.href = url;
                };
            } else {
                imageElement.style.display = 'none';
            }
        });
    </script>
</body>
</html>

