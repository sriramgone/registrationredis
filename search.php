<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Cookie|Raleway:300,700,400);

        * {
            box-sizing: border-box;
            font-size: 1em;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("img/art1.jpg");
            background-size: cover;
            color: #333;
            font-size: 18px;
            font-family: 'Raleway', sans-serif;
        }

        .container {
            border-radius: 0.5em;
            box-shadow: 0 0 1em 0 rgba(51, 51, 51, 0.25);
            display: block;
            max-width: 480px;
            overflow: hidden;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            padding: 2em;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            width: 98%;
        }

        .container:after {
            background: rgba(255, 255, 255, 0.6);
            content: '';
            display: block;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
        }

        form button.submit {
            background: rgba(255, 255, 255, 0.25);
            border: 1px solid #333;
            line-height: 1em;
            padding: 0.5em 0.5em;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }

        form button:hover,

        form button.loading {
            background: #333;
            color: #fff;
            outline: none;
        }

        form label {
            border-bottom: 1px solid #333;
            display: block;
            font-size: 1.25em;
            margin-bottom: 0.5em;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }

        form label.col-one-half {
            float: left;
            width: 50%;
        }

        form label.col-one-half:nth-of-type(even) {
            border-left: 1px solid #333;
            padding-left: 0.25em;
        }

        form label input {
            background: none;
            border: none;
            line-height: 1em;
            font-weight: 300;
            padding: 0.125em 0.25em;
            width: 100%;
        }

        form label input:focus {
            outline: none;
        }

        form label input:-webkit-autofill {
            background-color: transparent !important;
        }

        form label span.label-text {
            display: block;
            font-size: 0.5em;
            font-weight: bold;
            padding-left: 0.5em;
            text-transform: uppercase;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }


        h1 {
            font-size: 3em;
            margin: 0 0 0.5em 0;
            text-align: center;
            font-family: 'Cookie', cursive;
        }

        .text-center {
            text-align: center;
        }

       

        

        

       

       
        
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: #000;">
        <a class="navbar-brand" href="#">Esperenza</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artregister.php">Register <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center">Search</h1>
        <form class="registration-form" action="searchaction.php" method="POST">
            <label class="col-one-half">
                <span class="label-text">USER Name</span>
                <input type="text" name="username" required="required">
            </label>
            <label class="col-one-half">
                <span class="label-text">User ID</span>
                <input type="password" name="userid" required="required">
            </label>
            <label>
     

            <div class="text-center">
                <button class="submit" name="search" value="submit">SEARCH</button>
            </div>
        </form>
    </div>

</body>

</html>