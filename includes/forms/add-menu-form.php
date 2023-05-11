<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Menu (Navigation)</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Custom Styled Validation -->
            <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Please provide a name for the menu
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Link</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                    Please provide a link
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Parent</label>
                <select class="form-select" id="validationCustom04">
                    <option selected disabled value="">Select parent menu (if applicable)</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Order</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Select order</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
            <div class="col-12">
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
                <a href="../menus/top.php" type="button" class="btn btn-danger mb-1 float-end">
                    <i class="bx bxs-left-arrow-alt"></i> Back
                </a>
            </div>
            </form><!-- End Custom Styled Validation -->

        </div>
    </div>
</section>