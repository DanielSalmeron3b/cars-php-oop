<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Car Sale</title>
</head>

<body>
    <h1>Available Cars</h1>
    </header>
    <section>
        <article>

            <?php

            //Including the class file
            function __autoload($classname)
            {
                include_once("class/" . $classname . ".class.php");
            }

            // Creation of the objects for every type of car.
            $car_array[0] = new car("Peugeot", "307", "Gris", "img/peugeot.jpg");
            $car_array[1] = new car("Renault", "Clio", "Marron", "img/renaultclio.jpg");
            $car_array[2] = new car("BMW", "Serie6", "Azul", "img/bmwserie6.jpg");

            // This call will show the default values in the arguments of the
            // construct method
            $car_array[3] = new car();

            // Showing the table with the cars that are available
            for ($i = 0; $i < count($car_array); $i++) {
                $car_array[$i]->show();
            }

            ?>
        </article>
    </section>
</body>

</html>