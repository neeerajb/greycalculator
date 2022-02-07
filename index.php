<!DOCTYPE html>
<html>
<head>
<title>Grey Box Calculator</title>

<?php include "server.php" ?>

<style>
    label {
      display: block;
      margin-left: 120px;
      text-indent: -15px;
    }
    input {
      width: 15px;
      height: 15px;
      padding: 0;
      margin: 10 10 10 10;
      vertical-align: bottom;
      position: relative;
      top: -1px;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body style="background-color:3 4 5">

    <div style="width: 100%; display: flex; flex-wrap: wrap; margin-top: 100px;">
        <div style="width: 30%; display: flex; justify-content: center; margin-left: 4%;"><h3>Left Operand</h3></div>
        <div style="width: 30%; display: flex; justify-content: center;"></div>
        <div style="width: 30%; display: flex; justify-content: center; margin-right: 4%;"><h3>Right Operand</h3></div>
    </div>
    <form method="get">
    <div style="width: 100%; display: flex; flex-wrap: wrap;">
        <div style="width: 30%; display: flex; justify-content: center; margin-left: 4%;">
                <input type="text" id="leftOperand" name="leftOperand" value="" style="width: 140px; height: 30px; margin-top: 0;">
        </div>
        <div style="width: 30%; display: inline-block;">
                <label>
                    <input type="checkbox" id="Operand1" name="Operand1">+ Addition
                </label>

                <label>
                    <input type="checkbox" id="Operand2" name="Operand2">- subtraction
                </label>
                
                <label>
                    <input type="checkbox" id="Operand3" name="Operand3">* Multiplication
                </label>
                
                <label>
                    <input type="checkbox" id="Operand4" name="Operand4">/ Division
                </label>
                
                <label>
                    <input type="checkbox" id="Operand5" name="Operand5">% Remainder
                </label>
        </div>
        <div style="width: 30%; display: flex; justify-content: center; margin-right: 4%;">
                <input type="text" id="rightOperand" name="rightOperand" value="" style="width: 140px; height: 30px; margin-top: 0;">
        </div>
    </div>

    <div style="width: 100%; display: flex; flex-wrap: wrap; margin-top: 100px;">
        <div style="width: 30%; display: flex; justify-content: center; margin-left: 4%;">
                <input type="submit" id="" name="" value="Calculate" style="width: 140px; height: 40px; margin-top: 0;">
        </div>
        <div style="width: 30%; display: flex; justify-content: center;"></div>
        <div style="width: 30%; display: flex; justify-content: center; margin-right: 4%;"></div>
    </div>
</form>
    <div style="width: 100%; display: flex; flex-wrap: wrap; margin-top: 100px;">
        <div style="width: 30%; display: flex; justify-content: center; margin-left: 4%;"><h3>Expression</h3></div>
        <div style="width: 30%; display: flex; justify-content: center; border: 1px black solid;"><h3><?php echo $esp ?></h3></div>
        <div style="width: 30%; display: flex; justify-content: center; margin-right: 4%;"></div>
    </div>

    <div style="width: 100%; display: flex; flex-wrap: wrap; margin-top: 100px;">
        <div style="width: 30%; display: flex; justify-content: center; margin-left: 4%;"><h3>Result</h3></div>
        <div style="width: 30%; display: flex; justify-content: center; border: 1px black solid;"><h3><?php echo $res ?></h3></div>
        <div style="width: 30%; display: flex; justify-content: center; margin-right: 4%;"></div>
    </div>

<?php

    // $("input:checkbox").on('click', function(){
    //     var $box = $(this);
    //     if ($(this).is(":checked")){
    //         var group = "input:checkbox[name='" + $box.attr("name") + "']";
    //         $(group).prop("checked", false);
    //         $box.prop("checked", true);
    //     } else {
    //         $box.prop("checked", false);
    //     }
    // });

    // if(isset($_GET["submit"])){
    //     // $link = "server.php?leftOperand=";
    //     // $link .= $_GET["leftOperand"];
    //     // $link .= "&rightOperand=";
    //     // $link .= $_GET["rightOperand"];
    //     // $link .= "&operantion=";
    //     // $link .= $_GET["operand1"] || $_GET["operand2"] || $_GET["operand3"] || $_GET["operand4"] || $_GET["operand5"];
    //     // header("Location: "+ $link);
        
    //     $esp = $_GET["leftOperand"] + $_GET["rightOperand"];
    // }
?>

</body>
</html>