<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP kadai_016
     </title>
 </head>

 <body>
    <p>
      <?php
      //クラスを定義する
      class Food{
        //プロパティを定義
        private $name;
        private $price;

        //メソッドの定義
        public function show_price() {
          echo $this->price.'<br>';
      }

        //コンストラクタを定義
        public function __construct(string $name, int $price){
          $this->name=$name;
          $this->price=$price;
        }
      }
      //インスタンス化する
      $food = new Food('potato',250);

      //インスタンス$foodの各プロパティの値を出力する
      print_r($food);

      //改行する
      echo '<br>';

      class Animal{
        //プロパティを定義
        private $name;
        private $height;
        private $weight;

        //メソッドの定義
        public function show_height() {
          echo $this->height;
      }

        //コンストラクタを定義
        public function __construct(string $name, int $height, int $weight){
          $this->name=$name;
          $this->height=$height;
          $this->weight=$weight;          
        }
      }
      //インスタンス化する
      $animal = new Animal('dog',60,5000);

      //インスタンス$animalの各プロパティの値を出力する
      print_r($animal);

      //改行する
      echo'<br>';

      //メソッド$foodの$priceの値を出力する
      echo $food->show_price();

      //メソッド$animalの$heightの値を出力する
      echo $animal->show_height();
      ?>
 </body>
 
 </html>