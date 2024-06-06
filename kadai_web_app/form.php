<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>社員情報入力フォームを作成しよう</title>
 </head>
 
<body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
        <label for="textbox1">社員名</label>
        <input type="text" name="employee_name" required><br><br>
        <label for="textbox2">年齢</label>
        <input type="text" name="employee_age" required><br><br>
        <label for="selectbox">所属部署</label>
        <select id="selectbox" name="department" required>
            <option value="option1">開発部</option>
            <option value="option2">営業部</option>
            <option value="option3">人事部</option>
        </select><br><br>
        <input type="submit" value="送信">
    </form>
</body>
 
</html>
