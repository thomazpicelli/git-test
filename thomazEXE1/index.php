
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         
            $p1 = 7;
            $m1 = 8;
            $m2 = 5.5;
            $Proj1 = 4;
            $proj2 = 2;
            $proj3 = 7; 
            $proj4 = 6;
            $trabf = 6;
            $proc = 4;
            $pf = 10;
            $mi = (30*$p1 + 10*$m1 + 10*$m2  + 5*$Proj1 + 5*$proj2 + 5*$proj3 +5*$proj4 + 10*$trabf + 20*$proc)/100;
            
            if ($mi >=7.5){

                $mf == $mi;
                echo "Aprovado sem Prova Final,Parabens!!! Boas ferias";
            }

            else {

                $mf=($pf + $mi)/2;

                if ($mf >=5){

                    echo " Aprovado com Prova Final. Agora já pode descansar tranquilo.";
 
                }

                else { 

                    echo " Reprovado,não foi dessa vez. Ano que vem tem mais TWII";

                    echo " <p> Media Intermediaria: $mi, Media Final: $mf </p>";
	        }
            }
         
        echo "<br><br><br><br>";
        ?>
        
        <?php 
            echo "<table width='0' border='1'> 
                <tr>
                    <td><b>ID</td>   
                    <td><b>NOME</td> 
                    <td><b>DESC</td>
                </tr>";
                    
            for($i = 1; $i<7; $i = $i + 1){ 
                if ($i % 2 == 0){
                    echo "<tr > 
                            <td><b>id</td>   
                            <td><b>nome</td> 
                            <td><b>desc</td> 
                        </tr>";
                }            
                else {    
                    echo "<tr> 
                        <td>id</td>   
                        <td>nome</td> 
                        <td>desc</td> 
                    </tr>";
                }
                    
                } 
            echo "</table>";
        ?>
    </body>
</html>
