<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="nav-bar">
        <div class="nav-brand">Student Registration Portal</div>
        <div class="nav-links">
            <a href="{{ route('login') }}">Log In</a>
            <a href="{{ route('dashboard') }}" class="crud-btn btn-read">Go to Portal</a>
        </div>
    </nav>

    <div class="container">
        <div class="hero-grid">
            
            <div class="hero-text">
                <h2>Fast & Simple Academic Registration</h2>
                <p>Register for your academic courses, manage your student profile, and access your records directly.</p>
            </div>

            <div class="card">
                <h3 style="margin-bottom: 1.5rem; font-size: 1.5rem;">New Student Registration</h3>
                
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" required placeholder="enter your full name">
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" required placeholder="student@example.com">
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" name="department" required placeholder="enter your department">
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level">
                                <option value="100">100 Level</option>
                                <option value="200">200 Level</option>
                                <option value="300">300 Level</option>
                                <option value="400">400 Level</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required placeholder="enter your password">
                    </div>

                    <button type="submit" class="btn btn-primary">Complete Registration</button>
                </form>
            </div>

        </div>
    </div>

</body>
</html>