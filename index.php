<?php
  if (isset($_POST['word0_0'])) {
  $word0 = $_POST['word0_0'];
  $word1 = $_POST['word0_1'];
  $word2 = $_POST['word0_2'];
  $word3 = $_POST['word0_3'];
  $word4 = $_POST['word0_4'];
  $word5 = $_POST['word0_5'];
  $word6 = $_POST['word0_6'];
  $word7 = $_POST['word0_7'];
  $content = '
  <p>Er heerst paniek in het koninkrijk '.$word2.'. Koning '.$word5.' is ten einde raad als koning '.$word5.'ten einde raad is, dan roept hij zijn ten-einde-raadsheer '.$word1.'.</p>
  <p>"'.$word1.'! Het is een ramp! Het is een schande!"</p>
  <p>"Sire, Majesteit, Uwe Luidrugtigheid, wat is er aan de hand?"</p>
  <p>"Mijn '.$word0.' is verdwenen! Zo maar, zonder waarschuwing. En ik had net '.$word4.' voor hem gekocht!"</p>
  <p>"Majesteit, uw '.$word0.' komt vast vanzelf weer terug?"</p>
  <p>"Ja, da\'s leuk en aardig, maar hoe moet ik in de tussentijd '.$word7.' leren?"</p>
  <p>"Maar Sire, daar kunt u toch ook u '.$word6.' voor gebruiken."</p>
  <p>"'.$word1.', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
  <p>"'.$word3.', Sire."</p>
  <button><a href="index.php">Opnieuw</a></button>
  ';
} else {
  $content = '<form class="" method="post">
    <label>Welk dier zou je nooit als huisdier willen hebben?</label>
    <input type="text" name="word0_0" required><br>
    <label>Wie is de belangerijkste persoon in je leven?</label>
    <input type="text" name="word0_1" required><br>
    <label>In welk land zou je graag willen wonen?</label>
    <input type="text" name="word0_2" required><br>
    <label>Wat doe je als je je verveelt?</label>
    <input type="text" name="word0_3" required><br>
    <label>Met welk speelgoed speelde je als kind het meest?</label>
    <input type="text" name="word0_4" required><br>
    <label>Bij welke docent spijbel je het liefst?</label>
    <input type="text" name="word0_5" required><br>
    <label>Als je €100.000,- had, wat zou je dan kopen?</label>
    <input type="text" name="word0_6" required><br>
    <label>Wat is je favoriete bezigheid?</label>
    <input type="text" name="word0_7" required><br>
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
  <body>
    <header>
      <img src="logo.png" alt="mad libs">
    </header>
    <main>
    <nav>
      <a class="link" href="index.php">Er heerst paniek...</a>
      <a class="link" href="onkunde.php">Onkunde</a>
    </nav>
    <h2>Er heerst paniek...</h2>
    <?php
    echo $content;
    ?>
    <footer>
      <p>Gemaakt door: Ayyoub Meijer.</p>
    </footer>
    </main>
  </body>
</html>
