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

$_SESSION = array();

//php防注入和XSS攻击通用过滤. 
function SafeFilter (&$arr)
{
	$ra=Array('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/','/javascript/','/vbscript/','/expression/','/applet/','/meta/','/xml/','/blink/','/link/','/style/','/embed/','/frame/','/layer/','/title/','/bgsound/','/base/','/onload/','/onunload/','/onchange/','/onsubmit/','/onreset/','/onselect/','/onblur/','/onfocus/','/onabort/','/onkeydown/','/onkeypress/','/onkeyup/','/onclick/','/ondblclick/','/onmousedown/','/onmousemove/','/onmouseout/','/onmouseover/','/onmouseup/','/onunload/');

	if (is_array($arr)){

		foreach ($arr as $key => $value){
			if (!is_array($value)){
				if (!get_magic_quotes_gpc()){
					$value  = addslashes($value);

				}
				$value=preg_replace($ra,'',$value);
				$arr[$key]=str_replace('"','\"',htmlentities(strip_tags($value),ENT_NOQUOTES));
			}
			else{
				SafeFilter($arr[$key]);
			}
		}
	}
}

$_POST && SafeFilter($_POST);

function checkToken(){
    $api = new api();
    // for  the request need to check token 
    if((isset($_POST["token"])&&$api->checkToken($_POST["token"]))){
        return true;
    }else{
        return false;
    }
}


$message = takeAction();

function takeAction(){
	// creates a new instance of the api class
	$api = new api();

	// message to return
	$message = array();

	$params = array();

	foreach ($_POST as $key => $value){
			$params[$key] = $value;
	}

	switch($_POST["action"])
	{

		case "login":
			if (is_array($data = $api->checkUser($params))&&count($data)>0) {
				$message["code"] = "0";
				$message["data"] = $data;
			} else {
				$message["code"] = "1";
				$message["message"] = "username or password does not match.";
			}
			break;


			case "getUserByToken":

				if (is_array($data = $api->getUserByToken($params))&&count($data)>0) {
					$message["code"] = "0";
					$message["data"] = $data;
				} else {
					$message["code"] = "1";
					$message["message"] = "username or password does not match.";
				}
				break;


        case "getUserById":
            if (is_array($data = $api->getUserById($params))&&count($data)>0) {
                $message["code"] = "0";
                $message["data"] = $data;
            } else {
                $message["code"] = "1";
                $message["message"] = "user doesn't exist.";
            }
            break;

        case "editUser":
            if (checkToken()&&$api->editUser($params)) {
                $message["code"] = "0";
                $message["data"] = true;
            } else {
                $message["code"] = "1";
                $message["message"] = "Update user fails.";
            }
            break;

         case "eidtCampaign":
            if(checkToken()){
                $data = $api->editCampaign($params);
                 if (-1!=$data) {
                    $message["code"] = "0";
                    $message["data"] = $data;

                } else {
                    $message["code"] = "1";
                    $message["message"] = "Update campaign fails.";
                }
            }else {
                $message["code"] = "1";
                $message["message"] = "Invalid user fails.";
            }
         
			break;


         case "addCampaign":
            if(checkToken()){
             	 $data = $api->addCampaign($params);
             	 if (-1!=$data) {
    				$message["code"] = "0";
    				$message["data"] = $data;

    			} else {
    				$message["code"] = "1";
    				$message["message"] = "Add campaign fails.";
    			}
             }else {
                $message["code"] = "1";
                $message["message"] = "Invalid user fails.";
            }
			break;

		 case "getCampaignByUserId":
		 	 //echo $params['user_id'];
         	 if (is_array($data = $api->getCampaignByUserId($params))&&count($data)>0) {
				$message["code"] = "0";
				$message["data"] = $data;
			} else {
				$message["code"] = "1";
				$message["message"] = "get campaign by user id fails.";
			}
			break;


		case "updateCampaignStatus":
		 	 //echo $params['user_id'];
         	 if (checkToken()&&$api->updateCampaignStatus($params)) {
				$message["code"] = "0";
				$message["data"] = "success";
			} else {
				$message["code"] = "1";
				$message["message"] = "update campaign status fails.";
			}
			break;


		 case "getCampaignById":
		 	 //echo $params['user_id'];
         	 if (is_array($data = $api->getCampaignById($params))&&count($data)>0) {
				$message["code"] = "0";
				$message["data"] = $data;
			} else {
				$message["code"] = "1";
				$message["message"] = "get campaign by id fails.";
			}
			break;

		 case "duplicateCampaign":
		 if (checkToken()&&$api->duplicateCampaigns($params)) {
				$message["code"] = "0";

			} else {
				$message["code"] = "1";
				$message["message"] = "duplicate Campaign fails.";
			}
			break;


		 case "getOfferByCampaignId":
		 	 //echo $params['user_id'];
         	 if (is_array($data = $api->getOfferByCampaignId($params))&&count($data)>0) {
				$message["code"] = "0";
				$message["data"] = $data;
			} else {
				$message["code"] = "1";
				$message["message"] = "get campaign by id fails.";
			}
			break;

		case 'getTemplate':
			if (is_array($data = $api->getTemplate())&&count($data)>0) {
				$message["code"] = "0";
				$message["data"] = $data;
			} else {
				$message["code"] = "1";
				$message["message"] = "get template by id fails.";
			}
			break;


		case 'addOffer':
			 if (checkToken()&&$api->addOffer($params)) {
				$message["code"] = "0";

			} else {
				$message["code"] = "1";
				$message["message"] = "duplicate Campaign fails.";
			}
			break;

        case "getCouponsByOfferId":
            //echo $params['offer_id'];
            if (is_array($data = $api->getCouponsByOfferId($params))&&count($data)>0) {
                $message["code"] = "0";
                $message["data"] = $data;
            } else {
                $message["code"] = "1";
                $message["message"] = "get coupons by offer id failed.";
            }
            break;


        case "getOfferById":
            //echo $params['offer_id'];
            if (is_array($data = $api->getOfferById($params))&&count($data)>0) {
  				$message["code"] = "0";
                $message["data"] = $data;
            } else {
            	$message["code"] = "1";
                $message["message"] = "get coupons by offer id fails.";
            
            }
            break;

        case "editOffer":
        	  echo $params['offer_id'];
            if (checkToken()&&$api->editOffer($params)) {
  				$message["code"] = "0";
                $message["data"] = true;
            } else {
            	$message["code"] = "1";
                $message["message"] = "fails";
            
             }
            break;


        case "getAvailableCoupons":
            if (is_array($data = $api->getAvailableCoupons())&&count($data)>0) {
                $message["code"] = "0";
                $message["data"] = $data;
            } else {
                $message["code"] = "1";
                $message["message"] = "get available coupons failed.";;
            }
            break;

        
        case "updateOfferStatus":
            //echo $params['offer_id'];
            if (checkToken()&&$api->updateOfferStatus($params)) {
                $message["code"] = "0";
                $message["data"] = true;
            } else {
                $message["code"] = "1";
                $message["message"] = "update offer by offer id fails.";
            }
            break;
     case 'duplicateOffer':
        	   //echo $params['offer_id'];
            if (checkToken()&&$api->duplicateOffer($params)!=-1) {
                $message["code"] = "0";
                $message["data"] = true;
            } else {
                $message["code"] = "1";
                $message["message"] = "update offer by offer id fails.";
            }
            break;
       

		case "addCoupons":
            if(checkToken()){
                $data = $api->addCoupons($params);
                if (-1!=$data) {
                    $message["code"] = "0";
                    $message["data"] = $data;

                } else {
                    $message["code"] = "1";
                    $message["message"] = "Add coupons failed.";
                }
            }else {
                $message["code"] = "1";
                $message["message"] = "Invalid user fails.";
            }
            break;

         case "updateCoupon":

            if(checkToken()){
                $data = $api->updateCoupon($params);
                if ($data) {
                    $message["code"] = "0";
                    $message["data"] = $data;

                } else {
                    $message["code"] = "1";
                    $message["message"] = "Add coupons failed.";
                }
              }else {
                $message["code"] = "1";
                $message["message"] = "Invalid user fails.";
            }
            break;

         case "updateCouponStatus":


                $data = $api->updateCouponStatus($params);
                if ($data) {
                    $message["code"] = "0";
                    $message["data"] = $data;

                } else {
                    $message["code"] = "1";
                    $message["message"] = "Add coupons failed.";
                }
      
            break;


        case "deleteCoupons":
            if (checkToken()&&$api->deleteCoupons($params)) {
                $message["code"] = "0";
                $message["data"] = "success";
            } else {
                $message["code"] = "1";
                $message["message"] = "delete coupons failed.";
            }
            break;

		case "getImagesByOfferId":

            if (is_array($data = $api->getImagesByOfferId($params))) {
                $message["code"] = "0";
                $message["data"] = $data;
            } else {
                $message["code"] = "1";
                $message["message"] = "get available coupons failed.";;
            }
            break;

        case "addImage":
            if(checkToken()){
                $data = $api->addImage($params);
                if (-1!=$data) {
                    $message["code"] = "0";
                    $message["data"] = $data;

                } else {
                    $message["code"] = "1";
                    $message["message"] = "Add image fails.";
                }
             }else {
                $message["code"] = "1";
                $message["message"] = "Invalid user fails.";
            }
            break;

        case "deleteImages":
            if (checkToken()&&$api->deleteImages($params)) {
                $message["code"] = "0";
                $message["data"] = "success";
            } else {
                $message["code"] = "1";
                $message["message"] = "delete coupons failed.";
            }
            break;

        case "monitor":
            if ($api->monitor($params)) {
                $message["code"] = "0";
                $message["data"] = "success";
            } else {
                $message["code"] = "1";
                $message["message"] = "add to monit fails.";
            }
            break;


        case "getAvailableCouponsByOfferId":
            if (is_array($data = $api->getAvailableCouponsByOfferId($params))&&count($data)>0) {
                $message["code"] = "0";
                $message["data"] = $data;
            } else {
                $message["code"] = "1";
                $message["message"] = "add to monit fails.";
            }
            break;

        case "getUsedCoupon":
            if (is_array($data = $api->getUsedCoupon($params))&&count($data)>0) {
                $message["code"] = "0";
                $message["data"] = $data;
            } else {
                $message["code"] = "1";
                $message["message"] = "add to monit fails.";
            }
            break;

            
		default:
			$message["code"] = "1";
			$message["message"] = "Unknown method " . $_POST["action"];
			break;
		}

		return $message;
}


//the JSON message
header('Content-type: application/json; charset=utf-8');
echo json_encode($message);

?>
