<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Contact us Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            text-align: center;
        }

        /* Header styles */
        header {
            background-color: #6A0572;
            /* Purple */
            color: #fff;
            padding: 1rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
}

.login_btn {
  position: absolute;
  top: 0;
  right: 0;
  margin: 10px;
  text-align: center;
  border-top: 0;
}

    

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease-in-out;
            /* Added transition effect */
        }

        nav a:hover {
            color: #000000;
            /* Black color on hover */
        }
        .logo {
            font-size: 2rem;
        }

        nav {
            width: 30rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-between;
        }

        nav ul li a {
            font-size: 1.2rem;
            padding: 1rem;
            text-decoration: none;
            color: white;
        }

        nav ul li a:hover {
            background-color: #0dac30;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .reachUs-button {
            padding: 1rem;
            background-color: #0dac30;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .reachUs-button:hover {
            background-color: #1ac840;
        }

        /* banner section styles */
        .banner {
            text-align: center;
            background-color: #ffffff;
            margin: 0 auto;
        }

        .banner img {
            max-width: 100%;
            height: auto;
        }

        /* Contact form styles */
        .contact-form {
            padding: 40px 0;
            margin: 0 10px;
        }

        .form-container {
            max-width: 40%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            font-weight: bold;
        }

        .form-container input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 1rem;
            resize: vertical;
        }

        .submit-button {
            padding: 10px 20px;
            background-color: #0dac30;
            border: none;
            color: white;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        /* Contact info styles */
        .contact-info {
            text-align: center;
            padding: 50px 0;
            background-color: #f7f7f7;
        }

        .contact-info h2 {
            margin-bottom: 20px;
        }

        /* Footer styles */
        footer {
            padding: 20px;
            text-align: center;
            background-color: #6A0572;
            color: white;
        }

        /* Hamburger styles */
        .hamburger {
            display: none;
            color: rgb(0, 0, 0);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Media queries for responsiveness */
        @media only screen and (max-width: 768px) {
            .logo {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            #nav-menu {
                position: absolute;
                top: 4rem;
                left: 0;
                background-color: #333;
                width: 100%;
                display: none;
            }

            #nav-menu.active {
                display: block;
                flex-direction: row;
                padding: 1rem;
            }
        }

        /* Additional styles for contact info */
        .contact-info address a {
            display: block;
            margin-bottom: 10px;
        }

        .contact-info address a img {
            width: 20px;
            height: auto;
            margin-right: 10px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
<header>
        <div class="container">
            <h1>
                <div class="logo">
                <a href="ds.php"><img src="IMAGES/logo.png" style="width: 200px; height: auto;" alt="Logo"></a>
                </div>
            </h1>
            <nav>
                <ul>
                    <li><a href="ds.php">Home</a></li>
                    <li><a href="about us.php">About</a></li>
                    <li><a href="faq2.php">FAQs</a></li>
                    <li><a href="blog.php">Blogs</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="login_btn"> <a href="index.php" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
            </nav>
        </div>
    </header>
    <!-- Banner section -->
    <section class="banner">
        <br>
        <img src="IMAGES/contact.png" alt="Welcome to our Contact Us page">
        <h1>Get in Touch With Us</h1>
        <p>
            We're here to answer any questions you may have.
        </p>
    </section>

    <!-- Contact form -->
    <section class="contact-form">
        <div class="form-container">
            <h2>Your Details</h2>
            <form action="#" method="POST">

                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email: </label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone: </label>
                <input type="tel" id="phone" name="phone">

                <label for="message">Message: </label>
                <textarea id="Message" name="Message" rows="4" required></textarea>

                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </section>

    <!-- Company contact info -->
    <section class="contact-info">
        <h2>Contact Information</h2>
        <address>
            Habitify<br>
            K.J Somaiya<br>
            <br>
            <a href="tel:1234567890"><img src="IMAGES/phone.png" alt="Phone">9876543210</a>
            <a href="mailto:info@example.com"><img src="IMAGES/mail.png" alt="Email">habitify@gmail.com</a>
            <a href="https://www.instagram.com/"><img src="IMAGES/ig.png" alt="Instagram">@habitify_24</a>
            <a href="https://www.facebook.com/"><img src="IMAGES/facebook.png" alt="Facebook">Habitify DAV</a>
        </address>
    </section>

    <!-- Footer section -->
    <footer>
        <p>
            © 2023 Habitify. Designed & Developed by Team DAV.
        </p>
    </footer>
    <script>
        function openNavbar() {
            const navMenu = document.getElementById("nav-menu");
            navMenu.classList.toggle("active");
        }
    </script>
</body>

</html>