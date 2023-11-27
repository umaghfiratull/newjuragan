<?php

    include "../koneksi.php";

    $sql = $db->query("insert into admin(nama,email,password) 
                        values ('$_POST[name]','$_POST[mail]','$_POST[sandi]')
                      ");

    if($sql)
        header("location:register.php");
    else
        echo "ada masalah, data gagal disimpan";

?>