<?php
    include('../../config/config.php');

    $tensanpham = $_POST['tensanpham'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $soluong = $_POST['soluong'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];

    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;

    $thutu = $_POST['thutu'];
    $danhmuc = $_POST['danhmuc'];
  
    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,tomtat,noidung,hinhanh,thutu,id_danhmuc) 
            VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$tomtat."','".$noidung."','".$hinhanh."','".$thutu."','".$danhmuc."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlymonan&query=them');
    }
    elseif(isset($_POST['suasanpham'])){
        if(isset($_FILES['hinhanh']) && $_FILES['hinhanh']['size'] > 0){
            $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
            $hinhanh = $_FILES['hinhanh']['name'];
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while ($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        }
    
        $sql_update = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."', masp = '".$masp."', giasp = '".$giasp."', soluong = '".$soluong."', tomtat = '".$tomtat."', noidung = '".$noidung."', thutu = '".$thutu."', id_danhmuc = '".$danhmuc."'";
        if(isset($_FILES['hinhanh']) && $_FILES['hinhanh']['size'] > 0){
            $sql_update .= ", hinhanh = '".$hinhanh."'";
        }
    
        $sql_update .= " WHERE id_sanpham = '$_GET[idsanpham]'";
    
        mysqli_query($mysqli,$sql_update);

        header('Location:../../index.php?action=quanlymonan&query=them');
    }
    
    else{
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' limit 1";
        $query = mysqli_query($mysqli,$sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham ='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlymonan&query=them');
    }
?>