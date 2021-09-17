<?php
$a = 3;
$b = 7;
$v = $a+$b ;
echo "\n" . $v . "\n" ;
?>
<br>
//2. $array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
<br>
<?php
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];

echo  $array_month[7] . "\n" ; 
echo "\n" ;
?>
<br>
//3. $hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
    $world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello,
    あなたの名前’s World!"と表示
<br>
<?php
$hello = "Hello, ";
$name  = "nagi";
$world = "'s World =)";

$hello = $hello . $name . $world ;
echo "\n" . $hello . "\n"; 

?>
<br>
//4. $tech_boostに “tech “という文字列が代入されています。
    複合演算を使って、echo $tech_boost:と実行すると「tech boost」と表示されるように実装してみましょう。
<br>
<?php
$tech_boost = "tech" ;
$tech_boost .= " boost"  ;
echo "\n" . $tech_boost . "\n" ; 

?>
<br>
//5. 【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは1つとは限りません。)
<br>
<?php
$calendar_2020 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo '<br>'. $calendar_2020["December"] ;

?>