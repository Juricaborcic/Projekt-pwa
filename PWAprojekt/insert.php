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