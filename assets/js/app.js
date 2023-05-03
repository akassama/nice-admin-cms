///////////////////////////
////Set copy clipboard/////
///////////////////////////
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.copy-btn');
    //also set bootstrap tooltip
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
});


///////////////////////
//Delete action lodal//
///////////////////////
$( document ).ready(function() {
  /**
* delete record click
*
*/

$('.delete-button').on('click', function (e) {
    //get clicked element key/id
    var deleteId = $(this).data("id");
    var deleteGroup = $(this).data('group');
    var deleteName = $(this).data('name');
    var deleteModel = $(this).data('model');
    var deleteChildModels = $(this).data('c-models');
    var returnController = $(this).data('return-ct');
    var returnAction = $(this).data('return-ac');
    var returnId = $(this).data('return-id');

    //check if main inputs are empty
    if (isEmpty(deleteModel) || isEmpty(deleteId)) {
      alert("missng required data values");
      return false;
    }
    
    //set hidden values
    $(".del-modal-id").val(deleteId);
    $(".del-modal-group").val(deleteGroup);
    $(".del-modal-name").val(deleteName);
    $(".delete-item-name").text(deleteGroup);
    $(".del-modal-model").val(deleteModel);
    $(".del-modal-c-models").val(deleteChildModels);
    $(".del-modal-return-ct").val(returnController);
    $(".del-modal-return-ac").val(returnAction);
    $(".del-modal-return-id").val(returnId);

    //show modal
    $('#daleteActionModal').modal('show');
  });
});


///////////////////////////
//////Checks if empty//////
///////////////////////////
function isEmpty(str) {
  return (!str || str.length === 0);
}