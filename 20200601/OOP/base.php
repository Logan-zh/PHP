<?php
$in = new DatabaseConnection('invoice');
class DatabaseConnection{
    public $dsn = "mysql:host=localhost;charset=utf8;dbname=";
    public $pdo;
    public function __construct($dbname){
        $this->dsn .= $dbname;
        $this->pdo = new pdo($this->dsn,'root','');
        date_default_timezone_set('asia/taipei');
    }
    public function all($table ,$arg = 1,$s = pdo::FETCH_BOTH){
        $sql = "select * from `$table` where ";
        if(is_array($arg)){
            foreach($arg as $key => $value){
                $tmp[] = sprintf("`%s` = '%s'",$key,$value);
            }
            $sql .= implode('&&',$tmp);
        }else{
            $sql .= $arg;
        }
        $rows = $this->pdo->query($sql)->fetchAll($s);
        return $rows;
    }
    public function find($table ,$arg){
        $sql = "select * from `$table` where ";
        if(is_array($arg)){
            foreach($arg as $key => $value){
                $tmp[] = sprintf("`%s` = '%s'",$key,$value);
            }
            $sql .= implode('&&',$tmp);
        }else{
            $sql .= "`id` = '$arg'";
        }
        $rows = $this->pdo->query($sql)->fetch();
        return $rows;
    }
    public function nums($table ,$arg=1){
        $sql = "select count(*) from `$table` where ";
        if(is_array($arg)){
            foreach($arg as $key => $value){
                $tmp[] = sprintf("`%s` = '%s'",$key,$value);
            }
            $sql .= implode('&&',$tmp);
        }else{
            $sql .= $arg;
        }
        $rows = $this->pdo->query($sql)->fetchColumn();
        echo $sql;
        return $rows;
    }
    public function save($table ,$arg){
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
        $resoult = $this->pdo->exec($sql);
        echo $sql;
        return $resoult;
    }
    public function del($table ,$arg){
        $sql = "delete from `$table` where `id` = '$arg'";
        $resoult = $this->pdo->exec($sql);
        return $resoult;
    
    }
    public function q($arg){
        $sql = $arg;
        $rows = $this->pdo->query($sql)->fetchAll();
        return $rows;
    }
    public function to($url){
        header('location:'.$url);
    }
}

?>