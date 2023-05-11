<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">PDF Upload</h5>
            <p><em>For custom Bootstrap form description messages</em></p>

            <!-- Begin form -->
            <form class="row g-3 needs-validation" novalidate>
            <div class="col-12">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-12">
                    <input class="form-control pdf-input" type="file" id="formFile" required>
                    <div class="invalid-feedback">
                        Please select file
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <button class="btn btn-success mb-1" type="submit">
                    <i class="bx bxs-cloud-upload"></i> Upload
                </button>
                <a href="../media/pdfs.php" type="button" class="btn btn-danger mb-1 float-end">
                    <i class="bx bxs-left-arrow-alt"></i> Back
                </a>
            </div>
            </form>
            <!-- End Form -->

        </div>
    </div>
</section>