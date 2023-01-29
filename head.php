<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Welcome to My Website</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <main>
      <section id="about">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna ut fermentum faucibus, est tellus feugiat libero, a tincidunt nulla elit eu risus. Sed at blandit risus. Aliquam erat volutpat. Sed feugiat in est a tincidunt. Fusce aliquet scelerisque lectus, et tincidunt lacus iaculis at.</p>
      </section>
      <section id="services">
        <h2>Our Services</h2>
        <ul>
          <li>Service 1</li>
          <li>Service 2</li>
          <li>Service 3</li>
        </ul>
      </section>
      <section id="contact">
        <h2>Contact Us</h2>
        <form action="submit-form.php" method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
          <label for="message">Message:</label>
          <textarea id="message" name="message"></textarea>
          <input type="submit" value="Submit">
        </form>
      </section>
    </main>
    <footer>
      <p>Copyright &copy; 2023 My Website</p>
    </footer>
  </body>
</html>
