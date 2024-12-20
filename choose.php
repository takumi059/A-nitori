<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ニトリ風テンプレート</title>
    <style>
        /* 全体のスタイル */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8; /* 背景はホワイト系 */
            color: #333;
        }

        /* ヘッダー */
        header {
            background-color: #009879; /* ニトリ風のグリーン */
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        /* メインコンテンツ */
        main {
            padding: 20px;
            text-align: center;
        }

        .hero {
            background-color: #d9f1ee; /* 淡いグリーン */
            padding: 50px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .hero h2 {
            margin: 0;
            font-size: 32px;
            color: #005f50; /* 濃いグリーン */
        }

        .hero p {
            font-size: 18px;
            color: #333;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #009879;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: #007960; /* 少し濃いグリーン */
        }

        /* セレクトフォーム */
        .selection-section {
            background-color: #fff;
            padding: 30px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            max-width: 600px;
            text-align: left;
        }

        .selection-section h3 {
            margin-bottom: 20px;
            color: #009879;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        select, input[type="number"], button {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            background-color: #009879;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #007960;
        }

        /* フッター */
        footer {
            background-color: #004c4c; /* ニトリ風のブルーグリーン */
            color: #fff;
            text-align: center;
            padding: 15px 20px;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>ニトリ風ホームページ</h1>
        <nav>
            <ul>
                <li><a href="#">ホーム</a></li>
                <li><a href="#">商品一覧</a></li>
                <li><a href="#">店舗情報</a></li>
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="hero">
            <h2>お部屋の好みを選択</h2>
            <p>あなたにぴったりのインテリアを提案します。</p>
        </div>

        <section class="selection-section">
            <h3>お部屋の条件を選択してください</h3>
            <form id="preferenceForm" action="last_page.php" method="GET">
                <!-- 予算選択 -->
                <label for="budget">予算（¥）:</label>
                <select id="budget" name="budget">
                    <option value="10万円">10万円</option>
                    <option value="12万円">12万円</option>
                    <option value="140000">14万円</option>
                    <option value="160000">16万円</option>
                    <option value="180000">18万円</option>
                    <option value="20万円">20万円</option>
                </select>

                <!-- 部屋のテーマ -->
                <label for="theme">部屋のテーマ:</label>
                <select id="theme" name="theme">
                    <option value="シンプル">シンプル</option>
                    <option value="モダン">モダン</option>
                    <option value="natural">ナチュラル</option>
                    <option value="wamon">和モダン</option>
                    <option value="vintage">ヴィンテージ</option>
                    <option value="feminine">フェミニン</option>
                </select>

                <!-- ライフスタイル -->
                <label for="lifestyle">ライフスタイル:</label>
                <select id="lifestyle" name="lifestyle">
                    <option value="ゲームが好き">ゲームが好き</option>
                    <option value="読書が好き">読書が好き</option>
                    <option value="cooking">料理が好き</option>
                    <option value="working">在宅ワーク</option>
                    <option value="fitness">フィットネスが好き</option>
                    <option value="pets">ペットがいる</option>
                    <option value="music">音楽が好き</option>
                    <option value="minimalist">ミニマリスト</option>
                    <option value="plants">植物を育てたい</option>
                    <option value="kids">子供がいる</option>
                </select>

                <button type="submit">送信</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Nitori. All Rights Reserved.</p>
    </footer>
</body>
</html>
