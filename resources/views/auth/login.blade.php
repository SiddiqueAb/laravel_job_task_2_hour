<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            /* Align content vertically */
        }

        h4 {
            margin-bottom: 40px;
            /* Add spacing between the title and the card */
            color: #333;
        }

        .login-card {
            background: #fff;
            border-radius: 8px;
            /* Reduced border radius */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
        }

        .login-card img {
            width: 100%;
            height: 170px;
            object-fit: cover;
        }

        .login-card .card-body {
            padding: 25px;
        }

        .login-card .form-control {
            border-radius: 3px;
            /* Reduced input field border radius */
        }

        .login-card .btn {
            border-radius: 5px;
            /* Reduced button border radius */
            background-color: #28a745;
            color: #fff;
        }

        .login-card .btn:hover {
            background-color: #218838;
        }

        .login-card .form-check-input:checked {
            background-color: #28a745;
            /* Green color for checked checkbox */
            border-color: #28a745;
        }

        .login-card .form-check-label {
            margin-left: 5px;
        }

        .login-card .forgot-password {
            text-decoration: none;
            color: #6c757d;
        }

        .login-card .forgot-password:hover {
            text-decoration: underline;
        }

        .login-card .signup-link {
            color: #007bff;
            text-decoration: none;
        }

        .login-card .signup-link:hover {
            text-decoration: underline;
        }

        .login-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .social-buttons button {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #555;
            margin-left: 5px;
        }

        .social-buttons button:hover {
            background-color: #e9ecef;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <h4>Login #05</h4>
    <div class="login-card">
        {{-- <img src="beach.jpg" alt="Background Image"> --}}
        <img src="{{ asset('assets/images/beach.jpg') }}" alt="Background Image">

        <div class="card-body p-5">
            <div class="login-header">
                <h5 class="mb-3">Sign In</h5>
                <div class="social-buttons row">
                    <button class="me-2"><i class="fab fa-facebook-f"></i></button>
                    <button class="me-2"><i class="fab fa-twitter"></i></button>
                </div>
            </div>
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3 password-wrapper">
                    <input type="password" name="password" class="form-control" placeholder="Password"
                        id="passwordField" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>
                <button type="submit" class="btn btn-success w-100 mb-3">Sign In</button>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input mt-1" type="checkbox" id="rememberMe">
                        <label class="form-check-label text-success" for="rememberMe">Remember Me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
            </form>
            <div class="text-center mt-3">
                <span>Not a member?<a href="#" class="signup-link text-success">Sign Up</a></span>
            </div>
        </div>
    </div>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('passwordField');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            const eyeIcon = document.querySelector('.toggle-password');
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        }
    </script>
</body>

</html>
