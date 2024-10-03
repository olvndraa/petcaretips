<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PetCare Tips</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #f3e6f5; /* Lilac background */
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .login-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #9b59b6; /* Darker lilac for title */
        }
        .form-label {
            color: #8e44ad; /* Lilac color for labels */
        }
        .btn-login {
            background-color: #9b59b6; /* Lilac button */
            color: white;
        }
        .btn-login:hover {
            background-color: #8e44ad; /* Darker lilac on hover */
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #9b59b6;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
        .btn-login-choice {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @if (Session::has('StatusLogin'))
    <b>{{Session::get('StatusLogin')}}</b>
    @endif
    <form action="/authentication" method="post">
    @csrf
    <div class="login-container">
        <h3 class="login-title">PETCARE TIPS</h3>
        <div class="mb-3">
            <label for="email" class="form-label">Email / No Handphone</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email or phone number" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-login w-100">
            <a href="/admin/dashboard" class="btn btn-login-choice">LOGIN</button></a>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
