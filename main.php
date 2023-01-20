<!DOCTYPE html>
<html>

<body>
    <h1>แบบสอบถาม</h1>
    <form action="show.php" method="get">
        ชื่อ <input type="text" name="name"><br>
        เพศ <select name="gender">
            <option value="male"> ชาย</option>
            <option value="female"> หญิง</option>
        </select><br>
        อายุ <input type="number" name="num"><br>
        สถานะ <select name="status" id="">
            <option value="sigle">โสด</option>
            <option value="marry">แต่งงานแล้ว</option>
        </select><br>
        <input type="submit" value="ส่ง">


    </form>