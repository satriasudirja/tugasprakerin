<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    body{
      background-image: url(img/bg-login.jpg);
    }
	
	form {
  border: 3px solid #f1f1f1;
  background-color: #f3f3f3;
  opacity:0.8;
  width: 50%;
  margin-left: 300px;
  margin-top: 100px;
  padding: 30px;
}

input[type=email], input[type=password] {
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
    <form action="/postlogin" method="POST">
    {{csrf_field()}}        
    <label for="email"><b>Email</b></label>
    <input type="email"  placeholder="Masukkan Username E-mail anda" name="email">

    <label for="password"><b>Password</b></label>
    <input type="password"  placeholder="Masukkan Password E-mail anda" name="password">

  <button type="submit" name="login"> LOGIN</button>
  </div>
</div>
  </form>
    
  