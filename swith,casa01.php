<!DOCTYPE html>
<html>
<body>

<?php
$age = 48;

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
?>


</body>
</html>
