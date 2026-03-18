<?php
$month = isset($_GET['m']) ? $_GET['m'] : date('m');
$year  = isset($_GET['y']) ? $_GET['y'] : date('Y');
$today = date('j'); 
$isCurrentMonth = ($month == date('m') && $year == date('Y'));

$date = new DateTime("$year-$month-01");
$daysInMonth = $date->format('t');
$firstDayIdx = $date->format('w');
$monthName   = $date->format('F');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="calender.css">
</head>
<body>

    <h2><?php echo "$monthName $year"; ?></h2>

    <table class="calendar-table">
        <thead>
            <tr>
                <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                for ($i = 0; $i < $firstDayIdx; $i++) {
                    echo "<td></td>";
                }

                $currentDay = 1;
                while ($currentDay <= $daysInMonth) {
                    if (($i % 7) == 0 && $i != 0) {
                        echo "</tr><tr>";
                    }

                    $class = ($isCurrentMonth && $currentDay == $today) ? "class='today'" : "";
                    
                    echo "<td $class>$currentDay</td>";

                    $currentDay++;
                    $i++;
                }

                while (($i % 7) != 0) {
                    echo "<td></td>";
                    $i++;
                }
                ?>
            </tr>
        </tbody>
    </table>

</body>
</html>