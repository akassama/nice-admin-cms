<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Name</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Begin Form -->
            <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                Please provide a name
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                Please provide last name
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">City</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                Please provide a valid city.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">State</label>
                <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid state.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Image</label>
                <div class="col-sm-12">
                    <input class="form-control pdf-input" type="file" id="formFile" required>
                    <div class="invalid-feedback">
                        Please select file
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="true" id="invalidCheck" checked>
                    <label class="form-check-label" for="invalidCheck">
                        Published
                    </label>
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
            </form><!-- End Form -->

        </div>
    </div>
</section>