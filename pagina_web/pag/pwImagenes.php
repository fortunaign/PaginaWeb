<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="js/main.js"></script>
</head>
<body>
    <!--&#x2630; &#x2715; &#x2713;-->
    <header>
            <img src="../img/programming.gif" alt=""> 
        <h1>Programando</h1>
    </header>
    <?php include 'nav.php';?>
    <div id="section-index">
        <div class="imgs">
            <h4>Titulo</h4>
            <img src="../img/World.jpg" alt="" alt="view of ur world from space"/>
            <p>
                Usuario | Fecha
            </p>
        </div>
        <div class="imgs">
            <h4>Titulo</h4>
            <img src="../img/board.jfif" alt="" usemap="#ver">
            <p>
                Usuario | Fecha
            </p>
        </div>
        <div class="imgs">
            <h4>Titulo</h4>
            <img src="../img/board.jfif" alt="" usemap="#ver">
            <map name="ver">
                <area shape="rect" coords="56,134,140,60" href="#" alt=""/>
            </map>
            <p>
                Usuario | Fecha
            </p>
        </div>
        <div class="imgs">
            <h4>Titulo</h4>
            <picture>
                <source media="(min-width: 650px)" srcset="../img/image_A.png">
                    <source media="(min-width: 450px)" srcset="../img/image_B.png">
                        <img src="../img/image_C.png" alt="">
            </picture>
            <p>
                Usuario | Fecha
            </p>
        </div>
        
    </div>  
</body>
</html>