<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>【高捷三向度-T.H.P】</title>
    <link rel="shortcut icon" href="images/title.png" /> 
    <link rel="stylesheet" href="css/mine.css">
    <style>
        #home{
            background-color: #F7DD67;
            box-shadow: 3px 3px 9px #5D4803;
        }</style>
    <!-- news -->
        <!-- 外觀CSS -->
        <link rel="stylesheet" type="text/css" href="css/defaultHome.css" />
        <!-- 小視窗css -->
        <link rel="stylesheet" type="text/css" href="css/component.css" />
    <!-- banner連結 -->
        <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
        <script src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
            var jQuery172=jQuery.noConflict(true);
        </script>
        <script type="text/javascript">
        jQuery172(function() {
            jQuery172(".flexslider").flexslider({
                slideshowSpeed: 4000, 
                animationSpeed: 400, 
                touch: true
            });
        }); 
        </script>

    <!-- banner end -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script>
        //改變瀏覽列樣式
        $(function(){
            var win=$(window),
                nav=$("nav"),
                dv=$("#dv");
            function inView () {
                if(win.scrollTop()>=160){
                    nav.addClass('nav-View');
                    dv.addClass('dv');
                }
                else{
                    nav.removeClass('nav-View');
                    dv.removeClass('dv');
                }
            }
            win.scroll(inView);
            inView();
        })
    </script>
</head>
<body>
    <?php
        //建立連線
        $con=mysqli_connect('localhost','2016krtc','2016@bms');//"伺服器名稱","使用者名稱","使用者密碼","資料庫名稱" 
        //設定字元編碼
        mysqli_query($con,"SET NAMES 'utf8' ");
        //連線校對
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($con,"2016krtc");
    ?>
    <?php
        $get="SELECT `title`,`content`,`manager`,`time`,`num`,`link` FROM `krtco_news` ORDER BY `time` DESC";
        $data=mysqli_query($con,$get)or die(mysqli_error());
        
        for($i=0;$i<6;$i++){
            $result=mysqli_fetch_assoc($data);
            echo '<div class="md-modal md-effect-1" id="a'.$result["num"].'"><div class="md-content"> <h3><button class="md-close"><img src="images/close.png"></button>';
            echo $result["title"];
            echo '</h3><div><p>';
            echo nl2br(htmlspecialchars(stripslashes($result["content"])));
            echo '</p><a href="'.$result["link"].'" target="_blank">'.$result["link"].'</a></div></div></div>';

        }
    ?>
    <!-- To top fb-->
        <div class="goFbBox" style="top: 195px;">
            <a href="https://www.facebook.com/krtc.competition2016" target="_blank"><img src="images/fb.gif" class="goFbImg"></a>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script>
                //to top
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
                <span id="d" style="font-size:28px;color:red;float:right;"></span><br><hr>  -->
                <!-- <span style="float:left;">公布入圍&nbsp;&nbsp;</span>
                <span style="float:right;">&nbsp;&nbsp;Days</span>               
                <span id="e" style="font-size:28px;color:red;float:right;"></span><br><hr>  -->
                <span style="float:left;">頒獎典禮&nbsp;&nbsp;</span>
                <span style="float:right;">&nbsp;&nbsp;Days</span>               
                <span id="f" style="font-size:28px;color:red;float:right;"></span><br><hr> 
            </div>
            <audio controls autoplay class="music">
                    <source src="music.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
            </audio>  
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
                    // target_date=new Date("May 23, "+current_year).getTime(),
                    // $days=document.getElementById("e");
                    // update(),setInterval(update,1e3);
                    target_date=new Date("May 28, "+current_year).getTime(),
                    $days=document.getElementById("f");
                    update(),setInterval(update,1e3);
            </script>       
        </div>

        <nav class="nav" id="nav">
            <div >
                <img src="img/v1.png" alt="." id="dv" class="">
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
                <!-- <a href="vote.php"><li  class="menu-button" id="vote">我要投票</li></a>| -->
                <a href="video.php"><li class="menu-button" id="video">影片觀賞</li></a>|
                <a href="download.html"><li class="menu-button" id="download">相關下載</li></a>|
                <a href="notice.html"><li class="menu-button" id="link">活動注意事項</li></a>
            </ul>
        </nav>  
    </header>
    <div class="content" id="home-cont">
        <div id="banner">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="images/s1.jpg" /></li>
                    <li><img src="images/s2.jpg" /></li>
                    <li><img src="images/s3.jpg" /></li>
                    <li><img src="images/s4.jpg" /></li>
                    <li><img src="images/s5.jpg" /></li>
                </ul>
            </div>
        </div>
        <div id="home-news">
            <table class="newstable" style="font-size:15px;">
                <thead>
                    <tr >
                        <td class="newsHead">最新消息</td><td class="newsHead">發布日期</td>
                    </tr>
                </thead>
                <tbody style="font-size:15px;" >
                    <?php
                        $get="SELECT `title`,`content`,`manager`,`time`,`num` FROM `krtco_news` ORDER BY `time` DESC";
                        $data=mysqli_query($con,$get)or die(mysqli_error());
                        
                        for($i=0;$i<4;$i++){
                            $result=mysqli_fetch_assoc($data);
                            if($result!=NULL){
                            $time1= date("Y-m-d H:i:s",(time()+7*3600));
                            $time2=$result["time"];
                            $check=(strtotime($time1) - strtotime($time2))/ (60*60*24);
                            if($check<15){
                            echo '<tr><td class="newsTitle"><form action="counts.php" method="post" target="my_iframe"><button class="md-trigger" data-modal="a'.$result["num"].'" style="font-size:15px;">';
                            echo $result["title"];
                            echo '<img src="images/new.png" style="width:40px;float:right;"><input type="hidden" name="hidden" value="'.$result["count"].'"><input type="hidden" name="num" value="'.$result["num"].'"></button></form></td><td class="newsDateHome">';
                            echo $result["time"];
                            echo '</td></tr><iframe name="my_iframe" src="counts.php" style="display:none"></iframe>';
                            }else{
                            echo '<tr><td class="newsTitle"><form action="counts.php" method="post" target="my_iframe"><button class="md-trigger" data-modal="a'.$result["num"].'" style="font-size:15px;">';
                            echo $result["title"];
                            echo '<input type="hidden" name="hidden" value="'.$result["count"].'"><input type="hidden" name="num" value="'.$result["num"].'"></button></form></td><td class="newsDateHome">';
                            echo $result["time"];
                            echo '</td></tr><iframe name="my_iframe" src="counts.php" style="display:none"></iframe>';
                            }
                            }
                        }
                    ?>
                </tbody>
                </table>
        </div> 
        <div id="promote-video">
            <iframe width="98%" height="290px" src="https://www.youtube.com/embed/1oeY-cfCBjA" frameborder="0" allowfullscreen></iframe>
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
                    <a target="_blank" href="http://www.csc.com.tw/csc/gef/index.asp"><img src="img/metal.png" alt="metal" class="metal"></a>
                    <a target="_blank" href="https://www.ubot.com.tw/"><img src="img/bank.png" alt="asia" class="bank"></a>
                    <a target="_blank" href="http://www.asia-records.com.tw/"><img src="img/asia.png" alt="asia" class="asia"></a>
                    <a target="_blank" href="https://cn.unionpay.com/"><img src="img/unionpay.png" alt="cn" class="unionpay"></a>
                </td> 
                <td style="width:18%;">
                    <a target="_blank" href="https://www.facebook.com/krtc.competition2016"><img src="img/fb.png" alt="fb" class="contact-icon"></a>
                    <a target="_blank" href="mailto:2016krtcthp@gmail.com"><img src="img/mail.png" alt="mail" class="contact-icon"></a>
                </td>               
            </tr>
        </table>
    </footer>

        <!-- 點旁邊消失 -->
    <div class="md-overlay"></div>
    <script src="js/classie.js"></script>
    <script src="js/modalEffects.js"></script>
    <script>
        // this is important for IEs
        var polyfilter_scriptpath = '/js/';
    </script>
</body>
</html>