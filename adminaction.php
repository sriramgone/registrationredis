<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>RWEBSITE</title>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Cookie|Raleway:300,700,400);



        body {
            background-image: url("img/art1.jpg");
            background-size: cover;
            color: #333;
            font-size: 18px;
            font-family: 'Raleway', sans-serif;
        }

        #card {
            margin: 50 150px;
            height: 270px;
            padding: 50px;
            font-size: 24px;
            text-align: center;
            color: #fff;
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }


        table,
        td,
        th {
            margin-left: 10px;
            border: 1px #EEEEEE;
            text-align: center;
            font-size: 18px;
            text-align: center;
            font-family: sans-serif;
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        table {
            margin: auto;
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
                <li class="nav-item">
                    <a class="nav-link" href="displayusers.php">Registrations<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="delete.php">delete</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php

   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $admin_id = $_POST['adminid'];
        $pass_word = $_POST['password'];
    }

    $adname = "admin";
    $adpass = "admin123";

    if ($admin_id == $adname && $pass_word == $adpass) {
        header("Location: displayusers.php");
        }
     else {
        echo "<br><br><br><div id='card'><br></br><p>INVALID ADMIN ID OR PASSWORD.</p><form action='admin.php' method='post'><button class='submit'>TRY AGAIN</button><br></br></form></div>";
    }

    ?>


    </div>
</body>





</html>