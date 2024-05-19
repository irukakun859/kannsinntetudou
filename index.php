<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サインイン</title>
    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #ff7e5f, #feb47b, #ff6b6b, #ffc371, #ffcc00, #12c2e9, #c471ed, #f64f59);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333; /* テキストの色を変更 */
            font-size: 24px;
            margin-bottom: 20px;
            text-shadow: none; /* テキストシャドウを削除 */
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn {
            background-color: #0078d4;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #005a9e;
        }

        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <main>
            <h1>関神鉄道へようこそ</h1>
            <form action="https://account.microsoft.com/auth/complete-signin-oauth" method="GET">
                <div class="input-group">
                    <label for="username">ユーザー名</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">サインイン</button>
            </form>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> 関神鉄道</p>
        </footer>
    </div>
</body>
</html>
