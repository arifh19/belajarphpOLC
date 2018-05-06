<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form e-KTP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--  jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h2>Formulir Pendaftaran e-KTP</h2>
  </div>
  <form class="form-horizontal" action="/belajarphp/profile.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Lengkap :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" name="nama">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tempat_lahir">Tempat Lahir :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan tempat lahir Anda" name="tempat_lahir">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">Tanggal lahir :</label>
      <div class="col-sm-10">          
      <input class="form-control" id="date" name="date" placeholder="DD/MM/YYY" type="text"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="sex">Jenis Kelamin :</label>
      <div class="col-sm-10">          
      <div class="form-check radio-green">
        <input class="form-check-input" name="sex" type="radio" id="sex" value=0 checked>
        <label class="form-check-label"  for="radio1">Laki-Laki</label>
        </div>
        <div class="form-check radio-green">
        <input class="form-check-input" name="sex" type="radio" id="sex" value=1 >
        <label class="form-check-label" for="radio2">Perempuan</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat">Alamat :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="status">Status :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="status" placeholder="Masukkan status Anda" name="status">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
