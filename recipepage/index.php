<?php
    session_start();
?>

<?php
    include_once("dbh.inc.php");

    $user = $_SESSION['name'];

    $sql = "SELECT * FROM recipe WHERE status = 'approved'";

    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homely Recipes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Coock Booker</div>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Recipes</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Donation</a></li>
            </ul>
            <div class="search">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>A platform for tasty<br/> <span>homemade</span> recipes.</h1>
                <p>Sharing experiences with the community <br/> where people re-discover home-made food,<br/> share recipes, and connect with creators<br/> like you.</p>
                <a href="#" class="btn">Explore Recipe Collections</a>
            </div>
            
            <div class="recipes">
                <div class="recipe">
                    <img src="images/dessert-bread-and-butter-pudding.jpg" alt="Breakfast Special">
                    <p>Breakfast Special</p>
                </div>
                <div class="recipe">
                    <img src="images//snacks.jpg" alt="Chicken Coorg Curry">
                    <p>Chicken Coorg Curry</p>
                </div>
                <div class="recipe">
                    <img src="images/hero-img-2--333x460.png" alt="Bread & Butter Pudding">
                    <p>Bread & Butter Pudding</p>
                </div>
            </div>
        </section>
        <section class="featured">
            <h2>FEATURED</h2>
            <div class="featured-recipes">
                
                <?php
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) { 
                                                echo      '<div class="card">';
                                                echo         '<img src="/Online_Recipe_Management_System/recipe/images/'.$row['image']. '" style="height:20px width:20px">';
                                                echo         '<div class="card-content">';
                                                echo            '<h3>'.$row['name'].'</h3>';
                                                echo            '<p>'. $row['description']. '</p>';
                                                echo         '</div>';
                                                echo      '</div>';
                                            }
                                        };
                                    ?>
            </div>
        </section>
        <section class="inspiration">
            
            <div class="abt-sec">
                <div class="quote">
                    <blockquote>
                        <p>"Food brings people together on many different levels. It's nourishment of the soul and body; it's truly love."</p>
                        <cite>– Giada De Laurentiis</cite>
                    </blockquote>
                    <blockquote>
                        <p>"The process of creativity and genius is inherent in human consciousness. As every human has within himself the same essence of consciousness, so is genius a potential that resides within everyone. It awaits only the right circumstances to express it."</p>
                        <cite>– Dr. David R. Hawkins</cite>
                    </blockquote>
                </div>
                <div class="journey">
                    <h2>Want to be part of the journey?</h2>
                    <p>Our constant quest for creating delicious experiences starts here, with you. Start expressing your genius and creativity now.</p>
                    <p>Every part of Homely Recipes (recipes, collections, tips and the site itself) springs from our incredible open community of food-loving contributors. Please join us!</p>
                    <a href="#" class="btn">Get Involved →</a>
                </div>
                
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email:Info@example.com</p>
                <p>Phone:+121 56556 565556</p>
                <p>Address:Your Address 123 street</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                 <ul class="list">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Contact</a></li>
                 </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                 <li><a href=""><i class="fab fa-facebook"></i></a></li>
                 <li><a href=""><i class="fab fa-twitter"></i></a></li>
                 <li><a href=""><i class="fab fa-instagram"></i></a></li>
                 <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                </ul>
                </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2023 coockbooker . All rights reserved</p>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
