<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>21章課題</title>
</head>

<body>
    <h2>個人情報入力フォーム</h2>
    <form action="confirmation.php" method="post">
        <table>
            <tr>
                <td>お名前</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" name="gender" value="男性">男性
                    <input type="radio" name="gender" value="女性">女性
                </td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
        </table>
        <input type="submit" value="送信する">
    </form>
</body>

</html>