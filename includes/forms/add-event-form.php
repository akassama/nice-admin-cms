<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Event</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Custom Styled Validation -->
            <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Title</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Please provide a title for the event
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom010" class="form-label">Location</label>
                <input type="text" class="form-control" id="validationCustom010" required>
                <div class="invalid-feedback">
                    Please provide a location for the event
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                    Please provide event start date
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">End Date</label>
                <input type="date" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide event start date
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Event Details</h5>
                    <!-- TinyMCE Editor -->
                    <textarea class="tinymce-editor content-editor" id="EventDetails" name="EventDetails" placeholder="Provide details...." required></textarea>
                    <div class="invalid-feedback">
                        Please provide event details
                    </div>
                    <!-- End TinyMCE Editor -->
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