<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>sms_exam_app</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .top-bar {
            background: #0b5d1e;
            color: white;
            padding: 8px 5%;
            text-align: right;
            font-size: 14px;
        }

        .header {
            background: white;
            padding: 18px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0,0,0,0.15);
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #0b5d1e;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 22px;
        }

        .university-name {
            color: #0b5d1e;
        }

        .university-name h1 {
            margin: 0;
            font-size: 25px;
        }

        .university-name p {
            margin: 5px 0 0;
            color: #555;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 11px 22px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .login {
            background: #0b5d1e;
            color: white;
        }

        .register {
            background: #f2b705;
            color: #111;
        }

        .hero {
            min-height: 500px;
            background: linear-gradient(
                rgba(0, 70, 20, 0.75),
                rgba(0, 70, 20, 0.75)
            ),
            url('https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1600&q=80');

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content {
            max-width: 850px;
            padding: 30px;
        }

        .hero h2 {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 20px;
            line-height: 1.6;
        }

        .hero-button {
            display: inline-block;
            margin-top: 20px;
            padding: 13px 28px;
            background: #f2b705;
            color: #111;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .section {
            padding: 50px 8%;
            text-align: center;
            background: white;
        }

        .section h2 {
            color: #0b5d1e;
            margin-bottom: 15px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .card {
            width: 280px;
            padding: 25px;
            background: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
        }

        .card h3 {
            color: #0b5d1e;
        }

        .footer {
            background: #0b5d1e;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 700px) {
            .header {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .hero h2 {
                font-size: 32px;
            }

            .buttons {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        University of Dodoma
    </div>

    <!-- Header -->
    <header class="header">

        <div class="logo-section">

            <div class="logo">
                UDOM
            </div>

            <div class="university-name">
                <h1>THE UNIVERSITY OF DODOMA</h1>
                <p>sms_exam_app</p>
            </div>

        </div>

        <!-- Login and Register -->
        <div class="buttons">

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="btn login">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="btn login">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="btn register">
                            Register
                        </a>
                    @endif
                @endauth
            @endif

        </div>

    </header>


    <!-- Hero Section -->
    <section class="hero">

        <div class="hero-content">

            <h2>Welcome to sms_exam_app</h2>

            <p>
                A modern platform designed to make student registration,
                student information management and academic administration
                easier and more efficient.
            </p>

            @guest
                <a href="{{ route('register') }}"
                   class="hero-button">
                    Get Started
                </a>
            @else
                <a href="{{ route('students.index') }}"
                   class="hero-button">
                    Student Management
                </a>
            @endguest

        </div>

    </section>


    <!-- About Section -->
    <section class="section">

        <h2>sms_exam_app</h2>

        <p>
            This system provides a simple and secure way to manage
            student information and registration.
        </p>

        <div class="cards">

            <div class="card">
                <h3>Student Registration</h3>
                <p>
                    Register and store student information
                    in the system.
                </p>
            </div>

            <div class="card">
                <h3>Student Records</h3>
                <p>
                    View and manage registered student
                    information easily.
                </p>
            </div>

            <div class="card">
                <h3>Secure Access</h3>
                <p>
                    Login authentication helps protect
                    student information.
                </p>
            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer class="footer">

        <p>
            © {{ date('Y') }} The University of Dodoma
        </p>

        <p>
            sms_exam_app
        </p>

    </footer>

</body>
</html>

