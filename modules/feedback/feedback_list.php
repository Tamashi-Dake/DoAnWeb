<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Feedback</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
</head>

<body>
  <style>
    <?php
    include "../../guessIndex.css";
    include "../../bootstrap.css";
    include "../../connection.php";
    ?>
    th,
    td {
      text-align: center !important;
    }

    .form-group {
      display: grid;
      grid-template-columns: 45% 55%;
      gap: 10px;
    }

    .page-link {
      padding: 10px !important;
      margin: 3px !important;
    }
  </style>
  <?php
    include "../header-navbar/header-admin.html";
  ?>
  <main style="margin-top: 10vh">

    <section class="content" style=" margin:auto; max-width:95%;">
    <div class="card">
        <div class="card-header">
          <h3 class="card-titl e">Danh sách Feedback</h3>
          <div style="margin-left:auto;">
            <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="Tìm kiếm" aria-label="Search"
                aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th style="width: 20%" class="text-center">Username</th>
                    <th style="width: 8%" class="text-center">FeedbackID</th>
                    <th style="width: 50%" class="text-center">Title</th>
                    <th style="width: 15%" class="text-center">
                    <?php
                    ?>
                  </th>
                  </tr>
                </thead>
                <tbody>
                <?php
            //  SQl
              $sql = "SELECT * FROM webbaiguixe.feedback";
              $result = $conn->query($sql);

                    if (!$result) {
                die("Invalid query: " . $connection->error);
              }

                    // read data of each row
              while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["userName"] . "</td>
                            <td>" . $row["feedbackID"] . "</td>
                            <td>" . $row["content"] . "</td> 
                            <td class='project-actions text-center'>";
                            echo"
                              <a class='btn btn-danger' href='#'>
                                <i class='fas fa-trash'> </i>
                                Xóa
                              </a>
                            </td>
                        </tr>";
                    }

                    $conn->close();
                    ?>
                        </tbody>
                      </table>
                    </div>
    </section>
  </main>
  <?php
    include "../footer.html";
  ?>

</body>

    </html>