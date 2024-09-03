<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
  <link rel="stylesheet" href="{{asset('asset/bootstrap/js/bootstrap.min.js')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <div  class="container-fluid vh-100">
    <div class="row h-100">
        <!-- Bagian Kiri: Logo -->
        <div style="background: linear-gradient(to bottom left, #2E073F, #7A1CAC)" class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="{{asset('storage/image/lgnbg.png')}}"  alt="Logo" class="img-fluid w-50">
        </div>

        <!-- Bagian Kanan: Form Login -->
        <div style=" background: linear-gradient(to bottom right, #2E073F, #7A1CAC)" class="col-md-6 d-flex justify-content-center  align-items-center">
            <div class="login-container">
                <h2 class="fw-bold">LOGIN</h2>
                <form method="post" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary fw-bold">Login</button>
                </form>
                <h6 class="mt-3" style="color: rgb(255, 255, 255)">Belum punya akun? <a type="button" data-bs-toggle="modal" data-bs-target="#formModal" style="color: white" href="">Sig up</a></h6>
                <!-- Button trigger modal -->
             
            
                <!-- The Modal -->
                <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header" style="background-color: #7A1CAC">
                                <h5 class="modal-title" style="color:white" id="formModalLabel">Register</h5>
                            </div>
                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form action="/reg" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" style="color: black" class="form-label">Name</label>
                                        <input type="text" style="border-bottom: 1px solid #7A1CAC " class="form-control" id="name" placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" style="color: black" class="form-label">Email</label>
                                        <input type="email" style="border-bottom: 1px solid #7A1CAC " class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" style="color: black" class="form-label">Password</label>
                                        <input type="password" style="border-bottom: 1px solid #7A1CAC " class="form-control" id="password" placeholder="Enter your password">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </form>
                            </div>
                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn" style="background-color: #7A1CAC; color:white" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blur Background -->
                <div class="blur-background"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>