<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta property="og:title" content="家計簿収支一覧">
    <title>家計簿 (タイトル)</title>
    <style>
        /* 全体の背景とフォント設定 */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        /* ボタンスタイルの更新 */
        .button {
            display: inline-block;
            padding: 10px 25px;
            background-color: #007bff; /* 明るめのブルー */
            color: white;
            text-decoration: none;
            border-radius: 25px; /* 丸みを帯びたデザイン */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* ボックスシャドウ追加 */
            transition: background-color 0.3s ease, transform 0.2s ease; /* ホバー時のアニメーション */
        }

        .button:hover {
            background-color: #0056b3; /* ホバー時の色 */
            transform: translateY(-2px); /* ホバー時の少し浮く動き */
        }

        /* ヘッダーボタンのレイアウト */
        .header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .header a {
            text-decoration: none;
            font-size: 16px;
        }

        /* テーブルスタイル */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #e9ecef;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        td a {
            padding: 5px 15px;
            background-color: #6c757d; /* ダークグレーの色 */
            color: white;
            border-radius: 20px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        td a:hover {
            background-color: #343a40; /* ホバー時はさらに濃い色 */
            transform: translateY(-2px);
        }

    </style>
</head>

<body>

    <div class="header">
        <a href="logout" class="button">ログアウト</a>
    </div>

    <h2>家計簿一覧 (h2)</h2>


</body>

</html>