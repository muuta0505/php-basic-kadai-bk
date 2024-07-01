<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
        <?php
        function sort_2way($nums, $array) {   
            if($array) {
                echo "昇順にソートしました。<br>";
                sort($nums);
                foreach($nums as $num) {
                    echo $num . '<br>';
                }
            }else {
                echo "降順にソートしました。<br>";
                rsort($nums);
                foreach($nums as $num) {
                    echo $num . '<br>';
                }
            }
        }

        $nums = [15, 4, 8, 23, 10];
        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
        </p>
</body>

</html>
