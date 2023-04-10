<?php
include('inc/connect.php');
$adminid = $_SESSION['id'];
if(isset($_POST['addsp'])){
    $ten = $_POST['tensp'];
    $loaisp  = $_POST['loaisp'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO sanpham ( tensanpham, anhsanpham, loaisanpham_id, admin_id) 
    VALUES ( '{$ten}', '{$image}', '{$loaisp}', '{$adminid}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: sanpham.php?msg=1");
    } 
    else {
        header("Location: sanpham.php?msg=2");
    }
}
if(isset($_POST['editsp'])){
    $ten = $_POST['tensp'];
    $loaisp  = $_POST['loaisp'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `sanpham` 
        SET `tensanpham`='{$ten}',`loaisanpham_id`='{$loaisp}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: sanpham.php?msg=1");
        } 
        else {
            header("Location: sanpham.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `sanpham` 
        SET `tensanpham`='{$ten}',`anhsanpham`='{$image}',`loaisanpham_id`='{$loaisp}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: sanpham.php?msg=1");
        } 
        else {
            header("Location: sanpham.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletesp'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM sanpham WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: sanpham.php?msg=1");
    
}
//Đầu bếp
if(isset($_POST['adddb'])){
    $hoten = $_POST['hoten'];
    $email  = $_POST['email'];
    $sdt = $_POST['sdt'];
    $vitri = $_POST['vitri'];
    $kinhnghiem = $_POST['kinhnghiem'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO daubep ( hoten, email, anh, sodienthoai, vitri, kinhnghiem) 
    VALUES ( '{$hoten}', '{$email}', '{$image}', '{$sdt}', '{$vitri}', '{$kinhnghiem}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: daubep.php?msg=1");
    } 
    else {
        header("Location: daubep.php?msg=2");
    }
}
if(isset($_POST['editdb'])){
    $hoten = $_POST['hoten'];
    $email  = $_POST['email'];
    $sdt = $_POST['sdt'];
    $vitri = $_POST['vitri'];
    $kinhnghiem = $_POST['kinhnghiem'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `daubep` 
        SET `hoten`='{$hoten}',`email`='{$email}',`sodienthoai`='{$sdt}',`vitri`='{$vitri}',`kinhnghiem`='{$kinhnghiem}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: daubep.php?msg=1");
        } 
        else {
            header("Location: daubep.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `daubep` 
        SET `hoten`='{$hoten}',`email`='{$email}',`sodienthoai`='{$sdt}',`vitri`='{$vitri}',`kinhnghiem`='{$kinhnghiem}', `anh`='{$image}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: daubep.php?msg=1");
        } 
        else {
            header("Location: daubep.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletedb'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM daubep WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: daubep.php?msg=1");
   
}
//Danh mục món ăn
if(isset($_POST['adddm'])){
    $tendanhmuc = $_POST['tendanhmuc'];
    $query = "INSERT INTO danhmucmonan (tendanhmuc) 
    VALUES ( '{$tendanhmuc}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: danhmucmonan.php?msg=1");
    } 
    else {
        header("Location: danhmucmonan.php?msg=2");
    }
}
if(isset($_POST['editdm'])){
    $tendanhmuc = $_POST['tendanhmuc'];
    $id  = $_POST['id'];
    $query = "UPDATE `danhmucmonan` 
        SET `tendanhmuc`='{$tendanhmuc}'
        WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location: danhmucmonan.php?msg=1");
    } 
    else {
        header("Location: danhmucmonan.php?msg=2");
    }
}
if(isset($_POST['deletedm'])){
    $id  = $_POST['id'];
    $check = "SELECT * FROM monan WHERE danhmucmonan_id = '{$id}'";
    $excute = mysqli_query($connect, $check);
    $row = mysqli_num_rows($excute);
    if($row > 0)
    {
        header("Location: danhmucmonan.php?msg=2");
    }
    else
    {
        $query = "DELETE FROM danhmucmonan WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        header("Location: danhmucmonan.php?msg=1");
    }
}
//Bàn
if(isset($_POST['addb'])){
    $tenban = $_POST['tenban'];
    $query = "INSERT INTO ban (tenban) 
    VALUES ( '{$tenban}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: ban.php?msg=1");
    } 
    else {
        header("Location: ban.php?msg=2");
    }
}
if(isset($_POST['editb'])){
    $tenban = $_POST['tenban'];
    $id  = $_POST['id'];
    $query = "UPDATE `ban` 
        SET `tenban`='{$tenban}'
        WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location: ban.php?msg=1");
    } 
    else {
        header("Location: ban.php?msg=2");
    }
}
if(isset($_POST['deleteb'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM ban WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: ban.php?msg=1");
}
//
if(isset($_POST['addkh'])){
    $hoten = $_POST['hoten'];
    $sodienthoai  = $_POST['sodienthoai'];
    $email = $_POST['email'];
    $listdichvu  = $_POST['dichvu'];
    $ttdichvu = $_POST['tinhtrangdichvu'];
    $query = "INSERT INTO khachhang ( `hoten`, `sodienthoai`, `email`, `tinhtrangdichvu`, `admin_id`) 
    VALUES ( '{$hoten}', '{$sodienthoai}', '{$email}', '{$ttdichvu}', '{$adminid}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
        $check = "SELECT id FROM khachhang Order by id DESC Limit 1";
        $excute = mysqli_query($connect, $check);
        $arDvs = mysqli_fetch_array($excute);
        $khid = $arDvs['id'];
        foreach ($listdichvu as $dichvu){
            $querydv = "INSERT INTO khachhangdichvu ( `dichvu_id`, `khachhang_id`) VALUES ( '{$dichvu}', '{$khid}') ";
            $resultdv = mysqli_query($connect, $querydv);
        }
      header("Location: khachhang.php?msg=1");
    } 
    else {
        header("Location: khachhang.php?msg=2");
    }
}
if(isset($_POST['editkh'])){
    $hoten = $_POST['hoten'];
    $sodienthoai  = $_POST['sodienthoai'];
    $email = $_POST['email'];
    $listdichvu  = $_POST['dichvu'];
    $ttdichvu = $_POST['tinhtrangdichvu'];
    $id  = $_POST['id'];
    $query = "UPDATE `khachhang` 
        SET `hoten`='{$hoten}',`sodienthoai`='{$sodienthoai}',`email`='{$email}',`tinhtrangdichvu`='{$ttdichvu}'
        WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    $querykh = "DELETE FROM khachhangdichvu WHERE `khachhang_id`='{$id}'";
    $resultkh = mysqli_query($connect, $querykh);
    foreach ($listdichvu as $dichvu){
        $querydv = "INSERT INTO khachhangdichvu ( `dichvu_id`, `khachhang_id`) VALUES ( '{$dichvu}', '{$id}') ";
        $resultdv = mysqli_query($connect, $querydv);
    }
    if ($result) {
        header("Location: khachhang.php?msg=1");
    } 
    else {
        header("Location: khachhang.php?msg=2");
    }
}
if(isset($_POST['deletekh'])){
    $id  = $_POST['id'];
    $querykh = "DELETE FROM khachhangdichvu WHERE `khachhang_id`='{$id}'";
    $resultkh = mysqli_query($connect, $querykh);
    $query = "DELETE FROM khachhang WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: khachhang.php?msg=1");
}
if(isset($_POST['deletend'])){
    $id  = $_POST['id'];
    $queryxoa = "DELETE FROM binhluandanhgia WHERE `nguoidung_id`='{$id}'";
    $resultxoa = mysqli_query($connect, $queryxoa);
    $query = "DELETE FROM nguoidung WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: nguoidung.php?msg=1");
}
if(isset($_POST['deletebldg'])){
    $id  = $_POST['id'];
    $queryxoa = "DELETE FROM binhluandanhgia WHERE `traloi`='{$id}'";
    $resultxoa = mysqli_query($connect, $queryxoa);
    $query = "DELETE FROM binhluandanhgia WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: binhluandanhgia.php?msg=1");
}
if(isset($_POST['editanh'])){
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "UPDATE `anh` 
    SET `tenanh`='{$image}'
    WHERE `id`= 1";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location: anh.php?msg=1");
    } 
    else {
        header("Location: anh.php?msg=2");
    }
}
?>
 