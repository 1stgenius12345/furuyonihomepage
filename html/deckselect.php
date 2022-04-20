<!DOCTYPE html>
<html lang="ko">
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.4, user-scalable=yes" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>후루요니 덱메이커 만드는중</title>

        <link rel="stylesheet" type="text/css" href="furuyoni.css">
        <style type="text/css">

        </style>
    </head>
    <body id="main">
      
        <br>

        <form action='search_page.php' method='GET'>    
        <select id="job1" name="job1" style =  "text-align:center; font-size:15pt; height:100px; background-color:ccc;">
            <option value="" selected disabled>첫번째여신선택</option>
            <option value="1">유리나</option>
            <option value="2">유리나A</option>
            <option value="3">사이네</option>
            <option value="4">사이네A</option>
            <option value="5">사이네A2</option>
            <option value="6">히미카</option>
            <option value="7">히미카A</option>
            <option value="8">토코요</option>
            <option value="9">토코요A</option>
            <option value="10">토코요A2</option>
            <option value="11">오보로</option>
            <option value="12">오보로A</option>
            <option value="13">유키히</option>
            <option value="14">유키히A</option>
            <option value="15">신라</option>
            <option value="16">신라A</option>
            <option value="17">하가네</option>
            <option value="18">하가네A</option>
            <option value="19">치카게</option>
            <option value="20">치카게A</option>
            <option value="21">쿠루루</option>
            <option value="22">쿠루루A</option>
            <option value="23">탈리야</option>
            <option value="24">탈리야A</option>
            <option value="25">라이라</option>
            <option value="26">라이라A</option>
            <option value="27">우츠로</option>
            <option value="28">우츠로A</option>
            <option value="29">호노카</option>
            <option value="30">호노카A</option>
            <option value="31">코르누</option>
            <option value="32">야츠하</option>
            <option value="33">하츠미</option>
            <option value="34">미즈키</option>
            <option value="35">메구미</option>
            <option value="36">카나에</option>
            <option value="37">쿠루루A2</option>
            <option value="38">하츠미A</option>
            <option value="39">야츠하A</option>
            <option value="40">카무이</option>
            <option value="41">렌리</option>
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
        <select id="job2" name="job2"  style = "text-align:center; font-size:15pt; height:100px; background-color:ccc;">
            <option value="" selected disabled>두번째여신선택</option>
            <option value="1">유리나</option>
            <option value="2">유리나A</option>
            <option value="3">사이네</option>
            <option value="4">사이네A</option>
            <option value="5">사이네A2</option>
            <option value="6">히미카</option>
            <option value="7">히미카A</option>
            <option value="8">토코요</option>
            <option value="9">토코요A</option>
            <option value="10">토코요A2</option>
            <option value="11">오보로</option>
            <option value="12">오보로A</option>
            <option value="13">유키히</option>
            <option value="14">유키히A</option>
            <option value="15">신라</option>
            <option value="16">신라A</option>
            <option value="17">하가네</option>
            <option value="18">하가네A</option>
            <option value="19">치카게</option>
            <option value="20">치카게A</option>
            <option value="21">쿠루루</option>
            <option value="22">쿠루루A</option>
            <option value="23">탈리야</option>
            <option value="24">탈리야A</option>
            <option value="25">라이라</option>
            <option value="26">라이라A</option>
            <option value="27">우츠로</option>
            <option value="28">우츠로A</option>
            <option value="29">호노카</option>
            <option value="30">호노카A</option>
            <option value="31">코르누</option>
            <option value="32">야츠하</option>
            <option value="33">하츠미</option>
            <option value="34">미즈키</option>
            <option value="35">메구미</option>
            <option value="36">카나에</option>
            <option value="37">쿠루루A2</option>
            <option value="38">하츠미A</option>
            <option value="39">야츠하A</option>
            <option value="40">카무이</option>
            <option value="41">렌리</option>
        </select>
        <br>
        <br>

<div class="container">
<button type="submit" class="btn-3">검색</button>
</div>
</form> 


<div class="container">
  <button class="btn-3"  onclick="location.href='index.html'">홈으로</button>
</div>




<?php

//header("Content-Type: text/html; charset=UTF-8");


$megami1= $_GET['job1'];
$megami2 = $_GET['job2'];

//Database에 업로드 된 데이터 저장
//Database를 제어해주는 프로그램(DBMS : MySQL) 사용

//php에서 Database서버와 연동하기
//MySQL DB에 접속하기!!
$conn=mysqli_connect("localhost","k31pdd","gnfndysl1!","k31pdd","3306") or die ("실패입니다."); //DB 서버 주소, DB 접속 아이디, DB접속 비번, DB명 (파일명)

//한글 깨짐 방지
mysqli_query($conn,"set names utf8");

//SQL 쿼리문 작성
//$sql="INSERT INTO test(name,message, megami1, megami2, c0, rc0, c1, rc1, c2, rc2, c3, rc3, c4, rc4, c5, rc5, c6, rc6, c7, rc7, d0, rd0, d1, rd1, d2, rd2, d3 ,rd3) VALUES('$deckname','$decktext','$megami1','$megami2','$c0', '$rc0', '$c1', '$rc1', '$c2', '$rc2', '$c3', '$rc3', '$c4', '$rc4', '$c5', '$rc5', '$c6', '$rc6', '$c7', '$rc7', '$d0' , '$rd0', '$d1', '$rd1', '$d2', '$rd2', '$d3' ,'$rd3','$now')";
$sql = "SELECT * FROM furuyonidb2 ORDER BY date DESC limit 10";


$result=mysqli_query($conn,$sql);




if($result){
  //  echo "<script>alert(\"불러왔습니다.\");</script>";
} else{
    echo "<script>alert(\"불러오기실패\");</script>";
}

mysqli_close($conn);

?>

<table id="bob" class="type09" cellspacing="0" cellpadding="1" border="0" width="100%">
  <tr>
    <td>
<table id="bob" class="type09" cellspacing="0" cellpadding="1" border="0" width="100%" >
  <thead>
  <tr>
    <th scope="cols">덱명(최근10개)</th>
    <td scope="cols">설명</td>
    <th scope="cols">등록날짜</th>
    </tr>
  </thead>
  </table>
  </td>
  </tr>
  <tr>
    <td>
       <div style="width:800; height:500px; overflow:scroll ;">
         <table id="bob" class="type09" cellspacing="0" cellpadding="1" border="0" width="100%" >

  <tbody>
  <?php
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      
              echo "<tr>";
              echo '<th><a href="#" onClick = \'Deckcode('.$row["megami1"].','.$row["megami2"].','.$row["deckcode1"].','.$row["deckcode2"].')\'>'  . $row["title"]. "</a></th> <td>" . $row["text"]."</td><th>" . $row["date"]."</th>";
              echo "</tr>";
    
        
  
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
      <img id="c0png" src="" width="200" style="display:none"></td>

    <td>  <input type="hidden" id="c1" name="c1" onclick="DeckMakeCode1()"/>
      <label for="c1"><span></span></label>
      <div id="c1text" style="display:none"></div>
      <img id="c1png" src="" width="200" style="display:none"> </td>
 <td>   <input type="hidden" id="c2" name="c2" onclick="DeckMakeCode1()" />
    <label for="c2"><span></span></label>
    <div id="c2text" style="display:none"></div>
    <img id="c2png" src="" width="200" style="display:none"></td>

  <td>  <input type="hidden" id="c3" name="c3" onclick="DeckMakeCode1()"/>
    <label for="c3"><span></span></label>
    <div id="c3text" style="display:none"></div>
    <img id="c3png" src="" width="200" style="display:none"> </td>

</tr><!-- 첫번째 줄 끝 -->



<tr><!-- 두번째 줄 시작 -->
<td>  <input type="hidden" id="c4" name="c4" onclick="DeckMakeCode1()"/>
    <label for="c4"><span></span></label>
    <div id="c4text" style="display:none"></div>
    <img id="c4png" src="" width="200" style="display:none"> </td>

  <td>  <input type="hidden" id="c5" name="c5"onclick="DeckMakeCode1()" />
    <label for="c5"><span></span></label>
    <div id="c5text" style="display:none"></div>
    <img id="c5png" src="" width="200" style="display:none"> </td>
  <td>
    <input type="hidden" id="c6" name="c6" onclick="DeckMakeCode1()"/>
    <label for="c6"><span></span></label>
    <div id="c6text" style="display:none"></div>
    <img id="c6png" src="" width="200" style="display:none">
   </td>
  <td>
    <input type="hidden" id="c7" name="c7" onclick="DeckMakeCode1()"/>
    <label for="c7"><span></span></label>
    <div id="c7text" style="display:none"></div>
    <img id="c7png" src="" width="200" style="display:none"> </td>
</tr><!-- 두번째 줄 끝 -->

<tr><!-- 세번째 줄 시작 -->
<td>   
    <input type="hidden" id="d0" name="d0" onclick="DeckMakeCode1()" />
    <label for="d0"><span></span></label>
    <div id="d0text" style="display:none"></div>
    <img id="d0png" src="" width="200" style="display:none"> </td>
  <td>   <input type="hidden" id="d1" name="d1"onclick="DeckMakeCode1()" />
    <label for="d1"><span></span></label>
    <div id="d1text" style="display:none"></div>
    <img id="d1png" src="" width="200" style="display:none"> </td>
    <td>   <input type="hidden" id="d2" name="d2" onclick="DeckMakeCode1()" />
    <label for="d2"><span></span></label>
    <div id="d2text" style="display:none"></div>
    <img id="d2png" src="" width="200" style="display:none"> </td>
  <td>   <input type="hidden" id="d3" name="d3" />
    <label for="d3"><span></span></label>
    <div id="d3text" style="display:none"></div>
    <img id="d3png" src="" width="200" style="display:none"> </td>
</tr><!-- 세번째 줄 끝 -->

<tr><!-- 네번째 줄 시작 -->

</tr><!-- 네번째 줄 끝 -->

<tr><!-- 다번째 줄 시작 -->
  <td>
    <input type="hidden" id="rc0" name="rc0" onclick="DeckMakeCode1()"/>
    <label for="rc0"><span></span></label>
    <div id="rc0text" style="display:none"></div>
    <img id="rc0png" src="" width="200" style="display:none"> </td>
  <td>  <input type="hidden" id="rc1" name="rc1" onclick="DeckMakeCode1()"/>
    <label for="rc1"><span></span></label>
    <div id="rc1text" style="display:none"></div>
    <img id="rc1png" src="" width="200" style="display:none"> </td>

</tr><!-- 다번째 줄 끝 -->

<tr><!-- 여번째 줄 시작 -->
  <td>   <input type="hidden" id="rc2" name="rc2" onclick="DeckMakeCode1()"/>
    <label for="rc2"><span></span></label>
    <div id="rc2text" style="display:none"></div>
    <img id="rc2png" src="" width="200" style="display:none"></td>
  <td>   <input type="hidden" id="rc3" name="rc3" onclick="DeckMakeCode1()"/>
    <label for="rc3"><span></span></label>
    <div id="rc3text" style="display:none"></div>
    <img id="rc3png" src="" width="200" style="display:none"></td>
</tr><!-- 여번째 줄 끝 -->

<tr><!-- 일곱번째 줄 시작 -->
  <td>  <input type="hidden" id="rc4" name="rc4" onclick="DeckMakeCode1()"/>
    <label for="rc4"><span></span></label>
    <div id="rc4text" style="display:none"></div>
    <img id="rc4png" src="" width="200" style="display:none"> </td>
  <td>  <input type="hidden" id="rc5" name="rc5" onclick="DeckMakeCode1()"/>
    <label for="rc5"><span></span></label>
    <div id="rc5text" style="display:none"></div>
    <img id="rc5png" src="" width="200" style="display:none"> </td>

</tr><!-- 일곱번째 줄 끝 -->

<tr><!-- 여덟번째 줄 시작 -->
  <td>  <input type="hidden" id="rc6" name="rc6" onclick="DeckMakeCode1()"/>
    <label for="rc6"><span></span></label>
    <div id="rc6text" style="display:none"></div>
    <img id="rc6png" src="" width="200" style="display:none"> </td>
  <td>  <input type="hidden" id="rc7" name="rc7" onclick="DeckMakeCode1()" />
    <label for="rc7"><span></span></label>
    <div id="rc7text" style="display:none"></div>
    <img id="rc7png" src="" width="200" style="display:none"> </td>
</tr><!-- 여덟번째 줄 끝 -->


<tr><!-- 아홉번째 줄 시작 -->
 
</tr><!-- 아홉번째 줄 끝 -->

<tr><!-- 열번째 줄 시작 -->
 
</tr><!-- 열번째 줄 끝 -->

<tr><!-- 열하나번째 줄 시작 -->
  <td>   <input type="hidden" id="rd0" name="rd0" />
    <label for="rd0"><span></span></label>
    <div id="rd0text" style="display:none"></div>
    <img id="rd0png" src="" width="200" style="display:none"> </td>
  <td>   <input type="hidden" id="rd1" name="rd1" />
    <label for="rd1"><span></span></label>
    <div id="rd1text" style="display:none"></div>
    <img id="rd1png" src="" width="200" style="display:none"> </td>
</tr><!-- 열하나번째 줄 끝 -->

<tr><!-- 열둘번째 줄 시작 -->
  <td>  <input type="hidden" id="rd2" name="rd2" />
    <label for="rd2"><span></span></label>
    <div id="rd2text" style="display:none"></div>
    <img id="rd2png" src="" width="200" style="display:none">  </td>
  <td>   <input type="hidden" id="rd3" name="rd3"/>
    <label for="rd3"><span></span></label>
    <div id="rd3text" style="display:none"></div>
    <img id="rd3png" src="" width="200" style="display:none"> </td>
</tr><!-- 열둘번째 줄 끝 -->

<tr><!-- 열셋번째 줄 시작 -->
  <td>  </td>
  <td>  </td>
</tr><!-- 열셋번째 줄 끝 -->
</table>











<script> 
function Deckcode(megami1,megami2,code1, code2)
{ 
    


    //var first = document.getElementById("job1");
    var selectValue1 = megami1;
    //var selectValue1 = first.options[first.selectedIndex].value;
    

    var yurinage = ["1.참", "2.일섬" ,"3.자루 치기","4.거합","5.기백","6.압도","7.기염만장"];
        var yurinabi = ["S1.월영이 떨어지니","S2.해안엔 파랑 일며","S3.쪽배에서 쉬노니","S4.아마네 유리나의 저력"];

        var yurinaAge = ["1.난타",	"2.일섬",	"3.자루치기",	"4.거합",	"5.기백",	"6.콩알탄",	"7.기염만장" ];
        var yurinaAbi = ["S1.월영이 떨어지니",	"S2.불완전 파도치는 폭풍우"	,"S3.쪽배에서 쉬노니"	,"S4.아마네 유리나의 저력"];

        var sainege =["1.팔방 휘두르기", "2.낫 베기" ,"3.석돌 치기","4.간파","5.권역","6.충음정","7.무음벽"];
        var sainebi = ["S1.율동호극","S2.항명공진","S3.무음쇄빙","S4.히사메 사이네의 최후의 종극"];

        var saineAge =["1.팔방 휘두르기",	"2.낫 베기"	,"3.얼음의 소리"	,"4.간파",	"5.권역"	,"6.반주",	"7.무음벽"];
        var saineAbi = ["S1.율동호극",	"S2.이중주: 탄주빙명"	,"S3.무음쇄빙",	"S4.히사메 사이네의 최후의 종극"];

        var saineA2ge =["1.팔방 휘두르기",	"2.배신",	"3.무게추",	"4.간파",	"5.권역"	,"6.충음정"	,"7.유향벽"];
        var saineA2bi = ["S1.율동호극",	"S2.항명공진",	"S3.절창절화",	"S4.히사메 사이네의 최후의 종극"];

        var himikage =["1.슛", "2.래피드 파이어" ,"3.매그넘 캐논","4.풀 버스트","5.백스탭","6.백 드래프트","7.스모크"];
        var himikabi = ["S1.레드 블릿","S2.크림즌 제로","S3.스칼렛 이매진","S4.버밀리언 필드"];

        var himikaAge =["1.슛",	"2.화염류",	"3.매그넘 캐논",	"4.풀 버스트"	,"5.살의"	,"6.백드래프트"	,"7.스모크"];
        var himikaAbi =["S1.레드 불릿",	"S2.염천・쿠레나이히미카",	"S3.스칼렛 이매진",	"S4.버밀리온 필드"];

        var tokoyoge =["1.빗어 내리기", "2.우아한 타격" ,"3.날뛰는 토끼","4.시의 춤","5.부채 뒤집기","6.바람의 무대","7.맑음의 무대"];
        var tokoyobi = ["S1.영원한 꽃","S2.천년의 새","S3.무궁한 바람","S4.불변의 달"];

        var tokoyoAge =["1.연주 흘리기"	,"2.우아한 타격",	"3.날뛰는 토끼",	"4.시의 춤",	"5.양지의 소리"	,"6.바람의 무대",	"7.맑음의 무대"];
        var tokoyoAbi =["S1.영원의 꽃",	"S2.이중주: 취탄양명",	"S3.무궁의 바람",	"S4.토코요의 달"];

        var tokoyoA2ge =["1.빗어내리기"	,"2.두려움 흘리기",	"3.날뛰는 토끼"	,"4.시의 춤",	"5.부채 뒤집기"	,"6.바람의 무대",	"7.맑음의 무대"];
        var tokoyoA2bi =["S1.영원의 꽃"	,"S2. 유구의 눈",	"S3. 덧없이 지는 여덟겹벛꽃",	"S4.토코요의 달"];

        var oboroge =["1.철사",	"2.그림자 마름",	"3.참격난무",	"4.닌자 걸음",	"5.유도",	"6.분신술",	"7.생체활성"];
        var oborobi =["S1.쿠마스케",	"S2.토비카게",	"S3.우로우오",	"S4.미카즈라"];

        var oboroAge =["1.철사",	"2.수리검",	"3.기습",	"4.닌자 걸음",	"5.유도",	"6.분신술",	"7.생체활성"];
        var oboroAbi =["S1.쿠마스케",	"S2.토비카게",	"S3.우로우오",	"S4.신대의 가지"];

        var yukihige =["1.바늘 숨기기 // 바늘 뱉기",	"2.불꽃장치 // 손뼉치기",	"3.휘둘러치기 // 끌어당기기",	"4.휘두르기 // 찔러넣기",	"5.우산 돌리기",	"6.뒷걸음질 // 숨어들기",	"7. 인연 맺기"];
        var yukihibi =["S1.흩날리는 눈꽃",	"S2.일렁이는 불꽃",	"S3.끈적이는 원통함",	"S4.빙 도는 한"];

        var yukihiAge =["1.바늘 숨기기 // 바늘 뱉기",	"2.조력 // 위협",	"3.휘둘러치기 // 끌어당기기",	"4.씨실 // 날실",	"5.우산 돌리기",	"6.뒷걸음질 // 숨어들기",	"7. 인연 맺기"];
        var yukihiAbi =["S1.흩날리는 눈꽃",	"S2.살랑이는 옷깃",	"S3.끈적이는 원통함",	"S4.빙 도는 한"];

        var sinlage =["1.입론",	"2.반론",	"3.궤변",	"4.인용",	"5.선동",	"6.장담",	"7.논파"];
        var sinlabi =["S1.완전논파",	"S2.일절이해",	"S3.천지반박",	"S4.신라판증"];

        var sinlaAge =["1.입론",	"2.진언",	"3.궤변",	"4.인용",	"5.선동",	"6.사도",	"7.논파"];
        var sinlaAbi =["S1.완전논파",	"S2.일절이해",	"S3.전지경전",	"S4.신라판증"];

        var haganege =["1.원심격",	"2.사풍진",	"3.대지 부수기",	"4.초반동",	"5.원무련",	"6.종 울리기",	"7.인력장"];
        var haganebi =["S1.대천공 크래쉬",	"S2.대파종 메갈로벨",	"S3.대중력 어트랙트",	"S4.대산맥 리스펙트"];

        var haganeAge =["1.화롯불",	"2.선회기",	"3.대지 부수기",	"4.초반동",	"5.원무련",	"6.종 울리기",	"7.인력장"];
        var haganeAbi =["S1.대연성 마테리얼",	"S2.대파종 메갈로벨",	"S3.대중력 어트랙트",	"S4.대산맥 리스펙트"];

        var chikagege =["1.쿠나이 투척",	"2.독침",	"3.둔갑술",	"4.목 베기",	"5.독 안개",	"6.까치발 걸음",	"7.진흙탕"];
        var chikagebi =["S1.호로비의 영혼 독",	"S2.반기에 얽힌 독",	"S3.윤회의 안개 독",	"S4.야미쿠라 치카게의 사는 길"];

        var chikageAge =["1.쿠나이 투척",	"2.독침",	"3.둔갑술",	"4.목 베기",	"5.장치 종이우산",	"6.분전",	"7.진흙탕"];
        var chikageAbi =["S1.호로비의 영혼 독",	"S2.반기에 얽힌 독",	"S3.윤회의 안개 독",	"S4.잔재의 인연 독"];

        var kururuge =["1.일레키텔",	"2.엑셀러",	"3.쿠루루~웅",	"4.토네이도",	"5.리게이너",	"6.모듀르~",	"7.리플렉터"];
        var kururubi =["S1.드레인 데빌",	"S2.빅 골렘",	"S3.인더스트리아",	"S4.신섭장치: 쿠루루식"];

        var kururuAge =["1.애널라이즈",	"2.엑셀러",	"3.다우징",	"4.토네이도",	"5.리게이너",	"6.모듀르~",	"7.리플렉터"];
        var kururuAbi =["S1.드레인 데빌",	"S2.빅 골렘",	"S3.라스트 리서치",	"S4.신섭장치: 쿠루루식"];

        var sariyage =["1.Burning Steam",	"2.Waving Edge",	"3.Shield Charge",	"4.Steam Cannon",	"5.Stunt",	"6.Roaring",	"7.Turbo Switch"];
        var sariyabi =["S1.Alpha-Edge",	"S2.Omega-Burst",	"S3.Thallya's Masterpiece",	"S4.Julia's BlackBox"];
                
        var sariyaAge =["1.Burning Steam",	"2.Waving Edge",	"3.Shield Charge",	"4.Steam Cannon",	"5.Quick Change",	"6.Roaring",	"7.Turbo Switch"];
        var sariyaAbi =["S1.BlackBox NEO",	"S2.OMNIS-Blaster",	"S3.Thallya's Masterpiece",	"S4.Julia's BlackBox"];
        
        var rairage =["1.짐승발톱",	"2.풍뢰격",	"3.윤회의 발톱",	"4.바람 달리기",	"5.풍뢰의 지혜",	"6.울부짖기",	"7.허공답보"];
        var rairabi =["S1.뇌라풍신조",	"S2.천뢰소환진",	"S3.풍마초래공",	"S4.원환륜회선"];
        
        var rairaAge =["1.짐승발톱",	"2.폭풍",	"3.윤회의 발톱",	"4.바람 달리기",	"5.풍뢰의 지혜",	"6.대폭풍우",	"7.허공답보"];
        var rairaAbi =["S1.뇌라풍신조",	"S2.천뢰소환진",	"S3.진풍제천의",	"S4.원환륜회선"];
        
        var uchuroge =["1.원월",	"2.검은 파동",	"3.수확",	"4.중압",	"5.그림자 날개",	"6.그림자 벽",	"7.유회주"];
        var uchurobi =["S1.회멸",	"S2.허위",	"S3.종말",	"S4.마식"];

        var uchuroAge =["1.원월",	"2.좀 먹는 먼지",	"3.수확",	"4.중압",	"5.그림자 날개",	"6.그림자 벽",	"7.유회주"];
        var uchuroAbi =["S1.잔향장치: 쿠루루식",	"S2.허위",	"S3.종말",	"S4.마식"];

        var honokage =["1.정령식",	"2.벚꽃보라",	"3.의기공진",	"4.벚꽃 날개",	"5.벚꽃 부적",	"6.지휘",	"7.순풍"];
        var honokabi =["S1.가슴에 추억을",	"S2.이 깃발의 이름 아래",	"S3.사계는 다시 돌아온다",	"S4.만천의 꽃길에서"];
        
        var honokaAge =["1.벚꽃 쌍검",	"2.벚꽃보라",	"3.의기공진",	"4.벚꽃 날개",	"5.벚꽃 부적",	"6.지휘",	"7.순풍"];
        var honokaAbi =["S1.나홀로 눈이 뜨여",	"S2.이 깃발의 이름 아래",	"S3.사계는 다시 돌아온다",	"S4.만천의 꽃길에서"];
        
        var corunuge =["1.눈의 칼날",	"2.선회날",	"3.검의 춤",	"4.눈 타기",	"5.절대영도",	"6.동상",	"7.서리 가시덤불"];
        var corunubi =["S1.콘루 루얀페",	"S2.레탈 레라",	"S3.우파스톰",	"S4.포르챨 토"];
        
        var yachuhage =["1.별의 손톱",	"2.어둠의 칼날",	"3.거울의 악마",	"4.환영보법",	"5.의지",	"6.계약",	"7.다가오는 꽃"];
        var yachuhabi =["S1.후타바거울의 재앙신",	"S2.요츠바거울의 전래동요",	"S3.무츠바거울의 별바다",	"S4.야츠하거울의 저편"];
        
        var hachumige =["1.수뢰포",	"2.수류",	"3.강산",	"4.해일",	"5.준비만전",	"6.나침반",	"7.파도 부르기"];
        var hachumibi =["S1.이사나 해역",	"S2.오요기비 포화",	"S3.카라하리 등대",	"S4.미오비키 항로"];
        
        var mizukige =["1.진두",	"2.반공",	"3.쏘아 떨구기",	"4.호령",	"5.방벽",	"6.제압전진",	"7.전장"];
        var mizukibi =["S1.천주팔룡각",	"S2.삼중슬환노",	"S3.대수순무문",	"S4.야마시로 미즈키의 전투의 함성"];
        
        var megumige =["1.공섬",	"2.타척",	"3.껍질치기",	"4.장대 찌르기",	"5.갈대",	"6.봉선화",	"7.찔레꽃"];
        var megumibi =["S1.인과율의 뿌리",	"S2.가능성의 가지",	"S3.결말의 과실",	"S4.타키가와 메구미의 손바닥 안"];

        var kanaege =["1.공상",	"2.각본화",	"3.연출화",	"4.단행",	"5.잔광",	"6.즉흥",	"7.봉살"];
        var kanaebi =["S1.어렴풋한 이야기",	"S2.무수한 별빛",	"S3.이 밤을 굽이굽이 펴리라",	"S4.겨레의 머나먼 하늘"];


        var kururuA2ge =["1.블래스터",	"2.레일건",	"3.쿠루루~웅",	"4.토네이도",	"5.리게이너",	"6.모듀르~",	"7.리플렉터"];
        var kururuA2bi =["S1.드레인 데빌",	"S2.빅 골렘",	"S3.인더스트리아",	"S4.커넥트 다이브"];

        var hachumiAge =["1.수뢰포",	"2.수류",	"3.강산",	"4.잠뢰",	"5.준비만전",	"6.나침반",	"7.파도 부르기"];
        var hachumiAbi =["S1.사기리 해역",	"S2.오요기비 포화",	"S3.카라하리 등대",	"S4.와다나카 항로"];
        
        var yachuhaAge =["1.별의 손톱",	"2.어둠의 칼날",	"3.거울의 악마",	"4.환영보법",	"5.의지",	"6.계약",	"7.다가오는 꽃"];
        var yachuhaAbi =["S1.야츠하거울의 허무의 벛꽃 재앙신"];

        var kamuige =["1.붉은 칼날",	"2.산화인",	"3.사검난인",	"4.베어내기",	"5.바늘 빼기",	"6.혈정난류",	"7.피보라"];
        var kamuibi =["S1.등불",	"S2.무덤길",	"S3.주검",	"S4.이치"];

        var renlige =["1.거짓 찌르기",	"2.임시변통",	"3.누명 씌우기",	"4.약올리는 몸짓",	"5.뜬구름 잡기",	"6.낚시질",	"7.감쪽같은 속임수"];
        var renlibi =["S1.루루라라리",	"S2.라나라로미레리라",	"S3.내라라려루레",	"S4.요야마 렌리의 말로"];

        


        


        if(selectValue1 == "1")
        {
          var ge = yurinage;
          var bi = yurinabi;
        }
        else if(selectValue1 == "2")
        {
          var ge = yurinaAge;
          var bi = yurinaAbi;
        }
        else if(selectValue1 == "3")
        {
          var ge = sainege;
          var bi = sainebi;
        }
        else if(selectValue1 == "4")
        {
          var ge = saineAge
;
          var bi = saineAbi
;
        }
        else if(selectValue1 == "5")
        {
          var ge = saineA2ge
;
          var bi = saineA2bi
;
        }
        else if(selectValue1 == "6")
        {
          var ge = himikage
;
          var bi = himikabi
;
        }
        else if(selectValue1 == "7")
        {
          var ge = himikaAge
;
          var bi = himikaAbi
;
        }
        else if(selectValue1 == "8")
        {
          var ge = tokoyoge
;
          var bi = tokoyobi
;
        }
        else if(selectValue1 == "9")
        {
          var ge = tokoyoAge
;
          var bi = tokoyoAbi
;
        }
        else if(selectValue1 == "10")
        {
          var ge = tokoyoA2ge
;
          var bi = tokoyoA2bi
;
        }
        else if(selectValue1 == "11")
        {
          var ge = oboroge
;
          var bi = oborobi
;
        }
        else if(selectValue1 == "12")
        {
          var ge = oboroAge
;
          var bi = oboroAbi
;
        }
        else if(selectValue1 == "13")
        {
          var ge = yukihige
;
          var bi = yukihibi
;
        }
        else if(selectValue1 == "14")
        {
          var ge = yukihiAge
;
          var bi = yukihiAbi
;
        }
        else if(selectValue1 == "15")
        {
          var ge = sinlage
;
          var bi = sinlabi
;
        }
        else if(selectValue1 == "16")
        {
          var ge = sinlaAge
;
          var bi = sinlaAbi
;
        }
        else if(selectValue1 == "17")
        {
          var ge = haganege
;
          var bi = haganebi
;
        }
        else if(selectValue1 == "18")
        {
          var ge = haganeAge
;
          var bi = haganeAbi
;
        }
        else if(selectValue1 == "19")
        {
          var ge = chikagege
;
          var bi = chikagebi
;
        }
        else if(selectValue1 == "20")
        {
          var ge = chikageAge
;
          var bi = chikageAbi
;
        }
        else if(selectValue1 == "21")
        {
          var ge = kururuge
;
          var bi = kururubi
;
        }
        else if(selectValue1 == "22")
        {
          var ge = kururuAge
;
          var bi = kururuAbi
;
        }
        else if(selectValue1 == "23")
        {
          var ge = sariyage
;
          var bi = sariyabi
;
        }
        else if(selectValue1 == "24")
        {
          var ge = sariyaAge
;
          var bi = sariyaAbi
;
        }
        else if(selectValue1 == "25")
        {
          var ge = rairage
;
          var bi = rairabi
;
        }
        else if(selectValue1 == "26")
        {
          var ge = rairaAge
;
          var bi = rairaAbi
;
        }
        else if(selectValue1 == "27")
        {
          var ge = uchuroge
;
          var bi = uchurobi
;
        }
        else if(selectValue1 == "28")
        {
          var ge = uchuroAge
;
          var bi = uchuroAbi
;
        }
        else if(selectValue1 == "29")
        {
          var ge = honokage
;
          var bi = honokabi
;
        }
        else if(selectValue1 == "30")
        {
          var ge = honokaAge
;
          var bi = honokaAbi
;
        }
        else if(selectValue1 == "31")
        {
          var ge = corunuge
;
          var bi = corunubi
;
        }
        else if(selectValue1 == "32")
        {
          var ge = yachuhage
;
          var bi = yachuhabi
;
        }
        else if(selectValue1 == "33")
        {
          var ge = hachumige
;
          var bi = hachumibi
;
        }
        else if(selectValue1 == "34")
        {
          var ge = mizukige
;
          var bi = mizukibi
;
        }
        else if(selectValue1 == "35")
        {
          var ge = megumige
;
          var bi = megumibi
;
        }
        else if(selectValue1 == "36")
        {
          var ge = kanaege
;
          var bi = kanaebi
;
        }
        else if(selectValue1 == "37")
        {
          var ge = kururuA2ge
;
          var bi = kururuA2ge
;
        }
        else if(selectValue1 == "38")
        {
          var ge = hachumiAge
;
          var bi = hachumiAbi
;
        }
        else if(selectValue1 == "39")
        {
          var ge = yachuhaAge
;
          var bi = yachuhaAbi
;
        }
        else if(selectValue1 == "40")
        {
          var ge = kamuige
;
          var bi = kamuibi
;
        }
        else if(selectValue1 == "41")
        {
          var ge = renlige
;
          var bi = renlibi
;
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
    var getempindex =0;
    var bitempindex =0;
    for(var x = 0; x < 8;x++)
    {   
        

        index = temp1 % 10;
        temp1 = temp1 / 10;
        temp1 = parseInt(temp1);
        if(index == 1)
        {  
            //document.getElementById("c"+x).type = "button";
            document.getElementById("c"+getempindex+"png").style.display = "block";
            document.getElementById("c"+getempindex+"png").src = "/images/ge/"+selectValue1 + "/" +x+".png";
            document.getElementById("c"+getempindex+"text").style.display = "block";
            document.getElementById("c"+getempindex+"text").innerText= ge[x]; //ge[x]
            getempindex = getempindex+1;
        }
      
    
    }
    temp1 = code1.toString(2);
    temp1 = temp1 / 100000000;
    temp1 = parseInt(temp1);
   
    for(var x = 0; x < 4;x++)
    {
        index = temp1 % 10;
        temp1 = temp1 / 10;
        temp1 = parseInt(temp1);
        if(index == 1)
        {
            //document.getElementById("d"+x).type = "button";
            document.getElementById("d"+bitempindex+"png").style.display = "block";
            document.getElementById("d"+bitempindex+"png").src = "/images/bi/"+selectValue1 + "/" +x+".png";
            document.getElementById("d"+bitempindex+"text").style.display = "block";
            document.getElementById("d"+bitempindex+"text").innerText= bi[x];
            bitempindex = bitempindex+1;
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
          var ge = yurinaAge;
          var bi = yurinaAbi;
        }
        else if(selectValue1 == "3")
        {
          var ge = sainege;
          var bi = sainebi;
        }
        else if(selectValue1 == "4")
        {
          var ge = saineAge
;
          var bi = saineAbi
;
        }
        else if(selectValue1 == "5")
        {
          var ge = saineA2ge
;
          var bi = saineA2bi
;
        }
        else if(selectValue1 == "6")
        {
          var ge = himikage
;
          var bi = himikabi
;
        }
        else if(selectValue1 == "7")
        {
          var ge = himikaAge
;
          var bi = himikaAbi
;
        }
        else if(selectValue1 == "8")
        {
          var ge = tokoyoge
;
          var bi = tokoyobi
;
        }
        else if(selectValue1 == "9")
        {
          var ge = tokoyoAge
;
          var bi = tokoyoAbi
;
        }
        else if(selectValue1 == "10")
        {
          var ge = tokoyoA2ge
;
          var bi = tokoyoA2bi
;
        }
        else if(selectValue1 == "11")
        {
          var ge = oboroge
;
          var bi = oborobi
;
        }
        else if(selectValue1 == "12")
        {
          var ge = oboroAge
;
          var bi = oboroAbi
;
        }
        else if(selectValue1 == "13")
        {
          var ge = yukihige
;
          var bi = yukihibi
;
        }
        else if(selectValue1 == "14")
        {
          var ge = yukihiAge
;
          var bi = yukihiAbi
;
        }
        else if(selectValue1 == "15")
        {
          var ge = sinlage
;
          var bi = sinlabi
;
        }
        else if(selectValue1 == "16")
        {
          var ge = sinlaAge
;
          var bi = sinlaAbi
;
        }
        else if(selectValue1 == "17")
        {
          var ge = haganege
;
          var bi = haganebi
;
        }
        else if(selectValue1 == "18")
        {
          var ge = haganeAge
;
          var bi = haganeAbi
;
        }
        else if(selectValue1 == "19")
        {
          var ge = chikagege
;
          var bi = chikagebi
;
        }
        else if(selectValue1 == "20")
        {
          var ge = chikageAge
;
          var bi = chikageAbi
;
        }
        else if(selectValue1 == "21")
        {
          var ge = kururuge
;
          var bi = kururubi
;
        }
        else if(selectValue1 == "22")
        {
          var ge = kururuAge
;
          var bi = kururuAbi
;
        }
        else if(selectValue1 == "23")
        {
          var ge = sariyage
;
          var bi = sariyabi
;
        }
        else if(selectValue1 == "24")
        {
          var ge = sariyaAge
;
          var bi = sariyaAbi
;
        }
        else if(selectValue1 == "25")
        {
          var ge = rairage
;
          var bi = rairabi
;
        }
        else if(selectValue1 == "26")
        {
          var ge = rairaAge
;
          var bi = rairaAbi
;
        }
        else if(selectValue1 == "27")
        {
          var ge = uchuroge
;
          var bi = uchurobi
;
        }
        else if(selectValue1 == "28")
        {
          var ge = uchuroAge
;
          var bi = uchuroAbi
;
        }
        else if(selectValue1 == "29")
        {
          var ge = honokage
;
          var bi = honokabi
;
        }
        else if(selectValue1 == "30")
        {
          var ge = honokaAge
;
          var bi = honokaAbi
;
        }
        else if(selectValue1 == "31")
        {
          var ge = corunuge
;
          var bi = corunubi
;
        }
        else if(selectValue1 == "32")
        {
          var ge = yachuhage
;
          var bi = yachuhabi
;
        }
        else if(selectValue1 == "33")
        {
          var ge = hachumige
;
          var bi = hachumibi
;
        }
        else if(selectValue1 == "34")
        {
          var ge = mizukige
;
          var bi = mizukibi
;
        }
        else if(selectValue1 == "35")
        {
          var ge = megumige
;
          var bi = megumibi
;
        }
        else if(selectValue1 == "36")
        {
          var ge = kanaege
;
          var bi = kanaebi
;
        }
        else if(selectValue1 == "37")
        {
          var ge = kururuA2ge
;
          var bi = kururuA2ge
;
        }
        else if(selectValue1 == "38")
        {
          var ge = hachumiAge
;
          var bi = hachumiAbi
;
        }
        else if(selectValue1 == "39")
        {
          var ge = yachuhaAge
;
          var bi = yachuhaAbi
;
        }
        else if(selectValue1 == "40")
        {
          var ge = kamuige
;
          var bi = kamuibi
;
        }
        else if(selectValue1 == "41")
        {
          var ge = renlige
;
          var bi = renlibi
;
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
            document.getElementById("c"+getempindex+"png").style.display = "block";
            document.getElementById("c"+getempindex+"png").src = "/images/ge/"+selectValue1 + "/" +x+".png";
            document.getElementById("c"+getempindex+"text").style.display = "block";
            document.getElementById("c"+getempindex+"text").innerText= ge[x]; //ge[x]
            getempindex = getempindex+1;
        }
      
    
    }
    temp1 = code2.toString(2);
    temp1 = temp1 / 100000000;
    temp1 = parseInt(temp1);
   
    for(var x = 0; x < 4;x++)
    {
        index = temp1 % 10;
        temp1 = temp1 / 10;
        temp1 = parseInt(temp1);
        if(index == 1)
        {
            //document.getElementById("d"+x).type = "button";
            document.getElementById("d"+bitempindex+"png").style.display = "block";
            document.getElementById("d"+bitempindex+"png").src = "/images/bi/"+selectValue1 + "/" +x+".png";
            document.getElementById("d"+bitempindex+"text").style.display = "block";
            document.getElementById("d"+bitempindex+"text").innerText= bi[x];
            bitempindex = bitempindex+1;
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




    </body>
</html>