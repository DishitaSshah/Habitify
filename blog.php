<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habit Tracker Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        header {
    background-color: #6A0572;
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
    box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8);
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
}

nav a:hover {
    color: #000000;
}

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .blog-post {
            width: 45%;
            background-color: #fff;
            border-radius: 8px;
            margin: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .blog-post:hover {
            transform: translateY(-5px);
        }
        .blog-post img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        .blog-post-content {
            padding: 20px;
        }
        h2 {
            color: #6A0572;
            margin-top: 0;
        }
        p {
            line-height: 1.6;
        }
        footer {
            background-color: #6A0572;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            clear: both;
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
<div class="container">
    <div class="blog-post">
        <img src="images/water.jpg" alt="Drinking Water">
        <div class="blog-post-content">
            <h2>Drinking Water</h2>
            <p>Drinking water upon waking up helps combat mild dehydration, regulate body temperature, and replenish nutrients. It's essential for overall health, improving mood and sleep. To make it easier, keep water nearby, like by your bedside or desk.</p>
        </div>
    </div>
    <div class="blog-post">
        <img src="images/meditation.jpg" alt="Meditation">
        <div class="blog-post-content">
            <h2>Meditation</h2>
            <p>Meditation, or mindful breathing, is a simple and scientifically-proven way to promote optimism, calmness, lessen anxiety, and boost your mood. May it be for one minute, or 10 minutes, allowing your mind to slow down and focus your present will help you improve your overall health.</p>
        </div>
    </div>
    <div class="blog-post">
        <img src="images/cycling.jpg" alt="Physical Activity">
        <div class="blog-post-content">
            <h2>Physical Activity</h2>
            <p>Physical activity prevents diseases like diabetes, strokes, heart problems, and more. Something as simple as walking and getting your steps in can make a huge impact on your health. Experts recommend that adults do at least 2.5 hours of active movement every week.</p>
        </div>
    </div>
    <!-- Repeat the above blog post blocks for other blog posts -->
    <div class="blog-post">
        <img src="images/healthy.jpg" alt="Eating Healthy">
        <div class="blog-post-content">
            <h2>Eating Healthy</h2>
            <p>Vegetables and fruits contain essential vitamins and minerals that support your body's basic functions. Eating healthy in a no-brainer for combatting diseases, aging, immunity, and more.</p>
        </div>
    </div>
    <div class="blog-post">
        <img src="images/sleep.jpg" alt="Good Sleep Cycle">
        <div class="blog-post-content">
            <h2>Good Sleep Cycle</h2>
            <p>Sleep is probably the single most important way for your body to reset, detox, and heal. Having good sleep hygiene and getting ample hours of sleep impacts everything in your day-to-day life such as energy levels, emotional regulation, physical functioning, and mental capacity. When you wake up feeling well-rested and refreshed, it's a good day!</p>
        </div>
    </div>
    <div class="blog-post">
        <img src="images/reading.jpg" alt="Reading">
        <div class="blog-post-content">
            <h2>Reading</h2>
            <p>Reading is essential for mental stimulation, expanding knowledge, and fostering creativity. It exposes us to new ideas, perspectives, and cultures, enhancing empathy and understanding. Incorporating reading into daily life enriches our minds and broadens our horizons.</p>
        </div>
    </div>
    <div class="blog-post">
        <img src="images/sports.jpg" alt="Playing Sports">
        <div class="blog-post-content">
            <h2>Playing Sports</h2>
            <p>Regularly playing sports improves physical health, builds teamwork skills, and reduces stress. It enhances fitness, strength, and coordination, boosting confidence and mental health. Incorporating sports into your routine leads to a more active and fulfilling lifestyle.</p>
        </div>
    </div>
    <div class="blog-post">
        <img src="images/learning.jpg" alt="Learn Something New">
        <div class="blog-post-content">
            <h2>Learn Something New</h2>
            <p>Learning something new helps in keeping your mind active and busy with interesting, productive information which can make a huge impact on your mental health. By being selective with the content that you intake daily and diverting your attention and energy into something that you enjoy and find exciting will help you not feel low and anxious.</p>
        </div>
    </div>
    <div class="blog-post">
        <img src="images/nature.jpg" alt="Nature Therapy">
        <div class="blog-post-content">
            <h2>Use Nature as Therapy</h2>
            <p>The sounds of nature and relaxing music can help reduce stress. These are easy to find through YouTube or whichever platform you listen to music. It is recommended to listen to calming sounds at least once a day, and it reduces the stress hormone called cortisol.</p>
        </div>
    </div>
    <div class="blog-post">
        <img src="images/connection.jpg" alt="Building Connection">
        <div class="blog-post-content">
            <h2>Building a Connection with Loved Ones</h2>
            <p>Family and friends can act as emotional support. Spending time with family or a loved one reduces depression, anxiety, and other mental health concerns. The more you spend quality time with them, the more you feel connected and have a higher sense of belonging.</p>
        </div>
    </div>
</div>
<footer>
    <p>&copy; 2024 Habit Tracker. All rights reserved.</p>
</footer>
</body>
</html>
