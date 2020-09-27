
//string concatanation in form

<?php
require_once './User.php';
use App\classes\User;
$result='';
if(isset($_POST['btn'])){
    $user=new User();
    $result=$user->makeFullName();
}

?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="firstName"> </td>
        </tr>
        <tr>
            <th>last Name</th>
            <td><input type="text" name="lastName"></td>
        </tr>
        <tr>
            <th>FullName</th>
            <td><input type="text" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"> </td>
        </tr>
    </table>
</form>




