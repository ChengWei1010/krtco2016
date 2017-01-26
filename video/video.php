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
        #video{
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
            background-color: #f3f3f3;
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
            height:100px;
        }
        @media screen and (max-width: 1120px){
            label {
                cursor: pointer;
                position: relative;
                font-size: 18px;
            }
        }
    </style>
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
                <!-- <a href="vote.php"><li  class="menu-button" id="vote">我要投票</li></a>| -->
                <a href="video.php"><li class="menu-button" id="video">影片觀賞</li></a>|
                <a href="download.html"><li class="menu-button" id="download">相關下載</li></a>|
                <a href="notice.html"><li class="menu-button" id="link">活動注意事項</li></a>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="text-cont" id="newspage">
            <div class="work">   
                <input type="hidden" name="id" value="">
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:2
                    <img src="work/two.png">
                    <a class="md-trigger" data-modal="work2" style="float:right; width:100%; text-align:center;" id="box2">觀看影片</a>
                    隊名:超壯女2.0三號流水線<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                            
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:3
                    <img src="work/three.png">
                    <a class="md-trigger" data-modal="work3" style="float:right; width:100%; text-align:center;" id="box3">觀看影片</a>
                    隊名:R Jay Film<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                              
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:4
                    <img src="work/four.png">
                    <a class="md-trigger" data-modal="work4" style="float:right; width:100%; text-align:center;" id="box4">觀看影片</a>
                    隊名:四葉草<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                             
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:5
                    <img src="work/five.png">
                    <a class="md-trigger" data-modal="work5" style="float:right; width:100%; text-align:center;" id="box5">觀看影片</a>
                    隊名:望夢<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                             
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:6
                    <img src="work/six.png">
                    <a class="md-trigger" data-modal="work6" style="float:right; width:100%; text-align:center;" id="box6">觀看影片</a>
                    隊名:Sapphire Eye<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                            
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:7
                    <img src="work/seven.png">
                    <a class="md-trigger" data-modal="work7" style="float:right; width:100%; text-align:center;" id="box7">觀看影片</a>
                    隊名:讓愛接駁<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                              
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:8
                    <img src="work/eight.png">
                    <a class="md-trigger" data-modal="work8" style="float:right; width:100%; text-align:center;" id="box8">觀看影片</a>
                    隊名:八必播<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                              
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:9
                    <img src="work/nine.png">
                    <a class="md-trigger" data-modal="work9" style="float:right; width:100%; text-align:center;" id="box9">觀看影片</a>
                    隊名:雙人模式<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                             
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:10
                    <img src="work/ten.png">
                    <a class="md-trigger" data-modal="work10" style="float:right; width:100%; text-align:center;" id="box10">觀看影片</a>
                    隊名:普洱人影像製作團隊<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:11
                    <img src="work/eleven.png">
                    <a class="md-trigger" data-modal="work11" style="float:right; width:100%; text-align:center;" id="box11">觀看影片</a>
                    隊名:大腸包小腸 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                   
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:12
                    <img src="work/twelve.png">
                    <a class="md-trigger" data-modal="work12" style="float:right; width:100%; text-align:center;" id="box12">觀看影片</a>
                    隊名:Lift.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                   
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:13
                    <img src="work/thirteen.png">
                    <a class="md-trigger" data-modal="work13" style="float:right; width:100%; text-align:center;" id="box13">觀看影片</a>
                    隊名:五福臨門<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:14
                    <img src="work/fourteen.png">
                    <a class="md-trigger" data-modal="work14" style="float:right; width:100%; text-align:center;" id="box14">觀看影片</a>
                    隊名:創意者<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:15
                    <img src="work/fifteen.png">
                    <a class="md-trigger" data-modal="work15" style="float:right; width:100%; text-align:center;" id="box15">觀看影片</a>
                    隊名:你好,高雄<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                    
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:17
                    <img src="work/seventeen.png">
                    <a class="md-trigger" data-modal="work17" style="float:right; width:100%; text-align:center;" id="box17">觀看影片</a>
                    隊名:五騎士<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:18
                    <img src="work/eighteen.png">
                    <a class="md-trigger" data-modal="work18" style="float:right; width:100%; text-align:center;" id="box18">觀看影片</a>
                    隊名:Crazy 5<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:19
                    <img src="work/nineteen.png">
                    <a class="md-trigger" data-modal="work19" style="float:right; width:100%; text-align:center;" id="box19">觀看影片</a>
                    隊名:燒肉組合<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:20
                    <img src="work/twenty.png">
                    <a class="md-trigger" data-modal="work20" style="float:right; width:100%; text-align:center;" id="box20">觀看影片</a>
                    隊名:微靈感<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                   
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:21
                    <img src="work/twentyone.png">
                    <a class="md-trigger" data-modal="work21" style="float:right; width:100%; text-align:center;" id="box21">觀看影片</a>
                    隊名:快樂小夥伴<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:22
                    <img src="work/twentytwo.png">
                    <a class="md-trigger" data-modal="work22" style="float:right; width:100%; text-align:center;" id="box22">觀看影片</a>
                    隊名:在台的澳門小伙子<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:23
                    <img src="work/twentythree.png">
                    <a class="md-trigger" data-modal="work23" style="float:right; width:100%; text-align:center;" id="box23">觀看影片</a>
                    隊名:豬肉蓋飯<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                        
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:24
                    <img src="work/twentyfour.png">
                    <a class="md-trigger" data-modal="work24" style="float:right; width:100%; text-align:center;" id="box24">觀看影片</a>
                    隊名:無<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:25
                    <img src="work/twentyfive.png">
                    <a class="md-trigger" data-modal="work25" style="float:right; width:100%; text-align:center;" id="box25">觀看影片</a>
                    隊名:逃亡女馬<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:26
                    <img src="work/twentysix.png">
                    <a class="md-trigger" data-modal="work26" style="float:right; width:100%; text-align:center;" id="box26">觀看影片</a>
                    隊名:前鎮<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:27
                    <img src="work/twentyseven.png">
                    <a class="md-trigger" data-modal="work27" style="float:right; width:100%; text-align:center;" id="box27">觀看影片</a>
                    隊名:健身山灣<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                        
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:30
                    <img src="work/thirty.png">
                    <a class="md-trigger" data-modal="work30" style="float:right; width:100%; text-align:center;" id="box30">觀看影片</a>
                    隊名:倆人<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                   
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:31
                    <img src="work/thirtyone.png">
                    <a class="md-trigger" data-modal="work31" style="float:right; width:100%; text-align:center;" id="box31">觀看影片</a>
                    隊名:萬花筒<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:32
                    <img src="work/thirtytwo.png">
                    <a class="md-trigger" data-modal="work32" style="float:right; width:100%; text-align:center;" id="box32">觀看影片</a>
                    隊名:RONIN STUDIO<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:33
                    <img src="work/thirtythree.png">
                    <a class="md-trigger" data-modal="work33" style="float:right; width:100%; text-align:center;" id="box33">觀看影片</a>
                    隊名:orgin原點<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                        
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:34
                    <img src="work/thirtyfour.png">
                    <a class="md-trigger" data-modal="work34" style="float:right; width:100%; text-align:center;" id="box34">觀看影片</a>
                    隊名:O.R.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:35
                    <img src="work/thirtyfive.png">
                    <a class="md-trigger" data-modal="work35" style="float:right; width:100%; text-align:center;" id="box35">觀看影片</a>
                    隊名:拿拿南南佳錚宗痛萬萬塞<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:37
                    <img src="work/thirtyseven.png">
                    <a class="md-trigger" data-modal="work37" style="float:right; width:100%; text-align:center;" id="box37">觀看影片</a>
                    隊名:<br>HaKuNa MaTaTa<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                        
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:38
                    <img src="work/thirtyeight.png">
                    <a class="md-trigger" data-modal="work38" style="float:right; width:100%; text-align:center;" id="box38">觀看影片</a>
                    隊名:百變少女組<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                        
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:39
                    <img src="work/thirtynine.png">
                    <a class="md-trigger" data-modal="work39" style="float:right; width:100%; text-align:center;" id="box39">觀看影片</a>
                    隊名:Relief<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:40
                    <img src="work/fourty.png">
                    <a class="md-trigger" data-modal="work40" style="float:right; width:100%; text-align:center;" id="box40">觀看影片</a>
                    隊名:某哩系美安抓<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                   
                </div>
                <!-- 參賽著 -->
                <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:41
                    <img src="work/fourtyone.png">
                    <a class="md-trigger" data-modal="work41" style="float:right; width:100%; text-align:center;" id="box41">觀看影片</a>
                    隊名:X.D.U.Z.Y<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:42
                    <img src="work/fourtytwo.png">
                    <a class="md-trigger" data-modal="work42" style="float:right; width:100%; text-align:center;" id="box42">觀看影片</a>
                    隊名:DreamSoul<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:43
                    <img src="work/fourtythree.png">
                    <a class="md-trigger" data-modal="work43" style="float:right; width:100%; text-align:center;" id="box43">觀看影片</a>
                    隊名:毛叢<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:44
                    <img src="work/fourtyfour.png">
                    <a class="md-trigger" data-modal="work44" style="float:right; width:100%; text-align:center;" id="box44">觀看影片</a>
                    隊名:Triple Triangle<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:45
                    <img src="work/fourtyfive.png">
                    <a class="md-trigger" data-modal="work45" style="float:right; width:100%; text-align:center;" id="box45">觀看影片</a>
                    隊名:嗨高雄<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:46
                    <img src="work/fourtysix.png">
                    <a class="md-trigger" data-modal="work46" style="float:right; width:100%; text-align:center;" id="box46">觀看影片</a>
                    隊名:野原新之助<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:47
                    <img src="work/fourtyseven.png">
                    <a class="md-trigger" data-modal="work47" style="float:right; width:100%; text-align:center;" id="box47">觀看影片</a>
                    隊名:放影天下<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:50
                    <img src="work/fifty.png">
                    <a class="md-trigger" data-modal="work50" style="float:right; width:100%; text-align:center;" id="box50">觀看影片</a>
                    隊名:朗爽笑容<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                  
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:51
                    <img src="work/fiftyone.png">
                    <a class="md-trigger" data-modal="work51" style="float:right; width:100%; text-align:center;" id="box51">觀看影片</a>
                    隊名:9453<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:52
                    <img src="work/fiftytwo.png">
                    <a class="md-trigger" data-modal="work52" style="float:right; width:100%; text-align:center;" id="box52">觀看影片</a>
                    隊名:微心電<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:53
                    <img src="work/fiftythree.png">
                    <a class="md-trigger" data-modal="work53" style="float:right; width:100%; text-align:center;" id="box53">觀看影片</a>
                    隊名:瑭宜網多 TangYiStudio<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:54
                    <img src="work/fiftyfour.png">
                    <a class="md-trigger" data-modal="work54" style="float:right; width:100%; text-align:center;" id="box54">觀看影片</a>
                    隊名:Clown Mask<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:55
                    <img src="work/fiftyfive.png">
                    <a class="md-trigger" data-modal="work55" style="float:right; width:100%; text-align:center;" id="box55">觀看影片</a>
                    隊名:正修科大<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:56
                    <img src="work/fiftysix.png">
                    <a class="md-trigger" data-modal="work56" style="float:right; width:100%; text-align:center;" id="box56">觀看影片</a>
                    隊名:MRThoms<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:58
                    <img src="work/fiftyeight.png">
                    <a class="md-trigger" data-modal="work58" style="float:right; width:100%; text-align:center;" id="box58">觀看影片</a>
                    隊名:EGO<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:59
                    <img src="work/fiftynine.png">
                    <a class="md-trigger" data-modal="work59" style="float:right; width:100%; text-align:center;" id="box59">觀看影片</a>
                    隊名:宥耍廢<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:61
                    <img src="work/sixtyone.png">
                    <a class="md-trigger" data-modal="work61" style="float:right; width:100%; text-align:center;" id="box61">觀看影片</a>
                    隊名:要拍者麼呢<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:62
                    <img src="work/sixtytwo.png">
                    <a class="md-trigger" data-modal="work62" style="float:right; width:100%; text-align:center;" id="box62">觀看影片</a>
                    隊名:晚上吃飯否 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:63
                    <img src="work/sixtythree.png">
                    <a class="md-trigger" data-modal="work63" style="float:right; width:100%; text-align:center;" id="box63">觀看影片</a>
                    隊名:HaHaMovie<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:64
                    <img src="work/sixtyfour.png">
                    <a class="md-trigger" data-modal="work64" style="float:right; width:100%; text-align:center;" id="box64">觀看影片</a>
                    隊名:黑色幽默<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:65
                    <img src="work/sixtyfive.png">
                    <a class="md-trigger" data-modal="work65" style="float:right; width:100%; text-align:center;" id="box65">觀看影片</a>
                    隊名:我們的國家公園管理處<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:66
                    <img src="work/sixtysix.png">
                    <a class="md-trigger" data-modal="work66" style="float:right; width:100%; text-align:center;" id="box66">觀看影片</a>
                    隊名:個人<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:67
                    <img src="work/sixtyseven.png">
                    <a class="md-trigger" data-modal="work67" style="float:right; width:100%; text-align:center;" id="box67">觀看影片</a>
                    隊名:YoYo CHannel<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:68
                    <img src="work/sixtyeight.png">
                    <a class="md-trigger" data-modal="work68" style="float:right; width:100%; text-align:center;" id="box68">觀看影片</a>
                    隊名:Roger That<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:69
                    <img src="work/sixtynine.png">
                    <a class="md-trigger" data-modal="work69" style="float:right; width:100%; text-align:center;" id="box69">觀看影片</a>
                    隊名:頹廢人生<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:70
                    <img src="work/seventy.png">
                    <a class="md-trigger" data-modal="work70" style="float:right; width:100%; text-align:center;" id="box70">觀看影片</a>
                    隊名:我不會告訴你<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                    
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:71
                    <img src="work/seventyone.png">
                    <a class="md-trigger" data-modal="work71" style="float:right; width:100%; text-align:center;" id="box71">觀看影片</a>
                    隊名:MidNight<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:72
                    <img src="work/seventytwo.png">
                    <a class="md-trigger" data-modal="work72" style="float:right; width:100%; text-align:center;" id="box72">觀看影片</a>
                    隊名:丁丁惠控白幽<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:73
                    <img src="work/seventythree.png">
                    <a class="md-trigger" data-modal="work73" style="float:right; width:100%; text-align:center;" id="box73">觀看影片</a>
                    隊名:福山愛雅<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    
                    
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:74
                    <img src="work/seventyfour.png">
                    <a class="md-trigger" data-modal="work74" style="float:right; width:100%; text-align:center;" id="box74">觀看影片</a>
                    隊名:哪些人<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                        
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:76
                    <img src="work/seventysix.png">
                    <a class="md-trigger" data-modal="work76" style="float:right; width:100%; text-align:center;" id="box76">觀看影片</a>
                    隊名:Dream lifter<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:79
                    <img src="work/seventynine.png">
                    <a class="md-trigger" data-modal="work79" style="float:right; width:100%; text-align:center;" id="box79">觀看影片</a>
                    隊名:是誰I ma!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                        
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:80
                    <img src="work/eighty.png">
                    <a class="md-trigger" data-modal="work80" style="float:right; width:100%; text-align:center;" id="box80">觀看影片</a>
                    隊名:你說什麼<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                   
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:81
                    <img src="work/eightyone.png">
                    <a class="md-trigger" data-modal="work81" style="float:right; width:100%; text-align:center;" id="box81">觀看影片</a>
                    隊名:黑畫面<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:82
                    <img src="work/eightytwo.png">
                    <a class="md-trigger" data-modal="work82" style="float:right; width:100%; text-align:center;" id="box82">觀看影片</a>
                    隊名:高雄三浪子<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                      
                </div>    
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:83
                    <img src="work/eightythree.png">
                    <a class="md-trigger" data-modal="work83" style="float:right; width:100%; text-align:center;" id="box83">觀看影片</a>
                    隊名:ㄛ<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                        
                </div>
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:84
                    <img src="work/eightyfour.png">
                    <a class="md-trigger" data-modal="work84" style="float:right; width:100%; text-align:center;" id="box84">觀看影片</a>
                    隊名:正修文清街某二樓<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div>  
                <!-- 參賽著 -->
                 <div class="vote" style="height:255px; font-size:18px; text-align:center;">
                    編號:85
                    <img src="work/eightyfive.png">
                    <a class="md-trigger" data-modal="work85" style="float:right; width:100%; text-align:center;" id="box85">觀看影片</a>
                    隊名:戴普喵喵叫<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       
                </div> 
                <!-- 參賽著 END -->
            </div>
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