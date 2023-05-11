<section class="section">
      <div class="row">
        <div class="col-12">
          <a href="../media/upload-image.php" class="float-end mb-2">
            <button type="button" class="btn btn-outline-primary">
              <i class="bi bi-plus"></i>Upload Image
            </button>
          </a>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Images</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered table-striped border border-dark datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">File Name</th>
                    <th scope="col">Path</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <a href="#">
                            <img src="../assets/img/product-1.jpg" alt="" class="rounded" width="150">
                        </a>
                    </td>
                    <td>Happy Image</td>
                    <td>
                        <span class="text-primary">happy-image-file.jpg</span>
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="Record1" value="/assets/img/happy-image-file.jpg" readonly>
                            <button class="btn btn-outline-secondary copy-btn" type="button" id="button-addon2" data-clipboard-target="#Record1" data-toggle="tooltip" data-placement="right" title="Copy">
                                <i class="ri-file-copy-line"></i>
                            </button>
                        </div>
                    </td>
                    <td>2016-05-25</td>
                    <td>
                        <a href="#!" class="btn btn-warning mb-1"><i class="bi bi-download"></i></a>
                        <button type="button" class="btn btn-danger delete-button mb-1"  data-id="f2a104cad924" data-group="ModelGroup" data-name="ModelItem" data-model="Model" data-c-models="ChildModel01,ChildModel02" data-return-ct="admin" data-return-ac="manage-models" data-return-id="c9ba8eda">
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