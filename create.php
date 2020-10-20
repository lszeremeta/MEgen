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
        $molecularweight1 = isset($_POST["molecular-weight-$i"]) ? $_POST["molecular-weight-$i"] : '';
        $monoisotopicmolecularweight1 = isset($_POST["monoisotopic-molecular-weight-$i"]) ? $_POST["monoisotopic-molecular-weight-$i"] : '';
        $description1 = isset($_POST["description-$i"]) ? $_POST["description-$i"] : '';
        $disambiguatingdescription1 = isset($_POST["disambiguating-description-$i"]) ? $_POST["disambiguating-description-$i"] : '';
        $image1 = isset($_POST["image-$i"]) ? $_POST["image-$i"] : '';
        $additionaltype1 = isset($_POST["additional-type-$i"]) ? $_POST["additional-type-$i"] : '';
        $alternatename1 = isset($_POST["alternate-name-$i"]) ? $_POST["alternate-name-$i"] : '';
        $sameas1 = isset($_POST["same-as-$i"]) ? $_POST["same-as-$i"] : '';

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
        if ($molecularweight1 != '') {
            $doc = $doc . "\n  \"molecularWeight\" : \"$molecularweight1\",";
        }
        if ($monoisotopicmolecularweight1 != '') {
            $doc = $doc . "\n  \"monoisotopicMolecularWeight\" : \"$monoisotopicmolecularweight1\",";
        }
        if ($description1 != '') {
            $doc = $doc . "\n  \"description\" : \"$description1\",";
        }
        if ($disambiguatingdescription1 != '') {
            $doc = $doc . "\n  \"disambiguatingDescription\" : \"$disambiguatingdescription1\",";
        }
        if ($image1 != '') {
            $doc = $doc . "\n  \"image\" : \"$image1\",";
        }
        if ($additionaltype1 != '') {
            $doc = $doc . "\n  \"additionalType\" : \"$additionaltype1\",";
        }
        if ($alternatename1 != '') {
            $doc = $doc . "\n  \"alternateName\" : \"$alternatename1\",";
        }
        if ($sameas1 != '') {
            $doc = $doc . "\n  \"sameAs\" : \"$sameas1\",";
        }

        $doc = substr($doc, 0, -1);
        $doc = $doc . "  },";
    }
    $doc = substr($doc, 0, -1);

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
    "molecularWeight" : {
      "@id" : "https://schema.org/molecularWeight"
    },
    "monoisotopicMolecularWeight" : {
      "@id" : "https://schema.org/monoisotopicMolecularWeight"
    },
    "description" : {
      "@id" : "https://schema.org/description"
    },
    "disambiguatingDescription" : {
      "@id" : "https://schema.org/disambiguatingDescription"
    },
    "image" : {
      "@id" : "https://schema.org/image"
    },
    "additionalType" : {
      "@id" : "https://schema.org/additionalType"
    },
    "alternateName" : {
      "@id" : "https://schema.org/alternateName"
    },
    "sameAs" : {
      "@id" : "https://schema.org/sameAs"
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
        $molecularweight1 = isset($_POST["molecular-weight-$i"]) ? htmlspecialchars($_POST["molecular-weight-$i"]) : '';
        $monoisotopicmolecularweight1 = isset($_POST["monoisotopic-molecular-weight-$i"]) ? htmlspecialchars($_POST["monoisotopic-molecular-weight-$i"]) : '';
        $description1 = isset($_POST["description-$i"]) ? htmlspecialchars($_POST["description-$i"]) : '';
        $disambiguatingdescription1 = isset($_POST["disambiguating-description-$i"]) ? htmlspecialchars($_POST["disambiguating-description-$i"]) : '';
        $image1 = isset($_POST["image-$i"]) ? htmlspecialchars($_POST["image-$i"]) : '';
        $additionaltype1 = isset($_POST["additional-type-$i"]) ? htmlspecialchars($_POST["additional-type-$i"]) : '';
        $alternatename1 = isset($_POST["alternate-name-$i"]) ? htmlspecialchars($_POST["alternate-name-$i"]) : '';
        $sameas1 = isset($_POST["same-as-$i"]) ? htmlspecialchars($_POST["same-as-$i"]) : '';

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
        if ($molecularweight1 != '') {
            $doc = $doc . "\n      <div property='schema:molecularWeight'>$molecularweight1</div>";
        }
        if ($monoisotopicmolecularweight1 != '') {
            $doc = $doc . "\n      <div property='schema:monoisotopicMolecularWeight'>$monoisotopicmolecularweight1</div>";
        }
        if ($description1 != '') {
            $doc = $doc . "\n      <div property='schema:description'>$description1</div>";
        }
        if ($disambiguatingdescription1 != '') {
            $doc = $doc . "\n      <div property='schema:disambiguatingDescription'>$disambiguatingdescription1</div>";
        }
        if ($image1 != '') {
            $doc = $doc . "\n      <a rel='schema:image' href='$image1'>$image1</a>";
        }
        if ($additionaltype1 != '') {
            $doc = $doc . "\n      <a rel='schema:additionalType' href='$additionaltype1'>$additionaltype1</a>";
        }
        if ($alternatename1 != '') {
            $doc = $doc . "\n      <div property='schema:alternateName'>$alternatename1</div>";
        }
        if ($sameas1 != '') {
            $doc = $doc . "\n      <a rel='schema:sameAs' href='$sameas1'>$sameas1</a>";
        }

        $doc = $doc . "\n    </div>\n";
    }
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
        $molecularweight1 = isset($_POST["molecular-weight-$i"]) ? htmlspecialchars($_POST["molecular-weight-$i"]) : '';
        $monoisotopicmolecularweight1 = isset($_POST["monoisotopic-molecular-weight-$i"]) ? htmlspecialchars($_POST["monoisotopic-molecular-weight-$i"]) : '';
        $description1 = isset($_POST["description-$i"]) ? htmlspecialchars($_POST["description-$i"]) : '';
        $disambiguatingdescription1 = isset($_POST["disambiguating-description-$i"]) ? htmlspecialchars($_POST["disambiguating-description-$i"]) : '';
        $image1 = isset($_POST["image-$i"]) ? htmlspecialchars($_POST["image-$i"]) : '';
        $additionaltype1 = isset($_POST["additional-type-$i"]) ? htmlspecialchars($_POST["additional-type-$i"]) : '';
        $alternatename1 = isset($_POST["alternate-name-$i"]) ? htmlspecialchars($_POST["alternate-name-$i"]) : '';
        $sameas1 = isset($_POST["same-as-$i"]) ? htmlspecialchars($_POST["same-as-$i"]) : '';

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
        if ($molecularweight1 != '') {
            $doc = $doc . "\n      <div itemprop='molecularWeight'>$molecularweight1</div>";
        }
        if ($monoisotopicmolecularweight1 != '') {
            $doc = $doc . "\n      <div itemprop='monoisotopicMolecularWeight'>$monoisotopicmolecularweight1</div>";
        }
        if ($description1 != '') {
            $doc = $doc . "\n      <div itemprop='description'>$description1</div>";
        }
        if ($disambiguatingdescription1 != '') {
            $doc = $doc . "\n      <div itemprop='disambiguatingDescription'>$disambiguatingdescription1</div>";
        }
        if ($image1 != '') {
            $doc = $doc . "\n      <a href='$image1' itemprop='image'>$image1</a>";
        }
        if ($additionaltype1 != '') {
            $doc = $doc . "\n      <a href='$image1' itemprop='additionalType'>$additionaltype1</a>";
        }
        if ($alternatename1 != '') {
            $doc = $doc . "\n      <div itemprop='alternateName'>$alternatename1</div>";
        }
        if ($sameas1 != '') {
            $doc = $doc . "\n      <a href='$sameas1' itemprop='sameAs'>$sameas1</a>";
        }

        $doc = $doc . "\n    </div>\n";
    }
    return $doc . "\n  </body>\n</html>";
}

$format = $_POST['output-format'];

if ($format === "JSON-LD with HTML") {
    $doc = <<<jsonld_html_start
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Example Document</title>
    <script type="application/ld+json">

jsonld_html_start;

    $doc = $doc . createJSONLDOutput() . <<<jsonld_html_end
    </script>
  </head>
</html>
jsonld_html_end;

    header('Content-type: text/html');
    header('Content-Disposition: attachment; filename="jsonld.html"');
} elseif ($format === "JSON-LD") {
    $doc = createJSONLDOutput();

    header('Content-type: application/ld+json');
    header('Content-Disposition: attachment; filename="jsonld.jsonld"');
} elseif ($format === "RDFa") {
    $doc = createRDFaOutput();

    header('Content-type: text/html');
    header('Content-Disposition: attachment; filename="rdfa.html"');
} elseif ($format === "Microdata") {
    $doc = createMicrodataOutput();

    header('Content-type: text/html');
    header('Content-Disposition: attachment; filename="microdata.html"');
}

echo $doc;

