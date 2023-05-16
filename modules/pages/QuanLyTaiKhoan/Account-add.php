<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- đây là modal cho method ADD trong quản lý tài khoản -->

    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      .row {
        justify-content: center;
      }
      /* The Modal (background) */
      .modal {
        display: none;
        position: fixed;
        z-index: 3;
        padding-top: 100px;
        right: 30%;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
        animation-name: animatetop;
        animation-duration: 0.4s;
      }

      /* Add Animation */
      @keyframes animatetop {
        from {
          z-index: 0;
          opacity: 0;
        }
        to {
          z-index: 1;
          opacity: 1;
        }
      }

      /* The Close Button */
      .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
      }

      .modal-header {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
      }

      .modal-body {
        padding: 2px 16px;
      }
    </style>

    <!-- Trigger/Open The Modal -->
    <a class="btn btn-success btn-sm" id="myBtn">
      <i class="fas fa-plus"> </i>
      Thêm
    </a>
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <h2>Modal Header</h2>
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputUser">Tên tài khoản</label>
                    <input
                      type="text"
                      id="inputUser"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Mật khẩu</label>
                    <input
                      type="text"
                      id="inputPassword"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputName">Họ tên</label>
                    <input
                      type="text"
                      id="inputName"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputCCCD">Căn cước công dân</label>
                    <input
                      type="text"
                      id="inputCCCD"
                      class="form-control"
                      value="#"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="#" class="btn btn-secondary">Cancel</a>
              <input
                type="submit"
                value="Create new Account"
                class="btn btn-success float-right"
              />
            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="editModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <h2>Modal Header</h2>
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputUser">Tên tài khoản</label>
                    <input
                      type="text"
                      id="inputUser"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Mật khẩu</label>
                    <input
                      type="text"
                      id="inputPassword"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputName">Họ tên</label>
                    <input
                      type="text"
                      id="inputName"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputCCCD">Căn cước công dân</label>
                    <input
                      type="text"
                      id="inputCCCD"
                      class="form-control"
                      value="#"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="#" class="btn btn-secondary">Cancel</a>
              <input
                type="submit"
                value="Save Changes"
                class="btn btn-success float-right"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal
      btn.onclick = function () {
        modal.style.display = "block";
      };

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };

            // Get the modal
            var modal1 = document.getElementById("editModal");

// Get the button that opens the modal
var btn1 = document.getElementById("editBtn");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn1.onclick = function () {
  modal1.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span1.onclick = function () {
  modal1.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
    </script>
  </body>
</html>
