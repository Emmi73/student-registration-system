<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Portal') }}
        </h2>
    </x-slot>

    <hr>

    <nav class="general-nav">
        <a class="nav-items" href="home.php"> Home</a>
        <a class="nav-items" href="registeration.php">Reg. Details</a>
        <a class="nav-items" href="Course.php">Course</a>
        <a class="nav-items" href="academics.php">Academics</a>

    </nav>

    <div class="reg-container">

        <h2><center>Registration Form</center></h2><br>
        
        <hr><br>

        <form action="submit.php" method="POST">
            <label for="surname">Surname:</label>
            <input class="surname" type="text" placeholder="surname" required>

            <label for="firstname">Fisrt-name:</label>
            <input class="firstname" type="text" placeholder="first-name" required>

            <label for="middelname">Middle-name:</label>
            <input class="middelname" type="text" placeholder="optional">

            <label for="gender">Gender:</label>
            <label for="male">Male</label>
            <input type="radio" value="male" name="gender">
            <label for="Female">Female</label>
            <input type="radio" value="female" name="gender"><br>

            <label for="bday">DOB:</label>
            <input class="form-control" type="date" required>

            <label for="place">Place of Birth:</label>
            <input class="form-control" type="text" placeholder="city, state, country" required><br>

            <label for="nationality">Nationality:</label>
            <input class="form-control" type="text" placeholder="country" required>

            <label for="religion">Reigion:</label>
            <input class="form-control" type="text" required><br>

            <label for="status">Marital Status:</label>
            <select class="form-control">
                <option value="single">single</option>
                <option value="married">married</option>
            </select><br>

            <hr><br>

            <label for="Email">Email:</label>
            <input class="form-control" type="email" placeholder="first01@email.com" required><br>

            <label for="phone">Phone:</label>
            <input class="form-control" type="tel" placeholder="012-345-67890" required>

            <hr><br>

            <input type="reset">/
            <input type="submit">
        </form>

    </div>
</x-app-layout>
