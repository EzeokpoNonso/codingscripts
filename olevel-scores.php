<?php
$flash_message = 'Olevel Results';
require_once('db_config.php');
require_once('model.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../images/logo.svg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome stallar dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="../../images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include('tables_sidebar.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">UTME Scores</h4>
                    <p class="card-description"> <?php echo $flash_message;?>
                    </p>

                    <?php
                      // GET ALL THE CANDIDATES JAMB REG NUMBERS FROM JAMB RESULT TABLE
                      $olevel = "SELECT regnumber FROM nau_utme";
                      $olevel = $connect_db->query($olevel);
                      if ($olevel->num_rows > 0) {
                        // output data of each row 
                    ?>
                    
                    <table class="table table-bordered table-responsive">
                      <thead>
                        <tr>
                          <th> RegNo. </th>
                          <th> Full Name </th>
                          <th> UTME Score </th>
                          <th> Olevel Points </th>
                          <th> Course </th>
                          <th> UTMEsubjects </th>
                          <th> OlevelSubjects </th>
                          <th> ResultCount </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while($olevel_row = $olevel->fetch_assoc()) { 
                            $regno = $olevel_row["regnumber"];

                            # GET Candidates O'level Result
                            $utmesubjects = "SELECT regnumber,subject,grade,examyear,examtype,examnumber,gradescore FROM nau_exams_sup WHERE regnumber = '$regno'";
                            $utmesub = $connect_db->query($utmesubjects);
                            if (!empty($utmesub) && $utmesub->num_rows > 0) {
                              // code...
                              $utmesubArray = array();
                              while($utmesub_row = $utmesub->fetch_assoc()) {
                                 //array_push($utmesubArray, $utmesub_row['subject'].'|'.$utmesub_row['gradescore']);
                                 array_push($utmesubArray, $utmesub_row['subject'].'|'.$utmesub_row['gradescore']);
                               }
                            }
                            //$utmesub_row['gradescore']
                            @$olevel_detail = json_encode($utmesubArray);
                            //$olevel_detail = trim($olevel_detail, '[]');
                            //$olevel_detail = str_replace("[","",$olevel_detail);
                            //$olevel_detail = str_replace("]","",$olevel_detail);
                            $olevel_detail = str_replace('"'," ",$olevel_detail);
                            
                            $get_main_result = "SELECT
                                nau_utme.fullname,
                                nau_utme.regnumber,
                                nau_utme.subject1 AS s1,
                                nau_utme.subject2 AS s2,
                                nau_utme.subject3 AS s3,
                                nau_utme.engscore AS engscore,
                                nau_utme.utme_score AS utmescore,
                                SUM(nau_exams_sup.gradescore) AS points,
                                nau_utme.course AS course,
                                nau_exams_sup.resultcount AS resultcount
                                FROM nau_exams_sup
                                INNER JOIN nau_utme
                                ON
                                nau_utme.regnumber = nau_exams_sup.regnumber
                                WHERE nau_utme.regnumber = '$regno' 
                                AND nau_exams_sup.subject IN (nau_utme.subject1, nau_utme.subject2, nau_utme.subject3, 'ENG') 
                                ORDER BY nau_utme.utme_score";

                                # SELECT THOSE OLEVEL SUBJECTS
                                $matched_olevel = "
                                  SELECT
                                    nau_exams_sup.subject as subject,
                                    nau_olevl_figures.gradescore as gradescore
                                  FROM nau_exams_sup
                                  INNER JOIN nau_utme
                                  ON
                                  nau_utme.regnumber = nau_exams_sup.regnumber
                                  WHERE nau_utme.regnumber = '$regno' AND subject 
                                  IN (nau_utme.subject1, nau_utme.subject2, nau_utme.subject3, 'ENG')";

                                $four_olevel = mysqli_query($connect_db, $matched_olevel);

                                // while($four_row = mysqli_fetch_array($four_olevel)){
                                //   $olevelscore = $matched_olevel_row['subject'];
                                //   $olevelgrade = $matched_olevel_row['gradescore'];
                                // }

                                $main_result = $connect_db->query($get_main_result);

                                while($main_result_row = $main_result->fetch_assoc()) { ?>
                                  <tr>
                                    <td> <?php echo $olevel_row["regnumber"];?> </td>
                                    <td> <?php echo $main_result_row["fullname"];?> </td>
                                    <td> <?php echo $main_result_row["utmescore"];?> </td>
                                    <td> <?php echo $main_result_row["points"];?> </td>
                                    <td> <?php echo $main_result_row["course"];?> </td>
                                    <td> <?php echo $main_result_row["s1"]."|".$main_result_row["s2"]."|".$main_result_row["s3"];?> </td>
                                    <td> <?php echo $olevel_detail;?> </td>
                                    <td> <?php echo $main_result_row["resultcount"];?> </td>
                                  </tr>
                          <?php }
                        ?>
                      <?php }  
                      }else {
                          $flash_message = "No Data";
                      } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
