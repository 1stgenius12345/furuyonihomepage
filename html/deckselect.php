<!DOCTYPE html>
<html lang="ko">
<head>
  <script src="huruyoni.js"> </script>
</head>
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










    </body>
</html>