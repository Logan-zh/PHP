<?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=files";
    $pdo = new pdo($dsn,'root','');
    date_default_timezone_set('asia/taipei');

function all($table ,$arg = 1){
    global $pdo;
    $sql = "select * from `$table` where ";
    if(is_array($arg)){
        foreach($arg as $key => $value){
            $tmp[] = sprintf("`%s` = '%s'",$key,$value);
        }
        $sql .= implode('&&',$tmp);
    }else{
        $sql .= $arg;
    }
    $rows = $pdo->query($sql)->fetchAll();
    return $rows;
}
function find($table ,$arg){
    global $pdo;
    $sql = "select * from `$table` where ";
    if(is_array($arg)){
        foreach($arg as $key => $value){
            $tmp[] = sprintf("`%s` = '%s'",$key,$value);
        }
        $sql .= implode('&&',$tmp);
    }else{
        $sql .= "`id` = '$arg'";
    }
    $rows = $pdo->query($sql)->fetch();
    return $rows;
}
function nums($table ,...$arg){
    global $pdo;
    $sql = "select count(*) from `$table` where ";
    if(is_array($arg)){
        foreach($arg as $key => $value){
            $tmp[] = sprintf("`%s` = '%s'",$key,$value);
        }
        $sql .= implode('&&',$tmp);
    }else{
        $sql .= $arg;
    }
    $rows = $pdo->query($sql)->fetch();
    return $rows;
}
function save($table ,$arg){
    global $pdo;
    if(!empty($arg['id'])){
        foreach($arg as $key => $value){
                $tmp[] = sprintf("`%s` = '%s'",$key,$value);
                $tmp2 = implode(",",$tmp);
        }
        $sql = "update `$table` set $tmp2 where `id`= '".$arg['id']."'";
    }else{
            foreach($arg as $key => $value){
                $keys[] = sprintf("`%s`",$key);
                $key = implode(",",$keys);
                $values[] = sprintf("'%s'",$value);
                $value = implode(",",$values);
            }
        $sql = "insert into `$table` ($key) values ($value)";
    }
    $resoult = $pdo->exec($sql);
    echo $sql;
    return $resoult;
}
function del($table ,$arg){
    global $pdo;
    $sql = "delete from `$table` where `id` = '$arg'";
    $resoult = $pdo->exec($sql);
    return $resoult;

}
function q($arg){
    global $pdo;
    $sql = $arg;
    $rows = $pdo->query($sql)->fetchAll();
    return $rows;
}
function to($url){
    header('location:'.$url);
}

?>