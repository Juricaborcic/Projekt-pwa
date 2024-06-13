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
                            <a href="#">Početna</a>
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
                <section role="main">
                        <div class="row">
                        <h2 class="category"><?php
                        echo "<span>".$row['kategorija']."</span>";
                        ?></h2>
                        <h1 class="title"><?php
                        echo $row['naslov'];
                        ?></h1>
                        <p>AUTOR:</p>
                        <p>OBJAVLJENO: <?php
                        echo "<span>".$row['datum']."</span>";
                        ?></p>
                        </div>
                        <section class="slika">
                        <?php
                        echo '<img src="' . UPLPATH . $row['slika'] . '">';
                        ?>
                        </section>
                        <section class="about">
                        <p>
                        <?php
                        echo "<i>".$row['sazetak']."</i>";
                        ?>
                        </p>
                        </section>
                        <section class="sadrzaj">
                        <p>
                        <?php
                        echo $row['tekst'];
                        ?>
                        </p>
                        
            </section>
        </div>
    <footer class="footer">
        <div class="container">
            <span>Jurica Borčić 0246111130</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>