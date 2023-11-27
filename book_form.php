<?php

    include "koneksi.php";

    $sql = $db->query("insert into book_form(nama, email, phone, address, location, guest, arrivals, leaving) 
                        values ('$_POST[name]','$_POST[mail]','$_POST[telp]','$_POST[alamat]','$_POST[tujuan]','$_POST[pengunjung]','$_POST[datang]','$_POST[pulang]')
                      ");

    if($sql)
        header("location:book.php");
    else
        echo "ada masalah, data gagal disimpan";

?>