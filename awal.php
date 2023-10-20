<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>keliling lingkaran</h1>
    <p id="kelilingLingkaran"></p>

    <h1>keliling balok</h1>
    <p id="kelilingBalok"></p>

    <script>
        var jariJariLingkaran = 5;
        var panjangBalok = 10;
        var lebarBalok = 4;
        var tinggiBalok = 6;
        var kelilingLingkaran = 2 * Math.PI * jariJariLingkaran; jariJariLingkaran;

        var kelilingBalok = 2 * (panjangBalok + lebarBalok + tinggiBalok); jariJariLingkaran
        
        document.getElementById('kelilingLingkaran').innerHTML = "keliling lingkaran : " +kelilingLingkaran;

        document.getElementById("kelilingBalok").innerHTML = "keliling balok :" +kelilingBalok;
    </script>
</body>
</html>