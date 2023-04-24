<html>
    <body>
        <?php
        $operand1=$_GET['operand1'];
        $operand2=$_GET['operand2'];
        $operator=$_GET['operator'];
        switch($operator){
            case 'ADD':
                $result=$operand1 + $operand2;
                break;
            case 'SUB':
                $result=$operand1 - $operand2;
                break;
            case 'MUL':
                $result=$operand1 * $operand2;
                break;
            default:
            $result="Invalid";
        }
        echo "The $operator of $operand1 and $operand2 is $result";
        ?>
        </html>
    </body>
