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
$sql = "SELECT id, 商品名, 種類, URL, 色, 値段 FROM 家具";
$result = $conn->query($sql);

$家具 = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $家具[] = $row;
    }
}
$budget = isset($_GET['budget']) ? htmlspecialchars($_GET['budget']) : '未選択';
    $theme = isset($_GET['theme']) ? htmlspecialchars($_GET['theme']) : '未選択';
    $lifestyle = isset($_GET['lifestyle']) ? htmlspecialchars($_GET['lifestyle']) : '未選択';
$conn->close();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>部屋のコーディネート結果</title>
    <style>
        /* 全体のスタイル */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        /* ヘッダー */
        header {
            background-color: #009879;
    		color: #fff;
    		padding: 15px 20px;
    		display: flex;
    		justify-content: space-between;
    		align-items: center;
    		height: 60px; /* 高さを固定 */
    		box-sizing: border-box; /* paddingを含めたサイズを指定 */

        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* メイン */
        main {
            padding: 20px;
            text-align: center;
        }

        .hero {
            background-color: #d9f1ee;
            padding: 10px 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .hero h2 {
            margin: 0;
            font-size: 28px;
            color: #005f50;
        }

        /* コンテンツエリア */
        .content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
        }

        .content img {
            width: 100%;
            max-width: 450px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* 見取り図と部屋イメージを含むコンテナ */
        .room-container {
            display: flex;
            flex-direction: column; /* 縦方向に配置 */
            align-items: center;
            gap: 20px; /* 画像間のスペース */
        }

        /* 小さい見取り図 */
        .small-room {
            width: 80%; /* 元のサイズを縮小 */
            max-width: 300px; /* 最大幅を指定 */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* 部屋のイメージ画像 */
        .imageroom {
            width: 100%; /* コンテナに合わせて幅を調整 */
            max-width: 350px; /* 最大幅を指定 */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* 家具選択 */
        .furniture-container {
            flex: 1;
            text-align: left;
        }
	.image-container {
        position: relative; /* テキストを画像の上に配置するために必要 */
        display: inline-block; /* 画像とテキストを一緒に扱う */
        margin-bottom: 20px; /* 画像同士の間隔を調整 */
    }

    /* テキスト部分 */
    .image-text {
        position: absolute;
        top: -50px; /* テキストの位置を調整 */
        left: 50%; /* 中央寄せ */
        transform: translateX(-50%); /* 中央寄せ */
         /* 背景を半透明にして読みやすくする */
        color: #fff; /* 文字色 */
        padding: 5px 10px; /* テキストの周りの余白 */
        border-radius: 5px; /* 角を丸める */
        font-size: 18px; /* 文字サイズ */
    }
    

        select {
            width: 500px;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
.stepper-container {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .stepper-button {
            padding: 5px 10px;
            cursor: pointer;
        }
        numselect {
            width: 70px;
            text-align: center;
        }

        /* 個数選択 */
        #quantitySelect {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        a.button {
            display: inline-block;
            padding: 10px 200px;
            background-color: #009879;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            visibility: hidden;
        }

        a.button.show {
            visibility: visible;
        }

        a.button:hover {
            background-color: #007960;
        }


        /* フッター */
        footer {
            background-color: #004c4c;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            margin-top: 20px;
        }
	

        /* 値段比較エリア */
        #comparisonImages {
            margin-top: 40px;
            text-align: left;
        }

        #comparisonImages h4 {
            font-size: 24px;
            color: #005f50;
        }

        #comparisonImages div {
            margin-bottom: 20px;
        }

        #comparisonImages img {
            width: 200px;
            margin-right: 20px;
            cursor: pointer;
        }

        #comparisonImages p {
            font-size: 18px;
            color: #333;
        }

    </style>
</head>
<body>
    <!-- ヘッダー -->
    <header>
        <h1><img src="rogo.png" alt="rogo" style="width: 300px; height: 200px;"></h1>
	  	

        <nav>
            <ul>
                <li><a href="#">ホーム</a></li>
                <li><a href="#">商品一覧</a></li>
                <li><a href="#">店舗情報</a></li>
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

    <!-- メイン -->
    <main>
        <div class="hero" style="height: 300px; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 20px;">
	<h2>
       <div style="height: 100px; display: flex; align-items: center; gap: 10px; justify-content: center;">
    <img src="rogo.png" alt="rogo" style="width: 300px; height: 300px;">
    <p style="margin: 0;">結果</p>
</div>
<div id="userSelections">
    <h3>選択内容</h3>
    <p>予算: <span id="budgetDisplay">未選択</span>
    ライフスタイル: <span id="lifestyleDisplay">未選択</span>
    部屋のテーマ: <span id="themeDisplay">未選択</span></p>
</div>
</div>
      <p>エリアをクリックして家具を選んでください。</p>
        </div>

        <!-- コンテンツエリア -->
        <div class="content">
            <!-- 左側: 見取り図 -->
            <div class="room-container">
		  <img src="model.png" class="small-room" usemap="#roomMap" alt="2d">
<img src="Capture_1.gif" class="small-room" alt="3d">
            
                
                <map name="roomMap">
                    <area shape="rect" coords="50,50,200,200" href="#" alt="洋室" data-target="椅子">
                    <area shape="rect" coords="250,50,400,200" href="#" alt="クローゼット" data-target="ベッド">
                    <area shape="rect" coords="50,250,400,400" href="#" alt="玄関" data-target="テーブル">
                </map>
            </div>

            <!-- 右側: 家具選択 -->
            <div class="furniture-container" id="furnitureContainer" style="display: none;">
                <h3 id="furnitureTitle"></h3>
                <select id="furnitureSelect"></select>
                <p>金額: <span id="furniturePrice"></span></p>
                <label for="quantitySelect">個数:</label>
                <select id="quantitySelect">
                    <option value="1">1個</option>
                    <option value="2">2個</option>
                    <option value="3">3個</option>
                    <option value="4">4個</option>
                    <option value="5">5個</option>
                </select>
                <img id="furnitureImage" src="" alt="家具画像" style="display: none;"> 
    </div>

<div>

	<p> カラー：ホワイトウォッシュ</p>
    <img src="ボタン.png" alt="ボタン"style="width: 350px; height: 100px;">

    <img src="ボタン.jpg" alt="ボタン"style="width: 350px; height: 400px;">



</div>

</div>


        <!-- 最初のページに戻るボタン -->
        <a href="index.html" class="button">最初のページに戻る</a>
        <!-- 値段比較エリア -->
        <div id="comparisonImages" style="display: none;">
            <h4><span style="margin-left: 100px;">値段比較<span style="margin-left: 420px;"></span>使われている家具一覧</h4>
            <div id="expensiveFurniture"> 
                <h5>高い家具</h5>
                <img id="expensiveImage" src="" alt="高い家具" style="cursor: pointer;width: 350px;">	
<div class="image-container">
    <a href="https://www.nitori-net.jp/ec/product/7224062/" target="_blank" style="text-decoration: none;">
        <p class="image-text">ラグ</p>
        <img src="ragu.jpg" alt="ラグ" style="width: 350px;">
    </a>
</div>


		<div class="image-container">
    		<p class="image-text">カーテン</p>
    		<img src="カーテン.jpg" alt="カーテン" style="width: 350px;">
		</div>

		
                <p id="expensivePrice"></p>
            </div>
            <div id="cheapFurniture">
                <h5>安い家具</h5>
                <img id="cheapImage" src="" alt="安い家具" style="cursor: pointer; width: 350px;">
<div class="image-container">
    		<p class="image-text">椅子</p>
    		<img src="椅子.jpg" alt="椅子" style="width: 350px; height: 350px;">

		</div>
<div class="image-container">
    		<p class="image-text">机</p>
    		<img src="机.jpg" alt="机"style="width:350px;">
		</div>



                <p id="cheapPrice"></p>
            </div>
        </div>
    </main>

    <!-- フッター -->
    <footer>
        <p>&copy; 2024 Nitori. All Rights Reserved.</p>
    </footer>

    <!-- スクリプト -->
    <script>
        const furnitureData = <?php echo json_encode($家具); ?>;
        const furnitureContainer = document.getElementById('furnitureContainer');
        const furnitureSelect = document.getElementById('furnitureSelect');
        const furnitureTitle = document.getElementById('furnitureTitle');
        const furnitureImage = document.getElementById('furnitureImage');
        const furniturePrice = document.getElementById('furniturePrice');
        const quantitySelect = document.getElementById('quantitySelect');
        const comparisonImages = document.getElementById('comparisonImages');
        const expensiveImage = document.getElementById('expensiveImage');
        const expensivePrice = document.getElementById('expensivePrice');
        const cheapImage = document.getElementById('cheapImage');
        const cheapPrice = document.getElementById('cheapPrice');


        document.querySelectorAll('area').forEach(area => {
            area.addEventListener('click', function (e) {
                e.preventDefault();
                const type = this.dataset.target;

                const filteredFurniture = furnitureData.filter(item => item['種類'] === type);
                furnitureSelect.innerHTML = ''; // 既存の選択肢をリセット
                filteredFurniture.forEach(f => {
                    const option = document.createElement('option');
                    const imageUrl = "furniture/" + f['商品名'] + "-" + f['色'] + ".jpg"; 
                    option.value = imageUrl;
                    option.textContent = `${f['商品名']}（${f['色']}） - ${f['値段']}円`;
                    option.dataset.target = f['種類']; // 追加: 種類をオプションに保存
                    option.dataset.url = f['URL']; // 追加: URLをオプションに保存
                    furnitureSelect.appendChild(option);
                });

                furnitureTitle.textContent = `${type}の家具を選択`;
                furnitureContainer.style.display = 'block';
                displayFurnitureImage();

                // 価格比較
                const sortedFurniture = filteredFurniture.sort((a, b) => a['値段'] - b['値段']);
                let expensiveFurniture = null;
                let cheapFurniture = null;

                // 選択した家具より高い最も近い家具
                const selectedPrice = parseInt(furnitureSelect.selectedOptions[0].textContent.split(" - ")[1].replace('円', '').replace(',', ''));
                for (let i = 0; i < sortedFurniture.length; i++) {
                    if (sortedFurniture[i]['値段'] > selectedPrice) {
                        expensiveFurniture = sortedFurniture[i];
                        break;
                    }
                }

                // 選択した家具より安い最も近い家具
                for (let i = sortedFurniture.length - 1; i >= 0; i--) {
                    if (sortedFurniture[i]['値段'] < selectedPrice) {
                        cheapFurniture = sortedFurniture[i];
                        break;
                    }
                }

                // 高い家具と安い家具を比較エリアに表示
                if (expensiveFurniture) {
                    expensiveImage.src = "furniture/" + expensiveFurniture['商品名'] + "-" + expensiveFurniture['色'] + ".jpg";
                    expensivePrice.textContent = expensiveFurniture['値段'] + "円";
                }
                if (cheapFurniture) {
                    cheapImage.src = "furniture/" + cheapFurniture['商品名'] + "-" + cheapFurniture['色'] + ".jpg";
                    cheapPrice.textContent = cheapFurniture['値段'] + "円";
                }

                comparisonImages.style.display = 'block';
                showReturnButton(); // 比較画像が表示された後にボタンを表示
            });
        });

        furnitureSelect.addEventListener('change', displayFurnitureImage);
        quantitySelect.addEventListener('change', updatePrice);

        function displayFurnitureImage() {
            const selectedImage = furnitureSelect.value;
            const selectedOption = furnitureSelect.selectedOptions[0];
            const selectedPrice = parseInt(selectedOption.textContent.split(" - ")[1].replace('円', '').replace(',', ''));
            const url = selectedOption.dataset.url; // 追加: URLを取得
	  console.log("Selected Price: ", selectedPrice);  // ここで価格が正しいか確認
            furnitureImage.src = selectedImage;
            furnitureImage.style.display = 'block';
            updatePrice(selectedPrice); // 金額を更新

            // 画像クリックでURLに遷移するようにする
            furnitureImage.onclick = function() {
                window.location.href = url;
            };
        }

        function updatePrice(selectedPrice = 0) {
            const quantity = parseInt(quantitySelect.value);;
	console.log("数量: ", quantity);  
            const totalPrice = selectedPrice * quantity; // 
	console.log(totalPrice);
            furniturePrice.textContent = totalPrice.toLocaleString() + "円";
        }

        // 最初のページに戻るボタンの表示
        function showReturnButton() {
            document.querySelector('a.button').classList.add('show');
        }
// ページが読み込まれた時に、選択した内容を表示する関数
function displayUserSelections() {
    // GETパラメータから予算、ライフスタイル、部屋のテーマを取得
    const budget = '<?php echo $budget; ?>';
    const theme = '<?php echo $theme; ?>';
    const lifestyle = '<?php echo $lifestyle; ?>';
    
    // 取得した値を表示
    document.getElementById('budgetDisplay').textContent = budget !== '未選択' ? budget : '未選択';
    document.getElementById('lifestyleDisplay').textContent = lifestyle !== '未選択' ? lifestyle : '未選択';
    document.getElementById('themeDisplay').textContent = theme !== '未選択' ? theme : '未選択';
}

// ページが読み込まれた際に選択内容を表示
window.onload = function() {
    displayUserSelections();
};

    </script>
</body>
</html>

