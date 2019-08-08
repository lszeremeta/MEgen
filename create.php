<?php

function createJSONLDOutput()
{
    $doc = <<<jsonld
{
  "@graph" : [

jsonld;
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
        $description1 = isset($_POST["description-$i"]) ? $_POST["description-$i"] : '';

        $doc = $doc . "  {";
        $doc = $doc . "\n  \"@id\" : \"$subject1\",";
        $doc = $doc . "\n  \"@type\" : \"https://schema.org/MolecularEntity\",";
        if ($identifier1 != '') {
            $doc = $doc . "\n  \"identifier\" : \"$identifier1\",";
        }
        if ($name1 != '') {
            $doc = $doc . "\n  \"name\" : \"$name1\",";
        }
        if ($inchikey1 != '') {
            $doc = $doc . "\n  \"inChIKey\" : \"$inchikey1\",";
        }
        if ($inchi1 != '') {
            $doc = $doc . "\n  \"inChI\" : \"$inchi1\",";
        }
        if ($smiles1 != '') {
            $doc = $doc . "\n  \"smiles\" : \"$smiles1\",";
        }
        if ($url1 != '') {
            $doc = $doc . "\n  \"url\" : \"$url1\",";
        }
        if ($iupacname1 != '') {
            $doc = $doc . "\n  \"iupacName\" : \"$iupacname1\",";
        }
        if ($molecularformula1 != '') {
            $doc = $doc . "\n  \"molecularFormula\" : \"$molecularformula1\",";
        }
        if ($description1 != '') {
            $doc = $doc . "\n  \"description\" : \"$description1\",";
        }

        $doc = substr($doc, 0, -1);
        $doc = $doc . "  },";
    }
    $doc = substr($doc, 0, -1);
    header('Content-type: application/ld+json');
    header('Content-Disposition: attachment; filename="document.jsonld"');

    $doc = $doc . <<<jsonld
 ],
  "@context" : {
    "identifier" : {
      "@id" : "https://schema.org/identifier"
    },
    "name" : {
      "@id" : "https://schema.org/name"
    },
    "inChIKey" : {
      "@id" : "https://schema.org/inChIKey"
    },
    "inChI" : {
      "@id" : "https://schema.org/inChI"
    },
    "smiles" : {
      "@id" : "https://schema.org/smiles"
    },
    "url" : {
      "@id" : "https://schema.org/url"
    },
    "iupacName" : {
      "@id" : "https://schema.org/iupacName"
    },
    "molecularFormula" : {
      "@id" : "https://schema.org/molecularFormula"
    },
    "description" : {
      "@id" : "https://schema.org/description"
    },
    "schema" : "https://schema.org/",
    "rdf" : "http://www.w3.org/1999/02/22-rdf-syntax-ns#"
  }
}

jsonld;

    return $doc;
}

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
        $identifier1 = isset($_POST["identifier-$i"]) ? htmlspecialchars($_POST["identifier-$i"]) : '';
        $name1 = isset($_POST["name-$i"]) ? htmlspecialchars($_POST["name-$i"]) : '';
        $inchikey1 = isset($_POST["inchikey-$i"]) ? htmlspecialchars($_POST["inchikey-$i"]) : '';
        $inchi1 = isset($_POST["inchi-$i"]) ? htmlspecialchars($_POST["inchi-$i"]) : '';
        $smiles1 = isset($_POST["smiles-$i"]) ? htmlspecialchars($_POST["smiles-$i"]) : '';
        $url1 = isset($_POST["url-$i"]) ? htmlspecialchars($_POST["url-$i"]) : '';
        $iupacname1 = isset($_POST["iupac-name-$i"]) ? htmlspecialchars($_POST["iupac-name-$i"]) : '';
        $molecularformula1 = isset($_POST["molecular-formula-$i"]) ? htmlspecialchars($_POST["molecular-formula-$i"]) : '';
        $description1 = isset($_POST["description-$i"]) ? htmlspecialchars($_POST["description-$i"]) : '';

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
        if ($description1 != '') {
            $doc = $doc . "\n      <div property='schema:description'>$description1</div>";
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
        $identifier1 = isset($_POST["identifier-$i"]) ? htmlspecialchars($_POST["identifier-$i"]) : '';
        $name1 = isset($_POST["name-$i"]) ? htmlspecialchars($_POST["name-$i"]) : '';
        $inchikey1 = isset($_POST["inchikey-$i"]) ? htmlspecialchars($_POST["inchikey-$i"]) : '';
        $inchi1 = isset($_POST["inchi-$i"]) ? htmlspecialchars($_POST["inchi-$i"]) : '';
        $smiles1 = isset($_POST["smiles-$i"]) ? htmlspecialchars($_POST["smiles-$i"]) : '';
        $url1 = isset($_POST["url-$i"]) ? htmlspecialchars($_POST["url-$i"]) : '';
        $iupacname1 = isset($_POST["iupac-name-$i"]) ? htmlspecialchars($_POST["iupac-name-$i"]) : '';
        $molecularformula1 = isset($_POST["molecular-formula-$i"]) ? htmlspecialchars($_POST["molecular-formula-$i"]) : '';
        $description1 = isset($_POST["description-$i"]) ? htmlspecialchars($_POST["description-$i"]) : '';

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
        if ($description1 != '') {
            $doc = $doc . "\n      <div itemprop='description'>$description1</div>";
        }

        $doc = $doc . "\n    </div>\n";
    }
    header('Content-type: text/html');
    header('Content-Disposition: attachment; filename="document.html"');
    return $doc . "\n  </body>\n</html>";
}

$format = $_POST['output-format'];

if ($format === "JSON-LD") {
    $doc = createJSONLDOutput();
} elseif ($format === "RDFa") {
    $doc = createRDFaOutput();
} elseif ($format === "Microdata") {
    $doc = createMicrodataOutput();
}

echo $doc;
exit();

