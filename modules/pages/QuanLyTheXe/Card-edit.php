<div class="modal show" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sửa thông tin thẻ xe</h4>
        <a type="button" class="close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <div class="row" style="display:block">
          <div class="col-md-6" style="    max-width: 100%;">
            <div class="card card-primary" style="box-shadow:none; margin:0;">
              <div class="card-body">
                <div class="form-group">
                  <label for="txtCardID-Edit">ID thẻ</label>
                  <input type="text" id="txtCardID-Edit" readonly value="" />
                </div>
                <div class="form-group">
                  <label for="selectStatus-Edit">Trạng thái</label>
                  <select id="selectStatus-Edit" value="<?php echo($row['status']); ?>" >
                    <option value="1">Mở</option>
                    <option value="0">Khóa</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="selectVehicleType-Edit">Loại xe</label>
                  <select id="selectVehicleType-Edit" value="<?php echo($row['vehicleType']); ?>">
                    <option value="Xe máy">Xe máy</option>
                    <option value="Ô tô">Ô tô</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="selectType-Edit">Loại thẻ</label>
                  <select id="selectType-Edit" value="<?php echo($row['type']); ?>">
                    <option value="Thường">Thường</option>
                    <option value="Tháng">Tháng</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="txtDate">Ngày đăng ký</label>
                  <input type="date" id="txtDate" class="inputForMonthCard-Edit" value="<?php echo($row['date']); ?>" />
                </div>
                <div class="form-group">
                  <label for="txtCustomerName">Tên khách hàng</label>
                  <input type="text" id="txtCustomerName" class="inputForMonthCard-Edit" value="<?php echo($row['customerName']); ?>" />
                </div>
                <div class="form-group">
                  <label for="txtCustomerIdentityCard">CCCD khách</label>
                  <input type="text" id="txtCustomerIdentityCard" class="inputForMonthCard-Edit" value="<?php echo($row['customerIdentityCard']); ?>" />
                </div>
                <div class="form-group">
                  <label for="txtPhoneNumber">Số điện thoại</label>
                  <input type="text" id="txtPhoneNumber" class="inputForMonthCard-Edit" value="<?php echo($row['phoneNumber']); ?>" />
                </div>
                <div class="form-group">
                  <label for="txtLicensePlate">Biển số xe</label>
                  <input type="text" id="txtLicensePlate" class="inputForMonthCard-Edit" value="<?php echo($row['licensePlate']); ?>" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default">Reset</button>
        <button type="button" class="btn btn-primary">Lưu</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
