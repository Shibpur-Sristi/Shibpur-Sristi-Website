<?php

include_once '../includes/db.php';

// END_POINT = /api/api_paridhan.php?project=paridhan

$PRJ_CATAGORY = $_GET['project'];

$query = "SELECT * FROM project_details where prj_catagory='$PRJ_CATAGORY' ORDER BY prj_date DESC";

$queryResult = $conn->query($query);

$projects = [];
if ($queryResult->num_rows > 0) {
    while ($row = $queryResult->fetch_assoc()) {
        $imageURL = 'https://www.shibpursristi.org/admin/sristi_page/project_image/'.$row["thumb_image"];
        $prj_date = $row["prj_date"];
        $place = $row["place"];
        $prj_name = $row["prj_name"];
        #$prj_category = $row["prj_category"];
        $long_desc = $row["long_desc"];
        $short_desc = $row["short_desc"];

        $project = array(
            "image" => $imageURL,
            "name" => $prj_name,
            "date" => $prj_date,
            "location" => $place,
            "description" => $short_desc,
            "details" => $long_desc
        );

        array_push($projects, $project);
    }
    echo json_encode(array("statusCode" => 200, "msg" => "Success", "data" => $projects));
} else {
    echo json_encode(array("statusCode" => 201, "msg" => "No Data Found"));
}
?>