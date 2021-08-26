<?php
//$name にあなたの名前を代入
$name = "NAGI";
//if文$name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示
if ($name == "NAGI") {
    echo "私はNAGIです";
} else {
    echo "私はNAGIではありません";
}
?>
<br></br>
<?php
//2. for文を使って、1から10000までの合計の値を表示してください。
$total = 0;
for ($i= 1; $i <= 10000; $i++) { 
 $total += $i;
}
echo $total;
?>
<br></br>
<?php
//3. $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
echo "好きなフルーツは";
$fruits =array("もも", "ぶどう", "グレープフルーツ", "パイナップル", "みかん");
foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}
?>
<br></br>
<?php
//4.　【応用】 次のプログラムのバグを修正し、
//1から100までの間で5の倍数のみ表示

//* for文の始めの値を定義する 
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
for($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i .",";
  };
}

?>