<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habit Tracker FAQ</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('IMAGES/faqbackground.jpg') no-repeat center center;
            background-size: cover;
            font-family: 'Roboto', sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 20px auto;
           
        }
        
        header {
    background-color: #6A0572;
    color: #fff;
    padding: 0.5rem 0; /* Adjust the padding here */
    text-align: center;
}


        nav ul {
            list-style: none;
            display: flex;
            margin-left: 115px;
        }

        nav ul li {
            margin-right: 20px;
            margin-bottom: 0px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #000000;
        }

        .logo {
            text-align: left;
        }

        .logo img {
            width: 200px;
            height: auto;
            margin-top: 10px;
        }

        .faq {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .faq h2 {
            color: #5b4baf;
            font-size: 20px;
            margin-top: 0;
        }

        .faq p {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            margin: 10px 0;
            font-size: 16px;
        }

        .faq p:last-child {
            border-bottom: none;
        }

        .carousel {
            background: rgba(255,255,255,0.8);
            padding: 30px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .carousel h2 {
            color: #5b4baf;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .carousel-item {
            display: none;
            font-size: 16px;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .carousel-item.active {
            display: block;
            animation: fadein 1s;
        }

        @keyframes fadein {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background: #5b4baf;
            color: white;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
        <a href="ds.php"><img src="IMAGES/logo.png" alt="Logo"></a>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="ds.php">Home</a></li>
            <li><a href="about us.php">About</a></li>
            <li><a href="faq2.php">FAQs</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <div class="faq">
        <h2>Frequently Asked Questions</h2>
        <p><strong>How do I create a new habit to track?</strong><br>Click on the 'Add Habit' button and follow the on-screen instructions to set up your new habit.</p>
        <p><strong>Can I set reminders for my habits?</strong><br>Yes, you can set customizable reminders for each habit to help you stay on track.</p>
        <p><strong>Is there a limit to how many habits I can track?</strong><br>No, there's no limit; track as many habits as you like!</p>
        <p><strong>How can I see my progress?</strong><br>Your dashboard displays all your habits and their progress statuses.</p>
        <p><strong>What if I miss a day?</strong><br>It's okay to miss a day; just continue tracking from where you left off.</p>
    </div>
    <div class="carousel">
        <h2>User Testimonials</h2>
        <div class="carousel-item active">
            <p>"This habit tracker has changed my life! It's easy to use and really helps me stay organized!"</p>
            <p>- Alex R.</p>
        </div>
        <div class="carousel-item">
            <p>"I love the reminder feature. It keeps me on track with my goals."</p>
            <p>- Sara K.</p>
        </div>
        <div class="carousel-item">
            <p>"Great interface and features. Highly recommend for anyone trying to build new habits."</p>
            <p>- Mark D.</p>
        </div>
        <div class="carousel-item">
            <p>"Ever since I started using this app, I’ve been more consistent with my habits. It's very motivating!"</p>
            <p>- Emily C.</p>
        </div>
    </div>
</div>

<script>
    let current = 0;
    const items = document.querySelectorAll('.carousel-item');
    const total = items.length;

    const changeItem = () => {
        items[current].classList.remove('active');
        current = (current + 1) % total;
        items[current].classList.add('active');
    };

    setInterval(changeItem, 5000);
</script>
</body>
</html>
