<?php
$count = isset($_GET['count']) ? $_GET['count'] : 2;
?>
<div class="card container" id="m<?php echo $count; ?>">
    <div class="card-body molecular-entity">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Identify things</label>
            <div class="col-sm-9">
                <select class="form-control form-control-sm thing<?php echo $count; ?>"
                        name="name-thing-<?php echo $count; ?>">
                    <option id="iri-<?php echo $count; ?>" selected="selected" value="iri">IRI</option>
                    <option id="bnode-<?php echo $count; ?>" value="bnode">Blank node</option>
                    <option id="uuid-<?php echo $count; ?>" value="uuid">URN UUID</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Subject IRI</label>
            <div class="col-sm-9">
                <input class="form-control iri-thing<?php echo $count; ?>"
                       name="iri-<?php echo $count; ?>" placeholder="IRI here..." type="url">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">identifier</label>
            <div class="col-sm-9">
                <input class="form-control" name="identifier-<?php echo $count; ?>" placeholder="identifier here..."
                       required
                       type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">name</label>
            <div class="col-sm-9">
                <input class="form-control" name="name-<?php echo $count; ?>" placeholder="name here..." required
                       type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">inChIKey</label>
            <div class="col-sm-9">
                <input class="form-control" maxlength="27" minlength="27" name="inchikey-<?php echo $count; ?>"
                       placeholder="inChIKey here..." type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">inChI</label>
            <div class="col-sm-9">
                <input class="form-control" minlength="6" name="inchi-<?php echo $count; ?>" placeholder="inChI here..."
                       type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">SMILES</label>
            <div class="col-sm-9">
                <input class="form-control" name="smiles-<?php echo $count; ?>" placeholder="SMILES here..."
                       type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">url</label>
            <div class="col-sm-9">
                <input class="form-control" name="url-<?php echo $count; ?>" placeholder="URL here..." required
                       type="url">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">iupacName</label>
            <div class="col-sm-9">
                <input class="form-control" name="iupac-name-<?php echo $count; ?>" placeholder="iupac name here..."
                       type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">molecularFormula</label>
            <div class="col-sm-9">
                <input class="form-control" name="molecular-formula-<?php echo $count; ?>" pattern="[a-zA-Z0-9]+"
                       placeholder="molecularFormula here..." type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">molecularWeight</label>
            <div class="col-sm-9">
                <input class="form-control" name="molecular-weight-<?php echo $count; ?>"
                       placeholder="molecularWeight here (e.g. 0.01 mg)..." type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">monoisotopicMolecularWeight</label>
            <div class="col-sm-9">
                <input class="form-control" name="monoisotopic-molecular-weight-<?php echo $count; ?>"
                       placeholder="monoisotopicMolecularWeight here (e.g. 0.01 mg)..." type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">description</label>
            <div class="col-sm-9">
                <input class="form-control" minlength="10" name="description-<?php echo $count; ?>"
                       placeholder="description here..." type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">disambiguatingDescription</label>
            <div class="col-sm-9">
                <input class="form-control" name="disambiguating-description-<?php echo $count; ?>"
                       placeholder="disambiguatingDescription here..." type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">image</label>
            <div class="col-sm-9">
                <input class="form-control" name="image-<?php echo $count; ?>" placeholder="image URL here..."
                       type="url">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">alternateName</label>
            <div class="col-sm-9">
                <input class="form-control" name="alternate-name-<?php echo $count; ?>"
                       placeholder="alternateName here..."
                       type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">sameAs</label>
            <div class="col-sm-9">
                <input class="form-control" name="same-as-<?php echo $count; ?>" placeholder="sameAs URL here..."
                       type="url">
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

