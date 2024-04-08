<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>

    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>Интернет магазина</h2>
        <img src="herobanner_away_third_2000x.webp" alt="logo" width="450px">
        <input type="text" name="product_cat" placeholder="product_cat">
        <br>
        <input type="text" name="product_brand" placeholder="product_brand">
        <br>
        <input type="text" name="product_title" placeholder="product_title">
        <br>
        <input type="text" name="product_price" placeholder="product_price">
        <br>
        <input type="text" name="product_desc" placeholder="product_desc">
        <br>
        <!--<input type="text" name="product_keywords" placeholder="product_keywords">
        <br>-->
        
        <input type="file" id="file" name='product_image' style='display:none;'>
        <label for="file">Выбор изображения</label>
        <button name='upload'>Добавить продукт</button>
        <br><br>
        <a href="index.php">Главная</a>
        </form>
    </div>
    
    </center>

    
</body>
</html>