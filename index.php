<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Foodie</title>
</head>

<body>

    <!-- Navbar -->

    <nav class="menubar">
        <div class="container">
            <a class="logo" href="index.php">
                <h2>FOODIE</h2>
            </a>
            <ul class="menu">
                <li class="menuitem"><a href="menu.php">Food Category</a></li>
                <li class="menuitem"><a href="contact.php">Contact Us</a></li>
                <li class="menuitem"><a href="aboutus.php">About</a></li>
            </ul>
        </div>
        <!-- <div class="filterbar">
            <ul class="filter">
                <li class="fi">
                    <select name="az" id="az">
                        <option value="high">High to Low</option>
                        <option value="low">Low to High</option>
                        <option value="astar">Popular</option>
                    </select>
                </li>
                <li class="fi"><input type="search" name="search" id="search" placeholder="Search Here..."></li>
                <li class="fi"><button>Search</button></li>
            </ul>
        </div> -->
    </nav>

    <!-- Poster -->

    <div class="poster">
        <div class="textbg">
            <h1 class="center">Welcome to Foodie</h1>
        </div>
    </div>

    <!-- Content -->

    <div class="content2" id="menu_it">
        <div class="category">
            <div class="c1">
                <a href="singlefood.php"><img src="image/c1.jpg" alt=""></a>
                <a href="singlefood.php">Gujarati Thali</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c2.jpg" alt=""></a>
                <a href="singlefood.php">Panjabi Thali</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c3.jpg" alt=""></a>
                <a href="singlefood.php">Burgar</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c4.jpg" alt=""></a>
                <a href="singlefood.php">Milk Shake</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c5.jpg" alt=""></a>
                <a href="singlefood.php">South Inadian</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c6.jpg" alt=""></a>
                <a href="singlefood.php">Fast Food</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c7.jpg" alt=""></a>
                <a href="singlefood.php">Farsan</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c8.jpg" alt=""></a>
                <a href="singlefood.php">Ice-Cream</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c9.jpg" alt=""></a>
                <a href="singlefood.php">Egg</a>
            </div>
            <div class="c1">
                <a href="singlefood.php"><img src="image/c10.jpg" alt=""></a>
                <a href="singlefood.php">Cake</a>
            </div>
        </div>
    </div>

    <!-- Contact Us -->

    <div class="contact">
        <div class="cimage">
            <img src="./image/about.jpg" alt="">
        </div>
        <div class="form">
            <form action="">
                <h1>Contact Us</h1>
                <input type="text" name="name" placeholder="Enter Your name">
                <input type="phone" name="phone" placeholder="Enter Your number">
                <input type="gmail" name="gmail" placeholder="Enter Your gmail" require>
                <textarea name="feedback" id="" cols="30" rows="5" placeholder="Enter Your Valueable Feedback..."></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- About Us -->

    <div class="content2" id="menu_it">
        <h1 class="atitle">About Us</h1>
        <div class="about">
            <div class="c1">
                <a href="aboutus.php"><img src="image/p1.jpg" alt=""></a>
                <a href="aboutus.php">Your Name</a>
            </div>
            <div class="c1">
                <a href="aboutus.php"><img src="image/p1.jpg" alt=""></a>
                <a href="aboutus.php">Your Name</a>
            </div>
            <div class="c1">
                <a href="aboutus.php"><img src="image/p1.jpg" alt=""></a>
                <a href="aboutus.php">Your Name</a>
            </div>
            <div class="c1">
                <a href="aboutus.php"><img src="image/p1.jpg" alt=""></a>
                <a href="aboutus.php">Your Name</a>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="top">
        <div class="flogo">
            <a href="index.php">
                <h1>FOODIE</h1>
            </a>
        </div>
        <div class="links">
            <h2>Menu</h2>
            <a href="menu.php">Food Cetegory</a>
            <a href="contact.php">Contact Us</a>
            <a href="aboutus.php">About Us</a>
        </div>
    </footer>
    <footer class="bottom">
        <div class="legal">
            <span> &copy;2023 All Right Reserved</span>
            <a href="">Licence</a>
        </div>
        <div class="links">
            <i class="fa fa-instagram fa-2x"></i>
            <i class="fa fa-facebook fa-2x"></i>
            <i class="fa fa-twitter fa-2x"></i>
        </div>
    </footer>

    </div>
    </div>
</body>

</html>