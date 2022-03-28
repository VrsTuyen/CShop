<script>
    function Themmoi() {
        window.location = "index.php?page=themmoiloaihang";
    }

    function confirmDelete(link){
        if(confirm("Bạn có chắc muốn xóa không?")){
            doAjax(link.href, "POST");
        }
        return false;
    }

</script>

<style>
table{
    background-color: red;
    height: 400px;
}
.main{
	height: max;
	width: 50%;
	text-align: center;
}
.center{
    margin: center;
}

</style>

<h1 align = "center" style= "color: blue; font-weight: 700; ">Cập nhật loại hàng</h1>


<table align="center" cellspacing="1" cellpadding= 5" class="main">
    <tr>
        <td align="center" colspan="5"> <button onclick="Themmoi()"> Thêm mới </button> </td>
    </tr>
    <tr>
        <td>Thứ tự</th>
        <td>Mã loại</td>
        <td>Tên loại</td>

    </tr>
    
    <?php
    $sql = "select * from Loaihang";
    $i = 1;
    $th = "Bạn có chắc muốn xóa";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $row["Maloai"] . "</td>";
        echo "<td>" . $row["Tenloai"] . "</td>";
        echo "<td> <a href='index.php?page=sualoaihang&maloai=" . $row["Maloai"] . "'> Sửa </a> </td>";
        echo "<td> <a href='index.php?page=xoaloaihang&maloai=" .$row["Maloai"]. "' onclick='return confirmDelete(this)'>  Xóa </a> </td>";
        // echo "<td> <a href = '#' onclick = 'return confirm()'  > Xóa </a> </td>";
        echo "</tr>";
        $i++;
    }
    ?>
    
</table>
<a href="#" onclick="return confirm('Bạn')">Xóa</a>