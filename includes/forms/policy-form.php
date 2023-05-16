<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Policy View</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Custom Styled Validation -->
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Policy Details</h5>
                            <!-- TinyMCE Editor -->
                            <textarea class="tinymce-editor content-editor" id="EventDetails" name="EventDetails" placeholder="Provide details...." required></textarea>
                            <div class="invalid-feedback">
                                Please provide policy details
                            </div>
                            <!-- End TinyMCE Editor -->
                        </div>
                    </div>
                </div>
            <div class="col-12">
                <button class="btn btn-success mb-1" type="submit">
                    <i class="bx bxs-save"></i> Save
                </button>
                <a href="../blank/" type="button" class="btn btn-danger mb-1 float-end">
                    <i class="bx bxs-left-arrow-alt"></i> Back
                </a>
            </div>
            </form><!-- End Custom Styled Validation -->

        </div>
    </div>
</section>