<!doctype html>  
<html>  
    <head>  
        <meta charset="utf-8">  
        <title>Rastgele Dizi</title>  
    </head>   
    <body>  
        <h1>Rastgele Dizi Oluştur</h1>       
         <?php 
            function rastgeledizi($dizi, int $x){
                $newDizi = array_filter($dizi,function($e){return $e!=null || $e!="" ? $e: false;});
                
                $rand_keys = array_rand($newDizi,$x);
                
                $rasDizi = array_map(function($e){return $e;},$rand_keys);
                foreach($rasDizi as $value){
                    $randPlanets[] = $newDizi[$value] ;
                }

                return $randPlanets;
            }

            $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
            
            print_r(rastgeledizi($planets,3));

        
        ?>    
    </body>  
</html>  