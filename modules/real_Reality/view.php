<?php



//$db ->quote($_REQUEST['rooms']); // конкатенация

$reality = new real_Reality();
$list = $reality->getListBean($_GET['rooms'],$_GET['wc']);

echo '<pre>';
print_r($list);
echo '</pre>';

?>
<table border="1">
    <tr>
        <th>Название здания</th>
        <th>Адрес</th>
    </tr>
<?php
foreach($list as $k=>$v)
{
    ?>
    <tr>
        <td><?=$v['name']?></td>
        <td><?=$v['address']?></td>
    </tr>
<?php
}
?>
</table>

<table border="1">
    <tr>
        <th>Название здания</th>
        <th>Адрес</th>
    </tr>
    <tr>
        <td>Валентинка</td>
        <td>Пр-т васильева</td>
    </tr>
    <tr>
        <td>Бизнес центр Аврора</td>
        <td>Пр-т гусина</td>
    </tr>
</table>
<?php

echo '<pre>';
//print_r(create_guid());
echo '</pre>';

echo '<pre>';
//print_r($_GET);
echo '</pre>';

//echo 123;