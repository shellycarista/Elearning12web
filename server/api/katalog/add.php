<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: X-Requested-With');
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
include_once "../../data/katalog.php";

$request = $_SERVER['REQUEST_METHOD'];

$db = new Database();
$conn = $db->connection();

$katalog = new katalog($conn);

$data = json_decode(file_get_contents("php://input"));

$response = [];

if ($request == 'POST') {
    if (
        !empty($data->id) &&
        !empty($data->title) &&
        !empty($data->production_house) &&
        !empty($data->description)&&
        !empty($data->release_at) 
    ) {
        $katalog->id = $data->id;
        $katalog->title = $data->title;
        $katalog->production_house = $data->production_house;
        $katalog->description = $data->description;
        $katalog->release_at = $data->release_at;

        $data = array(
            'id' => $katalog->id,
            'title' => $katalog->title,
            'production_house' => $production_house->production_house,
            'description' => $katalog->description,
            'release_at' => $katalog->release_at,
        );

        if ($katalog->add()) {
            $response = array(
                'status' =>  array(
                    'messsage' => 'Success', 'code' => (http_response_code(200))
                ), 'data' => $data
            );
        } else {
            http_response_code(400);
            $response = array(
                'messsage' => 'Add Failed',
                'code' => http_response_code()
            );
        }
    } else {
        http_response_code(400);
        $response = array(
            'status' =>  array(
                'messsage' => 'Add Failed - Wrong Parameter', 'code' => http_response_code()
            )
        );
    }
} else {
    http_response_code(405);
    $response = array(
        'status' =>  array(
            'messsage' => 'Method Not Allowed', 'code' => http_response_code()
        )
    );
}

echo json_encode($response);
