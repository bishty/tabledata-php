<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>task2</title>
    <link rel="stylesheet" href="task4.css">
       </head>
       <body>
       <header>
      <div id="main1">
        <h1>
          <i class="fas fa-shopping-cart" style="font-size: 36px"></i
          >Shoping<sub style="color: red;">Hub</sub>
        </h1>
      </div>
     
    </header>
    <?php
    $products = array(
      "Electronics" => array(
                          "Television" => array(
                                              array(
                                                  "id" => "PR001", 
                                                  "name" => "MAX-001",
                                                  "brand" => "Samsung"
                                              ),
                                              array(
                                                  "id" => "PR002", 
                                                  "name" => "BIG-301",
                                                  "brand" => "Bravia"
                                              ),
                                              array(
                                                  "id" => "PR003", 
                                                  "name" => "APL-02",
                                                  "brand" => "Apple"
                                              )
                                          ),
                          "Mobile" => array(
                                              array(
                                                  "id" => "PR004", 
                                                  "name" => "GT-1980",
                                                  "brand" => "Samsung"
                                              ),
                                              array(
                                                  "id" => "PR005", 
                                                  "name" => "IG-5467",
                                                  "brand" => "Motorola"
                                              ),
                                              array(
                                                  "id" => "PR006", 
                                                  "name" => "IP-8930",
                                                  "brand" => "Apple"
                                              )
                                          )
                      ),
      "Jewelry" => array(
                          "Earrings" => array(
                                              array(
                                                  "id" => "PR007", 
                                                  "name" => "ER-001",
                                                  "brand" => "Chopard"
                                              ),
                                              array(
                                                  "id" => "PR008", 
                                                  "name" => "ER-002",
                                                  "brand" => "Mikimoto"
                                              ),
                                              array(
                                                  "id" => "PR009", 
                                                  "name" => "ER-003",
                                                  "brand" => "Bvlgari"
                                              )
                                          ),
                          "Necklaces" => array(
                                              array(
                                                  "id" => "PR010", 
                                                  "name" => "NK-001",
                                                  "brand" => "Piaget"
                                              ),
                                              array(
                                                  "id" => "PR011", 
                                                  "name" => "NK-002",
                                                  "brand" => "Graff"
                                              ),
                                              array(
                                                  "id" => "PR012", 
                                                  "name" => "NK-003",
                                                  "brand" => "Tiffany"
                                              )
                                          )				
                  )
                                              );
                                              
   echo "<div class='items'>";


    foreach($products as $value1 => $v1){
    
    echo "<div class='itemHead'> <h1> $value1 <h1></div>";
    
    foreach($v1 as $value2 => $v2){
    
    echo "<div class='itemsubHead'> <h3> $value2 <h3></div>";
    
    foreach($v2 as $value3 => $v3){
    
    
    echo "<div class='itemCategory'> ";
    
    
    if($value2=="Television"){
    echo "<img src='tv2.png' class='item_image'>";
    
    }
    else if($value2=="Mobile"){
    echo "<img src='https://images.pexels.com/photos/404280/pexels-photo-404280.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' class='item_image'>";
    
    }
    else if($value2=="Earrings") {
    echo "<img src='j1.jpeg' class='item_image'>";
    
    }
    else {
    echo "<img src='neck.png' class='item_image'>";
    
    }
    echo "<h5>$v3[id] <h5>";
    echo "<h5><b>$v3[name] </b> <h5>";
    echo "<h5>$v3[brand] <h5>";
    echo "<button class='btncart'>Add to cart</button>";
    echo "</div>";
    
    }
    }
    }
    echo "</div>";
    ?>
  </body>
</html>
