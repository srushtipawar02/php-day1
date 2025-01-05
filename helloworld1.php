
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//this is a single line comment
//echo "Hello World!";
echo "hellow world";
echo "this is comment example";
$name ="srushti";
$age =27;
$time =14.45;
$class =true;
//compound type
$student_arr =array("raj","punit","rihaan");//arrays

class student{
    public $marks;
}
$stud =new student();
$stud->marks =90;

//special types
$null_var =null;

echo "<br> string:",$name;
echo"<br> integer:",$age;
echo"<br> float:",$time;
echo"<br> boolean:",$class;

//echo"object:",$stud:
echo"<br> null:",$null_var;
/*this is multiline comments
developed for php session */
?>
</body>
</html>