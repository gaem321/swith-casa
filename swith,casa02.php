<!DOCTYPE html>
<html>
<body>

<hr>

<h2>ตรวจสอบจำนวนวันในเดือน</h2>
<form method="post">
    เดือน: <input type="text" name="month" required>
    <input type="submit" name="check_month" value="ตกลง">
</form>

<?php
if (isset($_POST['check_month'])) {

    $month = trim($_POST['month']);
    $month = mb_strtolower($month, 'UTF-8'); 

    switch ($month) {
        case "มกราคม":
        case "มีนาคม":
        case "พฤษภาคม":
        case "กรกฎาคม":
        case "สิงหาคม":
        case "ตุลาคม":
        case "ธันวาคม":
            echo "เดือน $month มี 31 วัน";
            break;
        case "เมษายน":
        case "มิถุนายน":
        case "กันยายน":
        case "พฤศจิกายน":
            echo "เดือน $month มี 30 วัน";
            break;
        case "กุมภาพันธ์":
            echo "เดือน $month มี 28 หรือ 29 วัน";
            break;
        default:
            echo "ไม่พบข้อมูลเดือนที่คุณกรอก กรุณาพิมพ์ชื่อเดือนให้ถูกต้อง";
    }
}
?>

</body>
</html>
