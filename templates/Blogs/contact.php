<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .outer {
            background-color: #f8f9fa;
            color: #495057;
            font-family: 'Arial', sans-serif;
            padding-top: 80px;
        }

        .contact-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .form-group textarea {
            resize: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="jumbotron jumbotron-fluid text-white" style="background-image: url('./img/b.jpg');height:250px; background-size: cover;">
        <div class="container">
            <h1 class="display-4">Welcome to My Blog</h1>
            <p class="lead">Explore the latest articles and stay informed.</p>
        </div>
        <?= "<h4 style='margin-left:40px;margin-top:0px;'>".$cname=$this->request->getparam("controller");"</h4>"?>
        <?= "/" ?>
        <?= $aname=$this->request->getparam("action");?>
            </div>
<div class="outer">
    <div class="container contact-container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form>
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Type your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</body>
</body>

</html>
