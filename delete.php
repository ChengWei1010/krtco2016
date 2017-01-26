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
		$num=$_POST['hidden'];
		echo $num;
		$sql="DELETE FROM `krtco_news` WHERE num=".$num."";
		mysqli_query($conn,$sql);
			
			//js跳轉回本頁面
			$url="http://bm.nsysu.edu.tw/krtc-competition2016/newsManager.php";
			echo "<script type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>"; 
?>