<!DOCTYPE html>
<html>
<body>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<h2>ตรวจสอบช่วงอายุ</h2>
<form method="post">
    กรอกอายุ: <input type="number" name="age" required>
    <input type="submit" name="check_age" value="ตรวจสอบอายุ">
</form>

<?php
if (isset($_POST['check_age'])) {
    $age = $_POST['age'];

    switch (true) {
        case ($age > 60):
            echo "คุณอยู่ในวัยสูงอายุ";
            break;
        case ($age > 40):
            echo "คุณอยู่ในวัยกลางคน";
            break;
        case ($age > 20):
            echo "คุณอยู่ในวัยผู้ใหญ่";
            break;
        case ($age > 12):
            echo "คุณอยู่ในวัยรุ่น";
            break;
        case ($age > 6):
            echo "คุณอยู่ในวัยเด็ก";
            break;
        case ($age > 0):
            echo "คุณอยู่ในวัยทารก";
            break;
        default:
            echo "กรุณากรอกอายุให้ถูกต้อง";
    }
}
?>

</body>
</html>
