<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel Application">
    <meta name="keywords" content="Laravel, Login, Register, Authentication">

    <title>Task Manager App</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        
        /* Centering container */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        
        /* Card layout for login/register */
        .auth-card {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .auth-card h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .auth-card p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 40px;
        }

        .auth-btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .auth-btn:hover {
            background-color: #2980b9;
        }

        .auth-btn:active {
            background-color: #1abc9c;
        }

        .auth-links {
            font-size: 0.9rem;
            margin-top: 20px;
        }

        .auth-links a {
            color: #3498db;
            text-decoration: none;
            margin-left: 10px;
        }

        .auth-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-card">
            <h1>Welcome To My SiteWeb</h1>
            <p>Task Management App</p>
            
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="auth-btn">Go to Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="auth-btn">Log In</a>
                        @if (Route::has('register'))
                            <div class="auth-links">
                                <span>Don't have an account?</span>
                                <a href="{{ route('register') }}">Sign Up</a>
                            </div>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>
</html>
