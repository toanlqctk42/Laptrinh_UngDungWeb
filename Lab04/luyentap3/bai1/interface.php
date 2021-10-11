<?php
// Interface definition
    interface Animal {
        public function makeSound();
    }
        // Class definitions
    class Cat implements Animal {
        public function makeSound() {
        echo " Meow ";
        }
    }

    class Dog implements Animal {
        public function makeSound() {
        echo " Bark ";
        }
    }

    class Mouse implements Animal {
        public function makeSound() {
        echo " Squeak ";
        }
    }
?>