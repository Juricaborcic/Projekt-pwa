<?php $query = "SELECT * FROM vijesti";
$result = mysqli_query($dbc, $query);
define('UPLPATH', 'uploads/');
while($row = mysqli_fetch_array($result)) {

 echo '<form enctype="multipart/form-data" action="" method="POST">
 <div class="form-item">
 <label for="title">Naslov vjesti:</label>
 <div class="form-field">
 <input type="text" name="title" class="form-field-textual"
value="'.$row['naslov'].'">
 </div>
 </div>
 <div class="form-item">
 <label for="about">Kratki sadržaj vijesti (do 50
znakova):</label>
 <div class="form-field">
 <textarea name="about" id="" cols="30" rows="10" class="formfield-textual">'.$row['sazetak'].'</textarea>
 </div>
 </div>
 <div class="form-item">
 <label for="content">Sadržaj vijesti:</label>
 <div class="form-field">
 <textarea name="content" id="" cols="30" rows="10" class="formfield-textual">'.$row['tekst'].'</textarea>
 </div>
 </div>
 <div class="form-item">
 <label for="pphoto">Slika:</label>
 <div class="form-field">
14
 <input type="file" class="input-text" id="pphoto"
value="'.$row['slika'].'" name="pphoto"/> <br><img src="' . UPLPATH .
$row['slika'] . '" width=100px>
// pokraj gumba za odabir slike pojavljuje se umanjeni prikaz postojeće slike
 </div>
 </div>
 <div class="form-item">
 <label for="category">Kategorija vijesti:</label>
 <div class="form-field">
 <select name="category" id="" class="form-field-textual"
value="'.$row['kategorija'].'">
 <option value="sport">Sport</option>
 <option value="kultura">Kultura</option>
 </select>
 </div>
 </div>
 <div class="form-item">
 <label>Spremiti u arhivu:
 <div class="form-field">';
 if($row['arhiva'] == 0) {
 echo '<input type="checkbox" name="archive" id="archive"/>
Arhiviraj?';
 } else {
 echo '<input type="checkbox" name="archive" id="archive"
checked/> Arhiviraj?';
 }
 echo '</div>
 </label>
 </div>
 </div>
 <div class="form-item">
 <input type="hidden" name="id" class="form-field-textual"
value="'.$row['id'].'">
 <button type="reset" value="Poništi">Poništi</button>
 <button type="submit" name="update" value="Prihvati">
Izmjeni</button>
 <button type="submit" name="delete" value="Izbriši">
Izbriši</button>
 </div>
 </form>';
}
