<?php
    //クラスの宣言
    class Animal {
        public $cry = 'bowbow!';
        
        function bow() {
            echo $this->cry .PHP_EOL;
        }
    }
    
    class Dog extends Animal {
        public $cry = 'わんわん！';
    }
    
    class Cat extends Animal {
        public $cry = 'にゃんにゃん！';
    }
    
    //インスタンスの生成
    $animal_1 = new Dog();
    $animal_2 = new Cat();
    //インスタンスの使用
    $animal_1->bow();
    $animal_2->bow();
?>