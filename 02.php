    <?php 
    // Crear página que simule un calculadora sencilla, mediante un único archivo 02.php 
    // que mostrará un formularios con dos campos numéricos y 4 botones con los 4 tipos 
    // de operaciones + - * /  posibles. Se incluirá también 3 controles de tipo radio que 
    // indicarán como queremos que se muestre el resultado en decimal, binario o hexadecimal.
    //
    // El programa php debe comprobar que se han recibido los dos valores numéricos y 
    // detectará el error de intento de división por cero. Mostrará el resultado calculado 
    // según el formato elegido. Por omisión se mostrará en decimal.

    // FUNCIONES AUXILIARES

    function operar($val1,$val2,$operacion):float {
    
switch ($operacion) {
        case '+':
            $resultado = $val1 + $val2;
            break;  
            case '-':
            $resultado = $val1 - $val2;
                break;
            case '*':
            $resultado = $val1 * $val2; 
            break;
            case '/':
            $resultado = $val1 / $val2;
            break;
        
    }
    return $resultado;
   }
    function imprimirConFormato($formato,$valor)
    {
        if ($formato == "dec") {
            return number_format($valor, 2);
        } elseif ($formato == "bin") {
            return decbin($valor);
        } elseif ($formato == "hex") {
            return dechex($valor);
        }
    
    }

    // Si fuera por POST podia chequear $_SERVER['REQUEST_METHOD'] == 'POST'
    if (isset($_GET["operacion"])) {
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $operacion = $_REQUEST['operacion'];
        $formato = $_REQUEST['formato'];
        if (!is_numeric($num1) || !is_numeric($num2)) {
            $msg = "debe introducir dos números";
             require_once ("02vista.php");
            exit();
        }
        $resultado = operar($num1 , $num2, $operacion);
        $msg = imprimirConFormato($formato, $resultado);
        
    }
    require_once ("02vista.php");
    ?>