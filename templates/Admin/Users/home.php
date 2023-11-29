<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Custom styles -->
    <style>
        body {
            padding-top: 56px;
            background-image: url('a.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        @media (min-width: 768px) {
            body {
                padding-top: 70px;
            }
        }

        .jumbotron {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            margin-top: 15vh;
        }

        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .jumbotron hr {
            border-top: 1px solid #fff;
            width: 50%;
            margin: 30px auto;
        }

        .jumbotron a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
            border: 2px solid #fff;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .jumbotron a:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>

<body>

    <!-- Main Content Section -->
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to the Admin Dashboard</h1>
            <p class="lead">This is a stylish admin home page for your blog website.</p>
            <hr class="my-4">
            <p>Explore the navigation links to manage blogs and users.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
