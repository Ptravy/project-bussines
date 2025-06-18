<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
      .registrasi {
  max-width: 400px;
  margin: 50px auto;
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: #f9f9f9;
}

    </style>
</head>
<body>
     <div class="text-center mt-5">
    <h2>Login Aplikasi</h2>
    <p>Silahkan Login Terlebih Dahulu.</p>

    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body text-start">
             @if(session('gagal'))
                <p class="text-danger">{{session('gagal')}}</p>
            @endif
            <form action="{{ route('login.submit') }}" method="POST">
              @csrf
              <label>Alamat Email</label>
              <input type="text" name="email" class="form-control mb-2">
              <label>Password</label>
              <input type="password" name="password" class="form-control mb-2">
              <button class="btn btn-primary">Submit</button>
              <button class="btn btn-warning">Back</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>