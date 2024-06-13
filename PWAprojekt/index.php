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
        <h1>Engleska</h1>
                    <?php
                include 'connect.php';
                define('UPLPATH', 'uploads/');
                ?>
                <section class="sport">
                <?php
                $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='Engleska' LIMIT 4";
                $result = mysqli_query($dbc, $query);
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                echo '<article>';
                echo'<div class="article">';
                echo '<div class="sport_img">';
                echo '<img src="' . UPLPATH . $row['slika'] . '"';
                echo '</div>';
                echo '<div class="media_body">';
                echo '<h4 class="title">';
                echo '<a href="clanak.php?id='.$row['id'].'">';
                echo $row['naslov'];
                echo '</a></h4>';
                echo '</div></div>';
                echo '</article>';
                }?>
                </section>

        <h1>Hrvatska</h1>
                    <?php
                include 'connect.php';
                ?>
                <section class="sport">
                <?php
                $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='Hrvatska' LIMIT 4";
                $result = mysqli_query($dbc, $query);
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                echo '<article>';
                echo'<div class="article">';
                echo '<div class="sport_img">';
                echo '<img src="' . UPLPATH . $row['slika'] . '"';
                echo '</div>';
                echo '<div class="media_body">';
                echo '<h4 class="title">';
                echo '<a href="clanak.php?id='.$row['id'].'">';
                echo $row['naslov'];
                echo '</a></h4>';
                echo '</div></div>';
                echo '</article>';
                }?>
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