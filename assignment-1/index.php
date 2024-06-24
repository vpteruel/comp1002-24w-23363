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

    <section id="menu">
        <h2>Menu</h2>
        <table>
            <tr>
                <td>
                    <figure>
                        <img src="images/richly-decorated-italian-pizza-1706288511JPm.jpg" />
                        <figcaption>Pepperoni Pizza - $10</figcaption>
                    </figure>
                </td>
                <td>
                    <figure>
                        <img src="images/richly-decorated-italian-pizza-1706288367ca7.jpg" />
                        <figcaption>Margherita Pizza - $8</figcaption>
                    </figure>
                </td>
                <td>
                    <figure>
                        <img src="images/richly-decorated-italian-pizza-1706288377eZ4.jpg" />
                        <figcaption>Hawaiian Pizza - $12</figcaption>
                    </figure>
                </td>
            </tr>
        </table>
    </section>

    <section id="order">
        <h2>Order</h2>
        <form method="post" action="/submit-order.php">
            <table>
                <tr>
                    <td>
                        <label for="pizza">Choose Pizza:</label>
                    </td>
                    <td>
                        <select id="pizza" name="pizza">
                            <option value="pepperoni">Pepperoni Pizza</option>
                            <option value="margherita">Margherita Pizza</option>
                            <option value="hawaiian">Hawaiian Pizza</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="size">Size:</label>
                    </td>
                    <td>
                        <input type="radio" id="small" name="pizza_size" value="small">
                        <label for="small">Small</label>
                        <br>
                        <input type="radio" id="medium" name="pizza_size" value="medium">
                        <label for="medium">Medium (+$2)</label>
                        <br>
                        <input type="radio" id="large" name="pizza_size" value="large">
                        <label for="large">Large (+$4)</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="quantity">Quantity:</label>
                    </td>
                    <td>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Add to Cart</button>
                    </td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Pizza Shop</p>
    </footer>
</body>

</html>