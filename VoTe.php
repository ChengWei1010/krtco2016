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
	
				$referrer = $_SERVER['HTTP_REFERER'];
					if($referrer == '' || strpos($referrer, 'vote.php') == false){
						die('error source of net.');
					}
					
				//echo $_POST['token'];
				//echo $_SESSION['token'];
				if(!isset($_SESSION['token'])||$_SESSION['token']!==$_POST['token']){
					die('error source of net.');
				}
				unset($_SESSION['token']);
				
                //接收選項
                $receive=$_POST["choose"];
                $id=$_POST["id"];
                $i='initiation';
                
                //檢查投票資格區
                $sqlll="SELECT ID FROM krtco_login";
                $fbid=mysqli_query($conn,$sqlll);
                while($check=mysqli_fetch_assoc($fbid)){
                    
                    $i=$check['ID'];
                    if($i==$id){
                        break;
                    }
                }

                //成功時進入資料庫，重複則警告
                if($i==$id){
                    echo '<script>alert("您已經投過票了。");</script>';
                    echo '<meta http-equiv=REFRESH CONTENT=0;url=vote.php>';
                }
                else{
                    
                    echo '<script>alert("高捷三項度-T.H.P謝謝您的參與!");</script>';
                    
                    //比對確認後進入，插入一筆(ID、選擇、票數)在data資料表後做加總，同步更新於test資料表
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                    
                        if(preg_match("/One/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Two/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Three/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Four/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Five/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Six/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seven/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Eight/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Nine/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Ten/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Eleven/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Twelve/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                           
                        }
						
						else if(preg_match("/Thirteen/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Fourteen/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Fifteen/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Sixteen/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventeen/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Eighteen/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Nineteen/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Twenty/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Twentyone/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Twentytwo/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Twentythree/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Twentyfour/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
							
						}
						
						else if(preg_match("/Twentyfive/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Twentysix/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Twentyseven/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Twentyeight/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Twentynine/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Thirty/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Thirtyone/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Thirtytwo/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Thirtythree/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Thirtyfour/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Thirtyfive/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Thirtysix/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Thirtyseven/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Thirtyeight/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Thirtynine/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fourty/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fortyone/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fortytwo/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fortythree/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fortyfour/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fortyfive/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fortysix/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fortyseven/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fortyeight/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }	
						
						else if(preg_match("/Fortynine/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Fifty/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Fiftyone/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fiftytwo/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fiftythree/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fiftyfour/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fiftyfive/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fiftysix/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fiftyseven/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fiftyeight/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Fiftynine/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
												
						else if(preg_match("/Sixty/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Sixtyone/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Sixtytwo/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Sixtythree/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Sixtyfour/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Sixtyfive/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Sixtysix/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Sixtyseven/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Sixtyeight/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Sixtynine/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventy/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventyone/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventytwo/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventythree/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Seventyfour/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
                        
                        else if(preg_match("/Seventyfive/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventysix/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventyseven/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventyeight/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Seventynine/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Eighty/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Eightyone/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Eightytwo/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Eightythree/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
						else if(preg_match("/Eightyfour/i",$receive)){
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                            
                        }
						
                        else{
                            
                            $sqll="INSERT INTO krtco_login (ID,Target,number) VALUES ('$id','$receive',1)";
                            mysqli_query($conn,$sqll);
                           
                        }
						
						    $add1="SELECT SUM(number) FROM krtco_login WHERE Target='one'";
                            $radd1=mysqli_query($conn,$add1);
                            $row1=mysqli_fetch_row($radd1);
                            $update="UPDATE krtco_vote SET number=$row1[0] WHERE name='One'";
                            mysqli_query($conn,$update);
							
							$add2="SELECT SUM(number) FROM krtco_login WHERE Target='two'";
                            $radd2=mysqli_query($conn,$add2);
                            $row2=mysqli_fetch_row($radd2);
                            $update="UPDATE krtco_vote SET number=$row2[0] WHERE name='Two'";
                            mysqli_query($conn,$update);
							
							$add3="SELECT SUM(number) FROM krtco_login WHERE Target='three'";
                            $radd3=mysqli_query($conn,$add3);
                            $row3=mysqli_fetch_row($radd3);
                            $update="UPDATE krtco_vote SET number=$row3[0] WHERE name='Three'";
                            mysqli_query($conn,$update);
							
							$add4="SELECT SUM(number) FROM krtco_login WHERE Target='four'";
                            $radd4=mysqli_query($conn,$add4);
                            $row4=mysqli_fetch_row($radd4);
                            $update="UPDATE krtco_vote SET number=$row4[0] WHERE name='Four'";
                            mysqli_query($conn,$update);
							
							$add5="SELECT SUM(number) FROM krtco_login WHERE Target='five'";
                            $radd5=mysqli_query($conn,$add5);
                            $row5=mysqli_fetch_row($radd5);
                            $update="UPDATE krtco_vote SET number=$row5[0] WHERE name='Five'";
                            mysqli_query($conn,$update);
							
							$add6="SELECT SUM(number) FROM krtco_login WHERE Target='six'";
                            $radd6=mysqli_query($conn,$add6);
                            $row6=mysqli_fetch_row($radd6);
                            $update="UPDATE krtco_vote SET number=$row6[0] WHERE name='Six'";
                            mysqli_query($conn,$update);
							
							$add7="SELECT SUM(number) FROM krtco_login WHERE Target='seven'";
                            $radd7=mysqli_query($conn,$add7);
                            $row7=mysqli_fetch_row($radd7);
                            $update="UPDATE krtco_vote SET number=$row7[0] WHERE name='Seven'";
                            mysqli_query($conn,$update);
							
							$add8="SELECT SUM(number) FROM krtco_login WHERE Target='eight'";
                            $radd8=mysqli_query($conn,$add8);
                            $row8=mysqli_fetch_row($radd8);
                            $update="UPDATE krtco_vote SET number=$row8[0] WHERE name='Eight'";
                            mysqli_query($conn,$update);
							
							$add9="SELECT SUM(number) FROM krtco_login WHERE Target='nine'";
                            $radd9=mysqli_query($conn,$add9);
                            $row9=mysqli_fetch_row($radd9);
                            $update="UPDATE krtco_vote SET number=$row9[0] WHERE name='Nine'";
                            mysqli_query($conn,$update);
							
							$add10="SELECT SUM(number) FROM krtco_login WHERE Target='ten'";
                            $radd10=mysqli_query($conn,$add10);
                            $row10=mysqli_fetch_row($radd10);
                            $update="UPDATE krtco_vote SET number=$row10[0] WHERE name='Ten'";
                            mysqli_query($conn,$update);
							
							$add11="SELECT SUM(number) FROM krtco_login WHERE Target='eleven'";
                            $radd11=mysqli_query($conn,$add11);
                            $row11=mysqli_fetch_row($radd11);
                            $update="UPDATE krtco_vote SET number=$row11[0] WHERE name='Eleven'";
                            mysqli_query($conn,$update);
							
							$add12="SELECT SUM(number) FROM krtco_login WHERE Target='twelve'";
                            $radd12=mysqli_query($conn,$add12);
                            $row12=mysqli_fetch_row($radd12);
                            $update="UPDATE krtco_vote SET number=$row12[0] WHERE name='Twelve'";
                            mysqli_query($conn,$update);
							
							$add13="SELECT SUM(number) FROM krtco_login WHERE Target='thirteen'";
                            $radd13=mysqli_query($conn,$add13);
                            $row13=mysqli_fetch_row($radd13);
                            $update="UPDATE krtco_vote SET number=$row13[0] WHERE name='Thirteen'";
                            mysqli_query($conn,$update);
							
							$add14="SELECT SUM(number) FROM krtco_login WHERE Target='fourteen'";
                            $radd14=mysqli_query($conn,$add14);
                            $row14=mysqli_fetch_row($radd14);
                            $update="UPDATE krtco_vote SET number=$row14[0] WHERE name='Fourteen'";
                            mysqli_query($conn,$update);
							
							$add15="SELECT SUM(number) FROM krtco_login WHERE Target='fifteen'";
                            $radd15=mysqli_query($conn,$add15);
                            $row15=mysqli_fetch_row($radd15);
                            $update="UPDATE krtco_vote SET number=$row15[0] WHERE name='Fifteen'";
                            mysqli_query($conn,$update);
							
							$add16="SELECT SUM(number) FROM krtco_login WHERE Target='sixteen'";
                            $radd16=mysqli_query($conn,$add16);
                            $row16=mysqli_fetch_row($radd16);
                            $update="UPDATE krtco_vote SET number=$row16[0] WHERE name='Sixteen'";
                            mysqli_query($conn,$update);
							
							$add17="SELECT SUM(number) FROM krtco_login WHERE Target='seventeen'";
                            $radd17=mysqli_query($conn,$add17);
                            $row17=mysqli_fetch_row($radd17);
                            $update="UPDATE krtco_vote SET number=$row17[0] WHERE name='Seventeen'";
                            mysqli_query($conn,$update);
							
							$add18="SELECT SUM(number) FROM krtco_login WHERE Target='eighteen'";
                            $radd18=mysqli_query($conn,$add18);
                            $row18=mysqli_fetch_row($radd18);
                            $update="UPDATE krtco_vote SET number=$row18[0] WHERE name='Eighteen'";
                            mysqli_query($conn,$update);
							
							$add19="SELECT SUM(number) FROM krtco_login WHERE Target='nineteen'";
                            $radd19=mysqli_query($conn,$add19);
                            $row19=mysqli_fetch_row($radd19);
                            $update="UPDATE krtco_vote SET number=$row19[0] WHERE name='Nineteen'";
                            mysqli_query($conn,$update);
							
							$add20="SELECT SUM(number) FROM krtco_login WHERE Target='twenty'";
                            $radd20=mysqli_query($conn,$add20);
                            $row20=mysqli_fetch_row($radd20);
                            $update="UPDATE krtco_vote SET number=$row20[0] WHERE name='Twenty'";
                            mysqli_query($conn,$update);
							
							$add21="SELECT SUM(number) FROM krtco_login WHERE Target='twentyone'";
                            $radd21=mysqli_query($conn,$add21);
                            $row21=mysqli_fetch_row($radd21);
                            $update="UPDATE krtco_vote SET number=$row21[0] WHERE name='Twentyone'";
                            mysqli_query($conn,$update);
							
							$add22="SELECT SUM(number) FROM krtco_login WHERE Target='twentytwo'";
                            $radd22=mysqli_query($conn,$add22);
                            $row22=mysqli_fetch_row($radd22);
                            $update="UPDATE krtco_vote SET number=$row22[0] WHERE name='Twentytwo'";
                            mysqli_query($conn,$update);
							
							$add23="SELECT SUM(number) FROM krtco_login WHERE Target='twentythree'";
                            $radd23=mysqli_query($conn,$add23);
                            $row23=mysqli_fetch_row($radd23);
                            $update="UPDATE krtco_vote SET number=$row23[0] WHERE name='Twentythree'";
                            mysqli_query($conn,$update);
							
							$add24="SELECT SUM(number) FROM krtco_login WHERE Target='twentyfour'";
                            $radd24=mysqli_query($conn,$add24);
                            $row24=mysqli_fetch_row($radd24);
                            $update="UPDATE krtco_vote SET number=$row24[0] WHERE name='Twentyfour'";
                            mysqli_query($conn,$update);
							
							$add25="SELECT SUM(number) FROM krtco_login WHERE Target='twentyfive'";
                            $radd25=mysqli_query($conn,$add25);
                            $row25=mysqli_fetch_row($radd25);
                            $update="UPDATE krtco_vote SET number=$row25[0] WHERE name='Twentyfive'";
                            mysqli_query($conn,$update);
							
							$add26="SELECT SUM(number) FROM krtco_login WHERE Target='twentysix'";
                            $radd26=mysqli_query($conn,$add26);
                            $row26=mysqli_fetch_row($radd26);
                            $update="UPDATE krtco_vote SET number=$row26[0] WHERE name='Twentysix'";
                            mysqli_query($conn,$update);
							
							$add27="SELECT SUM(number) FROM krtco_login WHERE Target='twentyseven'";
                            $radd27=mysqli_query($conn,$add27);
                            $row27=mysqli_fetch_row($radd27);
                            $update="UPDATE krtco_vote SET number=$row27[0] WHERE name='Twentyseven'";
                            mysqli_query($conn,$update);
							
							$add28="SELECT SUM(number) FROM krtco_login WHERE Target='twentyeight'";
                            $radd28=mysqli_query($conn,$add28);
                            $row28=mysqli_fetch_row($radd28);
                            $update="UPDATE krtco_vote SET number=$row28[0] WHERE name='Twentyeight'";
                            mysqli_query($conn,$update);
							
							$add29="SELECT SUM(number) FROM krtco_login WHERE Target='twentynine'";
                            $radd29=mysqli_query($conn,$add29);
                            $row29=mysqli_fetch_row($radd29);
                            $update="UPDATE krtco_vote SET number=$row29[0] WHERE name='Twentynine'";
                            mysqli_query($conn,$update);
							
							$add30="SELECT SUM(number) FROM krtco_login WHERE Target='thirty'";
                            $radd30=mysqli_query($conn,$add30);
                            $row30=mysqli_fetch_row($radd30);
                            $update="UPDATE krtco_vote SET number=$row30[0] WHERE name='Thirty'";
                            mysqli_query($conn,$update);
							
							$add31="SELECT SUM(number) FROM krtco_login WHERE Target='thirtyone'";
                            $radd31=mysqli_query($conn,$add31);
                            $row31=mysqli_fetch_row($radd31);
                            $update="UPDATE krtco_vote SET number=$row31[0] WHERE name='Thirtyone'";
                            mysqli_query($conn,$update);
							
							$add32="SELECT SUM(number) FROM krtco_login WHERE Target='thirtytwo'";
                            $radd32=mysqli_query($conn,$add32);
                            $row32=mysqli_fetch_row($radd32);
                            $update="UPDATE krtco_vote SET number=$row32[0] WHERE name='Thirtytwo'";
                            mysqli_query($conn,$update);
							
							$add33="SELECT SUM(number) FROM krtco_login WHERE Target='thirtythree'";
                            $radd33=mysqli_query($conn,$add33);
                            $row33=mysqli_fetch_row($radd33);
                            $update="UPDATE krtco_vote SET number=$row33[0] WHERE name='Thirtythree'";
                            mysqli_query($conn,$update);
							
							$add34="SELECT SUM(number) FROM krtco_login WHERE Target='thirtyfour'";
                            $radd34=mysqli_query($conn,$add34);
                            $row34=mysqli_fetch_row($radd34);
                            $update="UPDATE krtco_vote SET number=$row34[0] WHERE name='Thirtyfour'";
                            mysqli_query($conn,$update);
							
							$add35="SELECT SUM(number) FROM krtco_login WHERE Target='thirtyfive'";
                            $radd35=mysqli_query($conn,$add35);
                            $row35=mysqli_fetch_row($radd35);
                            $update="UPDATE krtco_vote SET number=$row35[0] WHERE name='Thirtyfive'";
                            mysqli_query($conn,$update);
							
							$add36="SELECT SUM(number) FROM krtco_login WHERE Target='thirtysix'";
                            $radd36=mysqli_query($conn,$add36);
                            $row36=mysqli_fetch_row($radd36);
                            $update="UPDATE krtco_vote SET number=$row36[0] WHERE name='Thirtysix'";
                            mysqli_query($conn,$update);
							
							$add37="SELECT SUM(number) FROM krtco_login WHERE Target='thirtyseven'";
                            $radd37=mysqli_query($conn,$add37);
                            $row37=mysqli_fetch_row($radd37);
                            $update="UPDATE krtco_vote SET number=$row37[0] WHERE name='Thirtyseven'";
                            mysqli_query($conn,$update);
							
							$add38="SELECT SUM(number) FROM krtco_login WHERE Target='thirtyeight'";
                            $radd38=mysqli_query($conn,$add38);
                            $row38=mysqli_fetch_row($radd38);
                            $update="UPDATE krtco_vote SET number=$row38[0] WHERE name='Thirtyeight'";
                            mysqli_query($conn,$update);
							
							$add39="SELECT SUM(number) FROM krtco_login WHERE Target='thirtynine'";
                            $radd39=mysqli_query($conn,$add39);
                            $row39=mysqli_fetch_row($radd39);
                            $update="UPDATE krtco_vote SET number=$row39[0] WHERE name='Thirtynine'";
                            mysqli_query($conn,$update);
							
							$add40="SELECT SUM(number) FROM krtco_login WHERE Target='fourty'";
                            $radd40=mysqli_query($conn,$add40);
                            $row40=mysqli_fetch_row($radd40);
                            $update="UPDATE krtco_vote SET number=$row40[0] WHERE name='Fourty'";
                            mysqli_query($conn,$update);
							
							$add41="SELECT SUM(number) FROM krtco_login WHERE Target='fortyone'";
                            $radd41=mysqli_query($conn,$add41);
                            $row41=mysqli_fetch_row($radd41);
                            $update="UPDATE krtco_vote SET number=$row41[0] WHERE name='Fortyone'";
                            mysqli_query($conn,$update);
							
							$add42="SELECT SUM(number) FROM krtco_login WHERE Target='fortytwo'";
                            $radd42=mysqli_query($conn,$add42);
                            $row42=mysqli_fetch_row($radd42);
                            $update="UPDATE krtco_vote SET number=$row42[0] WHERE name='Fortytwo'";
                            mysqli_query($conn,$update);
							
							$add43="SELECT SUM(number) FROM krtco_login WHERE Target='fortythree'";
                            $radd43=mysqli_query($conn,$add43);
                            $row43=mysqli_fetch_row($radd43);
                            $update="UPDATE krtco_vote SET number=$row43[0] WHERE name='Fortythree'";
                            mysqli_query($conn,$update);
							
							$add44="SELECT SUM(number) FROM krtco_login WHERE Target='fortyfour'";
                            $radd44=mysqli_query($conn,$add44);
                            $row44=mysqli_fetch_row($radd44);
                            $update="UPDATE krtco_vote SET number=$row44[0] WHERE name='Fortyfour'";
                            mysqli_query($conn,$update);
							
							$add45="SELECT SUM(number) FROM krtco_login WHERE Target='fortyfive'";
                            $radd45=mysqli_query($conn,$add45);
                            $row45=mysqli_fetch_row($radd45);
                            $update="UPDATE krtco_vote SET number=$row45[0] WHERE name='Fortyfive'";
                            mysqli_query($conn,$update);
							
							$add46="SELECT SUM(number) FROM krtco_login WHERE Target='fortysix'";
                            $radd46=mysqli_query($conn,$add46);
                            $row46=mysqli_fetch_row($radd46);
                            $update="UPDATE krtco_vote SET number=$row46[0] WHERE name='Fortysix'";
                            mysqli_query($conn,$update);
							
							$add47="SELECT SUM(number) FROM krtco_login WHERE Target='fortyseven'";
                            $radd47=mysqli_query($conn,$add47);
                            $row47=mysqli_fetch_row($radd47);
                            $update="UPDATE krtco_vote SET number=$row47[0] WHERE name='Fortyseven'";
                            mysqli_query($conn,$update);
							
							$add48="SELECT SUM(number) FROM krtco_login WHERE Target='fortyeight'";
                            $radd48=mysqli_query($conn,$add48);
                            $row48=mysqli_fetch_row($radd48);
                            $update="UPDATE krtco_vote SET number=$row48[0] WHERE name='Fortyeight'";
                            mysqli_query($conn,$update);
							
							$add49="SELECT SUM(number) FROM krtco_login WHERE Target='fortynine'";
                            $radd49=mysqli_query($conn,$add49);
                            $row49=mysqli_fetch_row($radd49);
                            $update="UPDATE krtco_vote SET number=$row49[0] WHERE name='Fortynine'";
                            mysqli_query($conn,$update);
							
							$add50="SELECT SUM(number) FROM krtco_login WHERE Target='fifty'";
                            $radd50=mysqli_query($conn,$add50);
                            $row50=mysqli_fetch_row($radd50);
                            $update="UPDATE krtco_vote SET number=$row50[0] WHERE name='Fifty'";
                            mysqli_query($conn,$update);
							
							$add51="SELECT SUM(number) FROM krtco_login WHERE Target='fiftyone'";
                            $radd51=mysqli_query($conn,$add51);
                            $row51=mysqli_fetch_row($radd51);
                            $update="UPDATE krtco_vote SET number=$row51[0] WHERE name='Fiftyone'";
                            mysqli_query($conn,$update);
							
							$add52="SELECT SUM(number) FROM krtco_login WHERE Target='fiftytwo'";
                            $radd52=mysqli_query($conn,$add52);
                            $row52=mysqli_fetch_row($radd52);
                            $update="UPDATE krtco_vote SET number=$row52[0] WHERE name='Fiftytwo'";
                            mysqli_query($conn,$update);
							
							$add53="SELECT SUM(number) FROM krtco_login WHERE Target='fiftythree'";
                            $radd53=mysqli_query($conn,$add53);
                            $row53=mysqli_fetch_row($radd53);
                            $update="UPDATE krtco_vote SET number=$row53[0] WHERE name='Fiftythree'";
                            mysqli_query($conn,$update);
							
							$add54="SELECT SUM(number) FROM krtco_login WHERE Target='fiftyfour'";
                            $radd54=mysqli_query($conn,$add54);
                            $row54=mysqli_fetch_row($radd54);
                            $update="UPDATE krtco_vote SET number=$row54[0] WHERE name='Fiftyfour'";
                            mysqli_query($conn,$update);
							
							$add55="SELECT SUM(number) FROM krtco_login WHERE Target='fiftyfive'";
                            $radd55=mysqli_query($conn,$add55);
                            $row55=mysqli_fetch_row($radd55);
                            $update="UPDATE krtco_vote SET number=$row55[0] WHERE name='Fiftyfive'";
                            mysqli_query($conn,$update);
							
							$add56="SELECT SUM(number) FROM krtco_login WHERE Target='fiftysix'";
                            $radd56=mysqli_query($conn,$add56);
                            $row56=mysqli_fetch_row($radd56);
                            $update="UPDATE krtco_vote SET number=$row56[0] WHERE name='Fiftysix'";
                            mysqli_query($conn,$update);
							
							$add57="SELECT SUM(number) FROM krtco_login WHERE Target='fiftyseven'";
                            $radd57=mysqli_query($conn,$add57);
                            $row57=mysqli_fetch_row($radd57);
                            $update="UPDATE krtco_vote SET number=$row57[0] WHERE name='Fiftyseven'";
                            mysqli_query($conn,$update);
							
							$add58="SELECT SUM(number) FROM krtco_login WHERE Target='fiftyeight'";
                            $radd58=mysqli_query($conn,$add58);
                            $row58=mysqli_fetch_row($radd58);
                            $update="UPDATE krtco_vote SET number=$row58[0] WHERE name='Fiftyeight'";
                            mysqli_query($conn,$update);
							
							$add59="SELECT SUM(number) FROM krtco_login WHERE Target='fiftynine'";
                            $radd59=mysqli_query($conn,$add59);
                            $row59=mysqli_fetch_row($radd59);
                            $update="UPDATE krtco_vote SET number=$row59[0] WHERE name='Fiftynine'";
                            mysqli_query($conn,$update);
							
							$add60="SELECT SUM(number) FROM krtco_login WHERE Target='sixty'";
                            $radd60=mysqli_query($conn,$add60);
                            $row60=mysqli_fetch_row($radd60);
                            $update="UPDATE krtco_vote SET number=$row60[0] WHERE name='Sixty'";
                            mysqli_query($conn,$update);
							
							$add61="SELECT SUM(number) FROM krtco_login WHERE Target='sixtyone'";
                            $radd61=mysqli_query($conn,$add61);
                            $row61=mysqli_fetch_row($radd61);
                            $update="UPDATE krtco_vote SET number=$row61[0] WHERE name='Sixtyone'";
                            mysqli_query($conn,$update);
							
							$add62="SELECT SUM(number) FROM krtco_login WHERE Target='sixtytwo'";
                            $radd62=mysqli_query($conn,$add62);
                            $row62=mysqli_fetch_row($radd62);
                            $update="UPDATE krtco_vote SET number=$row62[0] WHERE name='Sixtytwo'";
                            mysqli_query($conn,$update);
							
							$add63="SELECT SUM(number) FROM krtco_login WHERE Target='sixtythree'";
                            $radd63=mysqli_query($conn,$add63);
                            $row63=mysqli_fetch_row($radd63);
                            $update="UPDATE krtco_vote SET number=$row63[0] WHERE name='Sixtythree'";
                            mysqli_query($conn,$update);
							
							$add64="SELECT SUM(number) FROM krtco_login WHERE Target='sixtyfour'";
                            $radd64=mysqli_query($conn,$add64);
                            $row64=mysqli_fetch_row($radd64);
                            $update="UPDATE krtco_vote SET number=$row64[0] WHERE name='Sixtyfour'";
                            mysqli_query($conn,$update);
							
							$add65="SELECT SUM(number) FROM krtco_login WHERE Target='sixtyfive'";
                            $radd65=mysqli_query($conn,$add65);
                            $row65=mysqli_fetch_row($radd65);
                            $update="UPDATE krtco_vote SET number=$row65[0] WHERE name='Sixtyfive'";
                            mysqli_query($conn,$update);
							
							$add66="SELECT SUM(number) FROM krtco_login WHERE Target='sixtysix'";
                            $radd66=mysqli_query($conn,$add66);
                            $row66=mysqli_fetch_row($radd66);
                            $update="UPDATE krtco_vote SET number=$row66[0] WHERE name='Sixtysix'";
                            mysqli_query($conn,$update);
							
							$add67="SELECT SUM(number) FROM krtco_login WHERE Target='sixtyseven'";
                            $radd67=mysqli_query($conn,$add67);
                            $row67=mysqli_fetch_row($radd67);
                            $update="UPDATE krtco_vote SET number=$row67[0] WHERE name='Sixtyseven'";
                            mysqli_query($conn,$update);

							$add68="SELECT SUM(number) FROM krtco_login WHERE Target='sixtyeight'";
                            $radd68=mysqli_query($conn,$add68);
                            $row68=mysqli_fetch_row($radd68);
                            $update="UPDATE krtco_vote SET number=$row68[0] WHERE name='Sixtyeight'";
                            mysqli_query($conn,$update);

							$add69="SELECT SUM(number) FROM krtco_login WHERE Target='sixtynine'";
                            $radd69=mysqli_query($conn,$add69);
                            $row69=mysqli_fetch_row($radd69);
                            $update="UPDATE krtco_vote SET number=$row69[0] WHERE name='Sixtynine'";
                            mysqli_query($conn,$update);
							
							$add70="SELECT SUM(number) FROM krtco_login WHERE Target='seventy'";
                            $radd70=mysqli_query($conn,$add70);
                            $row70=mysqli_fetch_row($radd70);
                            $update="UPDATE krtco_vote SET number=$row70[0] WHERE name='Seventy'";
                            mysqli_query($conn,$update);
							
							$add71="SELECT SUM(number) FROM krtco_login WHERE Target='seventyone'";
                            $radd71=mysqli_query($conn,$add71);
                            $row71=mysqli_fetch_row($radd71);
                            $update="UPDATE krtco_vote SET number=$row71[0] WHERE name='Seventyone'";
                            mysqli_query($conn,$update);
							
							$add72="SELECT SUM(number) FROM krtco_login WHERE Target='seventytwo'";
                            $radd72=mysqli_query($conn,$add72);
                            $row72=mysqli_fetch_row($radd72);
                            $update="UPDATE krtco_vote SET number=$row72[0] WHERE name='Seventytwo'";
                            mysqli_query($conn,$update);
							
							$add73="SELECT SUM(number) FROM krtco_login WHERE Target='seventythree'";
                            $radd73=mysqli_query($conn,$add73);
                            $row73=mysqli_fetch_row($radd73);
                            $update="UPDATE krtco_vote SET number=$row73[0] WHERE name='Seventythree'";
                            mysqli_query($conn,$update);
							
							$add74="SELECT SUM(number) FROM krtco_login WHERE Target='seventyfour'";
                            $radd74=mysqli_query($conn,$add74);
                            $row74=mysqli_fetch_row($radd74);
                            $update="UPDATE krtco_vote SET number=$row74[0] WHERE name='Seventyfour'";
                            mysqli_query($conn,$update);
							
							$add75="SELECT SUM(number) FROM krtco_login WHERE Target='seventyfive'";
                            $radd75=mysqli_query($conn,$add75);
                            $row75=mysqli_fetch_row($radd75);
                            $update="UPDATE krtco_vote SET number=$row75[0] WHERE name='Seventyfive'";
                            mysqli_query($conn,$update);
							
							$add76="SELECT SUM(number) FROM krtco_login WHERE Target='seventysix'";
                            $radd76=mysqli_query($conn,$add76);
                            $row76=mysqli_fetch_row($radd76);
                            $update="UPDATE krtco_vote SET number=$row76[0] WHERE name='Seventysix'";
                            mysqli_query($conn,$update);
							
							$add77="SELECT SUM(number) FROM krtco_login WHERE Target='seventyseven'";
                            $radd77=mysqli_query($conn,$add77);
                            $row77=mysqli_fetch_row($radd77);
                            $update="UPDATE krtco_vote SET number=$row77[0] WHERE name='Seventyseven'";
                            mysqli_query($conn,$update);
							
							$add78="SELECT SUM(number) FROM krtco_login WHERE Target='seventyeight'";
                            $radd78=mysqli_query($conn,$add78);
                            $row78=mysqli_fetch_row($radd78);
                            $update="UPDATE krtco_vote SET number=$row78[0] WHERE name='Seventyeight'";
                            mysqli_query($conn,$update);
							
							$add79="SELECT SUM(number) FROM krtco_login WHERE Target='seventynine'";
                            $radd79=mysqli_query($conn,$add79);
                            $row79=mysqli_fetch_row($radd79);
                            $update="UPDATE krtco_vote SET number=$row79[0] WHERE name='Seventynine'";
                            mysqli_query($conn,$update);
							
							$add80="SELECT SUM(number) FROM krtco_login WHERE Target='eighty'";
                            $radd80=mysqli_query($conn,$add80);
                            $row80=mysqli_fetch_row($radd80);
                            $update="UPDATE krtco_vote SET number=$row80[0] WHERE name='Eighty'";
                            mysqli_query($conn,$update);
							
							$add81="SELECT SUM(number) FROM krtco_login WHERE Target='eightyone'";
                            $radd81=mysqli_query($conn,$add81);
                            $row81=mysqli_fetch_row($radd81);
                            $update="UPDATE krtco_vote SET number=$row81[0] WHERE name='Eightyone'";
                            mysqli_query($conn,$update);
							
							$add82="SELECT SUM(number) FROM krtco_login WHERE Target='eightytwo'";
                            $radd82=mysqli_query($conn,$add82);
                            $row82=mysqli_fetch_row($radd82);
                            $update="UPDATE krtco_vote SET number=$row82[0] WHERE name='Eightytwo'";
                            mysqli_query($conn,$update);
							
							$add83="SELECT SUM(number) FROM krtco_login WHERE Target='eightythree'";
                            $radd83=mysqli_query($conn,$add83);
                            $row83=mysqli_fetch_row($radd83);
                            $update="UPDATE krtco_vote SET number=$row83[0] WHERE name='Eightythree'";
                            mysqli_query($conn,$update);
							
							$add84="SELECT SUM(number) FROM krtco_login WHERE Target='eightyfour'";
                            $radd84=mysqli_query($conn,$add84);
                            $row84=mysqli_fetch_row($radd84);
                            $update="UPDATE krtco_vote SET number=$row84[0] WHERE name='Eightyfour'";
                            mysqli_query($conn,$update);
							
							$add85="SELECT SUM(number) FROM krtco_login WHERE Target='eightyfive'";
                            $radd85=mysqli_query($conn,$add85);
                            $row85=mysqli_fetch_row($radd85);
                            $update="UPDATE krtco_vote SET number=$row85[0] WHERE name='Eightyfive'";
                            mysqli_query($conn,$update);
                    }
                            echo '<meta http-equiv=REFRESH CONTENT=0;url=vote.php>';
                }
            }
			$_SESSION['token']=md5(uniqid(rand()));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>【高捷三向度-T.H.P】</title>
    <link rel="shortcut icon" href="images/title.png" /> 
    <link rel="stylesheet" href="css/mine.css">
    <link rel="stylesheet" type="text/css" href="css/vote/default.css" />
    <link rel="stylesheet" type="text/css" href="css/vote/component.css" />  
    <style type="text/css">
        #vote{
            background-color: #F7DD67;
            box-shadow: 3px 3px 9px #5D4803;
            z-index:1;
        }
        label {
            cursor: pointer;
            position: relative;
            font-size: 15px;
        }
        input[type=radio] {
            display: none;
        }
        label:before {
            content: "";
            display: inline-block;
            border-radius: 8px;
            width: 16px;
            height: 16px;
            margin-right: 10px;
            left: 0;
            bottom: 1px;
            background-color: rgba(31,26,26,0.16);
            box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        }
        input[type=radio]:checked + label:before {
            content: "\2713";
            color: #CF7A7A;
            font-size: 25px;
            text-align: center;
            line-height: 10px;
        }
        .top{
            width:100%;
            height:120px;
            font-size:17px;
        }
        @media screen and (max-width: 1120px){
            label {
                cursor: pointer;
                position: relative;
                font-size: 18px;
            }
            .top{
                font-size: 15px;
                height:155px;
            }
        }
    </style>
    <!-- FB vote -->
    <script type="text/javascript">

          // This is called with the results from from FB.getLoginStatus().
          function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);
            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
              // Logged into your app and Facebook.
              testAPI();
            } else if (response.status === 'not_authorized') {
              // The person is logged into Facebook, but not your app.
              document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.';
            } else {
              // The person is not logged into Facebook, so we're not sure if
              // they are logged into this app or not.
              document.getElementById('status').innerHTML = 'Please log ' +
                'into Facebook.';
            }
          }

          // This function is called when someone finishes with the Login
          // Button.  See the onlogin handler attached to it in the sample
          // code below.
          function checkLoginState() {
            FB.getLoginStatus(function(response) {
              statusChangeCallback(response);
            });
          }

          window.fbAsyncInit = function() {
          FB.init({
            appId      : '979161492156939',
            cookie     : true,  // enable cookies to allow the server to access 
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.5' // use version 2.2
          });

          // Now that we've initialized the JavaScript SDK, we call 
          // FB.getLoginStatus().  This function gets the state of the
          // person visiting this page and can return one of three states to
          // the callback you provide.  They can be:
          //
          // 1. Logged into your app ('connected')
          // 2. Logged into Facebook, but not your app ('not_authorized')
          // 3. Not logged into Facebook and can't tell if they are logged into
          //    your app or not.
          //
          // These three cases are handled in the callback function.

          FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
          });

          };

          // Load the SDK asynchronously
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));

          // Here we run a very simple test of the Graph API after login is
          // successful.  See statusChangeCallback() for when this call is made.
          function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function(response) {
              console.log('Successful login for: ' + response.name);
              document.getElementById('status').innerHTML =
                'Thanks for logging in, ' + response.name + '!';
            });
          }
          
         /*這個功能會壞 
          FB.logout(function(response) {
             // user is now logged out
          });
         */
          
          var check;
          function CheckForm(){

				if(document.fb.choose.value==''){
					alert('請至少選擇一個選項.');
					return false;
				}
				
				var find = document.getElementById("formID");
				for (var f=0;f<find.choose.length;f++){ 

				   if (find.choose[f].checked){
					   
					  var findvalue;	//findvalue是取得的欲選選項
					  switch(find.choose[f].value){
						  
						case 'one':
							findvalue='1';
							break;
						case 'two':
							findvalue='2';
							break;
						case 'three':
							findvalue='3';
							break;
						case 'four':
							findvalue='4';
							break;
						case 'five':
							findvalue='5';
							break;
						case 'six':
							findvalue='6';
							break;
						case 'seven':
							findvalue='7';
							break;
						case 'eight':
							findvalue='8';
							break;
						case 'nine':
							findvalue='9';
							break;
						case 'ten':
							findvalue='10';
							break;
						case 'eleven':
							findvalue='11';
							break;
						case 'twelve':
							findvalue='12';
							break;
						case 'thirteen':
							findvalue='13';
							break;
						case 'fourteen':
							findvalue='14';
							break;
						case 'fifteen':
							findvalue='15';
							break;
						case 'sixteen':
							findvalue='16';
							break;
						case 'seventeen':
							findvalue='17';
							break;
						case 'eighteen':
							findvalue='18';
							break;
						case 'nineteen':
							findvalue='19';
							break;
						case 'twenty':
							findvalue='20';
							break;
						case 'twentyone':
							findvalue='21';
							break;
						case 'twentytwo':
							findvalue='22';
							break;
						case 'twentythree':
							findvalue='23';
							break;
						case 'twentyfour':
							findvalue='24';
							break;
						case 'twentyfive':
							findvalue='25';
							break;
						case 'twentysix':
							findvalue='26';
							break;
						case 'twentyseven':
							findvalue='27';
							break;
						case 'twentyeight':
							findvalue='28';
							break;
						case 'twentynine':
							findvalue='29';
							break;
						case 'thirty':
							findvalue='30';
							break;
						case 'thirtyone':
							findvalue='31';
							break;
						case 'thirtytwo':
							findvalue='32';
							break;
						case 'thirtythree':
							findvalue='33';
							break;
						case 'thirtyfour':
							findvalue='34';
							break;
						case 'thirtyfive':
							findvalue='35';
							break;
						case 'thirtysix':			
							findvalue='36';
							break;
						case 'thirtyseven':
							findvalue='37';
							break;
						case 'thirtyeight':
							findvalue='38';
							break;
						case 'thirtynine':
							findvalue='39';
							break;
						case 'fourty':
							findvalue='40';
							break;
						case 'fortyone':
							findvalue='41';
							break;
						case 'fortytwo':
							findvalue='42';
							break;
						case 'fortythree':
							findvalue='43';
							break;
						case 'fortyfour':
							findvalue='44';
							break;
						case 'fortyfive':
							findvalue='45';
							break;
						case 'fortysix':
							findvalue='46';
							break;
						case 'fortyseven':
							findvalue='47';
							break;
						case 'fortyeight':
							findvalue='48';
							break;
						case 'fortynine':
							findvalue='49';
							break;
						case 'fifty':
							findvalue='50';
							break;
						case 'fiftyone':
							findvalue='51';
							break;
						case 'fiftytwo':
							findvalue='52';
							break;
						case 'fiftythree':
							findvalue='53';
							break;
						case 'fiftyfour':
							findvalue='54';
							break;
						case 'fiftyfive':
							findvalue='55';
							break;
						case 'fiftysix':
							findvalue='56';
							break;
						case 'fiftyseven':
							findvalue='57';
							break;
						case 'fiftyeight':
							findvalue='58';
							break;
						case 'fiftynine':
							findvalue='59';
							break;
						case 'sixty':
							findvalue='60';
							break;
						case 'sixtyone':
							findvalue='61';
							break;
						case 'sixtytwo':
							findvalue='62';
							break;
						case 'sixtythree':
							findvalue='63';
							break;
						case 'sixtyfour':
							findvalue='64';
							break;
						case 'sixtyfive':
							findvalue='65';
							break;
						case 'sixtysix':
							findvalue='66';
							break;
						case 'sixtyseven':
							findvalue='67';
							break;
						case 'sixtyeight':
							findvalue='68';
							break;
						case 'sixtynine':
							findvalue='69';
							break;
						case 'seventy':
							findvalue='70';
							break;
						case 'seventyone':
							findvalue='71';
							break;
						case 'seventytwo':
							findvalue='72';
							break;
						case 'seventythree':
							findvalue='73';
							break;
						case 'seventyfour':
							findvalue='74';
							break;
						case 'seventyfive':
							findvalue='75';
							break;
						case 'seventysix':
							findvalue='76';
							break;
						case 'seventyseven':
							findvalue='77';
							break;
						case 'seventyeight':
							findvalue='78';
							break;
						case 'seventynine':
							findvalue='79';
							break;
						case 'eighty':
							findvalue='80';
							break;
						case 'eightyone':
							findvalue='81';
							break;
						case 'eightytwo':
							findvalue='82';
							break;
						case 'eightythree':
							findvalue='83';
							break;
						case 'eightyfour':
							findvalue='84';
							break;
						case 'eightyfive':
							findvalue='85';
							break;
					  }
					  break;
				   }
				}
				
					if(confirm("確認與否?\n即將把票投至編號第 "+findvalue+" 組。")==true){
					
						FB.getLoginStatus(function (response) {
						
							if(response.status==='connected'){
								//alert('The system is delivering your ballot...');
								check=response.authResponse.userID;		//check是取得的FBID值
								//alert(check);
							}
							else{
								alert('請登入Facebook帳號，一個帳號限投一票。');
							}
						});
						
						if(check!=undefined){
							document.fb.id.value=check;
							return true;
						}
						else{
							return false;
						}
					}
						
					else{  
						return false;
					}
            }        
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        //改變瀏覽列大小
        $(function(){
            var win=$(window),
                nav=$("nav"),
                navImg=$("navImg");
            function inView () {
                if(win.scrollTop()>=160){
                    nav.addClass('nav-View');
                    navImg.addClass('navImg-View');
                }
                else{
                    nav.removeClass('nav-View');
                    navImg.removeClass('navImg-View');
                }
            }
            win.scroll(inView);
            inView();
        })
    </script>
</head>
<body>
    <!-- 比賽作品內容 -->
        <div class="md-modal md-effect-1" id="work2">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video21"></div>
                    <br>完整影片<br>
                    <div id="video22"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work3">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video31"></div>
                    <br>完整影片<br>
                    <div id="video32"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work4">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video41"></div>
                    <br>完整影片<br>
                    <div id="video42"></div>
                </div>
            </div>
        </div> 
        <div class="md-modal md-effect-1" id="work5">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video51"></div>
                    <br>完整影片<br>
                    <div id="video52"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work6">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video61"></div>
                    <br>完整影片<br>
                    <div id="video62"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work7">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video71"></div>
                    <br>完整影片<br>
                    <div id="video72"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work8">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video81"></div>
                    <br>完整影片<br>
                    <div id="video82"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work9">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video91"></div>
                    <br>完整影片<br>
                    <div id="video92"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work10">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video101"></div>
                    <br>完整影片<br>
                    <div id="video102"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work11">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video111"></div>
                    <br>完整影片<br>
                    <div id="video112"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work12">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video121"></div>
                    <br>完整影片<br>
                    <div id="video122"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work13">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video131"></div>
                    <br>完整影片<br>
                    <div id="video132"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work14">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video141"></div>
                    <br>完整影片<br>
                    <div id="video142"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work15">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video151"></div>
                    <br>完整影片<br>
                    <div id="video152"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work17">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video171"></div>
                    <br>完整影片<br>
                    <div id="video172"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work18">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video181"></div>
                    <br>完整影片<br>
                    <div id="video182"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work19">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video191"></div>
                    <br>完整影片<br>
                    <div id="video192"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work20">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video201"></div>
                    <br>完整影片<br>
                    <div id="video202"></div>
                </div>
            </div>
        </div> 
        <div class="md-modal md-effect-1" id="work21">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video211"></div>
                    <br>完整影片<br>
                    <div id="video212"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work22">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video221"></div>
                    <br>完整影片<br>
                    <div id="video222"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work23">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video231"></div>
                    <br>完整影片<br>
                    <div id="video232"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work24">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video241"></div>
                    <br>完整影片<br>
                    <div id="video242"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work25">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video251"></div>
                    <br>完整影片<br>
                    <div id="video252"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work26">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video261"></div>
                    <br>完整影片<br>
                    <div id="video262"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work27">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video271"></div>
                    <br>完整影片<br>
                    <div id="video272"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work30">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video301"></div>
                    <br>完整影片<br>
                    <div id="video302"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work31">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video311"></div>
                    <br>完整影片<br>
                    <div id="video312"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work32">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video321"></div>
                    <br>完整影片<br>
                    <div id="video322"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work33">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video331"></div>
                    <br>完整影片<br>
                    <div id="video332"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work34">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video341"></div>
                    <br>完整影片<br>
                    <div id="video342"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work35">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video351"></div>
                    <br>完整影片<br>
                    <div id="video352"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work37">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video371"></div>
                    <br>完整影片<br>
                    <div id="video372"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work38">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video381"></div>
                    <br>完整影片<br>
                    <div id="video382"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work39">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video391"></div>
                    <br>完整影片<br>
                    <div id="video392"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work40">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video401"></div>
                    <br>完整影片<br>
                    <div id="video402"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work41">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video411"></div>
                    <br>完整影片<br>
                    <div id="video412"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work42">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video421"></div>
                    <br>完整影片<br>
                    <div id="video422"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work43">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video431"></div>
                    <br>完整影片<br>
                    <div id="video432"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work44">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video441"></div>
                    <br>完整影片<br>
                    <div id="video442"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work45">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video451"></div>
                    <br>完整影片<br>
                    <div id="video452"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work46">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video461"></div>
                    <br>完整影片<br>
                    <div id="video462"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work47">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video471"></div>
                    <br>完整影片<br>
                    <div id="video472"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work50">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video501"></div>
                    <br>完整影片<br>
                    <div id="video502"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work51">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video511"></div>
                    <br>完整影片<br>
                    <div id="video512"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work52">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video521"></div>
                    <br>完整影片<br>
                    <div id="video522"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work53">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video531"></div>
                    <br>完整影片<br>
                    <div id="video532"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work54">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video541"></div>
                    <br>完整影片<br>
                    <div id="video542"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work55">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video551"></div>
                    <br>完整影片<br>
                    <div id="video552"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work56">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video561"></div>
                    <br>完整影片<br>
                    <div id="video562"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work58">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video581"></div>
                    <br>完整影片<br>
                    <div id="video582"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work59">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video591"></div>
                    <br>完整影片<br>
                    <div id="video592"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work61">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video611"></div>
                    <br>完整影片<br>
                    <div id="video612"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work62">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video621"></div>
                    <br>完整影片<br>
                    <div id="video622"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work63">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video631"></div>
                    <br>完整影片<br>
                    <div id="video632"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work64">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video641"></div>
                    <br>完整影片<br>
                    <div id="video642"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work65">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video651"></div>
                    <br>完整影片<br>
                    <div id="video652"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work66">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video661"></div>
                    <br>完整影片<br>
                    <div id="video662"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work67">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video671"></div>
                    <br>完整影片<br>
                    <div id="video672"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work68">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video681"></div>
                    <br>完整影片<br>
                    <div id="video682"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work69">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video691"></div>
                    <br>完整影片<br>
                    <div id="video692"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work70">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video701"></div>
                    <br>完整影片<br>
                    <div id="video702"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work71">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video711"></div>
                    <br>完整影片<br>
                    <div id="video712"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work72">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video721"></div>
                    <br>完整影片<br>
                    <div id="video722"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work73">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video731"></div>
                    <br>完整影片<br>
                    <div id="video732"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work74">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video741"></div>
                    <br>完整影片<br>
                    <div id="video742"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work76">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video761"></div>
                    <br>完整影片<br>
                    <div id="video762"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work79">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video791"></div>
                    <br>完整影片<br>
                    <div id="video792"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work80">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video801"></div>
                    <br>完整影片<br>
                    <div id="video802"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work81">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video811"></div>
                    <br>完整影片<br>
                    <div id="video812"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work82">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video821"></div>
                    <br>完整影片<br>
                    <div id="video822"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work83">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video831"></div>
                    <br>完整影片<br>
                    <div id="video832"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work84">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video841"></div>
                    <br>完整影片<br>
                    <div id="video842"></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="work85">
            <div class="md-content">
                <div>
                    <button class="md-close"><img src="images/close.png" class="close" ></button>
                    廣告片<br>
                    <div id="video851"></div>
                    <br>完整影片<br>
                    <div id="video852"></div>
                </div>
            </div>
        </div>  
    <!-- 比賽作品內容結束 -->
    <!-- To fb-->
        <div class="goFbBox" style="top: 195px;">
            <a href="https://www.facebook.com/krtc.competition2016" target="_blank"><img src="images/fb.gif" class="goFbImg"></a>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script>
                $(function(){
                    $(window).resize(function(){
                        var _winH = $(window).height();
                        $('.goFbBox').css('top', _winH-118);
                        $(window).scroll(function(){                
                            var scrollTop = $(document).scrollTop();
                            $('.goFbBox').stop().animate({
                                top: _winH + scrollTop -118
                            },400);
                        });
                    }).resize();

                });
            </script>        
        </div>
    <header>
        <div class="title">
            <div class="logo"><a href="home.php"><img class="logoSize" src="img/logo.png"></a></div>
            <div class="countdown">              
                <!-- <span style="float:left;">網路投票&nbsp;&nbsp;</span>
                <span style="float:right;">&nbsp;&nbsp;Days</span>
                <span id="d" style="font-size:28px;color:red;float:right;"></span><br><hr> -->
                <span style="float:left;">公布入圍&nbsp;&nbsp;</span>
                <span style="float:right;">&nbsp;&nbsp;Days</span>
                <span id="e" style="font-size:28px;color:red;float:right;"></span><br><hr>
                <span style="float:left;">頒獎典禮&nbsp;&nbsp;</span>
                <span style="float:right;">&nbsp;&nbsp;Days</span>
                <span id="f" style="font-size:28px;color:red;float:right;"></span><br><hr> 
            </div>
            <script>
                //倒數計時器
                function update(){
                    var a=(new Date).getTime(),
                    b=(target_date-a)/1e3;
                    days=parseInt(b/86400),b%=86400,
                    $days.innerHTML=pad(days,2)
                }
                function pad(a,b){
                    for(var c=a+"";c.length<b;)
                        c="0"+c;
                    return c
                }
                var days,
                    now=new Date,
                    current_year=now.getFullYear(),
                    next_year=current_year+1,
                    // target_date=new Date("May 9, "+current_year).getTime(),
                    // $days=document.getElementById("d");
                    // update(),setInterval(update,1e3);
                    target_date=new Date("May 23, "+current_year).getTime(),
                    $days=document.getElementById("e");
                    update(),setInterval(update,1e3);
                    target_date=new Date("May 28, "+current_year).getTime(),
                    $days=document.getElementById("f");
                    update(),setInterval(update,1e3);
            </script>
        </div>
        <nav class="nav" id="nav">
            <div >
                <img src="img/v1.png" alt="." id="dv">
            </div>
            <ul class="menu">
                <li></li>
                <a href="home.php"><li class="menu-button" id="home">首頁</li></a>|
                <a href="news.php"><li class="menu-button" id="news">最新消息</li></a>|
                <a href="origin.html"><li class="menu-button" id="origin">活動介紹</li><a>|
                <a href="info.html">
                    <li class="menu-button" id="info">比賽資訊
                        <ul class="drop-menu">
                            <a href="info.html#s1"><li class="drop">報名須知</li></a>
                            <a href="info.html#s2"><li class="drop">相關日程</li></a>
                            <a href="info.html#s3"><li class="drop">作品繳交</li></a>
                            <a href="info.html#s4"><li class="drop">評分方式</li></a>
                            <a href="info.html#s5"><li class="drop">評審簡介</li></a>
                            <a href="info.html#s6"><li class="drop">獎金資訊</li></a>
                        </ul>
                    </li></a>|
                <!-- <a href="apply.html"><li  class="menu-button" id="apply">我要報名</li></a>| -->
                <a href="vote.php"><li  class="menu-button" id="vote">我要投票</li></a>|
                <!-- <a href="video.php"><li class="menu-button" id="video">影片觀賞</li></a>| -->
                <a href="download.html"><li class="menu-button" id="download">相關下載</li></a>|
                <a href="notice.html"><li class="menu-button" id="link">活動注意事項</li></a>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="text-cont" id="newspage">
            <div class="order">
                <br>
                <h3 class="orderH3">排行榜</h3>
                <?php
                    $get="SELECT * FROM `krtco_vote` ORDER BY number DESC,updateTime DESC";
                    $data=mysqli_query($conn,$get);
                    for($i=1;$i<=5;$i++){
                        $result=mysqli_fetch_assoc($data);
                        if($result["number"]>0){
                        echo "第 $i 名: 編號";
                        echo $result["no"];
                        echo "<br>";
                        } 
                    } 
                ?>
            </div>
            <div class="top" >
                <img src="img/news.png" alt="news" height="85px" class="newsman"><p style="text-align:right; margin:0;">網路人氣投票占總成績的20%，最佳網路人氣獎可獲得新台幣5000元</p><div class="manword">請登入Facebook帳號，一個帳號限投一票<br><p style="text-align:right; margin:0; font-size:15px;">(請勾選隊名旁邊的小圈圈!)</p></div>
            </div>
            <form action="vote.php" method="post" name="fb" onsubmit="return CheckForm()" id="formID">
            <div class="work">   
                <input type="hidden" name="id" value="">
				<input type="hidden" name="token" value="<?php echo $_SESSION['token']?>">
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:2
                    <img src="work/two.png">
                    <a class="md-trigger" data-modal="work2" style="float:right; width:100%; text-align:center;" id="box2" video="2">觀看影片</a>
                    <input id="two" type="radio" name="choose" value="two" required>
                    <label for="two" >隊名:超壯女2.0三號流水線<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Two'";
                        $show2=mysqli_query($conn,$sql);
                        $row2=mysqli_fetch_row($show2);
                        echo $row2[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:3
                    <img src="work/three.png">
                    <a class="md-trigger" data-modal="work3" style="float:right; width:100%; text-align:center;" id="box3">觀看影片</a>
                    <input id="three" type="radio" name="choose" value="three" >
                    <label for="three" >隊名:R Jay Film<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Three'";
                        $show3=mysqli_query($conn,$sql);
                        $row3=mysqli_fetch_row($show3);
                        echo $row3[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:4
                    <img src="work/four.png">
                    <a class="md-trigger" data-modal="work4" style="float:right; width:100%; text-align:center;" id="box4">觀看影片</a>
                    <input id="four" type="radio" name="choose" value="four">
                    <label for="four" >隊名:四葉草<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Four'";
                        $show4=mysqli_query($conn,$sql);
                        $row4=mysqli_fetch_row($show4);
                        echo $row4[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:5
                    <img src="work/five.png">
                    <a class="md-trigger" data-modal="work5" style="float:right; width:100%; text-align:center;" id="box5">觀看影片</a>
                    <input id="five" type="radio" name="choose" value="five">
                    <label for="five" >隊名:望夢<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Five'";
                        $show5=mysqli_query($conn,$sql);
                        $row5=mysqli_fetch_row($show5);
                        echo $row5[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:6
                    <img src="work/six.png">
                    <a class="md-trigger" data-modal="work6" style="float:right; width:100%; text-align:center;" id="box6">觀看影片</a>
                    <input id="six" type="radio" name="choose" value="six">
                    <label for="six" >隊名:Sapphire Eye<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Six'";
                        $show6=mysqli_query($conn,$sql);
                        $row6=mysqli_fetch_row($show6);
                        echo $row6[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:7
                    <img src="work/seven.png">
                    <a class="md-trigger" data-modal="work7" style="float:right; width:100%; text-align:center;" id="box7">觀看影片</a>
                    <input id="seven" type="radio" name="choose" value="seven">
                    <label for="seven" >隊名:讓愛接駁<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seven'";
                        $show7=mysqli_query($conn,$sql);
                        $row7=mysqli_fetch_row($show7);
                        echo $row7[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:8
                    <img src="work/eight.png">
                    <a class="md-trigger" data-modal="work8" style="float:right; width:100%; text-align:center;" id="box8">觀看影片</a>
                    <input id="eight" type="radio" name="choose" value="eight">
                    <label for="eight" >隊名:八必播<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eight'";
                        $show8=mysqli_query($conn,$sql);
                        $row8=mysqli_fetch_row($show8);
                        echo $row8[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:9
                    <img src="work/nine.png">
                    <a class="md-trigger" data-modal="work9" style="float:right; width:100%; text-align:center;" id="box9">觀看影片</a>
                    <input id="nine" type="radio" name="choose" value="nine">
                    <label for="nine" >隊名:雙人模式<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Nine'";
                        $show9=mysqli_query($conn,$sql);
                        $row9=mysqli_fetch_row($show9);
                        echo $row9[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:10
                    <img src="work/ten.png">
                    <a class="md-trigger" data-modal="work10" style="float:right; width:100%; text-align:center;" id="box10">觀看影片</a>
                    <input id="ten" type="radio" name="choose" value="ten">
                    <label for="ten" >隊名:普洱人影像製作團隊<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Ten'";
                        $show10=mysqli_query($conn,$sql);
                        $row10=mysqli_fetch_row($show10);
                        echo $row10[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:11
                    <img src="work/eleven.png">
                    <a class="md-trigger" data-modal="work11" style="float:right; width:100%; text-align:center;" id="box11">觀看影片</a>
                    <input id="eleven" type="radio" name="choose" value="eleven">
                    <label for="eleven" >隊名:大腸包小腸 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eleven'";
                        $show11=mysqli_query($conn,$sql);
                        $row11=mysqli_fetch_row($show11);
                        echo $row11[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:12
                    <img src="work/twelve.png">
                    <a class="md-trigger" data-modal="work12" style="float:right; width:100%; text-align:center;" id="box12">觀看影片</a>
                    <input id="twelve" type="radio" name="choose" value="twelve">
                    <label for="twelve" >隊名:Lift.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Twelve'";
                        $show12=mysqli_query($conn,$sql);
                        $row12=mysqli_fetch_row($show12);
                        echo $row12[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:13
                    <img src="work/thirteen.png">
                    <a class="md-trigger" data-modal="work13" style="float:right; width:100%; text-align:center;" id="box13">觀看影片</a>
                    <input id="thirteen" type="radio" name="choose" value="thirteen" required >
                    <label for="thirteen" >隊名:五福臨門<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirteen'";
                        $show13=mysqli_query($conn,$sql);
                        $row13=mysqli_fetch_row($show13);
                        echo $row13[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:14
                    <img src="work/fourteen.png">
                    <a class="md-trigger" data-modal="work14" style="float:right; width:100%; text-align:center;" id="box14">觀看影片</a>
                    <input id="fourteen" type="radio" name="choose" value="fourteen">
                    <label for="fourteen" >隊名:創意者<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fourteen'";
                        $show14=mysqli_query($conn,$sql);
                        $row14=mysqli_fetch_row($show14);
                        echo $row14[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:15
                    <img src="work/fifteen.png">
                    <a class="md-trigger" data-modal="work15" style="float:right; width:100%; text-align:center;" id="box15">觀看影片</a>
                    <input id="fifteen" type="radio" name="choose" value="fifteen">
                    <label for="fifteen" >隊名:你好,高雄<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fifteen'";
                        $show15=mysqli_query($conn,$sql);
                        $row15=mysqli_fetch_row($show15);
                        echo $row15[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:17
                    <img src="work/seventeen.png">
                    <a class="md-trigger" data-modal="work17" style="float:right; width:100%; text-align:center;" id="box17">觀看影片</a>
                    <input id="seventeen" type="radio" name="choose" value="seventeen">
                    <label for="seventeen" >隊名:五騎士<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seventeen'";
                        $show17=mysqli_query($conn,$sql);
                        $row17=mysqli_fetch_row($show17);
                        echo $row17[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:18
                    <img src="work/eighteen.png">
                    <a class="md-trigger" data-modal="work18" style="float:right; width:100%; text-align:center;" id="box18">觀看影片</a>
                    <input id="eighteen" type="radio" name="choose" value="eighteen">
                    <label for="eighteen" >隊名:Crazy 5<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eighteen'";
                        $show18=mysqli_query($conn,$sql);
                        $row18=mysqli_fetch_row($show18);
                        echo $row18[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:19
                    <img src="work/nineteen.png">
                    <a class="md-trigger" data-modal="work19" style="float:right; width:100%; text-align:center;" id="box19">觀看影片</a>
                    <input id="nineteen" type="radio" name="choose" value="nineteen">
                    <label for="nineteen" >隊名:燒肉組合<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Nineteen'";
                        $show19=mysqli_query($conn,$sql);
                        $row19=mysqli_fetch_row($show19);
                        echo $row19[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:20
                    <img src="work/twenty.png">
                    <a class="md-trigger" data-modal="work20" style="float:right; width:100%; text-align:center;" id="box20">觀看影片</a>
                    <input id="twenty" type="radio" name="choose" value="twenty">
                    <label for="twenty" >隊名:微靈感<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Twenty'";
                        $show20=mysqli_query($conn,$sql);
                        $row20=mysqli_fetch_row($show20);
                        echo $row20[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:21
                    <img src="work/twentyone.png">
                    <a class="md-trigger" data-modal="work21" style="float:right; width:100%; text-align:center;" id="box21">觀看影片</a>
                    <input id="twentyone" type="radio" name="choose" value="twentyone">
                    <label for="twentyone" >隊名:快樂小夥伴<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Twentyone'";
                        $show21=mysqli_query($conn,$sql);
                        $row21=mysqli_fetch_row($show21);
                        echo $row21[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:22
                    <img src="work/twentytwo.png">
                    <a class="md-trigger" data-modal="work22" style="float:right; width:100%; text-align:center;" id="box22">觀看影片</a>
                    <input id="twentytwo" type="radio" name="choose" value="twentytwo">
                    <label for="twentytwo" >隊名:在台的澳門小伙子<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='twentytwo'";
                        $show22=mysqli_query($conn,$sql);
                        $row22=mysqli_fetch_row($show22);
                        echo $row22[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:23
                    <img src="work/twentythree.png">
                    <a class="md-trigger" data-modal="work23" style="float:right; width:100%; text-align:center;" id="box23">觀看影片</a>
                    <input id="twentythree" type="radio" name="choose" value="twentythree" >
                    <label for="twentythree" >隊名:豬肉蓋飯<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Twentythree'";
                        $show23=mysqli_query($conn,$sql);
                        $row23=mysqli_fetch_row($show23);
                        echo $row23[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:24
                    <img src="work/twentyfour.png">
                    <a class="md-trigger" data-modal="work24" style="float:right; width:100%; text-align:center;" id="box24">觀看影片</a>
                    <input id="twentyfour" type="radio" name="choose" value="twentyfour">
                    <label for="twentyfour" >隊名:無<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Twentyfour'";
                        $show24=mysqli_query($conn,$sql);
                        $row24=mysqli_fetch_row($show24);
                        echo $row24[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:25
                    <img src="work/twentyfive.png">
                    <a class="md-trigger" data-modal="work25" style="float:right; width:100%; text-align:center;" id="box25">觀看影片</a>
                    <input id="twentyfive" type="radio" name="choose" value="twentyfive" required>
                    <label for="twentyfive" >隊名:逃亡女馬<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Twentyfive'";
                        $show25=mysqli_query($conn,$sql);
                        $row25=mysqli_fetch_row($show25);
                        echo $row25[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:26
                    <img src="work/twentysix.png">
                    <a class="md-trigger" data-modal="work26" style="float:right; width:100%; text-align:center;" id="box26">觀看影片</a>
                    <input id="twentysix" type="radio" name="choose" value="twentysix">
                    <label for="twentysix" >隊名:前鎮<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Twentysix'";
                        $show26=mysqli_query($conn,$sql);
                        $row26=mysqli_fetch_row($show26);
                        echo $row26[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:27
                    <img src="work/twentyseven.png">
                    <a class="md-trigger" data-modal="work27" style="float:right; width:100%; text-align:center;" id="box27">觀看影片</a>
                    <input id="twentyseven" type="radio" name="choose" value="twentyseven">
                    <label for="twentyseven" >隊名:健身山灣<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='TwentySeven'";
                        $show27=mysqli_query($conn,$sql);
                        $row27=mysqli_fetch_row($show27);
                        echo $row27[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:30
                    <img src="work/thirty.png">
                    <a class="md-trigger" data-modal="work30" style="float:right; width:100%; text-align:center;" id="box30">觀看影片</a>
                    <input id="thirty" type="radio" name="choose" value="thirty">
                    <label for="thirty" >隊名:倆人<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirty'";
                        $show30=mysqli_query($conn,$sql);
                        $row30=mysqli_fetch_row($show30);
                        echo $row30[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:31
                    <img src="work/thirtyone.png">
                    <a class="md-trigger" data-modal="work31" style="float:right; width:100%; text-align:center;" id="box31">觀看影片</a>
                    <input id="thirtyone" type="radio" name="choose" value="thirtyone">
                    <label for="thirtyone" >隊名:萬花筒<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirtyone'";
                        $show31=mysqli_query($conn,$sql);
                        $row31=mysqli_fetch_row($show31);
                        echo $row31[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:32
                    <img src="work/thirtytwo.png">
                    <a class="md-trigger" data-modal="work32" style="float:right; width:100%; text-align:center;" id="box32">觀看影片</a>
                    <input id="thirtytwo" type="radio" name="choose" value="thirtytwo">
                    <label for="thirtytwo" >隊名:RONIN STUDIO<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirtytwo'";
                        $show32=mysqli_query($conn,$sql);
                        $row32=mysqli_fetch_row($show32);
                        echo $row32[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:33
                    <img src="work/thirtythree.png">
                    <a class="md-trigger" data-modal="work33" style="float:right; width:100%; text-align:center;" id="box33">觀看影片</a>
                    <input id="thirtythree" type="radio" name="choose" value="thirtythree" >
                    <label for="thirtythree" >隊名:orgin原點<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirtythree'";
                        $show33=mysqli_query($conn,$sql);
                        $row33=mysqli_fetch_row($show33);
                        echo $row33[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:34
                    <img src="work/thirtyfour.png">
                    <a class="md-trigger" data-modal="work34" style="float:right; width:100%; text-align:center;" id="box34">觀看影片</a>
                    <input id="thirtyfour" type="radio" name="choose" value="thirtyfour">
                    <label for="thirtyfour" >隊名:O.R.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirtyfour'";
                        $show34=mysqli_query($conn,$sql);
                        $row34=mysqli_fetch_row($show34);
                        echo $row34[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:35
                    <img src="work/thirtyfive.png">
                    <a class="md-trigger" data-modal="work35" style="float:right; width:100%; text-align:center;" id="box35">觀看影片</a>
                    <input id="thirtyfive" type="radio" name="choose" value="thirtyfive">
                    <label for="thirtyfive" >隊名:拿拿南南佳錚宗痛萬萬塞<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirtyfive'";
                        $show35=mysqli_query($conn,$sql);
                        $row35=mysqli_fetch_row($show35);
                        echo $row35[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:37
                    <img src="work/thirtyseven.png">
                    <a class="md-trigger" data-modal="work37" style="float:right; width:100%; text-align:center;" id="box37">觀看影片</a>
                    <input id="thirtyseven" type="radio" name="choose" value="thirtyseven" required>
                    <label for="thirtyseven" >隊名:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HaKuNaMaTaTa<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirtyseven'";
                        $show37=mysqli_query($conn,$sql);
                        $row37=mysqli_fetch_row($show37);
                        echo $row37[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:38
                    <img src="work/thirtyeight.png">
                    <a class="md-trigger" data-modal="work38" style="float:right; width:100%; text-align:center;" id="box38">觀看影片</a>
                    <input id="thirtyeight" type="radio" name="choose" value="thirtyeight">
                    <label for="thirtyeight" >隊名:百變少女組<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirtyeight'";
                        $show38=mysqli_query($conn,$sql);
                        $row38=mysqli_fetch_row($show38);
                        echo $row38[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:39
                    <img src="work/thirtynine.png">
                    <a class="md-trigger" data-modal="work39" style="float:right; width:100%; text-align:center;" id="box39">觀看影片</a>
                    <input id="thirtynine" type="radio" name="choose" value="thirtynine">
                    <label for="thirtynine" >隊名:Relief<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Thirtynine'";
                        $show39=mysqli_query($conn,$sql);
                        $row39=mysqli_fetch_row($show39);
                        echo $row39[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:40
                    <img src="work/fourty.png">
                    <a class="md-trigger" data-modal="work40" style="float:right; width:100%; text-align:center;" id="box40">觀看影片</a>
                    <input id="fourty" type="radio" name="choose" value="fourty">
                    <label for="fourty" >隊名:某哩系美安抓<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fourty'";
                        $show40=mysqli_query($conn,$sql);
                        $row40=mysqli_fetch_row($show40);
                        echo $row40[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                <div class="vote">
                    編號:41
                    <img src="work/fourtyone.png">
                    <a class="md-trigger" data-modal="work41" style="float:right; width:100%; text-align:center;" id="box41">觀看影片</a>
                    <input id="fortyone" type="radio" name="choose" value="fortyone">
                    <label for="fortyone" >隊名:X.D.U.Z.Y<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fortyone'";
                        $show41=mysqli_query($conn,$sql);
                        $row41=mysqli_fetch_row($show41);
                        echo $row41[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:42
                    <img src="work/fourtytwo.png">
                    <a class="md-trigger" data-modal="work42" style="float:right; width:100%; text-align:center;" id="box42">觀看影片</a>
                    <input id="fortytwo" type="radio" name="choose" value="fortytwo">
                    <label for="fortytwo" >隊名:DreamSoul<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fortytwo'";
                        $show42=mysqli_query($conn,$sql);
                        $row42=mysqli_fetch_row($show42);
                        echo $row42[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:43
                    <img src="work/fourtythree.png">
                    <a class="md-trigger" data-modal="work43" style="float:right; width:100%; text-align:center;" id="box43">觀看影片</a>
                    <input id="fortythree" type="radio" name="choose" value="fortythree" >
                    <label for="fortythree" >隊名:毛叢<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fortythree'";
                        $show43=mysqli_query($conn,$sql);
                        $row43=mysqli_fetch_row($show43);
                        echo $row43[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:44
                    <img src="work/fourtyfour.png">
                    <a class="md-trigger" data-modal="work44" style="float:right; width:100%; text-align:center;" id="box44">觀看影片</a>
                    <input id="fortyfour" type="radio" name="choose" value="fortyfour">
                    <label for="fortyfour" >隊名:Triple Triangle<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fortyfour'";
                        $show44=mysqli_query($conn,$sql);
                        $row44=mysqli_fetch_row($show44);
                        echo $row44[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:45
                    <img src="work/fourtyfive.png">
                    <a class="md-trigger" data-modal="work45" style="float:right; width:100%; text-align:center;" id="box45">觀看影片</a>
                    <input id="fortyfive" type="radio" name="choose" value="fortyfive">
                    <label for="fortyfive" >隊名:嗨高雄<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fortyfive'";
                        $show45=mysqli_query($conn,$sql);
                        $row45=mysqli_fetch_row($show45);
                        echo $row45[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:46
                    <img src="work/fourtysix.png">
                    <a class="md-trigger" data-modal="work46" style="float:right; width:100%; text-align:center;" id="box46">觀看影片</a>
                    <input id="fortysix" type="radio" name="choose" value="fortysix">
                    <label for="fortysix" >隊名:野原新之助<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fortysix'";
                        $show46=mysqli_query($conn,$sql);
                        $row46=mysqli_fetch_row($show46);
                        echo $row46[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:47
                    <img src="work/fourtyseven.png">
                    <a class="md-trigger" data-modal="work47" style="float:right; width:100%; text-align:center;" id="box47">觀看影片</a>
                    <input id="fortyseven" type="radio" name="choose" value="fortyseven">
                    <label for="fortyseven" >隊名:放影天下<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fortyseven'";
                        $show47=mysqli_query($conn,$sql);
                        $row47=mysqli_fetch_row($show47);
                        echo $row47[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:50
                    <img src="work/fifty.png">
                    <a class="md-trigger" data-modal="work50" style="float:right; width:100%; text-align:center;" id="box50">觀看影片</a>
                    <input id="fifty" type="radio" name="choose" value="fifty">
                    <label for="fifty" >隊名:朗爽笑容<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fifty'";
                        $show50=mysqli_query($conn,$sql);
                        $row50=mysqli_fetch_row($show50);
                        echo $row50[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:51
                    <img src="work/fiftyone.png">
                    <a class="md-trigger" data-modal="work51" style="float:right; width:100%; text-align:center;" id="box51">觀看影片</a>
                    <input id="fiftyone" type="radio" name="choose" value="fiftyone">
                    <label for="fiftyone" >隊名:9453<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fiftyone'";
                        $show51=mysqli_query($conn,$sql);
                        $row51=mysqli_fetch_row($show51);
                        echo $row51[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:52
                    <img src="work/fiftytwo.png">
                    <a class="md-trigger" data-modal="work52" style="float:right; width:100%; text-align:center;" id="box52">觀看影片</a>
                    <input id="fiftytwo" type="radio" name="choose" value="fiftytwo">
                    <label for="fiftytwo" >隊名:微心電<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fiftytwo'";
                        $show52=mysqli_query($conn,$sql);
                        $row52=mysqli_fetch_row($show52);
                        echo $row52[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:53
                    <img src="work/fiftythree.png">
                    <a class="md-trigger" data-modal="work53" style="float:right; width:100%; text-align:center;" id="box53">觀看影片</a>
                    <input id="fiftythree" type="radio" name="choose" value="fiftythree" >
                    <label for="fiftythree" >隊名:瑭宜網多 TangYiStudio<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fiftythree'";
                        $show53=mysqli_query($conn,$sql);
                        $row53=mysqli_fetch_row($show53);
                        echo $row53[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:54
                    <img src="work/fiftyfour.png">
                    <a class="md-trigger" data-modal="work54" style="float:right; width:100%; text-align:center;" id="box54">觀看影片</a>
                    <input id="fiftyfour" type="radio" name="choose" value="fiftyfour">
                    <label for="fiftyfour" >隊名:Clown Mask<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fiftyfour'";
                        $show54=mysqli_query($conn,$sql);
                        $row54=mysqli_fetch_row($show54);
                        echo $row54[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:55
                    <img src="work/fiftyfive.png">
                    <a class="md-trigger" data-modal="work55" style="float:right; width:100%; text-align:center;" id="box55">觀看影片</a>
                    <input id="fiftyfive" type="radio" name="choose" value="fiftyfive">
                    <label for="fiftyfive" >隊名:正修科大<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fiftyfive'";
                        $show55=mysqli_query($conn,$sql);
                        $row55=mysqli_fetch_row($show55);
                        echo $row55[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:56
                    <img src="work/fiftysix.png">
                    <a class="md-trigger" data-modal="work56" style="float:right; width:100%; text-align:center;" id="box56">觀看影片</a>
                    <input id="fiftysix" type="radio" name="choose" value="fiftysix">
                    <label for="fiftysix" >隊名:MRThoms<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fiftysix'";
                        $show56=mysqli_query($conn,$sql);
                        $row56=mysqli_fetch_row($show56);
                        echo $row56[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:58
                    <img src="work/fiftyeight.png">
                    <a class="md-trigger" data-modal="work58" style="float:right; width:100%; text-align:center;" id="box58">觀看影片</a>
                    <input id="fiftyeight" type="radio" name="choose" value="fiftyeight">
                    <label for="fiftyeight" >隊名:EGO<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fiftyeight'";
                        $show58=mysqli_query($conn,$sql);
                        $row58=mysqli_fetch_row($show58);
                        echo $row58[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:59
                    <img src="work/fiftynine.png">
                    <a class="md-trigger" data-modal="work59" style="float:right; width:100%; text-align:center;" id="box59">觀看影片</a>
                    <input id="fiftynine" type="radio" name="choose" value="fiftynine">
                    <label for="fiftynine" >隊名:宥耍廢<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Fiftynine'";
                        $show59=mysqli_query($conn,$sql);
                        $row59=mysqli_fetch_row($show59);
                        echo $row59[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:61
                    <img src="work/sixtyone.png">
                    <a class="md-trigger" data-modal="work61" style="float:right; width:100%; text-align:center;" id="box61">觀看影片</a>
                    <input id="sixtyone" type="radio" name="choose" value="sixtyone" required>
                    <label for="sixtyone" >隊名:要拍者麼呢<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtyone'";
                        $show61=mysqli_query($conn,$sql);
                        $row61=mysqli_fetch_row($show61);
                        echo $row61[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:62
                    <img src="work/sixtytwo.png">
                    <a class="md-trigger" data-modal="work62" style="float:right; width:100%; text-align:center;" id="box62">觀看影片</a>
                    <input id="sixtytwo" type="radio" name="choose" value="sixtytwo">
                    <label for="sixtytwo" >隊名:晚上吃飯否 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtytwo'";
                        $show62=mysqli_query($conn,$sql);
                        $row62=mysqli_fetch_row($show62);
                        echo $row62[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:63
                    <img src="work/sixtythree.png">
                    <a class="md-trigger" data-modal="work63" style="float:right; width:100%; text-align:center;" id="box63">觀看影片</a>
                    <input id="sixtythree" type="radio" name="choose" value="sixtythree" >
                    <label for="sixtythree" >隊名:HaHaMovie<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtythree'";
                        $show63=mysqli_query($conn,$sql);
                        $row63=mysqli_fetch_row($show63);
                        echo $row63[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:64
                    <img src="work/sixtyfour.png">
                    <a class="md-trigger" data-modal="work64" style="float:right; width:100%; text-align:center;" id="box64">觀看影片</a>
                    <input id="sixtyfour" type="radio" name="choose" value="sixtyfour">
                    <label for="sixtyfour" >隊名:黑色幽默<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtyfour'";
                        $show64=mysqli_query($conn,$sql);
                        $row64=mysqli_fetch_row($show64);
                        echo $row64[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:65
                    <img src="work/sixtyfive.png">
                    <a class="md-trigger" data-modal="work65" style="float:right; width:100%; text-align:center;" id="box65">觀看影片</a>
                    <input id="sixtyfive" type="radio" name="choose" value="sixtyfive">
                    <label for="sixtyfive" >隊名:我們的國家公園管理處<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtyfive'";
                        $show65=mysqli_query($conn,$sql);
                        $row65=mysqli_fetch_row($show65);
                        echo $row65[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:66
                    <img src="work/sixtysix.png">
                    <a class="md-trigger" data-modal="work66" style="float:right; width:100%; text-align:center;" id="box66">觀看影片</a>
                    <input id="sixtysix" type="radio" name="choose" value="sixtysix">
                    <label for="sixtysix" >隊名:個人<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtysix'";
                        $show66=mysqli_query($conn,$sql);
                        $row66=mysqli_fetch_row($show66);
                        echo $row66[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:67
                    <img src="work/sixtyseven.png">
                    <a class="md-trigger" data-modal="work67" style="float:right; width:100%; text-align:center;" id="box67">觀看影片</a>
                    <input id="sixtyseven" type="radio" name="choose" value="sixtyseven">
                    <label for="sixtyseven" >隊名:YoYo CHannel<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtyseven'";
                        $show67=mysqli_query($conn,$sql);
                        $row67=mysqli_fetch_row($show67);
                        echo $row67[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:68
                    <img src="work/sixtyeight.png">
                    <a class="md-trigger" data-modal="work68" style="float:right; width:100%; text-align:center;" id="box68">觀看影片</a>
                    <input id="sixtyeight" type="radio" name="choose" value="sixtyeight">
                    <label for="sixtyeight" >隊名:Roger That<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtyeight'";
                        $show68=mysqli_query($conn,$sql);
                        $row68=mysqli_fetch_row($show68);
                        echo $row68[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:69
                    <img src="work/sixtynine.png">
                    <a class="md-trigger" data-modal="work69" style="float:right; width:100%; text-align:center;" id="box69">觀看影片</a>
                    <input id="sixtynine" type="radio" name="choose" value="sixtynine">
                    <label for="sixtynine" >隊名:頹廢人生<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Sixtynine'";
                        $show69=mysqli_query($conn,$sql);
                        $row69=mysqli_fetch_row($show69);
                        echo $row69[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:70
                    <img src="work/seventy.png">
                    <a class="md-trigger" data-modal="work70" style="float:right; width:100%; text-align:center;" id="box70">觀看影片</a>
                    <input id="seventy" type="radio" name="choose" value="seventy">
                    <label for="seventy" >隊名:我不會告訴你<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seventy'";
                        $show70=mysqli_query($conn,$sql);
                        $row70=mysqli_fetch_row($show70);
                        echo $row70[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:71
                    <img src="work/seventyone.png">
                    <a class="md-trigger" data-modal="work71" style="float:right; width:100%; text-align:center;" id="box71">觀看影片</a>
                    <input id="seventyone" type="radio" name="choose" value="seventyone">
                    <label for="seventyone" >隊名:MidNight<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seventyone'";
                        $show71=mysqli_query($conn,$sql);
                        $row71=mysqli_fetch_row($show71);
                        echo $row71[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:72
                    <img src="work/seventytwo.png">
                    <a class="md-trigger" data-modal="work72" style="float:right; width:100%; text-align:center;" id="box72">觀看影片</a>
                    <input id="seventytwo" type="radio" name="choose" value="seventytwo">
                    <label for="seventytwo" >隊名:丁丁惠控白幽<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seventytwo'";
                        $show72=mysqli_query($conn,$sql);
                        $row72=mysqli_fetch_row($show72);
                        echo $row72[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:73
                    <img src="work/seventythree.png">
                    <a class="md-trigger" data-modal="work73" style="float:right; width:100%; text-align:center;" id="box73">觀看影片</a>
                    <input id="seventythree" type="radio" name="choose" value="seventythree" required>
                    <label for="seventythree" >隊名:福山愛雅<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seventythree'";
                        $show73=mysqli_query($conn,$sql);
                        $row73=mysqli_fetch_row($show73);
                        echo $row73[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:74
                    <img src="work/seventyfour.png">
                    <a class="md-trigger" data-modal="work74" style="float:right; width:100%; text-align:center;" id="box74">觀看影片</a>
                    <input id="seventyfour" type="radio" name="choose" value="seventyfour">
                    <label for="seventyfour" >隊名:哪些人<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seventyfour'";
                        $show74=mysqli_query($conn,$sql);
                        $row74=mysqli_fetch_row($show74);
                        echo $row74[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:76
                    <img src="work/seventysix.png">
                    <a class="md-trigger" data-modal="work76" style="float:right; width:100%; text-align:center;" id="box76">觀看影片</a>
                    <input id="seventysix" type="radio" name="choose" value="seventysix">
                    <label for="seventysix" >隊名:Dream lifter<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seventysix'";
                        $show76=mysqli_query($conn,$sql);
                        $row76=mysqli_fetch_row($show76);
                        echo $row76[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:79
                    <img src="work/seventynine.png">
                    <a class="md-trigger" data-modal="work79" style="float:right; width:100%; text-align:center;" id="box79">觀看影片</a>
                    <input id="seventynine" type="radio" name="choose" value="seventynine">
                    <label for="seventynine" >隊名:是誰I ma!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Seventynine'";
                        $show79=mysqli_query($conn,$sql);
                        $row79=mysqli_fetch_row($show79);
                        echo $row79[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:80
                    <img src="work/eighty.png">
                    <a class="md-trigger" data-modal="work80" style="float:right; width:100%; text-align:center;" id="box80">觀看影片</a>
                    <input id="eighty" type="radio" name="choose" value="eighty">
                    <label for="eighty" >隊名:你說什麼<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eighty'";
                        $show80=mysqli_query($conn,$sql);
                        $row80=mysqli_fetch_row($show80);
                        echo $row80[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:81
                    <img src="work/eightyone.png">
                    <a class="md-trigger" data-modal="work81" style="float:right; width:100%; text-align:center;" id="box81">觀看影片</a>
                    <input id="eightyone" type="radio" name="choose" value="eightyone">
                    <label for="eightyone" >隊名:黑畫面<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eightyone'";
                        $show81=mysqli_query($conn,$sql);
                        $row81=mysqli_fetch_row($show81);
                        echo $row81[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:82
                    <img src="work/eightytwo.png">
                    <a class="md-trigger" data-modal="work82" style="float:right; width:100%; text-align:center;" id="box82">觀看影片</a>
                    <input id="eightytwo" type="radio" name="choose" value="eightytwo">
                    <label for="eightytwo" >隊名:高雄三浪子<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eightytwo'";
                        $show82=mysqli_query($conn,$sql);
                        $row82=mysqli_fetch_row($show82);
                        echo $row82[0];
                    ?>
                    </label>
                </div>    
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:83
                    <img src="work/eightythree.png">
                    <a class="md-trigger" data-modal="work83" style="float:right; width:100%; text-align:center;" id="box83">觀看影片</a>
                    <input id="eightythree" type="radio" name="choose" value="eightythree">
                    <label for="eightythree" >隊名:ㄛ<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eightythree'";
                        $show83=mysqli_query($conn,$sql);
                        $row83=mysqli_fetch_row($show83);
                        echo $row83[0];
                    ?>
                    </label>
                </div>
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:84
                    <img src="work/eightyfour.png">
                    <a class="md-trigger" data-modal="work84" style="float:right; width:100%; text-align:center;" id="box84">觀看影片</a>
                    <input id="eightyfour" type="radio" name="choose" value="eightyfour">
                    <label for="eightyfour" >隊名:正修文清街某二樓<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eightyfour'";
                        $show84=mysqli_query($conn,$sql);
                        $row84=mysqli_fetch_row($show84);
                        echo $row84[0];
                    ?>
                    </label>
                </div>  
                <!-- 參賽著 -->
                 <div class="vote">
                    編號:85
                    <img src="work/eightyfive.png">
                    <a class="md-trigger" data-modal="work85" style="float:right; width:100%; text-align:center;" id="box85">觀看影片</a>
                    <input id="eightyfive" type="radio" name="choose" value="eightyfive">
                    <label for="eightyfive" >隊名:戴普喵喵叫<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得票數:
                    <?php
                        $sql="SELECT number from krtco_vote WHERE name='Eightyfive'";
                        $show85=mysqli_query($conn,$sql);
                        $row85=mysqli_fetch_row($show85);
                        echo $row85[0];
                    ?>
                    </label>
                </div> 
                <!-- 參賽著 END -->
        </div>
        <div class="voteFb">
            <input type="submit" name="submit" value="我要投票">
                <!--
                  Below we include the Login Button social plugin. This button uses
                  the JavaScript SDK to present a graphical Login button that triggers
                  the FB.login() function when clicked.
                -->
            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
            <div id="status"></div>
        </div>
        </form>
        </div>
    </div>
    <footer>
        <table>
            <tr>
                <td style="width:5%;">主辦<br>單位</td>
                <td style="width:31%;"><a target="_blank" href="http://www.krtco.com.tw/"><img src="img/main.png" alt="ks" class="logos"></a></td>
                <td style="width:5%;">執行<br>單位</td>
                <td style="width:31%;"><a target="_blank" href="http://www.bm.nsysu.edu.tw/bin/home.php"><img src="img/bm.png" alt="nsysuBM" class="logos"></a></td>
                <td style="width:30%;">
                    聯絡信箱 2016krtcthp@gmail.com <br>聯絡電話 0905-380-245
                </td>

            </tr>
        </table>
        <table>
            <tr>
                <td style="width:5%;">贊助<br>單位</td>
                <td style="width:65%;">
                    <a target="_blank" href="https://www.csc.com.tw/"><img src="img/metal.png" alt="metal" class="metal"></a>
                    <a target="_blank" href="https://www.ubot.com.tw/"><img src="img/bank.png" alt="asia" class="bank"></a>
                    <a target="_blank" href="https://www.asia-records.com.tw/"><img src="img/asia.png" alt="asia" class="asia"></a>
                    <a target="_blank" href="https://cn.unionpay.com/"><img src="img/unionpay.png" alt="cn" class="unionpay"></a>
                </td> 
                <td style="width:18%;">
                    <a target="_blank" href="https://www.facebook.com/krtc.competition2016"><img src="img/fb.png" alt="fb" class="contact-icon"></a>
                    <a target="_blank" href="mailto:2016krtcthp@gmail.com"><img src="img/mail.png" alt="mail" class="contact-icon"></a>
                </td>               
            </tr>
        </table>
    </footer>
    <div class="md-overlay"></div>
    <script src="js/classie.js"></script>
    <script src="vote/votetest.js"></script>
    <script src="vote/modalEffects.js"></script>
</body>
</html>