<?php

// Q1
function double_up($i){
    return 2 * $i;
}
echo double_up(10) . "\n";

// Q2
function add($a,$b){
    return $a + $b;
}
echo add(5,2) . "\n";

// Q3
function product($i){
    $n = 1;
    foreach($i as $m){
        $n *= $m;
    }
    return $n;
}
echo product(array(1,3,5,7,9)) . "\n";

// Q4
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
    //どうしたらいいかわからない・・・・
            if($max_number < $a){
                $max_number = $a;
            }
     }
     return $max_number;
}
echo max_array(array(1,10,5,7,9)) . "\n";

// Q5

// html,phpタグを取り除く
$n = '<p><a href="https://tech-boost.jp/students/assignments/new">課題提出はこちらから(クリックすると提出画面に飛びます)</a></p>';
echo strip_tags($n) . "\n";

// 配列に値を追加
$fruits = [
    "リンゴ",
    "キウイ",
    "パイナップル",
    "みかん",
    "アボカド"
];
array_push($fruits,"もも","ぶどう");
var_dump($fruits);

// 配列を結合
$fruits = array_merge($fruits,array("チェリー","アセロラ"));
var_dump($fruits);


// 現在の日付を取得して整形する
echo date("Y年/n月/d日 H時i分\n",time());

// クリスマスの日付を取得して整形する
echo date("Y年/n月/d日 H時i分\n",mktime(0,0,0,12,25,2021));