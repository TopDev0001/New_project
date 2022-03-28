<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {

    if (isset($_REQUEST['del'])) {
        $delid = intval($_GET['del']);
        $sql = "delete from tblbooking  WHERE  id=:delid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':delid', $delid, PDO::PARAM_STR);
        $query->execute();
        $msg = "Record deleted successfully";
    }


?>
<!doctype html>

<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Admin Dashboard</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>

    <!-- <div class="ts-main-content"> -->
    <!-- <?php include('includes/leftbar.php'); ?> -->
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title text-center">PARTICIPANT LIST </h2>
                    <div class="col-md-12">
                        <div class="col-md-6 well" style="float: right;">
                            <form class="form-inline" method="POST" action="">
                                <label>Submission date from:</label>
                                <input type="date" class="form-control" placeholder="Start" name="date1"
                                    value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>" />
                                <label>to </label>
                                <input type="date" class="form-control" placeholder="End" name="date2"
                                    value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>" />
                                <button class="btn btn-primary" name="search">to</button> <a href="range.php"
                                    type="button" class="btn btn-success"> Export<span></a>
                            </form>
                        </div>
                        <div class="col-md-10">
                            <table>
                                <tr>
                                    <th>NO. </th>
                                    <th>NAME </th>
                                    <th>EMAIL </th>
                                    <th>MOBILE NO. </th>
                                    <th>I/C NUMBER </th>
                                    <th>SUBMISSION DATE/TIME</th>
                                    <th>Action</th>

                                </tr>

                                <?php $sql = "SELECT * from  tblbooking ";
                                    $query = $dbh->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt = 1;
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) {                ?>
                                <tr>
                                    <td><?php echo htmlentities($cnt); ?></td>
                                    <td><?php echo htmlentities($result->name); ?></td>
                                    <td><?php echo htmlentities($result->email); ?></td>
                                    <td><?php echo htmlentities($result->telefon); ?></td>
                                    <td><?php echo htmlentities($result->kp); ?></td>
                                    <td><?php echo htmlentities($result->PostingDate); ?></td>
                                    <td> <a href="dashboard.php?del=<?php echo $result->id; ?>"
                                            onclick="return confirm('Do you want to delete');"><i
                                                class="fa fa-close"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                <?php $cnt = $cnt + 1;
                                        }
                                    } ?>




                            </table>
                        </div>
                        <div class="col-md-2">
                            <table>
                                <tr>
                                    <td>Watch Video</td>
                                </tr>

                                <?php $sql = "SELECT * from  video ";
                                    $query = $dbh->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt = 1;
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) {                ?>
                                <tr>
                                    <td><?php echo htmlentities($result->watch); ?></td>
                                </tr>
                                <?php $cnt = $cnt + 1;
                                        }
                                    } ?>




                            </table>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>


    <?php include('includes/footer.php'); ?>
</body>


</html>
<?php } ?>