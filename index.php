<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Molecular Entity Generator</title>
</head>
<style>
    #logo {
        display: block;
        max-width: 90%;
        margin: auto;
        margin-bottom: 4%;
    }
    body {
        background-color: #dfdfdf;
        padding-top: 4%;
        padding-bottom: 4%;
    }
    button, .btn {
        border-radius: 50px;
        margin: auto;
        border: 0;
    }
    .btn-primary {
        background-color: #5bc0be;
    }
    .col-form-label {
    font-weight: 700;
}
</style>
<body>

<img id="logo" src="megen.svg" alt="Molecular Entity Generator">
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
                <label class="col-sm-2 col-form-label">Subject IRI</label>
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
                    <input class="form-control" type="text" placeholder="molecularFormula here..."
                           name="molecular-formula-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">molecularWeight</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="molecularWeight here (e.g. 0.01 mg)..."
                           name="molecular-weight-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">monoisotopicMolecularWeight</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text"
                           placeholder="monoisotopicMolecularWeight here (e.g. 0.01 mg)..."
                           name="monoisotopic-molecular-weight-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="description here..."
                           name="description-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">disambiguatingDescription</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="disambiguatingDescription here..."
                           name="disambiguating-description-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="url" placeholder="image URL here..."
                           name="image-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">additionalType</label>
                <div class="col-sm-10">
                    <input class="form-control" type="url" placeholder="additionalType URL here..."
                           name="additional-type-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">alternateName</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="alternateName here..."
                           name="alternate-name-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">sameAs</label>
                <div class="col-sm-10">
                    <input class="form-control" type="url" placeholder="sameAs URL here..."
                           name="same-as-1">
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
                <select class="form-control form-control-sm" readonly="readonly" name="output-format">
                    <option>JSON-LD with HTML</option>
                    <option>JSON-LD</option>
                    <option>RDFa</option>
                    <option>Microdata</option>
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
    $(document).ready(function () {
        $("#add").click(function () {
            $("#count").val(i);
            $.ajax({
                method: "GET",
                url: "next.php?count=" + i
            })
                .done(function (msg) {
                    var j = i - 1;
                    $("#m" + j).after(msg);
                    i = i + 1;
                });
        })
    });

    $(document).ready(function () {
        $(".thing1").change(function () {
            $(".thing1 option:selected").each(function () {
                if ($(this).val() === 'bnode') {
                    $('.iri-thing1').attr('disabled', 'disabled');
                } else {
                    $('.iri-thing1').removeAttr('disabled');
                }
            });
        });
    });
</script>
</body>
</html>


