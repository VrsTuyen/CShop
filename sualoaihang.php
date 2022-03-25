<form action="post">
<table>
    <caption>Sửa loại hàng</caption>
    <tr>
        <td>Mã loại</td>
        <td><input type="Text" name="Maloai" readonly = "true" value="<?php echo $maloai; ?>"></td>
    </tr>
    <tr>
        <td>Tên loại</td>
        <td><input type="Text" name="Tenloai" value="<?php echo $tenloai; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Thêm mới">
        <input type="button"  value="Hủy" onclick="window.location = 'index.php?page=loaihang';">
    </td>
    </tr>
</table>

</form>

<?php
if(isset($_POST["submit"])){
    $maloai = $_POST["Maloai"];
    $tenloai = $_POST["Tenloai"];

    $sql = "select * from Loaihang where Maloai = '$maloai'";
   
   $result =  mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);

    //header('location:index.php?page=loaihang');
}

?>