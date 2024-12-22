<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayse Eats FAQs</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!--Stylesheet-->
    <style>
        *,
        *:before,
        *:after{
            padding: 0;
            margin: 0;
            box-sizing: border-box; 
            font-family: "Poppins",sans-serif;
        }

        body{
            background-color: #4fb6ff; /* Light blue background color */
            
            background-image: url('images/bfbrg.jpg'); /* Replace 'your-background-image-url.jpg' with the URL of your background image */
            background-size: cover;
            background-position: center;
        }

        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 50px;
            width: 80%;
            min-width: 500px;
        }

        .title-container > h1 {
            color: #ffffff;
            font-weight: bold;
            font-size: 50px;
            text-shadow: 1px 1px #000;
        }

        .wrapper {
            background-color: #ffffff;
            margin-bottom: 20px;
            padding: 15px 40px;
            border-radius: 5px;
            box-shadow: 0 15px 25px rgba(0,0,50,0.2);
        }

        .toggle {
            width: 100%;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 16px;
            color: #111130;
            font-weight: 500;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 15px 0;
        }

        .content{
            position: relative;
            font-size: 14px;
            text-align: justify;
            line-height: 30px;
            height: 0;
            overflow: hidden;
            transition: all 1s;
        }

        /* Light blue color for answers */
        .answer {
            color: #4fb6ff;
        }
    </style>
</head>
<body>
<header style="background-image: url('C:\wamp64\www\Kayse-Eats\images\footer_pattern.png'); background-size: cover; background-position: center;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(0, 0, 0, 0.7);">
        <a class="navbar-brand" href="index.php">
            <img src="images/kayse-eats-high-resolution-logo-transparent (2)" alt="Kayse Eats" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restaurants.php">Restaurants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="map.php">Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.php">My Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    <div class="container">
        <div class="title-container text-center mb-3">
            <h1>FAQ</h1>
        </div>

        <!-- FAQ Items -->
        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>What is Kayse Eats?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Kayse Eats is a food delivery service based in Hargeisa, Somalia, that delivers delicious meals from various restaurants to your doorstep.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>How can I place an order?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">You can place an order on our website or mobile app by browsing the available restaurants, selecting your desired items, and proceeding to checkout.</p>
            </div>
        </div>

        <!-- Add more FAQs here -->
        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>Is delivery available only in Hargeisa?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Currently, we offer delivery services only within Hargeisa. However, we plan to expand to other areas in the future.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>What are the delivery hours?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Our delivery hours are from 10:00 AM to 10:00 PM, seven days a week.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>Can I track my order?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Yes, you can track your order through our website or mobile app. Once your order is confirmed, you will receive a tracking link.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>Are there any delivery charges?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Yes, there may be delivery charges depending on your location and the restaurant you order from. The delivery charges will be displayed during checkout.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>Can I cancel my order?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Yes, you can cancel your order, but it must be done before the restaurant starts preparing your food. Once the preparation process has begun, cancellation may not be possible.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>How can I contact customer support?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">You can contact our customer support team through the "Contact Us" section on our website or by emailing support@kayseeats.com.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>Are there any discounts or promotions available?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Yes, we occasionally offer discounts and promotions to our customers. You can stay updated on the latest deals by subscribing to our newsletter or following us on social media.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>Can I customize my order?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Yes, many of our partner restaurants allow customization of orders. You can specify any special instructions or preferences while placing your order.</p>
            </div>
        </div>

        <div class="wrapper">
            <button class="toggle" onclick="toggleAnswer(this)">
                <span>Is it safe to order from Kayse Eats?</span>
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p class="answer">Yes, we prioritize the safety and hygiene of our customers. We ensure that all partner restaurants follow strict cleanliness and food safety standards.</p>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93"></script>

    <!--Script-->
    <script>
        function toggleAnswer(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.icon');

            if (content.style.height === '0px' || !content.style.height) {
                content.style.height = content.scrollHeight + 'px';
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            } else {
                content.style.height = '0px';
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            }
        }
    </script>
</body>
</html>
