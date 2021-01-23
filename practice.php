<?php
      class Fruit{
          public $name;
    //      public $color;

    //      function set_name($name){
    //          $this->name = $name;
    //      }
    //      function get_name(){
    //          return $this->name;     
    //      }

    // // }
    // //     $apple = new Fruit();
    // //     $apple->set_name('apple');

    // //     echo $apple->get_name();

        function __construct($name){
            $this->name = $name;
        }

        function __destruct(){
            echo "The Fruit is {$this->name}.";
        }
    }/*..*/
        $apple = new Fruit("apple");
?>