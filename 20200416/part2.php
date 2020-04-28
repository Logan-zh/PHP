<h4>字串'好的，中國武漢肺炎'，請將'武漢肺炎'四個字放大並變色</h4>

<?php
    $str = '好的，中國武漢肺炎';
    $a = str_replace('武漢肺炎','<span style="font-size:6em;color:red;">武漢肺炎</span>',$str);
    echo $a.'<br>';

?>