<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AS</title>
    <link rel="icon" href="img/favicon.png">

<body>
    

    <!--::about_us part start::-->
    <section class="about_us section_padding">
      <div class="container">
      <div class="row align-items-center justify-content-between">
      <div class="about_us_text">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Siswa Yang Daftar Pramuka</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>Update</h1>
    </div>
    <div class="col-6">
  <div class="row">
  	  <form action="/index_admin/{{$siswa->id_siswa}}/update" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
    <label for="exampleInputEmail1">nisn</label>
    <input name="nisn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nisn" value="{{$siswa->nisn}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">nama siswa</label>
    <input name="nama_siswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama siswa" value="{{$siswa->nama_siswa}}">
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">jenis kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat" value="{{$siswa->alamat}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">asal sekolah</label>
    <input name="asal_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="asal sekolah" value="{{$siswa->asal_sekolah}}">
  <div class="form-group">
    <label for="exampleFormControlSelect1">jurusan</label>
    <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
     <option value="RPL">REKAYASA PERANGAKAT LUNAK</option>
      <option value="GEOMATIKA">GEOMATIKA</option>
      <option value="GEOTA">GEOLOGI PERTAMBANGAN</option>
      <option value="TKJ">TEKNIK KOMPUTER JARINGAN</option>
      <option value="MEKATRONIKA">MEKATRONIKA</option>
      <option value="TATA BUSANA">TATA BUSANA</option>

    
    </select>
     <button type="submit" class="btn btn-warning">Update</button>
 </form>
  </div>
  
        </div>
  </div>

  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about_us part end::-->
    
  <!--::footer_part start::-->
</body>

</html>