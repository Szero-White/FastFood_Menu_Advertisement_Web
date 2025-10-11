<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = "";
            $query = "";
        }
        if($tam=='quanlydanhmucsp' && $query=="them"){
            include("modules/quanlydanhmuc/them.php");
            include("modules/quanlydanhmuc/lietke.php");
        }
        else if($tam=='quanlydanhmucsp' && $query=="sua"){
            include("modules/quanlydanhmuc/sua.php");
        }
        else if($tam=='quanlymonan' && $query=="them"){
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/lietke.php");
        }
        else if($tam=='quanlymonan' && $query=="sua"){
            include("modules/quanlysp/sua.php");
        }
        else if($tam=='quanlydanhmucbaiviet' && $query=="them"){
            include("modules/quanlydanhmucbaiviet/them.php");
            include("modules/quanlydanhmucbaiviet/lietke.php");
        }
        else if($tam=='quanlydanhmucbaiviet' && $query=="sua"){
            include("modules/quanlydanhmucbaiviet/sua.php");
        }
        else if($tam=='quanlybaiviet' && $query=="them"){
            include("modules/quanlybaiviet/them.php");
            include("modules/quanlybaiviet/lietke.php");
        }
        else if($tam=='quanlybaiviet' && $query=="sua"){
            include("modules/quanlybaiviet/sua.php");
        }
        else if($tam=='quanlyweb' && $query=="capnhat"){
            include("modules/thongtinweb/quanly.php");
        }

        else{
            include("modules/dashboard.php");
        }
    ?>
</div>  