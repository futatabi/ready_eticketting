<?php
if(session_status()==PHP_SESSION_NONE||session_id()==''){
    session_start();
}
                    $koneksi=mysqli_connect("localhost","root","","ka") or
                            die("gagal koneksi ke MySQL");
                    if(isset($_POST['login'])){
                        $email=mysqli_real_escape_string($koneksi,$_POST['email']);
                        $sandi=mysqli_real_escape_string($koneksi,$_POST['sandi']);
                        $sel_user="select * from penumpang where email=\"$email\" and pass=\"$sandi\"";
                        $run_user=mysqli_query($koneksi,$sel_user);
                        $cek_user=mysqli_num_rows($run_user);
                        $row=mysqli_fetch_array($run_user,MYSQLI_ASSOC);
                        
                        //if($cek_user>0){
                        if(mysqli_num_rows($run_user)==1){
                            $_SESSION['email']=$_POST['email'];
                            $_SESSION['sandi']=$_POST['pass'];
                            
                            header("location:10_pesan.php");
                            //echo "<script>window.open('10_pesan.php','_self')</script>";
                        }else{
                            echo "<script>alert('email atau password salah!');window.open('02_login.php','_self');</script>";
                        }
                        
                        }
                    ?>