<?php
$title = "The Christmas Song";
$artist = "Nat King Cole";
$mood = "festive & warm";

$verseCount = 3;
$repeatChorus = 2;
$totalSections = $verseCount + $repeatChorus;

$typeJuggle1 = "5" + 3;
$typeJuggle2 = (int)"10 gifts" * 2;

$nouns = ["Chestnuts", "Jack Frost", "Yuletide carols", "choir", "turkey", "mistletoe", "eyes", "Santa", "toys", "reindeers"];
$verbs = ["roasting", "nipping", "being sung", "dressed up", "make", "find", "sleep", "spy", "fly", "offering"];
$adjectives = ["bright", "tiny", "simple"];

$verse1 = [
"{$nouns[0]} {$verbs[0]} on an open fire",
"{$nouns[1]} {$verbs[1]} at your nose",
"{$nouns[2]} {$verbs[2]} by a {$nouns[3]}",
"And folks {$verbs[3]} like Eskimos",
"Everybody knows a {$nouns[4]} and some {$nouns[5]}",
"{$verbs[4]} to make the season {$adjectives[0]}",
"{$adjectives[1]} tots with their {$nouns[6]} all aglow",
"Will {$verbs[6]} hard tonight"
];

$verse2 = [
"They know that {$nouns[7]}'s on his way",
"He's loaded lots of {$nouns[8]} and goodies on his sleigh",
"And every mother's child is gonna {$verbs[7]}",
"To see if {$nouns[9]} really know how to {$verbs[8]}"
];

$chorus = [
"And so I'm {$verbs[9]} this {$adjectives[2]} phrase",
"To kids from one to ninety-two",
"Although it's been said many times, many ways",
"Merry Christmas to you"
];
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Lyric Remix – The Christmas Song</title>
<style>
body {
  font-family: "Georgia", serif;
  background: linear-gradient(to bottom, rgb(172, 16, 5),rgb(5, 71, 5)); /* red to green */
  color: #fff;
  padding: 40px;
  line-height: 1.8;
  background-repeat: repeat;
}

h1 {
  font-size: 2.5em;
  color:rgb(5, 71, 5);
  text-shadow: 2px 2px 6px rgba(0,0,0,0.5);
  margin-bottom: 10px;
}

h2 {
  font-size: 1.5em;
  color: #fff;
  margin-bottom: 15px;
  border-bottom: 2px solid rgb(5, 71, 5);
  display: inline-block;
  padding-bottom: 5px;
}

p {
  margin: 8px 0;
}

.section {
  margin: 30px 0;
  padding: 20px;
  background: rgba(255, 255, 255, 0.1);
  border-left: 5px solid rgb(5, 71, 5);
  border-radius: 8px;
}

hr {
  border: none;
  border-top: 2px dashed rgb(5, 71, 5);
  margin: 30px 0;
}

strong {
  color: rgb(255, 255, 255);;
}

.section p {
  font-style: italic;
}

.section:nth-child(even) {
  background: rgba(255, 255, 255, 0.15);
}

body::before {
  content: "🎅 🎄 ❄️";
  display: block;
  text-align: center;
  font-size: 2em;
  margin-bottom: 20px;
}

footer {
  text-align: center;
  margin-top: 40px;
  font-size: 0.9em;
  color: rgb(172, 16, 5);
}
</style>
</head>
<body>

<h1><?= $title ?></h1>
<h2>by <?= $artist ?></h2>

<p><strong>Mood:</strong> <?= $mood ?></p>
<p><strong>Total Sections:</strong> <?= $totalSections ?></p>

<p><strong>Type Juggle 1 ("5" + 3):</strong> <?= $typeJuggle1 ?></p>
<p><strong>Type Juggle 2 ("10 gifts" * 2):</strong> <?= $typeJuggle2 ?></p>

<hr>

<div class="section">
<h2>Verse 1</h2>
<?php foreach ($verse1 as $line) { echo "<p>$line</p>"; } ?>
</div>

<div class="section">
<h2>Verse 2</h2>
<?php foreach ($verse2 as $line) { echo "<p>$line</p>"; } ?>
</div>

<div class="section">
<h2>Chorus</h2>
<?php
for ($i = 0; $i < $repeatChorus; $i++) {
  foreach ($chorus as $line) {
    echo "<p>$line</p>";
  }
  echo "<br>";
}
?>
</div>

<footer>
  Christmas Is Right Around The Corner 🎁
</footer>

</body>
</html>
