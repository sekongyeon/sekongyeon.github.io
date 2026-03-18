<html>
<head><meta charset="utf-8"></head>
<body>

원통 : 반지름과 높이를 입력으로 받아서 체적을 출력한다.<br>

반지름 : <?php echo $_POST["radius"]; ?><br>
높이  : <?php echo $_POST["height"]; ?><br>
체적 : <?php echo $_POST["radius"] ** 2 * $_POST["height"] * M_PI; ?><br>

</body>
</html>