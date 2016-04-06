<?php

require 'Slim/Slim.php';
require 'rb.php';

$app = new Slim();

// custom class just to throw an exception
class ResourceNotFoundException extends Exception{}

//R::setup('mysql:host=localhost; dbname=testDB','root','root');
R::setup('mysql:host=localhost; dbname=bmuusers','350user','350password');
R::freeze(true);

$app->get('/clubs', 'getClubs');    // get all clubs
$app->get('/clubs/:type',	'getClub');     // get club by its type
$app->post('/club', 'addClub');

$app->run();


function getClubs() {
    global $app;

    $clubs = R::find('clubs');
    $app->response()->header('Content-type', 'application/json');
    echo '{"Clubs": ' .json_encode(R::exportAll($clubs)).'}';

}

function getClub($type) {
    global $app;
    try{
        $club = R::find('clubs','category=?',array($type));
        if($club){
            $app->response()->header('Content-Type','application/json');
            echo '{"Clubs": ' .json_encode(R::exportAll($club)).'}';
        }else{
            throw new ResourceNotFoundException();
        }
    }catch (ResourceNotFoundException $e) {
        $app->response()->status(404);
    }catch (Exception $e){
        $app->response()->status(400);
        $app->response()->header('X-Status-Reason', $e->getMessage());
    }
}

function addClub(){
    global $app;

    try{
        // get JSON req body
        $request = $app->request();
        $body = $request->getBody();
        $input = json_decode($body);
        // store record

        $cb = R::Dispense('clubs');

        $cb->name = (string)$input->name;
        $cb->category = (string)$input->category;

        $cb->phone = (string)$input->phone;
        $cb->city = (string)$input->city;
        $cb->address = (string)$input->address;
        $cb->latitude = (string)$input->latitude;
        $cb->longitude = (string)$input->longitude;
        R::store($cb);

        //return JSON body
        $app->response()->header('Content-Type','application/json');
        echo '{"Computer": ' .json_encode(R::exportAll($cb)).'}';

    }catch (Exception $e){
        $app->response()->status(400);
        $app->response()->header('X-Status-Reason',$e->getMessage());
    }
}

?>