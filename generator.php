<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Molecular Entity Generator</title>
  </head>
  <body>
    <h1 class="text-center">Molecular Entity Generator</h1>
    <form method="post" action="create.php">
      <input type="hidden" value="1" name="count" id="count">
      <div class="card container" id="m1">
        <div class="card-body molecular-entity">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Identify things</label>
            <div class="col-sm-10">
              <select class="form-control form-control-sm thing1" name="name-thing-1">
                <option id="iri-1" selected="selected" value="iri">IRI</option>
                <option id="bnode-1" value="bnode">Blank node</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label iri-thing1">Subject IRI</label>
            <div class="col-sm-10">
              <input class="form-control iri-thing1" type="url" placeholder="IRI here..." name="iri-1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">identifier</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" placeholder="identifier here..." name="identifier-1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" placeholder="name here..." name="name-1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">inChIKey</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" placeholder="inChIKey here..." name="inchikey-1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">inChI</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" placeholder="inChI here..." name="inchi-1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">SMILES</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" placeholder="SMILES here..." name="smiles-1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">url</label>
            <div class="col-sm-10">
              <input class="form-control" type="url" placeholder="url here..." name="url-1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">iupacName</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" placeholder="iupac name here..." name="iupac-name-1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">molecularFormula</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" placeholder="molecularFormula here..." name="molecular-formula-1">
            </div>
          </div>
        </div>
      </div>
      <div id="next-1"></div>
      <div class="container">
        <br>
        <button type="button" class="btn btn-secondary btn-lg btn-block" id="add">Add another molecular entiry</button>
      </div>
      <div class="container">
        <br>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Output</label>
          <div class="col-sm-10">
            <select class="form-control form-control-sm" readonly="readonly">
              <option>RDFa</option>
              <option disabled="disabled">Microdata</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Generate</button>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
var i = 2;
$( document ).ready(function() {
  $( "#add" ).click(function() {
    $( "#count" ).val( i );
    $.ajax({
        method: "GET",
        url: "next.php?count="+i
    })
    .done(function( msg ) {
        var j = i - 1;
        $( "#m"+j ).after( msg );
        i = i + 1;
        //alert(msg);
    });
  })
});
</script>
  </body>
</html>


