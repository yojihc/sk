<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Я учусь на "Белого Хакера" </p>
                    <p> Это интересно, но я уже устал:( </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 2;
                        $b = 2;
                        $c = $a + $b;
                        echo  $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Росси́я, или Росси́йская Федера́ция[e] (сокр. РФ[f]), — государство в Восточной Европе и Северной Азии. Россия — крупнейшее государство в мире, её территория в конституционных границах, с территорией большей части Крыма, присоединение которого не получило международного признания, составляет 17 125 191[6] км²Перейти к разделу «#Географическое положение». Население страны в тех же границах составляет 147 182 123[10] чел. (2021; 9-е место в мире)Перейти к разделу «#Численность населения, расселение».
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
