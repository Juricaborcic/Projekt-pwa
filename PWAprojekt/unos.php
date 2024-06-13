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
        <form name="unos" action="skripta.php" method="POST">
            <div class="form-group">
                <label for="NaslovVijesti">Naslov vijesti</label>
                <input type="text" class="form-control" id="NaslovVijesti" name="NaslovVijesti" placeholder="Unesite naslov vijesti">
                <span id="naslovError" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="SazetakVijesti">Kratki sažetak vijesti</label>
                <textarea class="form-control" id="SazetakVijesti" name="SazetakVijesti" placeholder="Unesite kratki sažetak vijesti"></textarea>
                <span id="sazetakError" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="TekstVijesti">Tekst vijesti</label>
                <textarea class="form-control" id="TekstVijesti" name="TekstVijesti" placeholder="Unesite tekst vijesti"></textarea>
                <span id="tekstError" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="KategorijaVijesti">Kategorija vijesti</label>
                <select class="form-control" id="KategorijaVijest" name="KategorijaVijesti">
                    <option value="Hrvatska">Hrvatski transferi</option>
                    <option value="Engleska">Engleski transferi</option>
                    <option value="Spanjolska">Španjolski transferi</option>
                    <option value="Italija">Talijanski transferi</option>
                    <option value="Njemacka">Njemački transferi</option>
                    <option value="Francuska">Francuski transferi</option>
                    <option value="drugi">Drugi transferi</option>
                </select>
                <span id="kategorijaError" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="SlikaVijesti">Odaberite sliku</label>
                <input type="file" class="form-control-file" id="SlikaVijesti" name="SlikaVijesti">
                <span id="slikaError" class="text-danger"></span>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="arhiva" name="arhiva">
                <label class="form-check-label" for="arhiva">Spremiti u arhivu</label>
            </div>
            <button type="reset" class="btn btn-primary mt-3">Poništi</button>
            <button type="submit" class="btn btn-primary mt-3">Prihvati</button>
        </form>
    </div>
    <footer class="footer">
        <div class="container">
            <span>Jurica Borčić 0246111130</span>
        </div>
    </footer>
    <?php
        include 'connect.php';
        $picture = $_FILES['SlikaVijesti']['name'];
        $title=$_POST['NaslovVijesti'];
        $about=$_POST['SazetakVijesti'];
        $content=$_POST['TekstVijesti'];
        $category=$_POST['KategorijaVijesti'];
        $date=date('d.m.Y.');
        if(isset($_POST['arhiva'])){
        $archive=1;
        }else{
        $archive=0;
        }
        $target_dir = 'uploads/'.$picture;
        move_uploaded_file($_FILES["SlikaVijesti"]["tmp_name"], $target_dir);
        $query = "INSERT INTO vijesti (datum, naslov, sazetak, tekst, slika, kategorija,
        arhiva ) VALUES ('$date', '$title', '$about', '$content', '$picture',
        '$category', '$archive')";
        $result = mysqli_query($dbc, $query) or die('Error querying databese.');
        mysqli_close($dbc);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>