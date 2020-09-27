<?php
require_once './Count.php';
use App\classes\Count;
$result='';
if(isset($_POST['btn'])){
    $count=new Count();
    $result=$count->Count();
}

?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter a String</th>
            <td> <input type="text" name="givenString"> </td>
        </tr>
        <tr>
            <th>Total Number of Word </th>
            <td><input type="text" value="<?php echo $result['totalWord'];?>">  </td>
        </tr>
        <tr>
            <th>Total Number of Charecter</th>
            <td><input type="text" value="<?php echo $result['totalCharecter'];?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"> </td>
        </tr>
    </table>
</form>

