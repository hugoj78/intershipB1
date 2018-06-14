<?php
require 'function.php';

if (isset($_POST['envoie_com'])) {

    // echo $_POST['title'] . "  ";
    // echo $_POST['com'] . "   ";
    // echo $_FILES['img']['tmp_name'];
    $image = file_get_contents($_FILES['img']['tmp_name']);
    //echo $image;
    // On essaye de poster le commentaire grâce à la fonction postCom()
    try {
      $user = new UserCom;
      $user->postArticle($_POST['title'], $_POST['com'], $image, $_POST['title1'], $_POST['text1'], $_POST['title2'], $_POST['text2'], $_POST['title3'], $_POST['text3']);

    }
    // Si il y a une erreur, on informe l'utilisateur
    catch (Exception $e) {
        echo 'Message d\'erreur : ', $e->getMessage();
    }

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Intership</title>
	<meta charset="UTF-8">
	<meta name="description" content="Egu Intership">
	<meta name="keywords" content="egu, intership, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

</head>

<body>

  <h1 style="text-align: center;">Espace Admin</h1>
  <hr><hr>
  <p>Ajouter un article</p>
  <form method="POST" action="" enctype="multipart/form-data">
      <textarea type="texte" name="title" style="min-width: 200px; min-height: 50px;" placeholder="Votre titre"></textarea>
      <textarea type="texte" name="com" style="min-width: 500px; min-height: 50px;" placeholder="Votre pre-commentaire"></textarea>
      <br>
      <p>Your title of paragraph number 1 : </p>
      <textarea type="texte" name="title1" style="min-width: 200px; min-height: 50px;" placeholder="Votre titre"></textarea>
      <br>
      <p>Your text of paragraph number 1 : </p>
      <textarea type="texte" name="text1" style="min-width: 500px; min-height: 50px;" placeholder="Votre commentaire"></textarea>
      <br>
      <p>Your title of paragraph number 2 : </p>
      <textarea type="texte" name="title2" style="min-width: 200px; min-height: 50px;" placeholder="Votre titre"></textarea>
      <br>
      <p>Your text of paragraph number 2 : </p>
      <textarea type="texte" name="text2" style="min-width: 500px; min-height: 50px;" placeholder="Votre commentaire"></textarea>
      <br>
      <p>Your title of paragraph number 3 : </p>
      <textarea type="texte" name="title3" style="min-width: 200px; min-height: 50px;" placeholder="Votre titre"></textarea>
      <br>
      <p>Your text of paragraph number 3 : </p>
      <textarea type="texte" name="text3" style="min-width: 500px; min-height: 50px;" placeholder="Votre commentaire"></textarea>
      <br>
      Ajout d'une image : <input enctype="multipart/form-data" type="file" name="img" id="image" accept="image/">
      <br><br>
      <input type="submit" name="envoie_com" value="Poster">
  </form>
  <hr><hr>
</body>

<?php
try {
  $user = new contact;
  $user->AffContact();
}
// Si il y a une erreur, on informe l'utilisateur
catch (Exception $e) {
    echo 'Message d\'erreur : ', $e->getMessage();
}

try {
  $aff = new AffArticle;
  $aff->article();

} catch (Exception $e) {
  echo "Message d\'erreur : ", $e->getMessage();
}
?>
