<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SSS Contribution Archiving System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('/images/dark.gif');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .auth-container {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            text-align: center;
            max-width: 400px;
        }

        .auth-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }

        .auth-button {
            padding: 1rem 2rem;
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            text-align: center;
            transition: background-color 0.3s ease;
            cursor: pointer;
            display: block;
            margin: 1rem auto;
        }

        .auth-button:hover {
            background-color: #1c4ab9;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <img src="{{ url('/images/ui-sam-removebg-preview.png') }}" alt="Logo" class="auth-image" />
        @auth
            <button href="{{ url('/dashboard') }}" class="auth-button">Dashboard</button>
        @else
            <a href="{{ route('login') }}" class="auth-button">Staff</a>
            @if (Route::has('register'))
                <a type="button" data-toggle="modal" data-target="#myModal" class="auth-button">Admin</a>
            @endif
        @endauth

        <div class="modal fade" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login or Register</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-success">Register</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
