<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- STYLES CSS -->
    <link rel="stylesheet" href="https://alfred024.github.io/CSS-mio/styles.css">
    
    <!-- Font Awesome -->
    <script
    src="https://kit.fontawesome.com/cdb751df44.js"
    crossorigin="anonymous"
    ></script>
</head>
<body>
    
    <form 
        class="width-50 padding-10 margin-auto box-shadow-dark flex-column justify-center bg-light-gray border-radius-30" 
        method="post" 
        action="./converter.php">
    
        <h1>Convertor de divisas a dólares</h1>
        
        <div class="flex margin-auto">
            <input required name="numValue" class="box-shadow-light padding-10 border-none" type="number" placeholder="">
            <select class="box-shadow-light border-none" name="moneyType" id="">
                <option style="background-image: url('./images/mx-flag.png');" value="MXN">
                    🇲🇽
                </option>
                <option style="background-image: url('./images/sp-flag.png');" value="EUR">
                    🇪🇸
                </option>
            </select>
        </div><br>

        <input value="Convertir" type="submit">
    </form>

    <div id="result_convertion">
        <p></p>
    </div>

</body>
</html>