<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Project</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Custom Styled Validation -->
            <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Title</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Please provide a title for the project
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom010" class="form-label">Slug</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/projects/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="invalid-feedback">
                    Please provide a slug for the event
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Project Details</h5>
                        <!-- TinyMCE Editor -->
                        <textarea class="tinymce-editor content-editor" id="ProjectDetails" name="ProjectDetails" placeholder="Provide details...." required></textarea>
                        <div class="invalid-feedback">
                            Please provide project details
                        </div>
                    <!-- End TinyMCE Editor -->
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Project Image Gallery</h5>
                        <!-- Img Uploader Gallery -->
                        <div class="row" id="upload-images">
                        </div>
                    <!-- End Img Uploader Gallery -->
                    </div>
                </div>
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
                <a href="../events/" type="button" class="btn btn-danger mb-1 float-end">
                    <i class="bx bxs-left-arrow-alt"></i> Back
                </a>
            </div>
            </form><!-- End Custom Styled Validation -->

        </div>
    </div>
</section>