<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #fff;
            background-color: #000;
        }

        /* Basic styling */
        .container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            background-color: #6A0572; /* Purple */
            color: #fff;
            padding: 1rem 0;
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
            transition: color 0.3s ease-in-out; /* Added transition effect */
        }

        nav a:hover {
            color: #000000; /* Black color on hover */
        }

        .hero {
    background-image: url('IMAGES/abt.jpeg');
    background-size: auto; /* Shows the whole image */
    background-repeat: no-repeat; /* Prevents tiling */
    background-position: center; /* Keeps the image centered */
    color: #fff;
    padding: 6rem 0;
    text-align: center;
}
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #6A0572; /* Purple */
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Added transition effect */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Added box shadow */
        }

        .btn:hover {
            background-color: #000000; /* Different background color on hover */
            color: #fff; /* Change text color on hover */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5); /* Change box shadow on hover */
            transform: scale(1.1); /* Make the box appear bigger on hover */
        }

        .features {
            background-color: #fff;
            color: #000;
            padding: 5rem 0;
        }

        .feature {
            text-align: center;
            margin-bottom: 3rem;
        }

        .feature img {
            width: 100px;
            height: 100px;
            margin-bottom: 1rem;
        }

        .cta {
            background-color: #6A0572; /* Purple */
            color: #fff;
            text-align: center;
            padding: 5rem 0;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .cta p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        footer {
            background-color: #6A0572; /* Purple */
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
    <title>Habitify</title>
</head>

<body>
    <header>
        <div class="container">
            <h1> <div class="logo"><h1><a href="ds.php"><img src="IMAGES/logo.png" style="width: 200px; height: auto;"></a></h1></div></h1>
            <nav>
                <ul>
                <li><a href="ds.php">Home</a></li>
            <li><a href="about us.php">About</a></li>
            <li><a href="faq2.php">FAQs</a></li>
            <li><a href="blog.php">Blogs</a></li>
            <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
    </section>

    <section class="features">
        <div class="container">
            <div class="feature">
                <img src="https://img.freepik.com/free-vector/positive-tiny-people-sitting-walking-near-huge-target-with-arrow-isolated-flat-vector-illustration-cartoon-business-team-achieving-goal-aim-marketing-strategy-achievement-concept_74855-10139.jpg" alt="Icon 1">
                <h3>Our Mission</h3>
                <p>To empower individuals to cultivate positive habits, leading to a healthier and more fulfilling lifestyle.</p>
            </div>
            <div class="feature">
                <img src="https://i.pinimg.com/736x/d1/a0/3f/d1a03fa068c0a2cd0215af311960eb4c.jpg" alt="Icon 2">
                <h3>Our Vision</h3>
                <p>To create a world where personal growth is accessible to all, one habit at a time, fostering lasting change and well-being.</p>
            </div>
            <div class="feature">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTnDvokVBkBaVwGSB0MEWfrg00ajLpuF5Wg10eWe1atQ&s" alt="Icon 3">
                <h3>Our Team</h3>
                <p>Dishita Shah - 16010122167<br>
                   Vedant Shah - 16010122175<br>
                   Amaan Shaikh - 16010122179
                </p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Habit Tracker. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
