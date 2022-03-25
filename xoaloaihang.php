<?php
$maloai = $_GET["Maloai"];
$sql = "delete from LoaiHang where Maloai = '$maloai'";
mysqli_query($con,$sql);
header("location:index.php?page=loaihang");
?>