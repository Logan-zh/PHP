<?php
    class Pet{
        protected $hairColor;
        public $feet;
        public function __construct($h,$f){
            $this->hairColor = $h;
            $this->feet = $f;
        }
        public function sound(){
            return '旺旺';
        }
        public function hair(){
            return $this->hairColor;
        }
        public function setHairColor($color){
            $this->hairColor = $color;
        }
    }

    $dog = new Pet('black',4);
    echo $dog->hair();
    echo '<br>';
    echo $dog->feet;
    echo '<br>';
    echo $dog->sound();
?>
<hr>
<?php
    class Dog extends Pet{
        public function run(){
            return '狗跳起來了';
        }
    }
    $cat = new Dog('yellow',4);
    echo $cat->hair();
    echo '<br>';
    echo $cat->sound();
    echo '<br>';
    echo $cat->run();
?>
<hr>
<?php
    class Dog2 extends Dog{
        public function run(){
            return '狗又跳起來了';
        }
    }
    $dogy = new Dog2('yellow',4);
    $dogy->setHairColor('pink');
    echo $dogy->hair();
    echo '<br>';
    echo $dogy->sound();
    echo '<br>';
    echo $dogy->run();
?>