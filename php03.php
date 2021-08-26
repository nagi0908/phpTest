<?php
echo "i*2=";
function twice($i){
    $result = $i *2; 
    return $result;
}
echo twice(3) . "\n";
?>
<br></br>
<?php
echo "a+b=";
function sum($a, $b){
    $result = $a + $b;
    return $result;
}
echo sum(3,2) . "\n";
?>
<br></br>
<?php
$array = [1, 3, 5 ,7, 9];
echo "arrayを全て掛けた結果→";
function multi($arr){
    $total = 1;
    for ($i = 0; $i <= 4; $i++) { 
    $total *= $arr[$i]; 
    }
    $result = $total;
    return $result;
};
echo multi($array). "\n";
?>
<br></br>
<?php
$array = array(1,3,5,9,7);
print_r($array);
echo "の最大値→";
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
       if ($a > $max_number){
        $max_number = $a;"\n";}
        } 
        return $max_number;
    } 

echo max_array($array). "\n";
?>
<br></br>
<?php
// 次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください
// strip_tags　タグを取り除く
$str = "<h1>strip_tagsは</h1>" . "<p>タグを取り除く</p>";
echo strip_tags($str) ."\n";
?>
<br></br>
<?php
//array_push 配列に要素を追加
$array1 = array("配列", "に");
print_r($array1); 
echo "に要素を追加";
?>
<br></br>
<?php
        array_push($array1, "要素", "を", "追加");
        var_dump($array1);
?>
<br></br>
<?php 
//array_merge
$array2 = [1, 2, 3];
$array3 = [10, 20, 30];
//配列を結合
$array23 = array_merge($array2, $array3);
print_r($array2);
echo "に";
print_r($array3);
echo "を追加→";
print_r($array23);
?>
<br></br>
<?php
//time, mktime
//タイムスタンプを表示
$time = mktime(8);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');
?>
<br></br>
<?php
//date
// ローカルの日付/時刻を書式化する
date_default_timezone_set('Asia/Tokyo');
echo "今の日付、曜日、時刻は、";
echo date("Y/m/d l H:i:s");
?>