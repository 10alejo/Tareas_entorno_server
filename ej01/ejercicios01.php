<?php

$num1 = random_int(1, 10);
$num2 = random_int(1, 10);

echo "1º Número: $num1 <br>";
echo "2º Número: $num2 <br><br>";

echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
echo "$num1 ** $num2 = " . ($num1 ** $num2) . "<br>";
?>

    <?php

        $numero_aleatorio = rand(1,9);

        echo "Número generado $numero_aleatorio"."</br>";

        for ($i = 1; $i <= $numero_aleatorio; $i++) {

        $color = ($i %2 == 0) ? "blue" : "red";

        for ($j = 1; $j <= $i; $j++) {

            echo "<span style= 'color: $color'>$i</span>";
        }

        echo "</br>";

        }
       
    ?>
    
