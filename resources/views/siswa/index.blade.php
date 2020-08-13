<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AS</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.min.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <!--::header part start::-->
   
  <title>Siswa Yang Daftar Pramuka</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>Siswa Yang Daftar Pramuka</h1>
    </div>
    <div class="col-6">
  <a href="/" class="btn btn-primary" style="margin-left: 290px;">kembali ke menu</a>
  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
    Daftar Pramuka
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DAFTAR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/siswa/create" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
    <label for="exampleInputEmail1">nisn</label>
    <input name="nisn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nisn">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">nama siswa</label>
    <input name="nama_siswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama siswa">
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
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">asal sekolah</label>
    <input name="asal_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="asal sekolah">
  </div>
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
  </div>
  
      
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>
    </div>
<table class="table" table="hover">
  <tr>
    <th>Nisn</th>
    <th>Nama Siswa</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Asal sekolah</th>
    <th>Jurusan</th>
  </tr>
  @foreach($data_siswa as $siswa)
  <tr>
    <td>{{$siswa->nisn}}</td>
    <td>{{$siswa->nama_siswa}}</td>
    <td>{{$siswa->jenis_kelamin}}</td>
    <td>{{$siswa->alamat}}</td>
    <td>{{$siswa->asal_sekolah}}</td>
    <td>{{$siswa->jurusan}}</td>
  </tr>
  @endforeach
</table>
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
    
 
  <script type="text/javascript" src="{{ asset('/js/jquery-1.12.1.min.js') }}"></script>
  <!-- popper js -->
  <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
  <!-- easing js -->
  <script type="text/javascript" src="{{ asset('/js/jquery.magnific-popup.js') }}"></script>
  <!-- swiper js -->
  <script type="text/javascript" src="{{ asset('/js/swiper.min.js') }}"></script>
  <!-- swiper js -->
  <script type="text/javascript" src="{{ asset('/js/masonry.pkgd.js') }}"></script>
  <!-- particles js -->
  <script type="text/javascript" src="{{ asset('/js/owl-carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
  <!-- slick js -->
  <script type="text/javascript" src="{{ asset('/js/slick.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/waypoints.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/contact.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/ajaxchimp.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/jquery.form.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/validate.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/mail-script.js') }}"></script>
  <!-- custom js -->
  <script type="text/javascript" src="{{ asset('/js/custom.js') }}"></script>
</body>

</html>