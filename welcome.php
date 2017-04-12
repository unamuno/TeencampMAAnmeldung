<!DOCTYPE html>
<html lang="de">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Mitarbeiteranmeldung ❤️</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
<!-- Submit PHP Script
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php

$vorname = $nachname = $rufname = $strasse = $ort = $plz = $email = $phone = $geschlecht = $geburtstag = $gemeinde = $juleika = $infos = $kopieanmich = $whatsapp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $vorname = test_input($_POST["vorname"]);
  $nachname = test_input($_POST["nachname"]);
  $rufname = test_input($_POST["rufname"]);
  $strasse = test_input($_POST["strasse"]);
  $ort = test_input($_POST["ort"]);
  $plz = test_input($_POST["plz"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $geschlecht = test_input($_POST["geschlecht"]);
  $geburtstag = test_input($_POST["geburtstag"]);
  $juleika = test_input($_POST["juleika"]);
  $gemeinde = test_input($_POST["gemeinde"]);
  $infos = test_input($_POST["infos"]);
  $kopieanmich = test_input($_POST["kopieanmich"]);
  $whatsapp = test_input($_POST["whatsapp"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "$geschlecht";

$csv_file = 'survey.csv';
if (is_writable($csv_file)) {
  if (!$csv_handle = fopen($csv_file,'a')) {
    // this line is for troubleshooting
    echo "<p>Cannot open file $csv_file</p>";
    exit;
  }
}
$csv_item = "\"$vorname\";\"$nachname\";\"$rufname\";\"$strasse\";\"$ort\";\"$plz\";\"$email\";\"$phone\";\"geschlecht\";\"$geburtstag\";\"$juleika\";\"$gemeinde\";\"$kopieanmich\";\"$whatsapp\"\n";
if (is_writable($csv_file)) {
  if (fwrite($csv_handle, $csv_item) === FALSE) {
    //for testing
    echo "Cannot write to file";
    exit; 
  } 
}

fclose($csv_handle);
?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
    	<div class="one-half column">
        	<h2>Mitarbeiteranmeldung ❤️</h2>
        </div>
        <div class="five columns">
        	<a href="https://jugendkirche-soest.de/"><img class="u-max-full-width" src="images/logo.png"></a>
		</div>
    </div>
    <div class="row">
    	<h4>Vielen Dank für deine Anmeldung! ✅</h4>
    	<p>Wenn es so weit ist, bekommst du eine Mail bzw. WhatsApp mit weiteren Infos. In der Zwischenzeit schau doch mal auf der <a href="https://www.facebook.com/TEEN.CAMP.Kirchberghof/"> Facebook Page vom Teencamp</a> oder auf der Homepage der <a href="https://jugendkirche-soest.de"> Jugendkirche Soest</a> vorbei. Dort findest du Infos zum Teencamp, <a href="https://jugendkirche-soest.de/index.php/fotos">Bilder</a> und <a href="https://jugendkirche-soest.de/index.php/archiv/downloads/category/9-teencamp-2016">Predigten</a> vom letzten Teencamp.</p>
    </div>
    </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
