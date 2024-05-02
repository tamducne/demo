
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tam Duc hehe</title>
</head>
<body>
<?php
//biến được khai báo như thế này
$fullname = "Le Dinh Tam Duc";
//Đây dùng in ra màn hình
// echo "Hello <br> <h1> World ne ne ne ne </h1>,";
// echo "Xin chao, {$fullname}";
// nháy đôi mới hiểu, nháy đơn hiểu theo chuỗi kh hiểu biến
echo "Xin chao,".$fullname;
$a = 10;
$b = 20;
echo $a + $b;
$is_login = true;
if ($is_login == true) {
echo "Login Success <br>";

}else {
    echo "Ban chua dang nhap <br>";
}






function total_odd($n){
$sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        if($i % 2 != 0){
        $sum = $sum + $i;
    
        }
    }
    return $sum;
}

echo total_odd(3)."<br>"; 
echo total_odd(100)."<br>";
echo total_odd(1000)."<br>";
//xuất dữ liệu mảng
$students = array('Cường', 'Hằng');
print_r($students);


?>
<form action="login.php"  method ="GET">
    Username:<br> <input type="text" name="username"> <br>
    Password:<br> <input type="password" name= "password"> <br>
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>