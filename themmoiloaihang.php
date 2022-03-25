
<?php
if(isset($_POST["submit"])){
    $maloai = $_POST["Maloai"];
    $tenloai = $_POST["Tenloai"];

    $sql = "insert into Loaihang values('$maloai','$tenloai')";
    mysqli_query($con, $sql);
    header('location:index.php?page=loaihang');
}

?>

<form action="post">
<table>
    <tr>
        <td>Mã loại</td>
        <td><input type="text" name="Maloai"></td>
    </tr>
    <tr>
        <td>Tên loại</td>
        <td><input type="text" name="Tenloai"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Thêm mới">
        <input type="button"  value="Hủy" onclick="window.location = 'index.php?page=loaihang';">
    </td>
    </tr>
</table>

</form>
