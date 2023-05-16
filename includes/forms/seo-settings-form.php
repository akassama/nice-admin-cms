<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Name</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Custom Styled Validation -->
            <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Site Title</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                Please provide a site title
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Primary Email</label>
                <input type="email" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                Please provide an email address
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Optional Email</label>
                <input type="email" class="form-control" id="validationCustom03">
                <div class="invalid-feedback">
                    Please provide an optional email address
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom04" class="form-label">Site Description</label>
                <textarea type="text" class="form-control" id="validationCustom04" required rows="2"></textarea>
                <div class="invalid-feedback">
                Please provide site description
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom05" class="form-label">Site Keywords</label>
                <textarea type="text" class="form-control" id="validationCustom05" required rows="2"></textarea>
                <div class="invalid-feedback">
                Please provide site keywords E.g.business,tech,website
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom06" class="form-label">Address</label>
                <textarea type="text" class="form-control" id="validationCustom06" required rows="1"></textarea>
                <div class="invalid-feedback">
                Please provide site/business/organization address
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom07" class="form-label">Country Code <small>(E.g. +220)</small></label>
                <input type="text" class="form-control" id="validationCustom07" required>
                <div class="invalid-feedback">
                    Please provide country code. E.g. +1
                </div>
            </div>
            <div class="col-md-5">
                <label for="validationCustom08" class="form-label">Primary Phone Number</label>
                <input type="email" class="form-control" id="validationCustom08" required>
                <div class="invalid-feedback">
                    Please provide last name
                </div>
            </div>
            <div class="col-md-5">
                <label for="validationCustom09" class="form-label">Optional Phone Number</label>
                <input type="email" class="form-control" id="validationCustom09">
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-8">
                <label for="validationCustom10" class="form-label">Site Logo</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Logo image URL" aria-label="Logo image URL" aria-describedby="basic-addon2" required>
                    <span class="input-group-text" id="basic-addon2">Image URL</span>
                    <div class="invalid-feedback">
                        Please provide image URL for the site logo
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom11" class="form-label">Site Favicon</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Favicon image URL" aria-label="Favicon image URL" aria-describedby="basic-addon3" required>
                    <span class="input-group-text" id="basic-addon3">Image URL</span>
                    <div class="invalid-feedback">
                        Please provide image URL for the site favicon
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <button class="btn btn-success mb-1" type="submit">
                    <i class="bx bxs-save"></i> Save
                </button>
                <a href="../blank/" type="button" class="btn btn-danger mb-1 float-end">
                    <i class="bx bxs-left-arrow-alt"></i> Back
                </a>
            </div>
            </form>
            <!-- End Custom Styled Validation -->
        </div>
    </div>
</section>