<?php
$pdo = new pdo('mysql:host=127.0.0.1;charset=utf8;dbname=students','root','');
$rows = $pdo->query('select * from students')->fetchall();

?>
<style>
    table{
        border-collapse:collapse;
    }
    td{
        border:1px solid;
    }

</style>
<table>
<?php
    foreach($rows as $r){
    echo "<tr>
        <td>$r[0]</td>
        <td>$r[3]</td>
        <td>$r[5]</td>
        <td>$r[6]</td>
        <td>$r[7]</td>
        </tr>";
    }
?>
</table>


?>