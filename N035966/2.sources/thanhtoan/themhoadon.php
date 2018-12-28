<?php
    include('config.php');
    $ngaynhan = $_POST['ngaynhan'];
    $ngaytra = $_POST['ngaytra'];
    $map = $_POST['map'];
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $lenh1 = 'insert khach value (NULL,"'.$hoten.'","'.$sdt.'")';
    $lenhkt = 'select mak from khach where hotenk = "'.$hoten.'" and sdt = "'.$sdt.'";'; // kiểm tra thông tin tồn tại chưa
    $kqkt = mysqli_query($conn, $lenhkt);
    // function kt(){
    //     $lenhkt = 'select mak from khach where hotenk = "'.$hoten.'" and sdt = "'.$sdt.'";' // kiểm tra thông tin tồn tại chưa
    //     $kqkt = mysqli_query($conn, $lenhkt);
    //     return 
    // }
    // function themdp($mak){
    //     $lenh2 = 'insert ttdatphong value(NULL,1,"'.$mak.'","'.$map.'","'.$ngaynhan.'","'.$ngaytra.'",NULL,NULL,NULL)';
    //     mysqli_query($conn, $lenh2);
    // }
    if(mysqli_num_rows($kqkt) > 0){ // tồn tại k cần insert
        while($rowkt = mysqli_fetch_assoc($kqkt)){
            $mak=$rowkt['mak'];
            $lenh2 = 'insert ttdatphong value(NULL,1,"'.$mak.'","'.$map.'","'.$ngaynhan.'","'.$ngaytra.'",NULL,NULL,NULL)';
            mysqli_query($conn, $lenh2);
            //themdp($mak);
            echo 'thêm thành công';
        }
    }else{ // chưa tồn tại
        mysqli_query($conn, $lenh1);
        $laymak = mysqli_query($conn,$lenhkt);
        while($rowkt = mysqli_fetch_assoc($kqkt)){
            $mak=$rowkt['mak'];
            $lenh2 = 'insert ttdatphong value(NULL,1,"'.$mak.'","'.$map.'","'.$ngaynhan.'","'.$ngaytra.'",NULL,NULL,NULL)';
            mysqli_query($conn, $lenh2);
            //themdp($mak);
            echo 'thêm thành công';
        }
    }

?>