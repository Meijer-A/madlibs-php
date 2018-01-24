<?php
  if (isset($_POST['word1_0'])) {
  $word0 = $_POST['word1_0'];
  $word1 = $_POST['word1_1'];
  $word2 = $_POST['word1_2'];
  $word3 = $_POST['word1_3'];
  $word4 = $_POST['word1_4'];
  $word5 = $_POST['word1_5'];
  $word6 = $_POST['word1_6'];
  $content = '
  <p>Er zijn veel mensen die niet kunnen' .$word0.'. Neem nou '.$word1.'. Zelfs met de hulp van een '.$word3.' of zelfs '.$word2.' kan '.$word1.' niet '.$word0.'. Dat heeft te maken met een gebrek aan '.$word4.', maar met een te veel aan '.$word5.'. Te veel '.$word5.' leidt tot '.$word6.' en dat is niet goed als je wilt '.$word0.'. Helaas voor '.$word1.'</p>
  <button><a href="onkunde.php">Opnieuw</a></button>
  ';
  } else {
  $content = '<form class="" action="onkunde.php" method="post">
  <label>Wat zou je graag willen kunnen?</label>
  <input type="text" name="word1_0" required><br>
  <label>Met welke persoon kun je goed opschieten?</label>
  <input type="text" name="word1_1" required><br>
  <label>Wat is je favoriete getal?</label>
  <input type="text" name="word1_2" required><br>
  <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
  <input type="text" name="word1_3" required><br>
  <label>Wat is je beste persoonlijke eigenschap?</label>
  <input type="text" name="word1_4" required><br>
  <label>Wat is je Slechtste persoonlijke eigenschap?</label>
  <input type="text" name="word1_5" required><br>
  <label>Wat is het ergste wat je kan overkomen?</label>
  <input type="text" name="word1_6" required><br>
  <button type="submit" name="button">Versturen</button>
  </form>';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>madlibs</title>
  </head>
  <header>
    <img src="logo.png" alt="mad libs">
  </header>
  <main>
  <nav>
    <a class="link" href="index.php">Er heerst paniek...</a>
    <a class="link" href="onkunde.php">Onkunde</a>
  </nav>
  <h2>Onkunde</h2>
  <?php
  echo $content;
  ?>
  <footer>
    <p>Gemaakt door: Ayyoub Meijer.</p>
  </footer>
  </main>
</html>
