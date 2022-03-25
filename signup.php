<script>
    function back_index() {
        window.location = "index.php?page=home";
    }
</script>
<form method="post">
    <table>
        <caption>Đăng Ký Thành Viên</caption>
        <tr>
            <td>
                Tên Đăng Nhập
            </td>
            <td><input type="text" name="tendn"></td>
        </tr>
        <tr>
            <td>Mật Khẩu</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Đăng Ký" name="submit"> </td>
            <td> <input type="button" value="Hủy" onclick= "back_index()" > </td>
        </tr>
        <tr>
            <td>
                <P id="c">
            </td>
        </tr>
    </table>

</form>
<!-- <?php

if (isset($_POST["submit"])) {
    $ten = $_POST["tendn"];
    $pass = $_POST["pass"];
    $sql = "select * from Account where Username = '$ten'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) { ?>
        <script type="text/javascript">
            document.getElementsById("c")[0].innerHTML = "Tài khoản đã tồn tại";
        </script>
<?php  }

 else {
        $sql = "insert into Account values('$ten','$pass')";
        mysqli_query($con, $sql);
        $_SESSION["user"] = $ten;
        $_SESSION["pass"] = $pass;

        header("location:index.php?page=home");
    }
}

?> -->