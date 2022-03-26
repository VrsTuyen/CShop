<script>
    function Themmoi() {
        window.location = "index.php?page=themmoiloaihang";
    }

</script>

<table border="1" cellpadding="10" cellspacing="10" align="center">
    <caption>Cập nhật loại hàng</caption>
    <tr>
        <th>Thứ tự</th>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th>Sủa</th>
        <th>Xóa</th>
    </tr>
    <tr>
        <td collspan="6">
            <input type="button" value="Thêm Mới" onclick="Themmoi()">
        </td>
    </tr>
    <?php
    $sql = "select * from Loaihang";
    $i = 1;
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $row["Maloai"] . "</td>";
        echo "<td>" . $row["Tenloai"] . "</td>";
        echo "<td> <a href='index.php?page=sualoaihang&maloai=" . $row["Maloai"] . "'> Sửa </a> </td>";
        echo "<td> <a href='index.php?page=xoaloaihang?maloai=" .$row["Maloai"]. "' onclick = 'confirm()'>  Xóa </a> </td>";
        echo "</tr>";
        $i++;
    }
    ?>
</table>