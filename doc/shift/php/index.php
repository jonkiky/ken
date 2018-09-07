<?php
session_start();
/**
 * @author Yizhen Chen
 * @version v1.0
 * @return JSON messages with the format:
 * {
 * 	"code": mandatory, string '0' for correct, '1' for error
 * 	"message": empty or string message
 * 	"data": empty or JSON data
 * }
 *
 *
 * Based on
 * http://www.raywenderlich.com/2941/how-to-write-a-simple-phpmysql-web-service-for-an-ios-app
 */

// the API file
require_once 'api.php';

// creates a new instance of the api class
$api = new api();

// message to return
$message = array();


switch($_POST["action"])
{
	case 'email':
		$params = array();
		$params['lname'] = isset($_POST["lname"]) ? $_POST["lname"] : '';
		$params['fname'] = isset($_POST["fname"]) ? $_POST["fname"] : '';
		$params['message'] = isset($_POST["message"]) ? $_POST["message"] : '';
		$params['email'] = isset($_POST["email"]) ? $_POST["email"] : '';
		$api->addCustomerInfo($params);
		break;

	case 'get':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		if (is_array($data = $api->get($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;

	case 'getUser':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		if (is_array($data = $api->getUser($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;

	case 'checkUser':
		$params = array();
		$params['username'] = isset($_POST["username"]) ? $_POST["username"] : '';
		$params['password'] = isset($_POST["password"]) ? $_POST["password"] : '';
		if ($data = $api->checkUser($params)) {
			$message["code"] = "0";
			$message["data"] = $data;
			 $_SESSION["login"] = true;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;

	case 'addUser':
		$params = array();
		$params['username'] = isset($_POST["username"]) ? $_POST["username"] : '';
		$params['password'] = isset($_POST["password"]) ? $_POST["password"] : '';
		$params['email'] = isset($_POST["email"]) ? $_POST["email"] : '';
		$data = $api->insertUser($params);
		if ( $data!=-1 ) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "User does not exit";
		}
		break;


	case 'updateUser':
		$params = array();
		$params['username'] = isset($_POST["username"]) ? $_POST["username"] : '';
		$params['password'] = isset($_POST["password"]) ? $_POST["password"] : '';
		$params['email'] = isset($_POST["email"]) ? $_POST["email"] : '';
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		$params['status'] = isset($_POST["status"]) ? $_POST["status"] : '';
		if ($data = $api->updateUser($params)) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Update user info fail";
		}
		break;


	// un tested api
	case 'addAmazonCode':
		$params = array();
		$params['landpages_id'] = isset($_POST["landpages_id"]) ? $_POST["landpages_id"] : '';
		$params['code'] = isset($_POST["code"]) ? $_POST["code"] : '';
		$data = $api->insertAmazonCode($params);
		if ($data != -1) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Add amazon code fail .";
		}
		break;


	case 'updateAmazonCode':
		$params = array();
		$params['landpages_id'] = isset($_POST["landpages_id"]) ? $_POST["landpages_id"] : '';
		$params['code'] = isset($_POST["code"]) ? $_POST["code"] : '';
		$params['status'] = isset($_POST["status"]) ? $_POST["status"] : '';
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		if ($data = $api->updateAmazonCode($params)) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Update amazon code fail .";
		}
		break;


	case 'getAmazonCodeById':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		if (is_array($data = $api->getAmazonCodeById($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;





	 case 'getAmazonCodeByLangpagesId':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		if (is_array($data = $api->getAmazonCodeByLangpagesId($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;


	case 'getOpenedAmazonCodeByLangpagesId':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		if (is_array($data = $api->getOpenedAmazonCodeByLangpagesId($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;

	case 'getKeyWords':
		$params = array();
		
		if (is_array($data = $api->getKeyWords($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;


	case 'addKeywords':
		$params = array();
		$params['keywords'] = isset($_POST["keywords"]) ? $_POST["keywords"] : '';
		$data = $api->insertKeyWords($params);
		if ($data!=-1) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Add keywords fails";
		}
		break;

	case 'updateKeyWords':
		$params = array();
		$params['keywords'] = isset($_POST["keywords"]) ? $_POST["keywords"] : '';
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		$data = $api->updateKeyWords($params);
		if ($data!=-1) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Update keywords fails";
		}
		break;

	case 'delKeyWords':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		$data = $api->delKeyWords($params);
		if ($data) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Update keywords fails";
		}
		break;


	case 'getAmazonCode':
		$params = array();
		if (is_array($data = $api->getAmazonCode())) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;

	case 'getLangpages':
		$params = array();
		
		if (is_array($data = $api->getLangpages($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;

	case 'getLangpagesById':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		if (is_array($data = $api->getLangpagesById($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;

	case 'getOpenedLangpages':
		$params = array();
		if (is_array($data = $api->getOpenedLangpages($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;
		
	case 'getDefaultLangpages':
		if (is_array($data = $api->getDefaultLangpages($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;

	case 'addLandpages':
		$params = array();
		$params['title'] = isset($_POST["title"]) ? $_POST["title"] : '';
		$params['subtitle'] = isset($_POST["subtitle"]) ? $_POST["subtitle"] : '';
		$params['abstract'] = isset($_POST["abstract"]) ? $_POST["abstract"] : '';
		$params['image'] = isset($_POST["image"]) ? $_POST["image"] : '';
		$params['detail_title'] = isset($_POST["detail_title"]) ? $_POST["detail_title"] : '';
		$params['details'] = isset($_POST["details"]) ? $_POST["details"] : '';
		$params['status'] = isset($_POST["status"]) ? $_POST["status"] : 0;
		$params['minutes'] = isset($_POST["minutes"]) ? $_POST["minutes"] : 60;
		$params['temple'] = isset($_POST["temple"]) ? $_POST["temple"] : "";
		$params['detail_sub_title'] = isset($_POST["detail_sub_title"]) ? $_POST["detail_sub_title"] : "";
		$params['steps'] = isset($_POST["steps"]) ? $_POST["steps"] : "";
		$data =  $api->insertLandpages($params);
		if ( $data!=-1) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Add landing Page fails";
		}
		break;

	case 'updateLandpages':
		$params = array();
		$params['title'] = isset($_POST["title"]) ? $_POST["title"] : '';
		$params['subtitle'] = isset($_POST["subtitle"]) ? $_POST["subtitle"] : '';
		$params['abstract'] = isset($_POST["abstract"]) ? $_POST["abstract"] : '';
		$params['image'] = isset($_POST["image"]) ? $_POST["image"] : '';
		$params['detail_title'] = isset($_POST["detail_title"]) ? $_POST["detail_title"] : '';
		$params['details'] = isset($_POST["details"]) ? $_POST["details"] : '';
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		$params['status'] = isset($_POST["status"]) ? $_POST["status"] : 0;
		$params['minute'] = isset($_POST["minute"]) ? $_POST["minute"] : 60;
		$params['temple'] = isset($_POST["temple"]) ? $_POST["temple"] : "";
		$params['detail_sub_title'] = isset($_POST["detail_sub_title"]) ? $_POST["detail_sub_title"] : "";
		$params['steps'] = isset($_POST["steps"]) ? $_POST["steps"] : "";

		if ($data = $api->updateLandpages($params)) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Add keywords fails";
		}
		break;

	case 'addURL':
		$params = array();
		$params['url'] = isset($_POST["keywords"]) ? $_POST["keywords"] : '';
		$data = $api->insertURL($params);
		if ($data!=-1) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Add keywords fails";
		}
		break;

	case 'updateURL':
		$params = array();
		$params['url'] = isset($_POST["keywords"]) ? $_POST["keywords"] : '';
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		$data = $api->updateURL($params);
		if ($data!=-1) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Update keywords fails";
		}
		break;

	case 'delURL':
		$params = array();
		$params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		$data = $api->delURL($params);
		if ($data) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Update keywords fails";
		}
		break;

	case 'getURL':
		$params = array();
		
		if (is_array($data = $api->getURL($params))) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;
	 case 'getIsEmail':
		if (is_array($data = $api->getIsEmail())) {
			$message["code"] = "0";
			$message["data"] = $data;
		} else {
			$message["code"] = "1";
			$message["message"] = "Error on get method";
		}
		break;
	 case 'updateIsEmail':
		 $params = array();
		 $params['id'] = isset($_POST["id"]) ? $_POST["id"] : '';
		 $params['is_email'] = isset($_POST["is_email"]) ? $_POST["is_email"] : '';
		$data = $api->updateIsEmail($params);
	
		break;

	default:
		$message["code"] = "1";
		$message["message"] = "Unknown method " . $_POST["action"];
		break;
	}


//the JSON message
header('Content-type: application/json; charset=utf-8');
echo json_encode($message);

?>
