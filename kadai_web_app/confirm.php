<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = htmlspecialchars($_POST['employee_name']);
    $employee_age = htmlspecialchars($_POST['employee_age']);
    $department = htmlspecialchars($_POST['department']);

    // セレクトボックスの値を表示名に変換する対応表
$selectbox_options = [
    "option1" => "開発部",
    "option2" => "営業部",
    "option3" => "人事部"
];

$selectbox_display = isset($selectbox_options[$department]) ? $selectbox_options[$department] : "オプションが選択されていません";
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>社員情報入力フォームを作成しよう_確認画面</title>
</head>

<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $employee_name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $employee_age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $selectbox_display; ?></td>
        </tr>
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
</body>

</html>
