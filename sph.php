<html>
<head><meta charset="utf-8"></head>
<body>

구 : 반지름을 입력으로 받아서 체적을 출력한다.<br>

반지름 : <?php echo $_POST["radius"]; ?><br>
체적 : <?php echo (4/3) * M_PI * ($_POST["radius"] ** 3); ?><br>

</body>
</html>