<?php
// code php viết tại đây
echo "Hello world";

// khai báo biến + mảng bằng $
$x = 10;
$x = "hello";

$arr = [];
$arr [0] = 15;
$arr [1] = 20;
$arr [2] = 25;
$arr[] = 19;  // <=> $arr [3] = 19;

// vòng lặp
for ($i = 0; $i < count($arr); $i++){
    // $arr[$i]
}

foreach ($arr as $a){
    // $a <=> arr[$i]
}

// ví dụ mảng
$sv = [
    "name" => "Nguyễn An", "age" => 19, "tel" => "0987654321"
];

// lấy từng phần tử  => trả về kiểu string html
echo $sv["name"]."<br/>";

// lấy all ptu (k có key : name, age...)
foreach ($sv as $s){
    echo "<h2>". $s."</h2>";
}

// lấy all ptu (Có key : name, age...)
foreach ($sv as $k => $v){
    echo "<h2>$k : $v </h2>";  // select * from
}

// echo json_encode($sv);  --> chuyển thành đối tượng

// Hàm
function tinhTong($a, $b){
    return $a + $b;
}



