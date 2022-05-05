<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="SpanishDictionary.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Spanish Dictionary</title>
    </head>
    <body>
        <h1 align="center">This is a English-Spanish Dictionary</h1>
<?php
    
    if($_GET["query"]){
        $kelime=$_POST["word"];
        $baglan=mysqli_connect("localhost","root","","dictionary");
        $result=mysqli_query($baglan,"SELECT spaWords FROM words WHERE engWords LIKE \"$kelime\"");
        $secondResult=$result->fetch_array();
        foreach($secondResult as $key=>$value){
            $finalResult=$value;
        }
        

        echo "
        <br><br>
    <div align=\"center\">
        <form action=\"EnglishSpanishDictionary.php?query=1\" method=\"POST\">
            
                <input type=\"text\" name=\"word\" placeholder=\"Please enter the word\" required/>
            
            
                <input type=\"submit\" class=\"btn btn-warning\" value=\"Translate\"/>
                
            
            <div align=\"center\">
                <br><br><p>$finalResult</p>
            </div>
    </div>
    
     ";
    }
    else{
        echo '
        <br><br>
        <div align="center">
        <form action="EnglishSpanishDictionary.php?query=1" method="POST">
            
                <input type="text" name="word" placeholder="Please enter the word" required/>
                <input type="submit" class="btn btn-warning" value="Translate"/>
        </form>
            
        </div>
        ';
    }
    



?>
</body>
</html>