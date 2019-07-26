<?php
$doc = '';
$doc = <<<rdfa
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Example Document</title>
  </head>
  <body vocab="http://schema.org/">

rdfa;
$count = isset($_POST['count']) ? $_POST['count'] : '1';
for ($i = 1; $i <= $count; $i++) {
  $namething1 = isset($_POST["name-thing-$i"]) ? $_POST["name-thing-$i"] : '';
  if ($namething1 == 'iri') {
    $subject1 = isset($_POST["iri-$i"]) ? $_POST["iri-$i"] : '';
  } else {
    $subject1 = '_:' . uniqid();
  }
  if ($subject1 == '') {
    $subject1 = '_:' . uniqid();
  }
  $identifier1 = isset($_POST["identifier-$i"]) ? $_POST["identifier-$i"] : '';
  $name1 = isset($_POST["name-$i"]) ? $_POST["name-$i"] : '';
  $inchikey1 = isset($_POST["inchikey-$i"]) ? $_POST["inchikey-$i"] : '';

  $doc = $doc . "    <div typeof='schema:MolecularEntity' about='$subject1'>";
  if ($identifier1 != '') {
    $doc = $doc . "\n      <div property='schema:identifier'>$identifier1</div>";
  }
  if ($name1 != '') {
    $doc = $doc . "\n      <div property='schema:name'>$name1</div>";
  }
  if ($inchikey1 != '') {
    $doc = $doc . "\n      <div property='schema:name'>$inchikey1</div>";
  }

  $doc = $doc . "\n    </div>\n";    
}

$doc = $doc . "\n  </body>\n</html>";
header('Content-type: text/turtle');
header('Content-Disposition: attachment; filename="document.html"');
echo $doc;
exit();
?>
