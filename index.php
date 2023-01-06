<?php
    $x = 20;

    $menu = [
            "lẩu tứ xuyên",
            "Vịt quay",
            "Bò bit tết"
    ];
    $title = "Home";
?>

// Có thể chèn code php vào html -> thông dụng khi làm wed

<!doctype html>
<html lang="en">
<head>
    <?php include ("head.php"); ?>
</head>
<body>
    <h1>Hello world!</h1>
    <h2>Số lượng sinh viên: <?php echo 20 + 5; ?> // chỗ này viết được code php </h2>

    // kết hợp if else vs html
    <?php
        if($x >= 20): ?>
            <h3> Lớp đông <?php echo $x; ?> </h3>
            <h3> Lớp đông</h3>
            <h3> Lớp đông</h3>
        <?php else : ?>
            <h3> Lớp vắng <?php echo $x; ?></h3>
            <h3> Lớp vắng</h3>
            <h3> Lớp vắng</h3>
        <?php endif ?>

    // vòng lặp foreach
    <h2>Danh sách món ăn:</h2>
    <ul>
        <?php foreach ($menu as $item): ?>
            <li><?php echo $item; ?></li>
        <?php endforeach; ?>
    </ul>

    //
        <?php include ("footer.php"); ?>

</body>
</html>