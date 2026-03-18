<html>
<head><meta charset="utf-8"></head>
<body>

직육면체 : 가로, 세로, 높이를 입력으로 받아서 체적을 출력한다.<br>

가로 : <?php echo $_POST["width"]; ?><br>
세로 : <?php echo $_POST["length"]; ?><br>
넓이 : <?php echo $_POST["height"]; ?><br>
체적 : <?php echo $_POST["width"]*$_POST["length"]*$_POST["height"]; ?><br>

</body>
</html>