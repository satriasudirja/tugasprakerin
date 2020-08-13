
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	
	form {
  border: 3px solid #f1f1f1;
  background-color: #f3f3f3;
  width: 50%;
  margin-left: 300px;
  margin-top: 100px;
  padding: 30px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: #000080;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;

  header{
  	text-align: center;
  	background-color: #f36a5a;
  }
}	

</style>
  <div id="test">
  <div class="container">
    <form action="" method="post">        
    <label for="username"><b>Username</b></label>
    <input type="text"  placeholder="Masukkan Username E-mail anda" name="username">

    <label for="password"><b>Password</b></label>
    <input type="password"  placeholder="Masukkan Password E-mail anda" name="password">

  <button type="submit" name="login"> LOGIN</button>
  </div>
</div>
  </form>
    
    <?php
   
   
  
   session_start();

if (isset($_POST['login'])) {
  $ambil =mysqli_query($conn, "SELECT * FROM admin WHERE username= '$_POST[username]' AND password= '$_POST[password]'");
  $cocok = $ambil->num_rows;
  if ($cocok) {
    $_SESSION['admin']=$ambil->fetch_assoc();
    

    echo  "<script>alert('login berhasil')
    window.location.href='admin/index.php'
    </script>";
  }else{
    echo "<script>alert('username/password anda salah')
    window.location.href='login.php'
    </script>";
  } 
}
  ?>