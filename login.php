<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager login</title>
    <style>
    	.login{
    		text-align: center;
    		margin-top:10%;
    		font-size: 30px;
    	}
    </style>
</head>
<body>
    <!-- 設定網頁編碼為UTF-8 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <form name="form" method="post" action="connent.php" class="login">
        帳號：<input type="text" name="id" /> <br>
        密碼：<input type="password" name="pw" /> <br><br>
        <input type="submit" name="button" value="登入" style="font-size:20px" />
    </form>

</body>
</html>