<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Panel</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Online Store Controle</h2>
                
                <img src="storeLogo.jpg" alt="Logo" width="300px" height="300px">
                <BR></BR>
                <label for="name">Product name:</label>
                <input type="text" name="name">
                <br>
                <label for="price">Product price:</label>
                <input type="text" name='price'>
                <br>
                <label for="image">Upload Image:</label>
                <input type="file"  name='image'/>
                <br>
                <br>
                <button name='upload' id="uploadbotton">UPLOAD 🔼 </button>
                <br>
                <br>
                <a href="products.html" id="show">Show all products</a>
            </form>
        </div>
        <p id="devby">Developed by ANIS</p>
    </center>
</body>
</html>