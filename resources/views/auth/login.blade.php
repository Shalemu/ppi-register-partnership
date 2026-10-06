<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Smart System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e293b, #334155);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 430px;
            border: none;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
            color: white;
            overflow: hidden;
        }

        .login-card .card-body {
            padding: 40px;
        }

        .brand-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .brand-subtitle {
            font-size: 14px;
            color: #cbd5e1;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
            border: 1px solid rgba(255,255,255,0.15);
            background: rgba(255,255,255,0.08);
            color: white;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
            border-color: #6366f1;
            background: rgba(255,255,255,0.12);
            color: white;
        }

        .form-control::placeholder {
            color: #cbd5e1;
        }

        .form-label,
        .form-check-label {
            color: #e2e8f0;
            font-size: 14px;
        }

        .btn-login {
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            border: none;
            transition: 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4);
        }

        a {
            color: #c4b5fd;
            text-decoration: none;
        }

        a:hover {
            color: white;
        }

        .alert {
            border-radius: 12px;
        }
    </style>
</head>
<body>

<div class="card login-card">
    <div class="card-body">
        <div class="text-center mb-4">
            <div class="brand-title">Welcome Back</div>
            <div class="brand-subtitle">Login to continue to your dashboard</div>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="form-control"
                    placeholder="Enter your email"
                    required
                    autofocus
                >
                @error('email')
                    <small class="text-warning">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter your password"
                    required
                >
                @error('password')
                    <small class="text-warning">{{ $message }}</small>
                @enderror
            </div>

            <!-- Remember -->
            <div class="form-check mb-3">
                <input type="checkbox" name="remember" id="remember_me" class="form-check-input">
                <label for="remember_me" class="form-check-label">
                    Remember me
                </label>
            </div>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
                <div class="mb-3 text-end">
                    <a href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                </div>
            @endif

        <button type="submit" class="btn btn-login text-white w-100">
            Log In
        </button>

        <!-- <div class="text-center mt-4">
            <span class="text-light">Don't have an account?</span>
            <a href="{{ route('register') }}" class="ms-1 fw-semibold">
                Create Account
            </a>
        </div> -->
        </form>
    </div>
</div>

</body>
</html>