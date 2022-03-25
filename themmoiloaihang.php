
<?php
if(isset($_POST["submit"])){
    $maloai = $_POST["txtmaloai"];
    $tenloai = $_POST["txttenloai"];

    $sql = "insert into LoaiHang values('$maloai','$tenloai')";
    mysqli_query($con, $sql);
    header('location:index.php?page=loaihang');
}
?>

<form method="post">
<table>
    <tr>
        <td>Mã loại</td>
        <td><input type="text" name="txtmaloai"></td>
    </tr>
    <tr>
        <td>Tên loại</td>
        <td><input type="text" name="txttenloai"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Thêm mới" name="submit">
        <input type="button"  value="Hủy" onclick="window.location = 'index.php?page=loaihang';">
    </td>
    </tr>
</table>

</form>
