<html>
<head><meta charset="utf-8"></head>
<body>

 원 : 반지름을 입력으로 받아서 면적을 출력한다.<br>

반지름 : <?php echo $_POST["radius"]; ?><br>
면적 : <?php echo M_PI*$_POST["radius"]**2; ?><br>

</body>
</html>