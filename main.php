<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    
    <div class="vizitka">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="information_about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="photo">
                    <?php  echo '<img src="img/Medve.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> My name is 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'My city is', ' ', $city; ?>                                      
                    </p> 
           
                    <p> I am
                    <?php  echo $age;   ?>          
                    years old </p>
                    <p>It is PHP </p>
                    
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 68;
                        $b = 32;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="author_article">
                <p class="footer_text">
                    This page was made by me
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
