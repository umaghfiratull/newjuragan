<?php

    $connection = mysqli_connect('localhost','root','','juragan');

    if(isset($_POST['send'])){
        $nama = $POST['name'];
        $email = $POST['mail'];
        $phone = $POST['telp'];
        $address = $POST['alamat'];
        $location = $POST['tujuan'];
        $guest = $POST['pengunjung'];
        $arrivals = $POST['datang'];
        $leaving = $POST['pulang'];

        $request = "insert into book_form(nama, email, phone, address, location, guest, arrivals, leaving) values ('$nama','$email','$phone','$address','$location','$guest','$arrivals','$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went worng try again';
    }

?>