<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Drip Drop</title>
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li><a href="#">Compra</a></li>
          <li><a href="#">Vendi</a></li>
          <li><a href="#">Accedi</a></li>
          <li><a href="#">Registrati</a></li>
        </ul>
      </nav>
      <h1>Drip Drop</h1>
      <form action="#">
        <input type="text" placeholder="Search">
        <button type="submit">Go</button>
      </form>
    </header>
    <main>
    <div class="product-item">
      <img class="product-image" img src="1.jpg" alt="product 1">
      <div class="product-info">
        <div class="product-name">Air Jordan 1</div>
        <div class="product-price">$250.00</div>
        <button>Add to Cart</button>
      </div>
    </div>
    <div class="product-item">
      <img class="product-image" img src="2.jpg" alt="product 2">
      <div class="product-info">
        <div class="product-name">Nike Dunk</div>
        <div class="product-price">$100.00</div>
        <button>Add to Cart</button>
      </div>
    </div>
      <section class="new-arrivals">
        <h2>Nuovi prodotti</h2>
        <table>
          <tr>
            <th>Product</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Details</th>
          </tr>
          <tr>
            <td>Product 1</td>
            <td>Brand 1</td>
            <td>$100</td>
            <td><a href="#">View</a></td>
          </tr>
          <tr>
            <td>Product 2</td>
            <td>Brand 2</td>
            <td>$150</td>
            <td><a href="#">View</a></td>
          </tr>
          <tr>
            <td>Product 3</td>
            <td>Brand 3</td>
            <td>$200</td>
            <td><a href="#">View</a></td>
          </tr>
        </table>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Drip Drop</p>
    </footer>
  </body>
</html>
