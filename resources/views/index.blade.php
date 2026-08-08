<!DOCTYPE html>
<html>
<head>
    <title>Student Registration System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>

    <div class="container">

        <h1 style="
            margin-top: 5px;
            margin-bottom: 10%;
            ">
            Student Login/Register
        </h1>

        <div class="action">
             @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="btn"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="btn"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="btn"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>

    </div>

</body>
</html>