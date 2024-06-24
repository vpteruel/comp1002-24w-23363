<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <title>Pizza Shop</title>
</head>

<body>
    <header>
        <h1>Pizza Shop</h1>
    </header>

    <nav>
        <a href="#menu">Menu</a> |
        <a href="#order">Order</a>
    </nav>

    <section id="order">
        <h3>Thank you for order</h3>

        <?php
            $pizza = $_POST["pizza"];
            $pizza_size = $_POST["pizza_size"];
        
            echo "<p>Your pizza, " . $pizza . " (" . $pizza_size . "), has been added.</p>";
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Pizza Shop</p>
    </footer>
</body>

</html>