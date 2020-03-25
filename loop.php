<style>
    table{
        border:1px solid;
    }
    table td{
        padding:10px;
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

