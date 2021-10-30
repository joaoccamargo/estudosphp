<?php 
// i += 5 pula de 5 em 5
for ($i=0; $i < 1000; $i += 5) { 
    
    if($i >= 200 && $i <= 800) continue;{
        echo $i . " Hello World.\n";
    }
    if($i === 900) break;{

    }
    
}

?>