<?php

//hello world print
//echo 'Hello World';

//HTML In PHP
/*
echo'<html>';
echo'<head>';
echo'<title>Home</title>';
echo '</head>';
echo'<body>';
echo '<h1>This is Heading</h1>';
echo '</body>';
echo'</html>';
*/

//PHP in HTML
/*
<html>
<head>
    <title><?php echo 'Tittle';?></title>
</head>
<body>
<h1><?php echo 'This is Heading';?></h1>
</body>
</html>
*/

//variable
/*
//concatanation
$firstName='John';
$lastName='Doe';
$fullName = $firstName. ' ' .$lastName;
echo $fullName;
*/
/*
$a=10;
$b=10;
$c=$a+$b;
echo 'Total Value ='.$c ;
*/

//Increment & Decrement
/*
$x=10;
echo $x++;
echo '</br>';  //output 10,11
echo  $x;

$x=10;
echo ++$x;
echo '</br>';  //output 11,11
echo  $x;


$x=10;
echo $x--;
echo '</br>';  //output 10,9
echo  $x;

$x=10;
echo --$x;
echo '</br>';  //output 9,9
echo  $x;
*/


//conditional statement
//if-else
/*
$x=10;
$y=12;
if($x>$y){
    $z=$x+$y;
    echo $z;
}
else{
    echo 'Hello World';
}
*/

//switch-case
/*
$x=10;
$y=20;
switch ($y){
    case 10:
        echo 'Hello';
        break;
    case 20:
        echo 'Good Bye ';
        break;
    default:
        echo 'No message ';
}
*/


//LOOP
//for loop
/*
for($i=0;$i<=10;$i++){
    echo 'Hello '.'</br>';
}

//while loop
$i=0;
while($i<=10){
    echo 'Hello';
    $i++;
}

//do-while loop
$i=1;
do{
    echo 'Hello';
    $i++;
}
while($i<=10);
*/



//Arrays
/*
$data=Array();
$data[0]=10;
$data[1]=20; //numeric index
$data[2]=30;
echo $data[0];

$data['name']='rahim';
$data['email']='info@gmail.com';  //associative index
echo $data['name'];
*/

/*
$data=[10,20,'Rahim','Karim'];
foreach ($data as $value){    //foreachloop
    echo $value.'</br>' ;
}
*/

//Multidimensional Array
/*
$students=[
    '0'=>[
        'name'=>'Rahim',
        'email'=>'info@gmail.com',
        'mobile'=>'01881868586'
    ],
    '1'=>[
        'name'=>'Karim',
        'email'=>'karim@gmail.com',
        'mobile'=>'0189654123'
    ]
];
foreach($students as $student ){
    echo $student['name'].''.$student['email'].''.$student['mobile'].'</br>';
}
*/

//Functions
/*
function test(){
    echo 'Hello Test';
}
test();
*/
/*
function add($x,$y){
    $z=$x+$y;
    return $z;
}
$addition=add(10,10);
echo $addition;
*/
?>

