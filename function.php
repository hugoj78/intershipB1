<?php
// On ouvre un session
session_start();

class Database {
    const DB_USER = "root";
    const DB_PASSWORD = "root";
    const DB_BDD = "mysql:dbname=intership;host=localhost;port=8889";
}


class UserCom {

    public $title;
    public $date;
    public $com;
    public $img;

  public function postArticle($title, $com, $img, $t1, $txt1, $t2, $txt2, $t3, $txt3) {

      // On ne peut poster un commentaire vide ou inexistant
      if (empty($title) && isset($title)) {
          throw new Exception("Vous devez remplir un commentaire valide");
      }

      if (empty($com) && isset($com)) {
          throw new Exception("Vous devez remplir un commentaire valide");
      }


      // Certains caractères ont des significations spéciales en HTML, et doivent être remplacés par des entités HTML pour conserver leurs significations
      $com = htmlspecialchars($com);
      $title = htmlspecialchars($title);
      $t1 = htmlspecialchars($t1);
      $txt1 = htmlspecialchars($txt1);
      $t2 = htmlspecialchars($t2);
      $txt2 = htmlspecialchars($txt2);
      $t3 = htmlspecialchars($t3);
      $txt3 = htmlspecialchars($txt3);

      // On donne le format de la date
      $date = date("y-m-d h:i:s");

      // On se connecte à la base de données
      $bdd = new PDO(Database::DB_BDD,Database::DB_USER,Database::DB_PASSWORD);
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

      // On stock dans la base de données le commentaire de l'utilisateur
      $insertcom = $bdd->prepare('INSERT INTO article(title, date, text, img, title1, text1, title2, text2, title3, text3) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
      $insertcom->execute(array($title, $date, $com, $img, $t1, $txt1, $t2, $txt2, $t3, $txt3));

      // si la bdd n'a pas crashé, on met à jour notre classe
      $this->title = $title;
      $this->com = $com;
      $this->img = $img;
      $this->date = $date;

  }
}

class AffArticle {

  // La function affAllCom() permet d'afficher tous les commentaires de tous les utilisateurs
  public function Article() {

    // On se connecte à la base de données
    $bdd = new PDO(Database::DB_BDD,Database::DB_USER,Database::DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    // On va chercher les commentaires avec le pseudo, la date et le lien
    $post =$bdd->prepare('SELECT * FROM article ORDER BY id DESC');
    $post->execute();

    while ($c = $post->fetch()) {
      echo "<hr>";
      echo "Id article : " . $c['id'] . "<br>";
      echo "Title article : " . $c['title'] . "<br>";
      echo "Date article : " . $c['date'] . "<br>";
      echo "Text article : " . $c['text'] . "<br>";
      echo "Image article : " . "<br>" . '<img style="max-width: 200px; max-height: 200px;" src="data:image/jpeg;base64,'.base64_encode( $c['img'] ).'"/>' . '<br><br>';
      echo "Title 1 : " . $c['title1'] . "<br>";
      echo "Text 1 : " . $c['text1'] . "<br>";
      echo "Title 2 : " . $c['title2'] . "<br>";
      echo "Text 2 : " . $c['text2'] . "<br>";
      echo "Title 3 : " . $c['title3'] . "<br>";
      echo "Text 3 : " . $c['text3'] . "<br><br>";

    }
  }

  public function AffBlog() {
    // On se connecte à la base de données
    $bdd = new PDO(Database::DB_BDD,Database::DB_USER,Database::DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    // On va chercher les commentaires avec le pseudo, la date et le lien
    $post =$bdd->prepare('SELECT * FROM article ORDER BY id');
    $post->execute();

    while ($c = $post->fetch()) {
      echo '<div class="col-md-6">
              <div class="blog-item">
                <figure class="thumb">
                  <img style="max-width: 540px; max-height: 360px;" src="data:image/jpeg;base64,'.base64_encode( $c['img'] ).'"/>
                </figure>
                <article class="blog-content">
                  <h2> ' . $c['title'] . ' </h2>
                  <div class="blog-meta">June 10, 2018</div>
                  <p>' . $c['text'] . '</p>
                  <a href="blog.php?id=' . $c['id'] . '" class="read-more">Read More</a>
                </article>
              </div>
            </div>';
    }
  }

  public function AffSpeBlog($id) {
    // On se connecte à la base de données
    $bdd = new PDO(Database::DB_BDD,Database::DB_USER,Database::DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $post =$bdd->prepare('SELECT * FROM article WHERE id = ? ORDER BY id DESC');
    $post->execute(array($id));

    while ($c = $post->fetch()) {
      echo '
      <section class="intro-section">
    		<div class="container">
    			<div class="row">
    				<div class="col-12">';
            if ($c['id'] == 1) {
              echo '<h2 class="section-blog"><sc style="color: #0e5077;">Sam</sc><sc style="color: #4e9edb;">Cloud</sc> presentation</h2>';
            } else {
    					echo '<h2 class="section-blog">'. $c['title'] . '</h2>';
            }
            echo '
            </div>
    			</div>
    		</div>
    	</section>

      <section class="page-section">
        <div class="container">
          <div class="row">
    				<div class="col-lg-5">
    					<figure class="">
    						<img style="max-width: 460px; max-height: 400px; border-radius: 5px;" src="data:image/jpeg;base64,'.base64_encode( $c['img'] ).'"/>
    					</figure>
    				</div>
    				<div class="col-lg-6">
    					<p>' . $c['text'] . '</p>
    				</div>
    				<div class="col-lg-12">
    					<figure class="mt-5">
    						<div>
    							<h2>' . $c['title1'] . '</h2>
    						</div>
    					</figure>
    					<p>'. $c['text1'] . '</p>
    					<figure class="mt-5">
    						<div>
    							<h2>'. $c['title2'] . '</h2>
    						</div>
    					</figure>
    					<p>'. $c['text2'] . '</p>
              <figure class="mt-5">
    						<div>
    							<h2>'. $c['title3'] . '</h2>
    						</div>
    					</figure>
    					<p>'. $c['text3'] . '</p>
    				</div>
    			</div>
        </div>
      </section>';
    }
  }
}

class contact {

  // La function affAllCom() permet d'afficher tous les commentaires de tous les utilisateurs
  public function AddContact($name, $email, $subject, $message) {

    // On se connecte à la base de données
    $bdd = new PDO(Database::DB_BDD,Database::DB_USER,Database::DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    // On donne le format de la date
    $date = date("y-m-d h:i:s");

    // On stock dans la base de données le commentaire de l'utilisateur
    $insertcom = $bdd->prepare('INSERT INTO Contact(name, email, subject, message, date) VALUES(?, ?, ?, ?, ?)');
    $insertcom->execute(array($name, $email, $subject, $message, $date));

  }

  public function AffContact() {

    // On se connecte à la base de données
    $bdd = new PDO(Database::DB_BDD,Database::DB_USER,Database::DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    // On va chercher les commentaires avec le pseudo, la date et le lien
    $post =$bdd->prepare('SELECT * FROM Contact ORDER BY id DESC');
    $post->execute();

    echo "Les derniers messages via la pages contact : " . "<br> <br>";
    while ($c =$post->fetch()) {
      echo "Commentaire numéro " . $c['id'] . " :" . "<br>";
      echo "Nom : " .$c['name'] . "<br>";
      echo "Email : " .$c['email'] . "<br>";
      echo "Subject : " .$c['subject'] . "<br>";
      echo "Date : " .$c['date'] . "<br>";
      echo "Message : " .$c['message'] . "<br> <br>";
      echo "<hr>";

    }
  }
}


?>
