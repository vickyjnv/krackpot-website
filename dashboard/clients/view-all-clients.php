<?php include('../includes/connectionClass.php');

    session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role'])){
		  header('location:../../../dist/login/login.php');
		exit;
	}		


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View All Clients</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-32x32.png">
</head>

<body class="header-fixed">
    <?php include('../includes/header.php'); ?>
    <!-- partial -->
    <div class="page-body">
        <?php include('../includes/sidebar.php'); ?>
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4 class="dashboard-header">View All Clients</h4>
                           
                        </div>
                    </div>
                </div>
            </div>
            <table id="clients_table" class="table table-bordered table-hover w-100" >
               <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>Client Logo</th>
                        <th>Client Name</th>
                        <th>Created At </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query ="SELECT * FROM clients_tb ORDER BY id DESC";
                        $sql = mysqli_query($connect,$query);
                        while($row = mysqli_fetch_array($sql)){
        	        ?>
                <tr>
                    <td width="200"><?php echo $row["id"]; ?></td>
                    <td width="200"><img src='<?php echo $row["client_logo"];?>' class="uploaded-image"></td>
                    <td width="200"><?php echo strip_tags($row["client_name"]);?></td>
                    <td width="200"><?php echo $row["created_at"];?></td>
                    <td width="200"><a href="update-clients.php?edit=<?php echo $row['id']; ?>" class="btn-common btn-block">Edit Client Information</a>
                    <hr>
                    <a href="delete-clients.php?id=<?php echo $row['id'];?>" class="btn-common btn-delete btn-block" onClick="return confirm('Are you sure you want to delete?');">Delete Client</a></td>
                </tr>
            <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="../assets/script/core.js"></script>
    <script src="../assets/script/template.js"></script>
    <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>  
    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('#clients_table').DataTable();
        });
    </script>
</body>

</html>