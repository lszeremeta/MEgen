<?php

function createRDFaOutput()
{
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
        $inchi1 = isset($_POST["inchi-$i"]) ? $_POST["inchi-$i"] : '';
        $smiles1 = isset($_POST["smiles-$i"]) ? $_POST["smiles-$i"] : '';
        $url1 = isset($_POST["url-$i"]) ? $_POST["url-$i"] : '';
        $iupacname1 = isset($_POST["iupac-name-$i"]) ? $_POST["iupac-name-$i"] : '';
        $molecularformula1 = isset($_POST["molecular-formula-$i"]) ? $_POST["molecular-formula-$i"] : '';

        $doc = $doc . "    <div typeof='schema:MolecularEntity' about='$subject1'>";
        if ($identifier1 != '') {
            $doc = $doc . "\n      <div property='schema:identifier'>$identifier1</div>";
        }
        if ($name1 != '') {
            $doc = $doc . "\n      <div property='schema:name'>$name1</div>";
        }
        if ($inchikey1 != '') {
            $doc = $doc . "\n      <div property='schema:inChIKey'>$inchikey1</div>";
        }
        if ($inchi1 != '') {
            $doc = $doc . "\n      <div property='schema:inChI'>$inchi1</div>";
        }
        if ($smiles1 != '') {
            $doc = $doc . "\n      <div property='schema:smiles'>$smiles1</div>";
        }
        if ($url1 != '') {
            $doc = $doc . "\n      <a rel='schema:url' href='$url1'>$url1</a>";
        }
        if ($iupacname1 != '') {
            $doc = $doc . "\n      <div property='schema:iupacName'>$iupacname1</div>";
        }
        if ($molecularformula1 != '') {
            $doc = $doc . "\n      <div property='schema:molecularFormula'>$molecularformula1</div>";
        }

        $doc = $doc . "\n    </div>\n";
    }
    header('Content-type: text/turtle');
    header('Content-Disposition: attachment; filename="document.html"');
    return $doc . "\n  </body>\n</html>";
}

function createMicrodataOutput()
{
    $doc = <<<microdata
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Example Document</title>
  </head>
  <body>

microdata;
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
        $inchi1 = isset($_POST["inchi-$i"]) ? $_POST["inchi-$i"] : '';
        $smiles1 = isset($_POST["smiles-$i"]) ? $_POST["smiles-$i"] : '';
        $url1 = isset($_POST["url-$i"]) ? $_POST["url-$i"] : '';
        $iupacname1 = isset($_POST["iupac-name-$i"]) ? $_POST["iupac-name-$i"] : '';
        $molecularformula1 = isset($_POST["molecular-formula-$i"]) ? $_POST["molecular-formula-$i"] : '';

        $doc = $doc . "    <div itemscope itemtype='http://schema.org/MolecularEntity' itemid='$subject1'>";
        if ($identifier1 != '') {
            $doc = $doc . "\n      <div itemprop='identifier'>$identifier1</div>";
        }
        if ($name1 != '') {
            $doc = $doc . "\n      <div itemprop='name'>$name1</div>";
        }
        if ($inchikey1 != '') {
            $doc = $doc . "\n      <div itemprop='inChIKey'>$inchikey1</div>";
        }
        if ($inchi1 != '') {
            $doc = $doc . "\n      <div itemprop='inChI'>$inchi1</div>";
        }
        if ($smiles1 != '') {
            $doc = $doc . "\n      <div itemprop='smiles'>$smiles1</div>";
        }
        if ($url1 != '') {
            $doc = $doc . "\n      <a href='$url1' itemprop='url'>$url1</a>";
        }
        if ($iupacname1 != '') {
            $doc = $doc . "\n      <div itemprop='iupacName'>$iupacname1</div>";
        }
        if ($molecularformula1 != '') {
            $doc = $doc . "\n      <div itemprop='molecularFormula'>$molecularformula1</div>";
        }

        $doc = $doc . "\n    </div>\n";
    }
    header('Content-type: text/html');
    header('Content-Disposition: attachment; filename="document.html"');
    return $doc . "\n  </body>\n</html>";
}

$format = $_POST['output-format'];
if ($format === "RDFa") {
    $doc = createRDFaOutput();
} elseif ($format === "Microdata") {
    $doc = createMicrodataOutput();
}

echo $doc;
exit();

