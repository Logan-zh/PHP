<?php
    interface Event{
        public function run();
        public function shout();
        public function jump();
    }
    interface Life{
        public function life();
    }

    class Pet{
        protected $name;
        protected $hairColor;
        protected $feet;
        public function __construct($name,$hair,$feet){
            $this->name = $name;
            $this->hairColor = $hair;
            $this->feet = $feet;
        }
        public function name(){
            return $this->name;
        }
        public function hair(){
            return $this->hairColor;
        }
        public function feet(){
            return $this->feet;
        }
    }
    class Dog extends Pet implements Event{
        public function run(){
            echo '狗在跑';
        }
        public function shout(){
            echo '狗在叫';
        }
        public function jump(){
            echo '狗在跳';
        }
    }
    class Bird extends Pet implements Event,Life{
        public function run(){
            echo '鳥在跑';
        }
        public function shout(){
            echo '鳥在叫';
        }
        public function jump(){
            echo '鳥在跳';
        }
        public function life(){
            echo '鳥可以活10年';
        }
    }

    $dog = new Dog('dog','yellow',4);
    echo $dog->name().'<br>';
    echo $dog->hair().'<br>';
    echo $dog->feet().'<br>';
    echo $dog->jump().'<br>';
    echo $dog->shout().'<br>';

    $bird = new Bird('bird','green',2);
    echo $bird->name().'<br>';
    echo $bird->hair().'<br>';
    echo $bird->feet().'<br>';
    echo $bird->jump().'<br>';
    echo $bird->life().'<br>';
?>