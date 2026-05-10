<?php
// mulai session login sebagai admin
session_start();
 
// untuk menyimpan pesan error
$form_error = '';
 
// cek apakah tombol submit sudah di klik atau belum
if(isset($_POST['submit'])){
 
    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // validasi login benar atau salah
    if($username == 'seafood@gmail.com' AND $password == 'seafoodbarbar2'){
 
        // diarahkan ke home seafood barbar
        $_SESSION['username'] = $username;
        header('Location: indexprojek.html');
    }else{
 
        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password atau Username yang anda masukkan salah</p>';
    }
}
 
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylehome.css">
	<title>BARBAR SEAFOOD-Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body >
    <div class="container">

	
		 <header>
           <div class="logo">
                <p>BARBAR SEAFOOD</p>
           </div>
       </header>
       <nav>
            <ul>
                <li><a href="homepage.html">Back</a></li>
            
                
			</ul>
        </nav>

		<div>
 
    <div class="loginbox">  
    <img src="logologin.png" class="loginlogo">
    <form action ="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Masukkan Username Admin anda">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Masukkan Password">


    <?php echo $form_error; ?>

    <input type="submit" name="submit" id="btn" value="Login">
  </div>
  </form>
  <p> *note buat tester* <br>username: seafood@gmail.com <br> password: seafoodbarbar2</p>
</div>

	


	   
    </div>

</body>
</html>
		  