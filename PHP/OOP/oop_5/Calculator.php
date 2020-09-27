<?php
require_once './Calc.php';
use App\classes\Calc;
$result='';
if(isset($_POST['btn'])){
    $cal=new Calc();
    $result=$cal->mainCalculation();
}
?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="number" name="firstNumber"></td>
        </tr>
        <tr>
            <th>Second Number</th>
            <td><input type="number" name="secondNumber"></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" value="<?php echo $result ; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">

            </td>
        </tr>
    </table>
</form>