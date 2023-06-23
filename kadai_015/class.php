<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>15章課題</title>
    </head>

    <body>
        <p>
            <?php
            class Food {
                // 「name」「price」プロパティ
                private $name;
                private $price;
                // 「price」プロパティの値を出力する「show_price」メソッド
                public function show_price() {
                    echo $this->price; 
                }
                // プロパティに値を代入するコンストラクタ
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }
            }



            class Animal {
                // 「name」「height」「weight」プロパティ
                private $name;
                private $height;
                private $weight;
                // 「height」 プロパティの値を出力する「show_height」メソッド
                public function show_height () {
                    echo $this->height; 
                }
                // プロパティに値を代入するコンストラクタ
                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
            }


            
            // それぞれのクラスを元に任意の引数を渡してインスタンスを作成
            $potato = new Food('potato', 250);
            $dog = new Animal('dog', 60, 5000);

            // print_r関数を使いそれぞれのインスタンスを出力
            print_r($potato);
            echo '<br>';
            print_r($dog);
            echo '<br>';

            // それぞれのクラスに作成したメソッドにアクセスしメソッドを実行
            $potato->show_price();
            echo '<br>';
            $dog->show_height();
            echo '<br>';

            ?>
        </p>

    </body>

</html>