<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adff.css">
</head>
<body>
    <div class="container">  
    <button type="submit" class="btn" onclick="openpopup()">Click here</button>
    <div class="popup" id="popup">
        <img src="https://png.pngtree.com/png-vector/20221215/ourmid/pngtree-green-check-mark-png-image_6525691.png" alt="">
        <h2>THANK YOU!</h2>
        <p>your order has been successfully. Thanks!</p>
        <button type="button" onclick="closepopup()">Ok</button>
    </div>

</div>
<script>
    let popup = document.getElementById("popup");

    function openpopup(){
        popup.classList.add("open-popup");
    }
    function closepopup(){
        popup.classList.remove("open-popup");
    }
</script>
</body>
</html>
