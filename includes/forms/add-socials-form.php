<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Social Media Info</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Begin Form -->
            <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Social Media</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Select...</option>
                    <option disabled value="Facebook">Facebook</option>
                    <option disabled value="Instagram">Instagram</option>
                    <option value="Twitter">Twitter</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="YouTube">YouTube</option>
                </select>
                <div class="invalid-feedback">
                    Please select a social media.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05" class="form-label">URL</label>
                <input type="url" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                    Please provide a valid url.
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
                <a href="../socials/" type="button" class="btn btn-danger mb-1 float-end">
                    <i class="bx bxs-left-arrow-alt"></i> Back
                </a>
            </div>
            </form><!-- End Form -->

        </div>
    </div>
</section>