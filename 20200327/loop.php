<style>
    table{
        border:1px solid;
    }
    table td{
        padding:10px;


    }
    .t tr:nth-child(1){
        background-color:#999;
    }
    .t td:nth-child(1){
        background-color:#999;
    }
</style>

<table>
<?php
for($i=1;$i<10;$i++){
    echo "<tr>";
    for($j=1;$j<10;$j++){
        echo "<td>".$i."×".$j."=".$i*$j."</td>";
    }
    echo "</tr>";
}
?>
</table>

<table class="t">
<?php
echo "<tr>";
for($i=0;$i<10;$i++){
    if($i == 0){
        echo "<td> </td>";
    }else{
    echo "<td>".$i."</td>";
    }
}
echo "</td>";
    for($i=1;$i<10;$i++){
    echo "<tr><td>".$i;

    for($j=1;$j<10;$j++){
        echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
}
?>
</table>
