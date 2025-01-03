<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Register & Login</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @include('partials.header')
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <button type="submit">Register</button>
        </form>
        <div class="link">
            <p>Already have an account? <a href="#login">Login here</a></p>
        </div>
    </div>

    <!-- Login Section -->
    <div class="container" style="margin-top: 20px;">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email_login">Email:</label>
            <input type="email" name="email" id="email_login" required>

            <label for="password_login">Password:</label>
            <input type="password" name="password" id="password_login" required>

            <button type="submit">Login</button>
        </form>
        <div class="link">
            <p>Don't have an account? <a href="#register">Register here</a></p>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>