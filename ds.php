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

       


        .hero {
            background-image: url('IMAGES/habit.png');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 5rem 0;
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
            background-color: #6A0572;
            /* Purple */
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            /* Added transition effect */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            /* Added box shadow */
        }

        .btn:hover {
            background-color: #000000;
            /* Different background color on hover */
            color: #fff;
            /* Change text color on hover */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            /* Change box shadow on hover */
            transform: scale(1.1);
            /* Make the box appear bigger on hover */
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
            width: 80px;
            height: 80px;
            margin-bottom: 1rem;
        }

        .login_wrap, .signup_wrap {
  display: table;
  position: relative;
  width: 100%;
}

        .motivational-carousel {
            background-color: #6F2DA8;
            /* Differentiating background color */
            padding: 5rem 0;
            text-align: center;
            position: relative;
        }

        .quote-slide {
            position: absolute;
            top: 50%;
            /* Center the quotes vertically */
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            font: monospace;
            font-size: 30px;
        }

        .quote-slide.active {
            opacity: 1;
        }

        .cta {
            background-color: #6A0572;
            /* Purple */
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
            background-color: #6A0572;
            /* Purple */
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

    <section class="motivational-carousel">
        <div class="container">
            <div class="quote-slide active">
                <p>"Your habits determine your future. Make them count."</p>
            </div>
            <div class="quote-slide">
                <p>"Success is the sum of small efforts, repeated day in and day out."</p>
            </div>
            <div class="quote-slide">
                <p>"The only way to achieve the impossible is to believe it is possible."</p>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <h2>Building a Better Habit. Building a Better You!</h2>
            <p>Start your journey to a better you with our advanced habit tracker.</p>
            <a href="home(1).php" class="btn">Get Started</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="feature">
                <img src="https://img.freepik.com/free-vector/positive-tiny-people-sitting-walking-near-huge-target-with-arrow-isolated-flat-vector-illustration-cartoon-business-team-achieving-goal-aim-marketing-strategy-achievement-concept_74855-10139.jpg"
                    alt="Icon 1">
                <h3>Customizable Goals</h3>
                <p>Set personalized goals that align with your aspirations and track your progress effortlessly.</p>
            </div>
            <div class="feature">
                <img src="https://i.pinimg.com/736x/d1/a0/3f/d1a03fa068c0a2cd0215af311960eb4c.jpg" alt="Icon 2">
                <h3>Visual Analytics</h3>
                <p>Gain insights into your habits with detailed charts and graphs, helping you stay motivated.</p>
            </div>
            <div class="feature">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTnDvokVBkBaVwGSB0MEWfrg00ajLpuF5Wg10eWe1atQ&s" alt="Icon 3">
                <h3>Community Support</h3>
                <p>Connect with like-minded individuals, share your achievements, and motivate each other.</p>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Ready to Start?</h2>
            <p>Join our habit tracker community today and embark on a journey of self-improvement.</p>
            <a href="index.php" class="btn">Sign Up Now</a>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Habitify. All rights reserved.</p>
    </footer>

    <script>
        // Add JavaScript functionality for automatic quote sliding
        document.addEventListener("DOMContentLoaded", function () {
            const quoteSlides = document.querySelectorAll(".quote-slide");
            let currentSlide = 0;

            function showSlide(index) {
                quoteSlides.forEach((slide) => slide.classList.remove("active"));
                quoteSlides[index].classList.add("active");
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % quoteSlides.length;
                showSlide(currentSlide);
            }

            setInterval(nextSlide, 5000); // Change quote every 5 seconds
        });
    </script>
</body>
</html>