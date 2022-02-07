<?php
        $operation = "";
        if($_GET["leftOperand"] && $_GET["leftOperand"] != "" && $_GET["rightOperand"] && $_GET["rightOperand"] != ""){
            $leftOperand = $_GET["leftOperand"];
            $rightOperand = $_GET["rightOperand"];
            $operation = $_GET["operation"];

            if($_GET["Operand1"] && $_GET["Operand1"] != ""){
                $res = $leftOperand + $rightOperand;
                $operation = "+";
            }

            if($_GET["Operand2"] && $_GET["Operand2"] != ""){
                $res = $leftOperand - $rightOperand;
                $operation = "-";
            }

            if($_GET["Operand3"] && $_GET["Operand3"] != ""){
                $res = $leftOperand * $rightOperand;
                $operation = "*";
            }

            if($_GET["Operand4"] && $_GET["Operand4"] != ""){
                $res = $leftOperand / $rightOperand;
                $operation = "/";
            }

            if($_GET["Operand5"] && $_GET["Operand5"] != ""){
                $res = $leftOperand % $rightOperand;
                $operation = "%";
            }
        }
        if($_GET["Operand1"] || $_GET["Operand2"] || $_GET["Operand3"] || $_GET["Operand4"] || $_GET["Operand5"]){
            // $operation = $_GET["operand1"] || $_GET["operand2"] || $_GET["operand3"] || $_GET["operand4"] || $_GET["operand5"];
            $esp = $_GET["leftOperand"];
            $esp .= $operation;
            $esp .= $_GET["rightOperand"];
        }

?>