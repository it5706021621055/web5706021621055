<html>
  <head>
    <meta charset="utf-8">
    <title>แสดงข้อมูล</title>
  </head>
  <body align="center">
    <?php
    $prefix = $_POST['prefix'];
    $name = $_POST['name'];
    $lastname =$_POST['lastname'];
    $id = $_POST['id'];
    $education = $_POST['education'];
    $nickname = $_POST['nickname'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phonenum = $_POST['phonenum'];
    $hobby = $_POST['hobby'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $since = $year-543;
    $mailtype =$_POST['mailtype'];

    echo "<big> ข้อมูลที่คุณกรอก </big><br><br>";
    echo "$prefix $name $lastname </br>";
    echo "ชื่อเล่น : $nickname </br>";
    echo "รหัสนักศึกษา : $id </br>";
    echo "ระดับการศึกษา : $education </br>";
    echo "เพศ : $sex </br>";
    echo "เกิดวันที่ $date เดือน  $month พ.ศ. $year (ค.ศ. $since) <br>";
    echo "อีเมลล์ : $email";
    echo "$mailtype </br>";
    echo "เบอร์โทรศัพท์ : $phonenum </br>";
    echo "งานอดิเรก : $hobby </br></br></br>";

     ?>
  </body>
</html>
