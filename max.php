<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form method="get" action="max.php">
        input number : <input type="text" name="count">
        <input type="submit" value="ok!">
    </form>

    <?php
    if (isset($_GET['count']) && $_GET['count'] !== "") {
    $count = (int)$_GET['count'];
    $nums = [];

    for ($i = 0; $i < $count; $i++) {
    $nums[] = rand(1, 100);
    }

    echo implode(" ", $nums) . "<br>";
    echo "maximum = " . max($nums);
    }
    ?>
</body>
</html>