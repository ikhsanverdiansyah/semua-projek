<?php

$conn = mysqli_connect('localhost', 'root', '', 'barbarseafood', 3307);

if (!$conn) {
    die ("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
}