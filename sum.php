<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sum Result</title>
</head>
<body>
    <form method="get" action="sum.php">
        input number : <input type="text" name="num" value="<?php echo isset($_GET['num']) ? $_GET['num'] : ''; ?>">
        <input type="submit" value="ok!">
    </form>

    <?php
    if (isset($_GET['num']) && $_GET['num'] !== "") {
        $n = (int)$_GET['num'];
        $even = []; 
        $even_sum = 0;
        $odd = []; 
        $odd_sum = 0;

        for ($i = 0; $i < $n - 1; $i++) {
            if ($i % 2 == 0) {
                $even[] = $i;
                $even_sum += $i;
            } else {
                $odd[] = $i;
                $odd_sum += $i;
            }
        }

        echo "<br>sum of even number less than $n :" . implode("+", $even) . "=$even_sum <br>";
        echo "sum of odd number less than $n :" . implode("+", $odd) . "=$odd_sum";
    } 
    ?>
</body>
</html>