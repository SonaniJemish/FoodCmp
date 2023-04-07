<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

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
                <li class="menuitem"><a href="food.html">Food Category</a></li>
                <li class="menuitem"><a href="food.html">Compare</a></li>
                <li class="menuitem"><a href="food.html">About</a></li>
                <li class="menuitem"><a href="food.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="filterbar">
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
        </div>
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
                <a href="menu/gujaratit.php"><img src="image/c1.jpg" alt=""></a>
                <a href="menu/gujaratit.php">Gujarati Thali</a>
            </div>
            <div class="c1">
                <a href="menu/panjabit.php"><img src="image/c2.jpg" alt=""></a>
                <a href="menu/panjabit.php">Panjabi Thali</a>
            </div>
            <div class="c1">
                <a href="menu/burgar.php"><img src="image/c3.jpg" alt=""></a>
                <a href="menu/burgar.php">Burgar</a>
            </div>
            <div class="c1">
                <a href="menu/milkshake.php"><img src="image/c4.jpg" alt=""></a>
                <a href="menu/milkshake.php">Milk Shake</a>
            </div>
            <div class="c1">
                <a href="menu/southindian.php"><img src="image/c5.jpg" alt=""></a>
                <a href="menu/southindian.php">South Inadian</a>
            </div>
            <div class="c1">
                <a href="menu/fastfood.php"><img src="image/c6.jpg" alt=""></a>
                <a href="menu/fastfood.php">Fast Food</a>
            </div>
            <div class="c1">
                <a href="menu/farsan.php"><img src="image/c7.jpg" alt=""></a>
                <a href="menu/farsan.php">Farsan</a>
            </div>
            <div class="c1">
                <a href="menu/ice.php"><img src="image/c8.jpg" alt=""></a>
                <a href="menu/ice.php">Ice-Cream</a>
            </div>
            <div class="c1">
                <a href="menu/egg.php"><img src="image/c9.jpg" alt=""></a>
                <a href="menu/egg.php">Egg</a>
            </div>
            <div class="c1">
                <a href="menu/cake.php"><img src="image/c10.jpg" alt=""></a>
                <a href="menu/cake.php">Cake</a>
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
                <a href="menu/gujaratit.php"><img src="image/p1.jpg" alt=""></a>
                <a href="menu/gujaratit.php">Your Name</a>
            </div>
            <div class="c1">
                <a href="menu/panjabit.php"><img src="image/p1.jpg" alt=""></a>
                <a href="menu/panjabit.php">Your Name</a>
            </div>
            <div class="c1">
                <a href="menu/burgar.php"><img src="image/p1.jpg" alt=""></a>
                <a href="menu/burgar.php">Your Name</a>
            </div>
            <div class="c1">
                <a href="menu/milkshake.php"><img src="image/p1.jpg" alt=""></a>
                <a href="menu/milkshake.php">Your Name</a>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="top">
        <div class="flogo">
            <h1>FOODIE</h1>
        </div>
        <div class="links">
            <h2>Menu</h2>
            <a href="#header">Food Cetegory</a>
            <a href="#header">Contact Us</a>
            <a href="#header">About Us</a>
        </div>
    </footer>
    <footer class="bottom">
        <div class="legal">
            <span> &copy;2023 All Right Reserved</span>
            <a href="">Licence</a>
        </div>
        <div class="links">
            <a href="" class="fa-brands fa-github">Instagram</a>
            <a href="" class="fa-brands fa-github">Facebook</a>
            <a href="" class="fa-brands fa-github">Twitter</a>
        </div>
    </footer>

    </div>
    </div>
</body>

</html>