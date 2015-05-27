<head>
    <meta charset="utf-8">
    <title>Создание дома</title>
</head>
<body>
<strong>Введите данные нового дома</strong>
<?php
$office = new K1_office();
$list=$office->get_list_my();
?>
<form name="ok1" method="post" enctype="multipart/form-data">
    К какому дому относится офис:
    <select name = "checkname">
        <?php
        foreach ($list as $k=>$v)
        {
            ?>
            <option value="<?=$v['id']?>"><?=$v['name']?></option>
        <?php
        }
        ?>
    </select><br>

    Название офиса: <input name="text" maxlength="25" size="40" value=""><br>
    <input type="submit" name="ok" value="Добавить">
</form>
</body>
<?php

$k1_office = new K1_office();
$k1_office->create($_POST["text"],$_POST["checkname"]);

echo '<pre>';
print_r($_POST);
echo '<pre>';
$_POST["text"]="";
?>
