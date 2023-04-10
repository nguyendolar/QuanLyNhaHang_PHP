<?php
include('inc/connect.php');
//Món ăn
if(isset($_POST['addma'])){
    $ten = $_POST['ten'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $dmma  = $_POST['dmma'];
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
    $query = "INSERT INTO monan ( ten, anh, gia, mota, danhmucmonan_id) 
    VALUES ( '{$ten}', '{$image}', '{$gia}', '{$mota}', '{$dmma}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: monan.php?msg=1");
    } 
    else {
        header("Location: monan.php?msg=2");
    }
}
if(isset($_POST['editma'])){
    $ten = $_POST['ten'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $dmma  = $_POST['dmma'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `monan` 
        SET `ten`='{$ten}',`danhmucmonan_id`='{$dmma}',`gia`='{$gia}',`mota`='{$mota}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: monan.php?msg=1");
        } 
        else {
            header("Location: monan.php?msg=2");
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
        $query = "UPDATE `monan` 
        SET `ten`='{$ten}',`danhmucmonan_id`='{$dmma}',`gia`='{$gia}',`mota`='{$mota}', `anh`='{$image}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: monan.php?msg=1");
        } 
        else {
            header("Location: monan.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletema'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM monan WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: monan.php?msg=1");
    
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
//Nhân viên
if(isset($_POST['addnv'])){
    $hoten = $_POST['hoten'];
    $email  = $_POST['email'];
    $sdt = $_POST['sdt'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
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
    $query = "INSERT INTO nhanvien ( hoten, email, anh, sodienthoai, gioitinh, ngaysinh, diachi) 
    VALUES ( '{$hoten}', '{$email}', '{$image}', '{$sdt}', '{$gioitinh}', '{$ngaysinh}', '{$diachi}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: nhanvien.php?msg=1");
    } 
    else {
        header("Location: nhanvien.php?msg=2");
    }
}
if(isset($_POST['editnv'])){
    $hoten = $_POST['hoten'];
    $email  = $_POST['email'];
    $sdt = $_POST['sdt'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `nhanvien` 
        SET `hoten`='{$hoten}',`email`='{$email}',`sodienthoai`='{$sdt}',`gioitinh`='{$gioitinh}',`ngaysinh`='{$ngaysinh}', `diachi`='{$diachi}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: nhanvien.php?msg=1");
        } 
        else {
            header("Location: nhanvien.php?msg=2");
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
        $query = "UPDATE `nhanvien` 
        SET `hoten`='{$hoten}',`email`='{$email}',`sodienthoai`='{$sdt}',`gioitinh`='{$gioitinh}',`ngaysinh`='{$ngaysinh}', `diachi`='{$diachi}', `anh`='{$image}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: nhanvien.php?msg=1");
        } 
        else {
            header("Location: nhanvien.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletenv'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM nhanvien WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: nhanvien.php?msg=1");
   
}
?>
 