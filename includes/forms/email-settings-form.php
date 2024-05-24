<section class="section">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Manage Email Settings
            </h5>
                <!-- Default Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#sendgrid-api-tab" type="button" role="tab" aria-controls="sendgrid-api-tab" aria-selected="true">SendGrid API</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#mailjet-tab" type="button" role="tab" aria-controls="mailjet-tab" aria-selected="false">MailJet API</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#mailgun-tab" type="button" role="tab" aria-controls="mailgun-tab" aria-selected="false">Mailgun API</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#net-core-tab" type="button" role="tab" aria-controls="net-core-tab" aria-selected="false">NetCore API</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#smtp-tab" type="button" role="tab" aria-controls="smtp-tab" aria-selected="false">SMTP</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#select-config-tab" type="button" role="tab" aria-controls="select-config-tab" aria-selected="false">Select Config</button>
                    </li>
                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                    <!--SendGrid-->
                    <div class="tab-pane fade show active" id="sendgrid-api-tab" role="tabpanel" aria-labelledby="sendgrid-api-tab">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">SendGrid API Key</label>
                                <input type="text" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please provide key
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <button class="btn btn-success mb-1" type="submit">
                                    <i class="bx bxs-save"></i> Save
                                </button>
                                <a href="../settings/" type="button" class="btn btn-danger mb-1 float-end">
                                    <i class="bx bxs-left-arrow-alt"></i> Back
                                </a>
                            </div>
                        </form>
                    </div>

                    <!--MailJet API-->
                    <div class="tab-pane fade" id="mailjet-tab" role="tabpanel" aria-labelledby="mailjet-tab">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">MailJet API Key</label>
                                <input type="text" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please provide key
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom010" class="form-label">MailJet Secret Key</label>
                                <input type="text" class="form-control" id="validationCustom010" required>
                                <div class="invalid-feedback">
                                    Please provide secret key
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <button class="btn btn-success mb-1" type="submit">
                                    <i class="bx bxs-save"></i> Save
                                </button>
                                <a href="../settings/" type="button" class="btn btn-danger mb-1 float-end">
                                    <i class="bx bxs-left-arrow-alt"></i> Back
                                </a>
                            </div>
                        </form>
                    </div>

                    <!--Mailgun API-->
                    <div class="tab-pane fade" id="mailgun-tab" role="tabpanel" aria-labelledby="mailgun-tab">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Mailgun Key</label>
                                <input type="text" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please provide key
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom010" class="form-label">Mailgun Domain</label>
                                <input type="text" class="form-control" id="validationCustom010" required>
                                <div class="invalid-feedback">
                                    Please provide domain
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <button class="btn btn-success mb-1" type="submit">
                                    <i class="bx bxs-save"></i> Save
                                </button>
                                <a href="../settings/" type="button" class="btn btn-danger mb-1 float-end">
                                    <i class="bx bxs-left-arrow-alt"></i> Back
                                </a>
                            </div>
                        </form>
                    </div>

                    <!--NetCore API-->
                    <div class="tab-pane fade" id="net-core-tab" role="tabpanel" aria-labelledby="net-core-tab">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">NetCore API Key</label>
                                <input type="text" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please provide key
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <button class="btn btn-success mb-1" type="submit">
                                    <i class="bx bxs-save"></i> Save
                                </button>
                                <a href="../settings/" type="button" class="btn btn-danger mb-1 float-end">
                                    <i class="bx bxs-left-arrow-alt"></i> Back
                                </a>
                            </div>
                        </form>
                    </div>

                    <!--SMTP-->
                    <div class="tab-pane fade" id="smtp-tab" role="tabpanel" aria-labelledby="smtp-tab">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Email</label>
                                <input type="text" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please provide smtp email
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom010" class="form-label">Password</label>
                                <input type="password" class="form-control" id="validationCustom010" required>
                                <div class="invalid-feedback">
                                    Please provide smtp email password
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom010" class="form-label">Server</label>
                                <input type="text" class="form-control" id="validationCustom010" required>
                                <div class="invalid-feedback">
                                    Please provide server
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom11" class="form-label">Port No.</label>
                                <input type="text" class="form-control" id="validationCustom11" required>
                                <div class="invalid-feedback">
                                    Please provide port number
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom12" class="form-label">Enable SSL</label>
                                <select class="form-control" id="validationCustom12" required>
                                    <option value="" disabled selected>Select option</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select option
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <button class="btn btn-success mb-1" type="submit">
                                    <i class="bx bxs-save"></i> Save
                                </button>
                                <a href="../settings/" type="button" class="btn btn-danger mb-1 float-end">
                                    <i class="bx bxs-left-arrow-alt"></i> Back
                                </a>
                            </div>
                        </form>
                    </div>

                    <!--SelectConfig-->
                    <div class="tab-pane fade" id="select-config-tab" role="tabpanel" aria-labelledby="select-config-tab">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="my-4 col-md-12">
                                <div class="form-group">
                                    <label for="UseSendGrid" class="form-label">Select Config. To Use</label>
                                    <select class="form-control" name="Author" id="Author" aria-label="Select author" required="">
                                        <option value="" selected="">Select Configuration</option>
                                        <!--// include select option -->
                                        <?php include '../includes/forms/email-api-select-list.php';?>
                                    </select>
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
                        </form>
                    </div>
                </div>
                <!-- End Default Tabs -->
        </div>
    </div>

</section>