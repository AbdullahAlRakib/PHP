<?php
require_once './Number.php';
use App\classes\Number;
$result='';
if(isset($_POST['btn'])){
    $num=new Number();
    $result=$num->createSeries();
}
?>
<form action="" method="post">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="startingNumber"></td>
        </tr>
        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="endingNumber"> </td>
        </tr>
        <tr>
            <th>Result</th>
            <td><textarea rows="5" cols="40"><?php echo $result; ?></textarea> </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
