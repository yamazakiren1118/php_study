<?php

// Q1
function name_check($i){
    $name = '山崎 蓮';
    if($name == $i):
        echo "わたしは${name}です\n";
    else:
        echo "${name}ではありません\n";
    endif;
}
name_check("山崎 蓮");

// Q2
function total_add(){
    $total = 0;
    for($i = 1; $i <= 10000; $i++):
        $total += $i;
    endfor;
    echo $total . "\n";
}
total_add();

// Q3
$fruits = [
    "リンゴ",
    "キウイ",
    "パイナップル",
    "みかん",
    "アボカド"
];
foreach($fruits as $i):
    echo $i . "\n";
endforeach;

// Q4
function fives_all(){
    /* for文の始めの値を定義する */
    $start = 1;
    /* for文の終わりの値を定義する */
    $end = 100;

    for($i = $start; $i <= $end; $i++){

        // 5で割り切れたら{}内を実行する
        if($i % 5 == 0){
            echo $i . "\n";
        }
    }
}
fives_all();