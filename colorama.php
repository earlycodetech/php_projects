<!DOCTYPE html>
<html>
    <head>
        <title>Colorama</title>
        <style>
            table{width:600px;margin:0 auto;text-align:center;margin-top:80px;}
            td{border:1px solid #000;}
            table,td{border-collapse:collapse;}
            td{height:120px;}
        </style>
    </head>
    <body>
        <!-- Colors representation
        1.red #E74C3C,
        2.green #27AE60, 
        3.yellow #F1C40F 
        -->
        <table>
            <tr>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
            </tr>
            <tr>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
            </tr>
            <tr>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
                <td style="background-color:<?php if(rand(1,3)==1){echo '#E74C3C';}elseif(rand(1,3)==2){echo '#27AE60';}elseif(rand(1,3)==3){echo '#F1C40F';}?>"></td>
            </tr>
        </table>
    </body>
</html>

<?php 
// HERE IS THE SIMPLIFIED PHP CODE

// if(rand(1,3)==1){
//     echo '#E74C3C';
// }
// elseif(rand(1,3)==2){
//     echo '#27AE60';
// }
// elseif(rand(1,3)==3){
//     echo '#F1C40F';
// }
?>
