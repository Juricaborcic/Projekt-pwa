<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSFERI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div class="container-fluid">
        <header>
            <div class="row header">
                <nav>
                    <h1>MOJI TRANSFERI</h1>
                    <ul>

                        <li>
                            <a href="index.php">Početna</a>
                        </li>
                        <li>
                            <a href="unos.php">Unos</a>
                        </li>
                        <li>
                            <a href="kategorija.php?id=Hrvatska">Hrvatska</a>
                        </li>
                        <li>
                            <a href="kategorija.php?id=Engleska">Engleska</a>
                        </li>
                        <li>
                            <a href="administracija.php">Administracija</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <div class="container-fluid tijelo">
        
    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $naslovVijesti = $_POST['NaslovVijesti'];
        $sazetakVijesti = $_POST['SazetakVijesti'];
        $tekstVijesti = $_POST['TekstVijesti'];
        $kategorijaVijesti = $_POST['KategorijaVijesti'];
        $arhiva = isset($_POST['arhiva']) ? true : false;
    
        $imeSlike=$_POST['SlikaVijesti'];
        $path='uploads/' . $imeSlike;
        

    }
        ?>
    <h2><?php echo $naslovVijesti ?></h2>
    <h4><?php echo $sazetakVijesti ?> </h4>
    <p><?php echo $kategorijaVijesti ?> </p>
    <div class="image-container">
                    <?php       if (file_exists($path)) {
                echo "<img src='$path' alt='Slika'>";
                    } else {
                    echo "Datoteka ne postoji.";
                    }
                    ?>
                    <div class="tekst">
                        <p> <?php echo $tekstVijesti ?> <p>
                    </div>
    </div>

        </div>
    <footer class="footer">
        <div class="container">
            <span>Jurica Borčić 0246111130</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>