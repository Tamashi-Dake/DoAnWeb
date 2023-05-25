
  
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal">
                  Edit
                </button>


                <div class="modal show"   id="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sửa thông tin thẻ xe</h4>
              <a type="button" class="close" href="Card.php">
                <span aria-hidden="true">&times;</span>
               </a>
            </div>
            <div class="modal-body">
          <div class="row" style="display:block">
            <div class="col-md-6" style="    max-width: 100%;">
              <div class="card card-primary"style="box-shadow:none; margin:0;">
              <div class="card-body">
                  <div class="form-group">
                    <label for="inputUser">ID</label>
                    <input
                      type="text"
                      id="inputUser"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Trạng thái</label>
                    <select>
                    <option value="employee">Mở</option>
                    <option value="admin">Khóa</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Loại phương tiện</label>
                    <select>
                    <option value="employee">Ô tô</option>
                    <option value="admin">Xe máy</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Loại phương tiện</label>
                    <select>
                    <option value="employee">Ô tô</option>
                    <option value="admin">Xe máy</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Loại thẻ</label>
                    <select>
                      <option value="employee">Thường</option>
                      <option value="admin">Tháng</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" >Reset</button>
              <button type="button" class="btn btn-primary">Lưu</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
</body>
</html>
