<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $allInformations=simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml"); ?>
    <title><?php echo $allInformations["Date"] ?> Forex Kurları</title>
    <style>
        th{
            background-color:gray;
        }
        .renkli{
            background-color:aqua;
        }
    </style>
</head>
<body> 
    <table width="500px" align="center">
            <th>DÖVİZ ADI</th>
            <th>ALIŞ</th>
            <th>SATIŞ</th>
            
       
    <?php
        for($i=0;$i<21;$i++){
            if($i%2==0){
            echo  "<tr><td>".$allInformations->Currency[$i]->Isim."</td>";
            echo  "<td>".$allInformations->Currency[$i]->ForexBuying."</td>";
            echo  "<td>".$allInformations->Currency[$i]->ForexSelling."</td></tr>";
            }
            else{
                echo  "<tr><td class='renkli'>".$allInformations->Currency[$i]->Isim."</td>";
                echo  "<td class='renkli'>".$allInformations->Currency[$i]->ForexBuying."</td>";
                echo  "<td class='renkli'>".$allInformations->Currency[$i]->ForexSelling."</td></tr>";
            } 
        }
        ?>    
    </table>
    </body>
</html>