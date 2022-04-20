<?php

header("Content-Type: text/html; charset=UTF-8");

$deckname = $_GET['deckname'];
$decktext = $_GET['decktext'];
$megami1= $_GET['job1'];
$megami2 = $_GET['job2'];
$deckcode1 = $_GET['deckcode1'];
$deckcode2 = $_GET['deckcode2'];

//Database에 업로드 된 데이터 저장
//Database를 제어해주는 프로그램(DBMS : MySQL) 사용

//php에서 Database서버와 연동하기
//MySQL DB에 접속하기!!
$conn=mysqli_connect("localhost","k31pdd","gnfndysl1!","k31pdd","3306") or die ("실패입니다."); //DB 서버 주소, DB 접속 아이디, DB접속 비번, DB명 (파일명)

//한글 깨짐 방지
mysqli_query($conn,"set names utf8");

//SQL 쿼리문 작성
//$sql="INSERT INTO test(name,message, megami1, megami2, c0, rc0, c1, rc1, c2, rc2, c3, rc3, c4, rc4, c5, rc5, c6, rc6, c7, rc7, d0, rd0, d1, rd1, d2, rd2, d3 ,rd3) VALUES('$deckname','$decktext','$megami1','$megami2','$c0', '$rc0', '$c1', '$rc1', '$c2', '$rc2', '$c3', '$rc3', '$c4', '$rc4', '$c5', '$rc5', '$c6', '$rc6', '$c7', '$rc7', '$d0' , '$rd0', '$d1', '$rd1', '$d2', '$rd2', '$d3' ,'$rd3','$now')";

    
$sql="INSERT INTO furuyonidb2(
    title,
    text,
    megami1,
    megami2,
    deckcode1,
    deckcode2,
    date
    )
    VALUES(
     '$deckname',
     '$decktext',
     '$megami1',
     '$megami2',
     '$deckcode1',
     '$deckcode2',
     Now());";



$result=mysqli_query($conn,$sql);



if($result){
    echo "<script>alert(\"저장되었습니다\");</script>";
} else{
    echo "<script>alert(\"저장실패\");</script>";
}



mysqli_close($conn);

echo "<br>덱 이름 : $deckname";
echo "<br>덱 텍스트 : $decktext";
echo "<br>첫번째 여신 : $megami1";
echo "<br>두번째 여신 : $megami2";
echo "<br><br> c0 : $c0";
echo "<br> c1 : $c1";
echo "<br> c2 : $c2";
echo "<br> c3 : $c3";
echo "<br> c4 : $c4";
echo "<br> c5 : $c5";
echo "<br> c6 : $c6";
echo "<br> c7 : $c7";
echo "<br> d0 : $d0";
echo "<br> d1 : $d1";
echo "<br> d2 : $d2";
echo "<br> d3 : $d3";
echo "<br><br> rc0 : $rc0";
echo "<br> rc1 : $rc1";
echo "<br> rc2 : $rc2";
echo "<br> rc3 : $rc3";
echo "<br> rc4 : $rc4";
echo "<br> rc5 : $rc5";
echo "<br> rc6 : $rc6";
echo "<br> rc7 : $rc7";
echo "<br> rd0 : $rd0";
echo "<br> rd1 : $rd1";
echo "<br> rd2 : $rd2";
echo "<br> rd3 : $rd3";
echo "<br> deckcode1 : $deckcode1";
echo "<br> deckcode2 : $deckcode2";

echo "<script>location.replace('index.html')</script>";








?>