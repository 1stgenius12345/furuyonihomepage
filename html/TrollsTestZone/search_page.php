<!DOCTYPE html>
<html lang="ko">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>후루요니 덱메이커 만드는중</title>

    <link rel="stylesheet" type="text/css" href="furuyoni.css">
    <style type="text/css">

    </style>
</head>
<body id="main">
    
    <br>

    <form action='search_page.php' method='GET'>    
    <select id="job1" name="job1" >
        <option value="" selected disabled>첫번째여신선택</option>
        <option value="1">유리나</option>
        <option value="2">사이네</option>
        <option value="3">히미카</option>
        <option value="4">토코요</option>
    </select> 
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <select id="job2" name="job2">
        <option value="" selected disabled>두번째여신선택</option>
        <option value="1">유리나</option>
        <option value="2">사이네</option>
        <option value="3">히미카</option>
        <option value="4">토코요</option>
    </select>
    <br>
    <br>

<?php

header("Content-Type: text/html; charset=UTF-8");


$megami1= $_GET['job1'];
$megami2 = $_GET['job2'];

//Database에 업로드 된 데이터 저장
//Database를 제어해주는 프로그램(DBMS : MySQL) 사용

//php에서 Database서버와 연동하기
//MySQL DB에 접속하기!!
$conn=mysqli_connect("localhost","k31pff","gnfndysl1!","k31pff","3306") or die ("실패입니다."); //DB 서버 주소, DB 접속 아이디, DB접속 비번, DB명 (파일명)

//한글 깨짐 방지
mysqli_query($conn,"set names utf8");

//SQL 쿼리문 작성
//$sql="INSERT INTO test(name,message, megami1, megami2, c0, rc0, c1, rc1, c2, rc2, c3, rc3, c4, rc4, c5, rc5, c6, rc6, c7, rc7, d0, rd0, d1, rd1, d2, rd2, d3 ,rd3) VALUES('$deckname','$decktext','$megami1','$megami2','$c0', '$rc0', '$c1', '$rc1', '$c2', '$rc2', '$c3', '$rc3', '$c4', '$rc4', '$c5', '$rc5', '$c6', '$rc6', '$c7', '$rc7', '$d0' , '$rd0', '$d1', '$rd1', '$d2', '$rd2', '$d3' ,'$rd3','$now')";
$sql = "SELECT * FROM furuyonidb2";


$result=mysqli_query($conn,$sql);

$item = mysqli_fetch_assoc($result);



if($result){
    echo "<script>alert(\"불러왔습니다.\");</script>";
} else{
    echo "<script>alert(\"불러오기실패\");</script>";
}

mysqli_close($conn);

?>

<table id="bob" class="type09" cellspacing="0" cellpadding="1" border="0" width="800">
  <tr>
    <td>
<table id="bob" class="type09" cellspacing="0" cellpadding="1" border="0" width="800" >
  <thead>
  <tr>
    <th scope="cols">덱명</th>
    <td scope="cols">설명</td>
    </tr>
  </thead>
  </table>
  </td>
  </tr>
  <tr>
    <td>
       <div style="width:800; height:500px; overflow:auto;">
         <table id="bob" class="type09" cellspacing="0" cellpadding="1" border="0" width="800" >

  <tbody>
  <?php
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

        if(((int)$megami1 == $row["megami1"] && (int)$megami2 == $row["megami2"]) || ((int)$megami2 == $row["megami1"] && (int)$megami1 == $row["megami2"]) ) 
        {
            echo "<tr>";
            echo '<th><a href="#" onClick = \'Deckcode('.$row["megami1"].','.$row["megami2"].','.$row["deckcode1"].','.$row["deckcode2"].')\'>'  . $row["title"]. "</a></th> <td>" . $row["text"]."</td>";
            echo "</tr>";
        }

    }
    }else{
    echo "테이블에 데이터가 없습니다.";
    }
   ?>
  </tbody>
  </table>  
       </div>
    </td>
  </tr>
</table>





<table border="0" width = "470">
	<th> </th>
	<th> </th>

  <tr><!-- 첫번째 줄 시작 --> 
    <td> <input type="hidden" id="c0" name="c0" onclick="DeckMakeCode1()" />
      <label for="c0"><span></span></label>
      <div id="c0text" style="display:none"></div>
      <img id="c0png" src="" width="100" style="display:none"></td>

    <td>  <input type="hidden" id="rc0" name="rc0" onclick="DeckMakeCode2()"/>
      <label for="rc0"><span></span></label>
      <div id="rc0text" style="display:none"></div>
      <img id="rc0png" src="" width="100" style="display:none"> </td>
</tr><!-- 첫번째 줄 끝 -->



<tr><!-- 두번째 줄 시작 -->
  <td>   <input type="hidden" id="c1" name="c1" onclick="DeckMakeCode1()" />
    <label for="c1"><span></span></label>
    <div id="c1text" style="display:none"></div>
    <img id="c1png" src="" width="100" style="display:none"></td>

  <td>  <input type="hidden" id="rc1" name="rc1" onclick="DeckMakeCode2()"/>
    <label for="rc1"><span></span></label>
    <div id="rc1text" style="display:none"></div>
    <img id="rc1png" src="" width="100" style="display:none"> </td>
</tr><!-- 두번째 줄 끝 -->

<tr><!-- 세번째 줄 시작 -->
  <td>  <input type="hidden" id="c2" name="c2" onclick="DeckMakeCode1()"/>
    <label for="c2"><span></span></label>
    <div id="c2text" style="display:none"></div>
    <img id="c2png" src="" width="100" style="display:none"> </td>

  <td>  <input type="hidden" id="rc2" name="rc2"onclick="DeckMakeCode2()" />
    <label for="rc2"><span></span></label>
    <div id="rc2text" style="display:none"></div>
    <img id="rc2png" src="" width="100" style="display:none"> </td>
</tr><!-- 세번째 줄 끝 -->

<tr><!-- 네번째 줄 시작 -->
  <td>
    <input type="hidden" id="c3" name="c3" onclick="DeckMakeCode1()"/>
    <label for="c3"><span></span></label>
    <div id="c3text" style="display:none"></div>
    <img id="c3png" src="" width="100" style="display:none">
   </td>

  <td>
    <input type="hidden" id="rc3" name="rc3" onclick="DeckMakeCode2()"/>
    <label for="rc3"><span></span></label>
    <div id="rc3text" style="display:none"></div>
    <img id="rc3png" src="" width="100" style="display:none"> </td>
</tr><!-- 네번째 줄 끝 -->

<tr><!-- 다번째 줄 시작 -->
  <td>
    <input type="hidden" id="c4" name="c4" onclick="DeckMakeCode1()"/>
    <label for="c4"><span></span></label>
    <div id="c4text" style="display:none"></div>
    <img id="c4png" src="" width="100" style="display:none"> </td>
  <td>  <input type="hidden" id="rc4" name="rc4" onclick="DeckMakeCode2()"/>
    <label for="rc4"><span></span></label>
    <div id="rc4text" style="display:none"></div>
    <img id="rc4png" src="" width="100" style="display:none"> </td>

</tr><!-- 다번째 줄 끝 -->

<tr><!-- 여번째 줄 시작 -->
  <td>   <input type="hidden" id="c5" name="c5" onclick="DeckMakeCode1()"/>
    <label for="c5"><span></span></label>
    <div id="c5text" style="display:none"></div>
    <img id="c5png" src="" width="100" style="display:none"></td>
  <td>   <input type="hidden" id="rc5" name="rc5" onclick="DeckMakeCode2()"/>
    <label for="rc5"><span></span></label>
    <div id="rc5text" style="display:none"></div>
    <img id="rc5png" src="" width="100" style="display:none"></td>
</tr><!-- 여번째 줄 끝 -->

<tr><!-- 일곱번째 줄 시작 -->
  <td>  <input type="hidden" id="c6" name="c6" onclick="DeckMakeCode1()"/>
    <label for="c6"><span></span></label>
    <div id="c6text" style="display:none"></div>
    <img id="c6png" src="" width="100" style="display:none"> </td>
  <td>  <input type="hidden" id="rc6" name="rc6" onclick="DeckMakeCode2()"/>
    <label for="rc6"><span></span></label>
    <div id="rc6text" style="display:none"></div>
    <img id="rc6png" src="" width="100" style="display:none"> </td>

</tr><!-- 일곱번째 줄 끝 -->

<tr><!-- 여덟번째 줄 시작 -->
  <td>  <input type="hidden" id="c7" name="c7" onclick="DeckMakeCode1()"/>
    <label for="c7"><span></span></label>
    <div id="c7text" style="display:none"></div>
    <img id="c7png" src="" width="100" style="display:none"> </td>
  <td>  <input type="hidden" id="rc7" name="rc7" onclick="DeckMakeCode2()" />
    <label for="rc7"><span></span></label>
    <div id="rc7text" style="display:none"></div>
    <img id="rc7png" src="" width="100" style="display:none"> </td>
</tr><!-- 여덟번째 줄 끝 -->


<tr><!-- 아홉번째 줄 시작 -->
  <td>   
    <input type="hidden" id="d0" name="d0"  />
    <label for="d0"><span></span></label>
    <div id="d0text" style="display:none"></div>
    <img id="d0png" src="" width="100" style="display:none"> </td>
  <td>   <input type="hidden" id="rd0" name="rd0" />
    <label for="rd0"><span></span></label>
    <div id="rd0text" style="display:none"></div>
    <img id="rd0png" src="" width="100" style="display:none"> </td>
</tr><!-- 아홉번째 줄 끝 -->

<tr><!-- 열번째 줄 시작 -->
  <td>   <input type="hidden" id="d1" name="d1"  />
    <label for="d1"><span></span></label>
    <div id="d1text" style="display:none"></div>
    <img id="d1png" src="" width="100" style="display:none"> </td>
  <td>   <input type="hidden" id="rd1" name="rd1" />
    <label for="rd1"><span></span></label>
    <div id="rd1text" style="display:none"></div>
    <img id="rd1png" src="" width="100" style="display:none"> </td>
</tr><!-- 열번째 줄 끝 -->

<tr><!-- 열하나번째 줄 시작 -->
  <td>   <input type="hidden" id="d2" name="d2" />
    <label for="d2"><span></span></label>
    <div id="d2text" style="display:none"></div>
    <img id="d2png" src="" width="100" style="display:none"> </td>
  <td>   <input type="hidden" id="rd2" name="rd2" />
    <label for="rd2"><span></span></label>
    <div id="rd2text" style="display:none"></div>
    <img id="rd2png" src="" width="100" style="display:none"> </td>
</tr><!-- 열하나번째 줄 끝 -->

<tr><!-- 열둘번째 줄 시작 -->
  <td>  <input type="hidden" id="d3" name="d3" />
    <label for="d3"><span></span></label>
    <div id="d3text" style="display:none"></div>
    <img id="d3png" src="" width="100" style="display:none">  </td>
  <td>   <input type="hidden" id="rd3" name="rd3"/>
    <label for="rd3"><span></span></label>
    <div id="rd3text" style="display:none"></div>
    <img id="rd3png" src="" width="100" style="display:none"> </td>
</tr><!-- 열둘번째 줄 끝 -->

<tr><!-- 열셋번째 줄 시작 -->
  <td>  </td>
  <td>  </td>
</tr><!-- 열셋번째 줄 끝 -->
</table>








<div class="container">
<button type="submit" class="btn-3">검색</button>
</div>

</form>     



<div class="container">
  <button class="btn-3"  onclick="location.href='index.html'">홈으로</button>
</div>


<script> 
function Deckcode(megami1,megami2,code1, code2)
{ 
    

    var yurinage = ["1.베기", "2.일섬" ,"3.자루 치기","4.거합","5.기백","6.압기","7.기염만장"];
    var yurinabi = ["S1.월영이 떨어지니","S2.해안엔 파랑 일며","S3.쪽배에서 쉬노니","S4.아마네 유리나의 저력"];

    var sainege =["1.팔방 휘두르기", "2.낫 베기" ,"3.석돌 치기","4.간파","5.권역","6.충음정","7.무음벽"];
    var sainebi = ["S1.율동호극","S2.항명공진","S3.무음쇄빙","S4.히사메 사이네의 최후의 종극"];

    var himikage =["1.슛", "2.래피드 파이어" ,"3.매그넘 캐논","4.풀 버스트","5.백스탭","6.백 드래프트","7.스모크"];
    var himikabi = ["S1.레드 블릿","S2.크림즌 제로","S3.스칼렛 이매진","S4.버밀리언 필드"];

    var tokoyoge =["1.빗어 내리기", "2.우아한 타격" ,"3.날뛰는 토끼","4.시의 춤","5.부채 뒤집기","6.바람의 무대","7.맑음의 무대"];
    var tokoyobi = ["S1.영원한 꽃","S2.천년의 새","S3.무궁한 바람","S4.불변의 달"];

    //var first = document.getElementById("job1");
    var selectValue1 = megami1;
    //var selectValue1 = first.options[first.selectedIndex].value;
    
    if(selectValue1 == "1")
    {
        var ge = yurinage;
        var bi = yurinabi;
    }
    else if(selectValue1 == "2")
    {
        var ge = sainege;
        var bi = sainebi;
    }
    else if(selectValue1 == "3")
    {
        var ge = himikage;
        var bi = himikabi;
    }
    else if(selectValue1 == "4")
    {
        var ge = tokoyoge;
        var bi = tokoyobi;
    }


    // 초기화단계
    for(var x = 0; x < 8;x++)
    {   
        document.getElementById("c"+x+"png").style.display = "none";
        document.getElementById("c"+x+"png").src = "";
        document.getElementById("c"+x+"text").style.display = "none";
        document.getElementById("c"+x+"text").innerText= ""; //ge[x]

        document.getElementById("rc"+x+"png").style.display = "none";
        document.getElementById("rc"+x+"png").src = "";
        document.getElementById("rc"+x+"text").style.display = "none";
        document.getElementById("rc"+x+"text").innerText= ""; //ge[x]
    }
    for(var x = 0; x < 4;x++)
    {
        document.getElementById("d"+x+"png").style.display = "none";
        document.getElementById("d"+x+"png").src = "";
        document.getElementById("d"+x+"text").style.display = "none";
        document.getElementById("d"+x+"text").innerText= "";

        document.getElementById("rd"+x+"png").style.display = "none";
        document.getElementById("rd"+x+"png").src = "";
        document.getElementById("rd"+x+"text").style.display = "none";
        document.getElementById("rd"+x+"text").innerText= "";
    }





    var temp1 = code1.toString(2);
    var index = 0;
    for(var x = 0; x < 8;x++)
    {   
        
        index = temp1 % 10;
        temp1 = temp1 / 10;
        temp1 = parseInt(temp1);
        if(index == 1)
        {
            //document.getElementById("c"+x).type = "button";
            document.getElementById("c"+x+"png").style.display = "block";
            document.getElementById("c"+x+"png").src = "";
            document.getElementById("c"+x+"text").style.display = "block";
            document.getElementById("c"+x+"text").innerText= ge[x]; //ge[x]
        }
      
    
    }
    temp1 = code1.toString(2);
    temp1 = temp1 / 10000000;
    temp1 = parseInt(temp1);
    for(var x = 0; x < 4;x++)
    {
        index = temp1 % 10;
        temp1 = temp1 / 10;
        temp1 = parseInt(temp1);
        if(index == 1)
        {
            //document.getElementById("d"+x).type = "button";
            document.getElementById("d"+x+"png").style.display = "block";
            document.getElementById("d"+x+"png").src = "";
            document.getElementById("d"+x+"text").style.display = "block";
            document.getElementById("d"+x+"text").innerText= bi[x];
        }
    }

    


    var selectValue1 = megami2;
    //var selectValue1 = first.options[first.selectedIndex].value;
    
    if(selectValue1 == "1")
    {
        var ge = yurinage;
        var bi = yurinabi;
    }
    else if(selectValue1 == "2")
    {
        var ge = sainege;
        var bi = sainebi;
    }
    else if(selectValue1 == "3")
    {
        var ge = himikage;
        var bi = himikabi;
    }
    else if(selectValue1 == "4")
    {
        var ge = tokoyoge;
        var bi = tokoyobi;
    }

    var temp1 = code2.toString(2);
    var index = 0;
    for(var x = 0; x < 8;x++)
    {   
        
        index = temp1 % 10;
        temp1 = temp1 / 10;
        temp1 = parseInt(temp1);
        if(index == 1)
        {
            //document.getElementById("c"+x).type = "button";
            document.getElementById("rc"+x+"png").style.display = "block";
            document.getElementById("rc"+x+"png").src = "";
            document.getElementById("rc"+x+"text").style.display = "block";
            document.getElementById("rc"+x+"text").innerText= ge[x]; //ge[x]
        }
      
    
    }
    temp1 = code2.toString(2);
    temp1 = temp1 / 10000000;
    temp1 = parseInt(temp1);
    for(var x = 0; x < 4;x++)
    {
        index = temp1 % 10;
        temp1 = temp1 / 10;
        temp1 = parseInt(temp1);
        if(index == 1)
        {
            //document.getElementById("d"+x).type = "button";
            document.getElementById("rd"+x+"png").style.display = "block";
            document.getElementById("rd"+x+"png").src = "";
            document.getElementById("rd"+x+"text").style.display = "block";
            document.getElementById("rd"+x+"text").innerText= bi[x];
        }
    }






    return false;
} 
</script>


<script> 
function DeckMakeCode1()
{ 
    var DECKCODE1 = document.getElementById("deckcode1");
    var temp = 0;
    var count = 0;

    for(var i = 0; i < 8;i++)
    {
        if(document.getElementById("c"+i).checked)
        {
            count++;
        }
    }
    for(var i = 0; i < 4;i++)
    {
        if(document.getElementById("d"+i).checked)
        {
        count++;
        }
    }

    for(var i = 0; i < 8;i++)
    {
    if(document.getElementById("c"+i).checked)
    {
        temp = temp + Math.pow(2,i);
    }
    }
    for(var i = 0; i < 4;i++)
    {
        if(document.getElementById("d"+i).checked)
        {
        temp = temp + Math.pow(2,i+8);
        count++;
        }
    }
    DECKCODE1.value = temp;



} 
</script>

<script> 
function DeckMakeCode2()
{ 
    var DECKCODE2 = document.getElementById("deckcode2");
    var temp = 0;
    for(var i = 0; i < 8;i++)
    {
    if(document.getElementById("rc"+i).checked)
    {
        temp = temp + Math.pow(2,i);
    }
    }
    for(var i = 0; i < 4;i++)
    {
        if(document.getElementById("rd"+i).checked)
        {
        temp = temp + Math.pow(2,i+8);
        }
    }
    
    DECKCODE2.value = temp;
} 
</script>

<!-- <script> 
function makedeckcode(e)
{ 
    var first = document.getElementById(e);
    var value = document.getElementById("deckcode1");
    
    if(first.checked == true)
    {
    var flag = 1;
    }
    else
    {
    var flag = 0;
    }
    
    value.value("501");

    
    
} 
</script> -->

<script> 
function chageLangSelect()
{ 
    var first = document.getElementById("job1");
    var second = document.getElementById("job2");
    var selectValue1 = first.options[first.selectedIndex].value;
    var selectValue2 = second.options[second.selectedIndex].value;
    var selectText1 = first.options[first.selectedIndex].text;
    var selectText2 = second.options[second.selectedIndex].text;
    // var target = document.getElementById("good");
    
    if(selectValue1 != "" && selectValue2 != "")
    {
        toggleImg();
        toggleImg2();
    }


} 
</script>
<script>
    function toggleImg() {
    
    var yurinage = ["1.베기", "2.일섬" ,"3.자루 치기","4.거합","5.기백","6.압기","7.기염만장"];
    var yurinabi = ["S1.월영이 떨어지니","S2.해안엔 파랑 일며","S3.쪽배에서 쉬노니","S4.아마네 유리나의 저력"];

    var sainege =["1.팔방 휘두르기", "2.낫 베기" ,"3.석돌 치기","4.간파","5.권역","6.충음정","7.무음벽"];
    var sainebi = ["S1.율동호극","S2.항명공진","S3.무음쇄빙","S4.히사메 사이네의 최후의 종극"];

    var himikage =["1.슛", "2.래피드 파이어" ,"3.매그넘 캐논","4.풀 버스트","5.백스탭","6.백 드래프트","7.스모크"];
    var himikabi = ["S1.레드 블릿","S2.크림즌 제로","S3.스칼렛 이매진","S4.버밀리언 필드"];

    var tokoyoge =["1.빗어 내리기", "2.우아한 타격" ,"3.날뛰는 토끼","4.시의 춤","5.부채 뒤집기","6.바람의 무대","7.맑음의 무대"];
    var tokoyobi = ["S1.영원한 꽃","S2.천년의 새","S3.무궁한 바람","S4.불변의 달"];

    var first = document.getElementById("job1");
    var selectValue1 = first.options[first.selectedIndex].value;
    
    if(selectValue1 == "1")
    {
        var ge = yurinage;
        var bi = yurinabi;
    }
    else if(selectValue1 == "2")
    {
        var ge = sainege;
        var bi = sainebi;
    }
    else if(selectValue1 == "3")
    {
        var ge = himikage;
        var bi = himikabi;
    }
    else if(selectValue1 == "4")
    {
        var ge = tokoyoge;
        var bi = tokoyobi;
    }

    for(x in ge)
    {
            //document.getElementById("card1").src = "https://main-bakafire.ssl-lolipop.jp/furuyoni/na/images/card/cards/na_01_o_s/na_01_o_s_4.png";
        document.getElementById("c"+x).type = "checkbox";
        document.getElementById("c"+x).checked = false;
        //document.getElementById("c"+x).removeAttribute("checked");
        document.getElementById("c"+x+"png").style.display = "block";
        document.getElementById("c"+x+"png").src = "";
        document.getElementById("c"+x+"text").style.display = "block";
        document.getElementById("c"+x+"text").innerText= ge[x];
    

    }

    for(x in bi)
    {
            //document.getElementById("card1").src = "https://main-bakafire.ssl-lolipop.jp/furuyoni/na/images/card/cards/na_01_o_s/na_01_o_s_4.png";
        document.getElementById("d"+x).type = "checkbox";
        document.getElementById("d"+x).checked = false;
    //  document.getElementById("d"+x).onclick = TESTMAKECODE();
        document.getElementById("d"+x+"png").style.display = "block";
        document.getElementById("d"+x+"png").src = "";
        document.getElementById("d"+x+"text").style.display = "block";
        document.getElementById("d"+x+"text").innerText= bi[x];
        
    }
    
    
    }
</script>
<script>
    function toggleImg2() {
    
    var yurinage = ["1.베기", "2.일섬" ,"3.자루 치기","4.거합","5.기백","6.압기","7.기염만장"];
    var yurinabi = ["S1.월영이 떨어지니","S2.해안엔 파랑 일며","S3.쪽배에서 쉬노니","S4.아마네 유리나의 저력"];

    var sainege =["1.팔방 휘두르기", "2.낫 베기" ,"3.석돌 치기","4.간파","5.권역","6.충음정","7.무음벽"];
    var sainebi = ["S1.율동호극","S2.항명공진","S3.무음쇄빙","S4.히사메 사이네의 최후의 종극"];

    var himikage =["1.슛", "2.래피드 파이어" ,"3.매그넘 캐논","4.풀 버스트","5.백스탭","6.백 드래프트","7.스모크"];
    var himikabi = ["S1.레드 블릿","S2.크림즌 제로","S3.스칼렛 이매진","S4.버밀리언 필드"];

    var tokoyoge =["1.빗어 내리기", "2.우아한 타격" ,"3.날뛰는 토끼","4.시의 춤","5.부채 뒤집기","6.바람의 무대","7.맑음의 무대"];
    var tokoyobi = ["S1.영원한 꽃","S2.천년의 새","S3.무궁한 바람","S4.불변의 달"];

    var first = document.getElementById("job2");
    var selectValue1 = first.options[first.selectedIndex].value;
    
    if(selectValue1 == "1")
    {
        var ge = yurinage;
        var bi = yurinabi;
    }
    else if(selectValue1 == "2")
    {
        var ge = sainege;
        var bi = sainebi;
    }
    else if(selectValue1 == "3")
    {
        var ge = himikage;
        var bi = himikabi;
    }
    else if(selectValue1 == "4")
    {
        var ge = tokoyoge;
        var bi = tokoyobi;
    }
    for(x in ge)
    {
            //document.getElementById("card1").src = "https://main-bakafire.ssl-lolipop.jp/furuyoni/na/images/card/cards/na_01_o_s/na_01_o_s_4.png";
        document.getElementById("rc"+x).type = "checkbox";
        document.getElementById("rc"+x).checked = false;
    //  document.getElementById("rc"+x).onclick = TESTMAKECODE();
        document.getElementById("rc"+x+"png").style.display = "block";
        document.getElementById("rc"+x+"png").src = "";
        document.getElementById("rc"+x+"text").style.display = "block";
        document.getElementById("rc"+x+"text").innerText= ge[x];

    }

    for(x in bi)
    {
            //document.getElementById("card1").src = "https://main-bakafire.ssl-lolipop.jp/furuyoni/na/images/card/cards/na_01_o_s/na_01_o_s_4.png";
        document.getElementById("rd"+x).type = "checkbox";
        document.getElementById("rd"+x).checked = false;
        // document.getElementById("rd"+x).onclick = TESTMAKECODE();
        document.getElementById("rd"+x+"png").style.display = "block";
        document.getElementById("rd"+x+"png").src = "";
        document.getElementById("rd"+x+"text").style.display = "block";
        document.getElementById("rd"+x+"text").innerText= bi[x];
        
    }
    
    }
</script>




</body>
</html>
