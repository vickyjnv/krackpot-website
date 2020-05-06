<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View All Portfolios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <style>
        td p{
            line-height:1.4;
            font-weight:300 !important;
            font-size:17px;
            margin:0;
            padding:10px 0;
            color:#5c5b5b;
            text-align:justify;
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            width: 60px;
            height:60px;
            display:inline-block;
            margin: 0 5px 10px 0;
        }

        iframe{
            width:80px;
            padding:0 10px 0 0;
            height:80px;
            display:inline-block;
        }
    </style>
</head>

<body class="header-fixed">
    <nav class="t-header">
        <div class="t-header-brand-wrapper">
            <a href="../index.php">
                <img class="logo" src="../assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
                <form action="#" class="t-header-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search"
                            autocomplete="off">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <ul class="nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell fa-fw fa-2x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                            aria-labelledby="notificationDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Notifications</h6>
                                <p class="dropdown-title-text">You have 4 unread notification</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                                        <i class="mdi mdi-alert"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Storage Full</small>
                                        <small class="content-text">Server storage almost full</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                                        <i class="mdi mdi-cloud-upload"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Upload Completed</small>
                                        <small class="content-text">3 Files uploded successfully</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                                        <i class="mdi mdi-security"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Authentication Required</small>
                                        <small class="content-text">Please verify your password to continue using cloud
                                            services</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                    <img class="profile-img img-lg rounded-circle" src="../assets/images/avatar.png"
                        alt="profile image">
                </div>
                <div class="info-wrapper">
                    <p class="user-name">Aditya Nayak</p>
                    <h6 class="display-income">Director - Creative</h6>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MAIN</li>
                <li>
                    <a href="index.html">
                        <span class="link-title">Dashboard</span>
                         <i class="fas fa-tachometer-alt fa-fw link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Portfolio Pages</span>
                        <i class="far fa-clipboard link-icon fa-fw"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="sample-pages">
                       <li>
                            <a href="add-portfolio.php" target="_blank">Add Portfolio</a>
                        </li>
                        <li>
                            <a href="view-portfolio.php" target="_blank">View All Portfolio</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-category-divider">Actions</li>
                <li>
                    <a href="../docs/docs.html">
                        <span class="link-title">Logout</span>
                        <i class="fas fa-sign-out-alt fa-fw link-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4 class="dashboard-header">View All Portfolios</h4>
                            <p class="dashboard-sub text-gray">All Your Uploaded Portfolios Are Here!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <table id="portfolio_table" class="table table-hover table-bordered table-hover w-100" >
               <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>Brand Logo</th>
                        <th>Brand Description</th>
                        <th>Brand Work </th>
                        <th>Brand Work Description</th>
                        <th>Brand Uploaded Images</th>
                        <th>Brand Uploaded Videos</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("db.php");
                        $query ="SELECT * FROM krackpottb_demo_1 ORDER BY id DESC";
                        $sql = mysqli_query($connect,$query);
                        while($row = mysqli_fetch_array($sql)){
        	        ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><img src='../uploads/<?php echo $row["brand_logo"];?>' width="100"></td>";
                    <td width="300"><?php echo $row["brand_description"];?></td>
                    <td><?php echo $row["brand_work_header"];?></td>
                    <td width="300"><?php echo $row["brand_work_description"];?></td>
                    
                    <?php 
                        $i="";
                        $query="SELECT * FROM krackpottb_demo_1 a, attachments b WHERE a.id=b.attachment_id AND a.id = ".$row['id'];
                        $fire=mysqli_query($connect,$query);
                        while($resultsn=mysqli_fetch_assoc($fire)){
                            $i='';
                            $fetch_img =  $resultsn['images'];
                            $tempr = explode(' ',$fetch_img);
                            $count=count($tempr)-1;
                            $imgs = '';
                            for($i=0;$i<$count;++$i){
                                $imgs .= "<img src='../uploads/".$tempr[$i]."' class='img-thumbnail'/>";
                            }
                    ?>
                    <td><?php echo $imgs; ?></td>
                    <td><?php   
                            $video = $resultsn['video'];
                            $video_2 = $resultsn['video_2'];
                            $video_3 = $resultsn['video_3']; 
                            echo $video;
                            echo $video_2;
                            echo $video_3; 
                            }
                        ?>
                    </td>
                    <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-block mb-1">EDIT</a> <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-block" onClick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
                </tr>
            <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered dialog-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="../assets/script/core.js"></script>
    <script src="../assets/script/template.js"></script>
    <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('#portfolio_table').DataTable();
        });

        $(document).ready(function () {
            $("img").click(function () {
                $('#myModal').modal('show'); 
            });
        });
    </script>
</body>

</html>