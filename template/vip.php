<?php


require_once 'api.php';



function goExpired($cid){
      $api = new api();
      $data = $api->getCampaignById($cid);
      if (is_array($data)&&count($data)>0) {
                echo $data[0]["name"];
                if($data[0]["is_redirect"]=="true"&&$data[0]["redirect_url"]!=""){
                     echo $data[0]["redirect_url"];
                      header( 'Location: //'.$data[0]["redirect_url"]) ;

                }else{
                    echo "goExpired";
                    header( 'Location: ../expired.php') ;
                }
               
            } else {
                echo "goExpired";
                header( 'Location: ../expired.php') ;
            }


      
}

function goToLandingPage($offerid,$template,$cid){

    switch ($template) {
    case 1:
        header( 'Location: ../flashsale.php?cid='.$cid.'&offer_id='.$offerid) ;
        break;
    case 2: //Giveaway Offer
        header( 'Location: ../landing.php?cid='.$cid.'&offer_id='.$offerid) ;
        break;
    case 3: //Search-Find-Bu
        header( 'Location: ../search_find_buy.php?cid='.$cid.'&offer_id='.$offerid) ;
        break;
    case 4: //Frequently Bought Together (Free)
        header( 'Location: ../buy_together_discount_free.php?cid='.$cid.'&offer_id='.$offerid) ;
        break;
    case 5: //Frequently Bought Together (Discount)
        header( 'Location: ../buy_together_discount.php?cid='.$cid.'&offer_id='.$offerid) ;
        break;
    case 6: //Contest
        header( 'Location: ../contest.php?cid='.$cid.'&offer_id='.$offerid) ;
        break;
    default:
        goExpired($cid);
}
    

}
function getActiveLandingPages($cid){
          $api = new api();
          $data = $api->getActiveOfferByCampaignId($cid);
         if (is_array($data)&&count($data)>0) {
                $arrlength = count($data);
                $selected  = rand(0,$arrlength-1);
                echo $data[$selected]["id"];
                goToLandingPage($data[$selected]["id"],$data[$selected]["template_id"],$cid);
                               
            } else {
               goExpired($cid);
            }

}


if(@$path_info =$_SERVER["PATH_INFO"]){


echo $path_info."<br>";;

$pos= strrpos($path_info, "-");

if($pos === false) { 
    // not found...
    goExpired();
}else{
    $arg1 = substr($path_info,1,$pos-1);
    $arg2 = substr($path_info,$pos+1,strlen($path_info));

    echo $arg1 ."<br>";
    echo $arg2 ."<br>";
    getActiveLandingPages($arg2);

}

 
}

?>