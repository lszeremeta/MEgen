<?php
$count = isset($_GET['count']) ? $_GET['count'] : 2;
?>
<div class="card container" id="m<?php echo $count; ?>">
    <div class="card-body molecular-entity">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Identify things</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm thing<?php echo $count; ?>"
                        name="name-thing-<?php echo $count; ?>">
                    <option id="iri-<?php echo $count; ?>" selected="selected" value="iri">IRI</option>
                    <option id="bnode-<?php echo $count; ?>" value="bnode">Blank node</option>
                    <option id="uuid-<?php echo $count; ?>" value="uuid">URN UUID</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Subject IRI</label>
            <div class="col-sm-10">
                <input class="form-control iri-thing<?php echo $count; ?>" type="url" placeholder="IRI here..."
                       name="iri-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">identifier</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="identifier here..."
                       name="identifier-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="name here..." name="name-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">inChIKey</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="inChIKey here..."
                       name="inchikey-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">inChI</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="inChI here..." name="inchi-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">SMILES</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="SMILES here..."
                       name="smiles-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">url</label>
            <div class="col-sm-10">
                <input class="form-control" type="url" placeholder="url here..." name="url-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">iupacName</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="iupac name here..."
                       name="iupac-name-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">molecularFormula</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="molecularFormula here..."
                       name="molecular-formula-<?php echo $count; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">description</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="description here..."
                       name="description-<?php echo $count; ?>">
            </div>
        </div>
    </div>
</div>
<div id="next-<?php echo $count; ?>"></div>
<script>
    $(document).ready(function () {
        $(".thing<?php echo $count; ?>").change(function () {
            $(".thing<?php echo $count; ?> option:selected").each(function () {
                if ($(this).val() === 'bnode' || $(this).val() === 'uuid') {
                    $(".iri-thing<?php echo $count; ?>").attr('disabled', 'disabled');
                } else {
                    $(".iri-thing<?php echo $count; ?>").removeAttr('disabled');
                }
            });
        });
    });
</script>

