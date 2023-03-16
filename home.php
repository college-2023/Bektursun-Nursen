<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mare.css">
</head>
<body>

    <div class="navbar">

        <div class="icon-nv">
            <img src="img/image 18.png" alt="">
        </div>

        <div class="menu-nv">
            <li>
                <a href="#">ГЛАВНЫЙ</a>
                <a href="#">КАТАЛОГ</a>
                <a href="#">СВЯЗАТЬСЯ С НАМИ</a>
                <a href="#">АКЦИИ</a>
            </li>
        </div>

        <div class="button-nv">
            <button><img src="img/Vector.png" alt=""></button>
            <button><img src="img/Vector (3).png" alt=""></button>
            <button><img src="img/Vector (4).png" alt=""></button>
            <button><img src="img/Vector (5).png" alt=""></button>
            <button  type="submit" style="padding:10px; background: black; color: white; border-radius: 5px;" onclick="location.href = 'logout.php'">Выйти</button>
        </div>
    </div>

    <div class="main-page">

        <div class="slid-show-container">
            <div class="myslides fade">
                <div class="numdertext">1/4</div>
                <img src="img/1-mainimage 1.png" alt="">
                <div class="text">show1</div>
            </div>

            <div class="myslides fade">
                <div class="numdertext">2/4</div>
                <img src="img/GettyImages-955005424_watercolor-and-gouache.jpg 1.png" alt="">
                <div class="text">show2</div>
            </div>

            <div class="myslides fade">
                <div class="numdertext">3/4</div>
                <img src="img/girl 1.png" alt="">
                <div class="text">show3</div>
            </div>

            <div class="myslides fade">
                <div class="numdertext">4/4</div>
                <img src="img/il_fullxfull 1.png" alt="">
                <div class="text">show3</div>
            </div>


        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>

          </div>

    </div>

    <span style="display: flex; justify-content: center; color: #
    626BBF"><h1>Hello, <?php echo $_SESSION['name']; ?></h1></span>
    
    <script src="app.js"></script>
</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
