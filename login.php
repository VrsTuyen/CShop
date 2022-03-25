
<form method="post">
<table align = "center">
    <Caption>
        Đăng Nhập
    </Caption>
    <tr>
        <td>
            Tên Đăng Nhập
        </td>
        <td>
            <input type="text" name="txtusername">
        </td>
    </tr>
    <tr>
        <td>
            Mật Khẩu
        </td>
        <td>
            <input type="password" name="txtpassword">
        </td>
    </tr>
    <tr></tr>

    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Đăng Nhập">
        </td>
    </tr>
</table>
</form>
<?php
    if(isset($_POST["submit"])){
        $user = $_POST["txtusername"];
        $pass = $_POST["txtpassword"];
        $sql = "SELECT * FROM account WHERE Username = '$user' and Password = '$pass'";
        $result = mysqli_query($con, $sql);
        $rowcount = mysqli_num_rows($result);
        if($rowcount > 0){
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;
            header("location:index.php?page=home");
        }else{
            echo "Tên đăng nhập hoặc mật khẩu không đúng";
        }
    }
?>
