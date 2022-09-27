<?php
        if($_POST['register']){
          $nama   = $conn->real_escape_string($_POST['nama']);
          $email  = $conn->real_escape_string($_POST['email']);
          $user   = $conn->real_escape_string($_POST['username']);
          $pass   = $conn->real_escape_string($_POST['password']);
          $pass2  = $conn->real_escape_string($_POST['password2']);
          $tgl    = date("Y-m-d");
          if(strlen($pass) >= 5){
            if($pass == $pass2){
              $password = md5($pass);
              $insert = $conn->query("INSERT INTO user(tgl_daftar, nama, email, username, password) VALUES('$tgl', '$nama', '$email', '$user', '$password')");
              if($insert){
                echo '<div class="alert alert-success">Register berhasil, silahkan <a href="login.php">Login</a>.</div>';
              }else{
                echo '<div class="alert alert-danger">Gagal melakukan Register.</div>';
              }
            }else{
              echo '<div class="alert alert-danger">Konfirmasi password tidak sesuai.</div>';
            }
          }else{
            echo '<div class="alert alert-danger">Password minimal 5 karakter.</div>';
          }
        }
        ?>