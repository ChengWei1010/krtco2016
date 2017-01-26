<?php
    //設定並連接伺服器
    //當檢查成功時顯示
        $servername="localhost";
        $username="2016krtc";
        $password="2016@bms";


        $conn=mysqli_connect($servername,$username,$password);
            
        if(!$conn){
            die("Connection failed:".mysqli_connect_error());
        }
        else{
        }

    //選擇資料庫、編碼
        mysqli_query($conn,"SET NAMES 'utf8' ");
        mysqli_select_db($conn,"2016krtc");

		//接收比對用hidden資料下sql式刪除，記得更改
		$count=$_POST['hidden'];
		$num=$_POST['num'];
		echo $num;
		echo '<br>';
		echo $count;
		$sql='UPDATE `krtco_news` SET `count`=count+1 where num='.$num.'';
		mysqli_query($conn,$sql);
			
?>