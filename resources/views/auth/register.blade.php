<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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
        }

        h4 {
            margin-bottom: 40px;
            color: #333;
        }

        .login-card {
            background: #fff;
            border-radius: 8px;
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
        }

        .login-card .btn {
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
        }

        .login-card .btn:hover {
            background-color: #218838;
        }

        .login-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
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
    <h4>Register</h4>
    <div class="login-card">
        <img src="{{ asset('assets/images/beach.jpg') }}" alt="Background Image">

        <div class="card-body p-5">
            <form method="POST" action="{{ route('register') }}">
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

                <!-- Name Field -->
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required>
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required>
                </div>

                <!-- Username Field -->
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
                </div>

                <!-- Password Field -->
                <div class="mb-3 password-wrapper">
                    <input type="password" name="password" class="form-control" placeholder="Password" id="passwordField" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-3 password-wrapper">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>

                <button type="submit" class="btn btn-success w-100 mb-3">Register</button>
                <div class="text-center mt-3">
                    <span>Already a member?<a href="{{ route('login') }}" class="signup-link text-success">Login</a></span>
                </div>
            </form>
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
