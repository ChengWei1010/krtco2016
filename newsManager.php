<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manager</title>
	<style>
		.bottom{
			width: 100%;
		}
		.name{
			font-size: 13px;
			text-align: right;
			padding: 5px;
			width: 120px;

		}
		.title{
			margin: 0;
			font-size: 20px;
			width:300px;

		}
		.titleWrite{
			margin: 0;
			font-size: 20px;
			width:100%;

		}
		.content{
			text-align: left;
			margin:0;
			font-size: 15px;
			width:100%;

		}
		.contentWrite{
			text-align: left;
			padding: 5px;
			font-size: 15px;
			width:300px;
			height:100px;

		}
		.photo{
			width:100%;
			height:15px;
		}
		.manager{
			top:500px;
			text-align: left;
			padding: 5px;
			width:300px;

		}
		.submit{
			text-align: right;
		}
		.link{
			text-align: left;
			margin:15px 0px;
			padding: 5px;
			font-size: 15px;
			width:300px;
			height:30px;
		}
		.linkWrite{
			margin:20px 0px;
			text-align: left;
			font-size: 15px;
			width:100%;
			height:18px;
		}
		.time{
			font-size: 10px;
			text-align: right;
			width:150px;
		}
		h1{
			margin: 5 auto;
			text-align: center;
		}
		.board{
			overflow: scroll;
			float: left;
			width:320px;
			height: 400px;
			text-align: center;
			padding: 3px;
			border-style:ridge;
			background-color: orange;
		}
		span{
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>News management</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<center>
				&nbsp;&nbsp;T&nbsp;&nbsp;i&nbsp;&nbsp;t&nbsp;&nbsp;l&nbsp;&nbsp;e&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				<input class="title" name="title" type="text"  required><br>
				C&nbsp;o&nbsp;n&nbsp;t&nbsp;e&nbsp;n&nbsp;t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				<textarea class="contentWrite" name="content" type="text" required></textarea><br>
				l&nbsp;i&nbsp;n&nbsp;k&nbsp;s&nbsp;&nbsp;<br>
				<textarea class="link" name="link" type="text"></textarea><br>
				Manager name<br><input class="manager" name="manager" type="text" required><br> 
				<input class="submit" name="submit" type="submit" value="Send!"><br>
			</center>
		</form>
		<?php
		    //設定並連接伺服器
    //當檢查成功時顯示
        $servername="localhost";
        $username="2016krtc";
        $password="2016@bms";


        $con=mysqli_connect($servername,$username,$password);
            
        if(!$con){
            die("Connection failed:".mysqli_connect_error());
        }
        else{
        }

    //選擇資料庫、編碼
        mysqli_query($con,"SET NAMES 'utf8' ");
        mysqli_select_db($con,"2016krtc");
	if($_SESSION['username'] != NULL  ){
	echo '<a href="logout.php">登出</a>&nbsp;&nbsp;記得登出喔!!  <br><br>';
	if(isset($_POST["submit"])){
			$title=$content=$manager=$link="";
			$title=$_POST["title"];
			$content=$_POST["content"];
			$manager=$_POST["manager"];
			$link=$_POST["link"];
			date_default_timezone_set('Asia/Taipei');
			$time = date("Y-m-d H:i:s");
			$sql="INSERT INTO `krtco_news` (`title`,`content`,`manager`,`time`,`link`,`count`) VALUES('".$title."','".$content."','".$manager."','".$time."','".$link."','".$count."') ";
			mysqli_query($con,$sql);
		}	
		$get="SELECT `title`,`content`,`manager`,`time`,`num`,`link` FROM `krtco_news` ORDER BY `time` DESC";
		$data=mysqli_query($con,$get)or die(mysqli_error());
			while($result=mysqli_fetch_assoc($data)){
				echo"<div class='board'>";
				echo"<div class='titleWrite'><strong>";
				echo $result["title"];
				echo "</strong></div><hr><div class='photo'>";
				echo "</div><div class='content'><p>";
				echo $result["content"];
				echo"</p></div><div class='linkWrite'>";
				echo $result["link"];
				echo "</div><div class='bottom'><span class='name'>";
				echo $result["manager"];
				echo "</span><span class='time'>";
				echo $result["time"];
				echo "</span><span class='deleteData'>
						<form action='delete.php' method='post'>
							<input type='hidden' name='hidden' value=".$result['num'].">
							<input class='submitDel' name='submitDel' type='submit' value='del'>
						</form>
					</span></div></div>";
				//在下面更改欲送出的根據欄位後，前往delete.php

				}	
}
else{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=0.5;url=login.php>';
}
?>

</body>
</html>