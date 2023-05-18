<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi - SIM Inkubator Bisnis ITK</title>
    <link href="{{ asset('assets/login/css/main.css') }}" rel="stylesheet" media="all">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}"> 

</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-100 p-b-100">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">

                    {{-- <button class="btn btn-back"><i class="fa fa-eye"></i><button> --}}
                    <a href="/login" class="btn-back" title="Back"><i class="fa fa-sign-out"></i></a>
                    
                    <h2 class="title">Form Regis</h2>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-3" value="{{ old('email') }}" type="email" placeholder="Email" name="email">
                        </div>
                        @if($errors->has('email'))
                            <div class="error" style="color:white;">{{ $errors->first('email') }}</div>
                        @endif

                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" id="pass">
                            <span class="eye" onclick="show()">
                                <i class="fa fa-eye" id="hide1"></i>
                                <i class="fa fa-eye-slash" id="hide2"></i>
                            </span>
                        </div>
                        @if($errors->has('password'))
                            <div class="error" style="color:white;">{{ $errors->first('password') }}</div>
                        @endif

                        <div class="p-t-20">
                            <button class="btn btn--pill btn--submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function show() {
            var x = document.getElementById("pass");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if(x.type === 'password') {
                x.type = 'text';
                y.style.display = 'block';
                z.style.display = 'none';
            }
            else{
                x.type = 'password';
                y.style.display = 'none';
                z.style.display = 'block';
            }
        }
    </script>

</body>

</html>