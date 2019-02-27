<?php
session_start();
if(session_destroy())
{
//header("location: index.html");
    echo "<script>alert('Terima Kasih telah memesan di READY E-ticketing!');window.open('index.html','_self');</script>";
}
?>