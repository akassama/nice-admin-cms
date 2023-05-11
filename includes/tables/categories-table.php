<section class="section">
      <div class="row">
        <div class="col-12">
          <a href="../categories/add-category.php" class="float-end mb-2">
            <button type="button" class="btn btn-outline-primary">
              <i class="bi bi-plus"></i>New Category
            </button>
          </a>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Categories</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered table-striped border border-dark datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      1
                    </th>
                    <td>
                      Home
                    </td>
                    <td>
                      Home page navigation 
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="Record1" value="/Home/Index" readonly>
                            <button class="btn btn-outline-secondary copy-btn" type="button" id="button-addon2" data-clipboard-target="#Record1" data-toggle="tooltip" data-placement="right" title="Copy">
                                <i class="ri-file-copy-line"></i>
                            </button>
                        </div>
                    </td>
                    <td>
                        <span class="text-success fw-bold">
                          Published
                        </span>
                    </td>
                    <td>2016-05-25</td>
                    <td>
                        <a href="#!" class="btn btn-success mb-1"><i class="bi bi-pencil-square"></i></a>
                        <button type="button" class="btn btn-danger delete-button mb-1"  data-id="f2a104cad924" data-group="Navigation" data-name="About" data-model="Navigation" data-c-models="Images" data-return-ct="Admin" data-return-ac="manage-navigation" data-return-id="c9ba8eda">
                            <i class="bi bi-trash mb-1"></i>
                        </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>