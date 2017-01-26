<?php
session_start();

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
            
        //接收送出指令時執行
            if(isset($_POST["submit"])){
				
				//檢查來源位置
				$referrer = $_SERVER['HTTP_REFERER'];
					if($referrer == '' || strpos($referrer, 'deng.php') == false){
						die('error source of net.');
					}
					
				//檢查過程
				if($_SESSION['token']==$_POST["token"]){
					echo '<script>alert("10");</script>';
					echo $_SESSION['token'];
				}
				else{
					echo '<script>alert("0");</script>';
				}
				//釋放SESSION
				unset($_SESSION['token']);
			
                //接收選項
                $receive=$_POST["choose"];
                $id=$_POST["id"];
                $i='initiation';
                
                //檢查投票資格區
                $sqlll="SELECT ID FROM login";
                $fbid=mysqli_query($conn,$sqlll);
                while($check=mysqli_fetch_assoc($fbid)){
                    
                    $i=$check['ID'];
                    if($i==$id){
                        break;
                    }
                }

                //成功時進入資料庫，重複則警告
                if($i==$id){
                    echo '<script>alert("has");</script>';
                    echo '<meta http-equiv=REFRESH CONTENT=0;url=deng.php>';
                }
                else{
                    
                    echo '<script>alert("thanks");</script>';
                    
                    //比對確認後進入，插入一筆(ID、選擇、票數)在data資料表後做加總，同步更新於test資料表
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                    
                        if(preg_match("/One/i",$receive)){
                            
                            $sqll="INSERT INTO login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Two/i",$receive)){
                            
                            $sqll="INSERT INTO login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Three/i",$receive)){
                            
                            $sqll="INSERT INTO login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else{
                            
                            $sqll="INSERT INTO login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						/*
						    $add1="SELECT SUM(number) FROM login WHERE Target='one'";
                            $radd1=mysqli_query($conn,$add1);
                            $row1=mysqli_fetch_row($radd1);
                            $update="UPDATE vote SET number=$row1[0] WHERE name='One'";
                            mysqli_query($conn,$update);
							
							$add2="SELECT SUM(number) FROM login WHERE Target='two'";
                            $radd2=mysqli_query($conn,$add2);
                            $row2=mysqli_fetch_row($radd2);
                            $update="UPDATE vote SET number=$row2[0] WHERE name='Two'";
                            mysqli_query($conn,$update);
							
							$add3="SELECT SUM(number) FROM login WHERE Target='three'";
                            $radd3=mysqli_query($conn,$add3);
                            $row3=mysqli_fetch_row($radd3);
                            $update="UPDATE vote SET number=$row3[0] WHERE name='Three'";
                            mysqli_query($conn,$update);
							
							$add4="SELECT SUM(number) FROM login WHERE Target='four'";
                            $radd4=mysqli_query($conn,$add4);
                            $row4=mysqli_fetch_row($radd4);
                            $update="UPDATE vote SET number=$row4[0] WHERE name='Four'";
                            mysqli_query($conn,$update);*/
							
							
                    }
                            echo '<meta http-equiv=REFRESH CONTENT=0;url=deng.php>';
                }
            }   
?>