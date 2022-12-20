<?php
require './globals.php';

echo '<h2>iterators.php</h2>';

hr();

// For iterator
echo '<h4>For iterator</h4>';
echo '
<pre>
for ($i = 1; $i <= 10; $i++) {
  echo $i . " ";
}
</pre> ==> ';
for ($i = 1; $i <= 10; $i++) {
  echo $i . ' ';
}

hr();

// Foreach iterator
echo '<h4>Foreach iterator</h4>';
echo '
<pre>
$array = [1, 2, 3, 4, 5];
foreach ($array as $item) {
  echo $item . " ";
}
</pre> ==> ';
$array = [1, 2, 3, 4, 5];
foreach ($array as $item) {
  echo $item . ' ';
}

hr();

// While iterator
echo '<h4>While iterator</h4>';
echo '
<pre>
$i = 1;
while ($i <= 10) :
  echo $i . " ";
  $i++;
endwhile;
</pre> ==> ';
$i = 1;
while ($i <= 10) :
  echo $i . ' ';
  $i++;
endwhile;

hr();

// Do while iterator
echo '<h4>Do while iterator</h4>';
echo '
<pre>
$x = 10;
do {
  echo $x . " ";
} while (--$x);
</pre> ==> ';
$x = 10;
do {
  echo $x . ' ';
} while (--$x);
