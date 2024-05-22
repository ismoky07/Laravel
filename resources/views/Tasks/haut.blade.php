<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../../public/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .top {
            background-color: #0056b3;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .top a {
            text-decoration: none;
            color: #fff;
        }
        .top img {
            vertical-align: middle;
            width: 50px; /* Ajoutez une largeur à votre logo */
            margin-right: 10px; /* Ajoutez un espacement entre le logo et le texte */
        }
        .top span {
            font-size: 24px;
            font-weight: bold;
        }
        h4 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="top">
    <a href="acceuil.php">
        <span>Ecole Supérieur en Ingenierie Management et Genie Civil</span><br />
        ESTEM - Casablanca
    </a>
</div>

<h4>
    <?php
    function afficherDate($lang)
    {
        $jours = [
            "AR" => ["الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت"],
            "FR" => ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
            "EN" => ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
        ];

        $months = [
            "AR" => ["يناير", "فبراير", "مارس", "أبريل", "ماي", "يونيو", "يوليوز", "غشت", "شتنبر", "أكتوبر", "نونبر", "دجنبر"],
            "EN" => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "FR" => ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"]
        ];

        $d = getdate();

        $wj = $d["wday"];
        $mj = $d["mday"];
        $m = $d["mon"];
        $y = $d["year"];

        $d = $jours[$lang][$wj] . " " . $mj . " " . $months[$lang][$m - 1] . " " . $y;
        return $d;
    }

    echo afficherDate("EN");
    ?>
</h4>
<br /><br />
</body>

</html>
