<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Counter Details</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Begin Form -->
            <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Title</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                Please provide a title
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Start Count</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                Please provide start count
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">End Count</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                Please provide end count
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Prefix</label>
                <input type="text" class="form-control" id="validationCustom04">
                <div class="invalid-feedback">
                Please provide a prefix
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Suffix</label>
                <input type="text" class="form-control" id="validationCustom05">
                <div class="invalid-feedback">
                Please provide a suffix
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom06" class="form-label">Order</label>
                <select class="form-select" id="validationCustom06" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid state.
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
                <a href="../counters/" type="button" class="btn btn-danger mb-1 float-end">
                    <i class="bx bxs-left-arrow-alt"></i> Back
                </a>
            </div>
            </form><!-- End Form -->

        </div>
    </div>
</section>