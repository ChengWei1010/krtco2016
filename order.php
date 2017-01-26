  <!-- php連結 -->
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

            $get="SELECT * FROM `krtco_vote` ORDER BY `number` DESC";
            $data=mysqli_query($conn,$get);
            for($i=1;$i<=85;$i++){
                $result=mysqli_fetch_assoc($data);
                echo "第 $i 名:編號";
                echo $result["no"];
                echo ",票數:";
                echo $result["number"];
                echo "<br>"; 
            } 
        ?>