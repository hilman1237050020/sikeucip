<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-secondary">
  <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
    <h1>Halo!!</h1>
    <div>Selamat datang di halaman @php
        $roleNames = [
          'administrator' => 'Administrator',
          'bendaharaop' => 'Bendahara Operasional',
          'bendaharadapur' => 'Bendahara Dapur',
          'pengurus' => 'Pengurus',
          'orangtua' => 'Orang Tua',
          'pimpinanpesantren' => 'Pimpinan Pesantren'
        ];
        echo $roleNames[Auth::user()->role];
      @endphp</div>
    <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
    <div class="card mt-3">
      <ul class="list-group list-group-flush">
        @if (Auth::user()->role == 'administrator')
        <li class="list-group-item">Menu Administrator</li>
        @endif

        @if (Auth::user()->role == 'bendaharaop')
        <li class="list-group-item">Menu Bendahara Operasional</li>
        @endif

        @if (Auth::user()->role == 'bendaharadapur')
        <li class="list-group-item">Menu Bendahara Dapur</li>
        @endif

        @if (Auth::user()->role == 'pengurus')
        <li class="list-group-item">Menu Pengurus</li>
        @endif

        @if (Auth::user()->role == 'orangtua')
        <li class="list-group-item">Menu Orang Tua</li>
        @endif

        @if (Auth::user()->role == 'pimpinanpesantren')
        <li class="list-group-item">Menu Pimpinan Pesantren</li>
        @endif
      </ul>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>