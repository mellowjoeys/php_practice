<?php
  
// $greeting = "Hello world";

$greetings = [
  'Hi world',
  'Hey world',
  'Hello world'
];

$animals = ['tigers', 'lions', 'bears', 'whales', 'humans'];
$animals[] = 'eel';
echo "<pre>";
var_dump($animals);
echo "</pre>";
// die()  ;
foreach ($greetings as $greeting): ?>
  <li><?= $greeting; ?></li>
<?php endforeach; ?>

<?php
foreach ($greetings as $greeting) {
  echo "<li> $greeting </li>";
}

// require 'index.view.php';
echo "<strong>Most dangerous animals:</strong>";
foreach ($animals as $animal): ?>
  <li><em><?= $animal; ?></em></li>
<?php endforeach; ?>

<?php 
$joseph = [
  'hair' => 'black',
  'glasses' => true,
  'race' => 'asian',
  'gender' => 'male',
  'age' => 25
];
echo $joseph;
foreach ($joseph as $trait => $status) {
  echo "<li><strong>$trait</strong> $status</li>";
}
?>

<?php foreach ($joseph as $trait => $status): ?>
  <li><strong><?= $trait; ?></strong><?= " ". $status; ?></li>
<?php endforeach ?>


<?php 
  $joseph['name'] = 'joseph';
  echo $joseph['name'];
  $joseph['name'] = 'christine';
  echo $joseph['name'];
  unset($joseph['name']);
  echo $joseph['name'];
  echo $animals[2];
  $joseph['happy'] = true;
?>  
happy: <?php echo $joseph['happy'] ? 'yes' : 'no' ?>