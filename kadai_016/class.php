<!DOCTYPE html>
<html lang="ja">

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function set_price(string $price) {
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
        $potato = new Food('potato', 250);

        print_r($potato);
        ?>
    </p>
    <p>
        <?php
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function set_height(string $height) {
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }

                public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        $dog = new Animal('dog', 60, 5000);

        print_r($dog);
        ?>
    </p>
    <p>
        <?php
        $potato->show_price() . '<br>';
        $dog->show_height();
        ?>
    </p>
</body>

</html>