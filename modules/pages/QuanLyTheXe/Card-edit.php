
  
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
                    <label for="inputUser">ID thẻ</label>
                    <input type="text" id="inputUser" value="#" />
                  </div>
                  <div class="form-group">
                    <label for="selectTrangThai">Trạng thái</label>
                    <select>
                      <option value="1">Mở</option>
                      <option value="0">Khóa</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectLoaiXe">Loại xe</label>
                    <select>
                      <option value="Xe máy">Xe máy</option>
                      <option value="Ô tô">Ô tô</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectType-Edit">Loại thẻ</label>
                    <select id="selectType-Edit">
                      <option value="Thường">Thường</option>
                      <option value="Tháng">Tháng</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputDate">Ngày đăng ký</label>
                    <input type="date" id="inputDate" class="inputForMonthCard-Edit" value="#" />
                  </div>
                  <div class="form-group">
                    <label for="inputCustomerName">Tên khách hàng</label>
                    <input type="text" id="inputCustomerName" class="inputForMonthCard-Edit" value="#" />
                  </div>
                  <div class="form-group">
                    <label for="inputCustomerIdentityCard">CCCD khách</label>
                    <input type="text" id="inputCustomerIdentityCard" class="inputForMonthCard-Edit" value="#" />
                  </div>
                  <div class="form-group">
                    <label for="inputPhoneNumber">Số điện thoại</label>
                    <input type="text" id="inputPhoneNumber" class="inputForMonthCard-Edit" value="#" />
                  </div>
                  <div class="form-group">
                    <label for="inputLicensePlate">Biển số xe</label>
                    <input type="text" id="inputLicensePlate" class="inputForMonthCard-Edit" value="#" />
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
