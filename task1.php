<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100&family=Potta+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1{
        color:red;
    }
    body{
        background-color:wheat;
        font-family: 'Potta One', cursive;
    }
    th{
        color:skyblue;
    }

    </style>
</head>
<body>
  <h1>1.List of product</h1>


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
                                            



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<table border='1px' width=100% cellpadding='10px' ";
echo "<tr>
<th> category</th>
<th> Sub-category</th>
<th> Id</th>
<th> Name</th>
<th> Brand</th>
</tr>";
foreach($products as $key1=>$v1){
    foreach($v1 as $key2=>$v2){
        foreach($v2 as $key3=>$v3){
        echo "<tr>";
        echo "<td>".$key1."</td>";
        echo "<td>".$key2."</td>";
        echo "<td>".$v3['id']."</td>";
        echo "<td>".$v3['name']."</td>";
        echo "<td>".$v3['brand']."</td>";
        echo"</tr>";
        }
    }
}
echo"<br>";
echo "</table>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<table border='1px'  width=100% cellpadding='10px' ";
echo "<tr>
<th> category</th>
<th> Sub-category</th>
<th> Id</th>
<th> Name</th>
<th> Brand</th>
</tr>";
echo("<h1>2. List all products in Mobile subcategory </h1>");
foreach($products as $key1=>$v1){
    foreach($v1 as $key2=>$v2){
        foreach($v2 as $key3=>$v3){
           if($key2=='Mobile'){
               
                  echo "<tr>";
                    echo "<td>".$key1."</td>";
                    echo "<td>".$key2."</td>";
                    echo "<td>".$v3['id']."</td>";
                    echo "<td>".$v3['name']."</td>";
                    echo "<td>".$v3['brand']."</td>";
                    echo"</tr>";
                 }
             } 
}
}
      
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "</table>";


echo "<table border='1px'  width=100% cellpadding='10px' ";
echo "<tr>
<th> category</th>
<th> Sub-category</th>
<th> Id</th>
<th> Name</th>
<th> Brand</th>
</tr>";
echo("<h1>3. List all products with brand name Samaung </h1>");
foreach($products as $key1=>$v1){
    foreach($v1 as $key2=>$v2){
        foreach($v2 as $key3=>$v3){
            if($v3['brand']=='Samsung'){
                echo "<tr>";
                echo "<td>".$key1."</td>";
                echo "<td>".$key2."</td>";
                echo "<td>".$v3['id']."</td>";
                echo "<td>".$v3['name']."</td>";
                echo "<td>".$v3['brand']."</td>";
                echo"</tr>";
             }
         }

            }
        }
        echo "</table>";

/////////////////////////////////////////// ///////////////////////////////////////////////////////////////////////////////

echo("<h1>4. Delete product with id = PR003</h1>");
foreach($products as $key1=>$v1){
    foreach($v1 as $key2=>$v2){
        foreach($v2 as $key3=>$v3){
          if($v3['id']=="PR003")
          {
            unset($products[$key1][$key2][$key3]);
          }
        }
    }
}
echo "<table border='1px' width=100% cellpadding='10px' ";
echo "<tr>
<th> category</th>
<th> Sub-category</th>
<th> Id</th>
<th> Name</th>
<th> Brand</th>
</tr>";
foreach($products as $key1=>$v1){
foreach($v1 as $key2=>$v2)
{
     foreach($v2 as $key3=>$v3){
        echo "<tr>";
        echo "<td>".$key1."</td>";
        echo "<td>".$key2."</td>";
        echo "<td>".$v3['id']."</td>";
        echo "<td>".$v3['name']."</td>";
        echo "<td>".$v3['brand']."</td>";
        echo"</tr>";
    }
    }
       }
   echo"<br>";
echo "</table>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo("<h1>5. Update product name = BIG-555 with id = PR002</h1>");
echo "<table border='1px' width=100% cellpadding='10px' ";
echo "<tr>
<th> category</th>
<th> Sub-category</th>
<th> Id</th>
<th> Name</th>
<th> Brand</th>
</tr>";
foreach($products as $key1=>$v1){
    foreach($v1 as $key2=>$v2){
        foreach($v2 as $key3=>$v3){
            if($v3['id']=='PR002')
            {
            $v3['name']='BIG-555';
            }
            echo "<tr>";
            echo "<td>".$key1."</td>";
            echo "<td>".$key2."</td>";
            echo "<td>".$v3['id']."</td>";
            echo "<td>".$v3['name']."</td>";
            echo "<td>".$v3['brand']."</td>";
            echo"</tr>";
        }
    }
}
echo "</table>";
?>

</body>
</html>



