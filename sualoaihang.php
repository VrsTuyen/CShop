
<?php
$maloai = $_GET["maloai"];

$sql = "select * from LoaiHang where Maloai = '$maloai'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);


if (isset($_POST["submit"])) {
    $maloai = $_POST["txtmaloai"];
    $tenloai = $_POST["txttenloai"];

    $sql = "update LoaiHang set Tenloai = '$tenloai' where Maloai = '$maloai'";

    $result =  mysqli_query($con, $sql);
    header('location:index.php?page=loaihang');
}

?>

<form method="post">
    <table >
        <caption>Sửa loại hàng</caption>
        <tr>
            <td>Mã loại</td>
            <td><input type="text" name="txtmaloai" readonly="True" value="<?php echo $maloai; ?>"></td>
        </tr>
        <tr>
            <td>Tên loại</td>
            <td><input type="text" name="txttenloai" value=" <?php echo $row["Tenloai"]; ?> "></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Cập Nhật">
                <input type="button" value="Hủy" onclick="window.location = 'index.php?page=loaihang';">
            </td>
        </tr>
    </table>

</form>
