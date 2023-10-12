<?php

// include './functions.php';

function check_mail($email)
{
    var_dump("enter Function");

    if (str_contains($email, "@") and str_contains($email, "@")) {
        var_dump("ok");

        $alert = [
            "color" => "success",
            "message" => "Iscrizione effettuata con successo",
        ];
    } else {
        var_dump("error");

        $alert = [
            "color" => "danger",
            "message" => "Controlla l'indirizzo inserito",
        ];
    }
    return $alert;
};

$email_adress = $_GET['email'];

if (isset($_GET['email'])) {

    var_dump("SET");
    var_dump(str_contains($email_adress, "."));
    var_dump(str_contains($email_adress, "@"));

    if (str_contains($email_adress, "@") and str_contains($email_adress, "@")) {
        var_dump("ok");

        $alert = [
            "color" => "success",
            "message" => "Iscrizione effettuata con successo",
        ];
    } else {
        var_dump("error");

        $alert = [
            "color" => "danger",
            "message" => "Controlla l'indirizzo inserito",
        ];
    }

    check_mail($email_adress);
};



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="row align-items-md-stretch">
            <div class="col">
                <div class="h-100 p-5 text-white bg-primary border rounded-3">
                    <h2>Change the background</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                        mix and match with additional component themes and more.</p>
                    <button class="btn btn-outline-primary" type="button">Example button</button>
                </div>
            </div>
        </div>

    </header>

    <main>
        <section>
            <div class="container my-3">
                <div class="row">

                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <img src="https://picsum.photos/id/684/600/400" alt="">
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ea vel atque nisi beatae illo, aliquam cupiditate, in provident praesentium sapiente iure facere magni adipisci est voluptatum consectetur quas rerum!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <img src="https://picsum.photos/id/684/600/400" alt="">
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ea vel atque nisi beatae illo, aliquam cupiditate, in provident praesentium sapiente iure facere magni adipisci est voluptatum consectetur quas rerum!</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">

                    <?php if (isset($alert)) : ?>
                        <div class="col">

                            <div class="alert alert-<?= $alert["color"] ?>" role="alert">
                                <strong>Newsletter:</strong> <?= $alert["message"] ?>
                            </div>

                        </div>


                    <?php endif ?>

                    <form action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="email" name="email" required aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>

        </section>
    </main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>