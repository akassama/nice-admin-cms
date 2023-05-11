<!-- Delete Modal -->
<div class="modal fade" id="daleteActionModal" tabindex="-1">
  <div class="modal-dialog">
    <form method="post" action="#">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Action Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to remove <span class="text-danger font-weight-bold delete-item-name"></span>?
            <div class="mb-3 mt-3">
              <label for="HiddenInputs" class="form-label d-none">Hidden Inputs</label>
              <input type="hidden" class="form-control del-modal-id" id="DItemID" value="" name="DItemID">
              <input type="hidden" class="form-control del-modal-group" id="DItemGroup" value="" name="DItemGroup">
              <input type="hidden" class="form-control del-modal-name" id="DItemName" value="" name="DItemName">
              <input type="hidden" class="form-control del-modal-model" id="DModel" value="" name="DModel">
              <input type="hidden" class="form-control del-modal-c-models" id="DChildModel" value="" name="DChildModel">
              <input type="hidden" class="form-control del-modal-return-ct" id="ReturnController" value="" name="ReturnController">
              <input type="hidden" class="form-control del-modal-return-ac" id="ReturnAction" value="" name="ReturnAction">
              <input type="hidden" class="form-control del-modal-return-id" id="ReturnId" value="" name="ReturnId">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
            <button type="submit" class="btn btn-success">Yes</button>
          </div>
        </div>
    </form>
  </div>
</div>
<!-- End dalete Modal-->

<!-- Begin Signout Modal-->
<div class="modal fade" id="signoutModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
        <i class="bi bi-box-arrow-in-right"></i> Confirm Sign-Out 
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-lead">   
          Are you sure you want to Logout?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- End Signout Modal-->