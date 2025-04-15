
<?php

        $marks = array( 
            "himaadri" => array(
                "physics" => 35,
                "maths" => 30,	
                "chemistry" => 39
                ),
            
            "vaibhav" => array(
                "physics" => 30,
                "maths" => 32,
                "chemistry" => 29
                ),
            
            "sehaj" => array(
                "physics" => 31,
                "maths" => 22,
                "chemistry" => 39
                )
            );
         
         echo "Marks for Himaadri in physics : " ;
         echo $marks['himaadri']['physics'] . "<br>"; 
         
         echo "Marks for Vaibhav in maths : ";
         echo $marks['vaibhav']['maths'] . "<br>"; 
         
         echo "Marks for Sehaj in chemistry : " ;
         echo $marks['sehaj']['chemistry'] . "<br>";
	 echo"This code is executed by Vaibhav Sharma,2220100288"; 
         
?>
