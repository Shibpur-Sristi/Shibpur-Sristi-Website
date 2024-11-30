<?php

include_once '../includes/db.php';

// END_POINT = /api/api_paridhan.php?project=paridhan

$PRJ_CATAGORY = $_GET['project'];

// Log the project category for debugging purposes
error_log("Received project category: " . $PRJ_CATAGORY, 0);

// SQL query to fetch project details
$query = "SELECT * FROM project_details WHERE prj_catagory='$PRJ_CATAGORY' ORDER BY prj_date DESC";

// Execute the query
$queryResult = $conn->query($query);

// Initialize an empty array to store the projects
$projects = [];

if ($queryResult->num_rows > 0) {
    // Loop through the result set and prepare the projects data
    while ($row = $queryResult->fetch_assoc()) {
        $imageURL = 'https://www.shibpursristi.in/admin/sristi_page/project_image/' . $row["thumb_image"];
        $prj_date = $row["prj_date"];
        $place = $row["place"];
        $prj_name = $row["prj_name"];
        $long_desc = $row["long_desc"];
        $short_desc = $row["short_desc"];

        // Prepare the project array
        $project = array(
            "image" => $imageURL,
            "name" => $prj_name,
            "date" => $prj_date,
            "location" => $place,
            "description" => $short_desc,
            "details" => $long_desc
        );

        // Add the project to the projects array
        array_push($projects, $project);
    }

    // Log the projects data for debugging
    error_log("Projects found: " . print_r($projects, true), 0);

    // Convert the projects array to UTF-8 (if necessary) before encoding it to JSON
    function array_utf8_encode($array) {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = array_utf8_encode($value); // Recursively handle nested arrays
            } else {
                $array[$key] = utf8_encode($value); 
            }
        }
        return $array;
    }

    // Ensure the data is UTF-8 encoded before JSON encoding
    $projects = array_utf8_encode($projects);

    // Encode the response to JSON
    $response = json_encode(array("statusCode" => 200, "msg" => "Success", "data" => $projects));

    // Check for JSON encoding errors
    if (json_last_error() !== JSON_ERROR_NONE) {
        // If there was an error encoding the JSON
        error_log("JSON encoding error: " . json_last_error_msg(), 0);  // Log the error
        echo json_encode(array("statusCode" => 500, "msg" => "JSON Encoding Error"));
        exit;
    }

    // Set the correct header for JSON response
    header('Content-Type: application/json');

    // Output the JSON response
    echo $response;

} else {
    // If no data was found, log the information and return a response
    error_log("No data found for project category: " . $PRJ_CATAGORY, 0);

    // Set the correct header for JSON response
    header('Content-Type: application/json');

    echo json_encode(array("statusCode" => 201, "msg" => "No Data Found"));
}

?>
