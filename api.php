<?

    require_once 'model/UserService.php'; // Attach User Service
    require_once 'controller/UserController.php'; // Attach User Controller
    require_once 'controller/PageController.php'; // Attach Page Controller

    $controller = new PageController();

    $method = $_SERVER['REQUEST_METHOD'];
    $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
    $input = json_decode(file_get_contents('php://input'),true);

    switch ($method) {
        case 'GET':

            break;
        case 'POST':

            break;
        case 'DELETE':

            break;
        case 'PUT':

            break;
        default:
            echo json_encode("Invalid Request Method");
    }

?>