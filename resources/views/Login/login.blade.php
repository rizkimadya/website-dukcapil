<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    @include('sweetalert::alert')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-2">
                    <div class="card px-5 py-4 border-0">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="d-block mx-auto" width="200px">
                        <p class="text-center fs-3 fw-semibold mb-5 mt-2 title">Login</p>
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if (session('wait'))
                            <p class="alert alert-danger">{{ session('wait') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach 
                        @endif
                        <form action="{{ route('login.action') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Email</label>
                                <input type="text" name="username" id="username"
                                    class="py-3 ps-4 form-control"
                                    placeholder="Masukkan Email anda">
                            </div>
                            <label for="pass" class="form-label">Password</label>
                            <div class="input-group mb-3">
                                <input type="password" name="password" id="pass"
                                    class="py-3 ps-4 form-control" placeholder="Masukkan Password"> <span
                                    id="mybutton" onclick="lihat()" class="input-group-text" style="cursor:pointer;">
                                    <i class="bi bi-eye-fill"></i>
                                </span>
                            </div>
                            <div class="text-end mb-4">
                                <a href="{{ route('register') }}">Registrasi</a>
                            </div>
                            <button class="btn px-4 py-md-3 py-2 btn-cyan w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // membuat fungsi lihat
        function lihat() {

            // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
            var x = document.getElementById('pass').type;

            //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
            if (x == 'password') {

                //ubah form input password menjadi text
                document.getElementById('pass').type = 'text';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton').innerHTML = `<i class="bi bi-eye-slash-fill"></i>`;
            } else {

                //ubah form input password menjadi text
                document.getElementById('pass').type = 'password';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton').innerHTML = `<i class="bi bi-eye-fill"></i>`;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
