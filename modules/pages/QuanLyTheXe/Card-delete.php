<div class="modal show" id="modalDel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Xóa dữ liệu</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="Card-edit-action.php?page=<?php echo($current_page) ?><?php if (isset($_GET['search'])) { $search = $_GET['search']; echo("&search=". $_GET['search']);} ?>" method="POST">
        <div class="modal-body">
          <div class="row" style="display:block">
            <div class="col-md-6" style="    max-width: 100%;">
              <div class="card card-primary" style="box-shadow:none; margin:0;">
                <div class="card-body">
                  <div class="form-group">
                    <label for="confirm">Bạn chắc chưa?</label>       
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button class="btn btn-default" data-dismiss="modal" aria-label="Close">Nghĩ lại rồi</button>
          <button type="submit" class="btn btn-danger" id="btn-delete">Chắc chắn</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
