<?php  
    
    include('db.php');
    include('function.php');
    
    //To Fire Query
    $query = '';
    
    //To Store Data From Database In Html Format
    $output = array();

    $query .= "SELECT * FROM krackpottb_demo_1";
    
    //Search Query By Description
    if(isset($_POST["search"]["value"])){
       $query .= 'WHERE brand_description LIKE "%'.$_POST["search"]["value"].'%" ';
    }

    //Order By For Sorting Columns When Clicked On Column
    if(isset($_POST["order"])){
        $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
    }else{
        $query .= 'ORDER BY id DESC ';
    }

    //For Limiting Columns Per Page
    if($_POST["length"] != -1){
        $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
    }

    //Fetching Records
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $data = array();
    $filtered_rows = $statement->rowCount();
    foreach($result as $row){
        $image = '';
        if($row["brand_logo"] != '') {
            $image = '<img src="../uploads/'.$row["brand_logo"].'" class="img-thumbnail" width="50" height="35" />';
        }else{
            $image = '';
        }
        $sub_array = array();
        $sub_array[] = $image;
        $sub_array[] = $row["brand_description"];
        $sub_array[] = $row["brand_work_header"];
        $sub_array[] = $row["brand_work_description"];
        $sub_array[] = $row["date_of_upload"];
        $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>';
        $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
        $data[] = $sub_array;
    }

    //Fetching Output
    $output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  $filtered_rows,
    "recordsFiltered" => get_total_all_records(),
    "data"    => $data
    );

    //Fetching Result In JSON Format
    echo json_encode($output);
?>
    
?>