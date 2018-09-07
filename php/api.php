<?php
/**
 * API class
 * @author Rob
 * @version 2015-06-22
 */

class api
{
	private $db;




	/**
	 * Constructor - open DB connection
	 *
	 * @param none
	 * @return database
	 */
	function __construct()
	{
		$conf = json_decode(file_get_contents('configuration.json'), TRUE);
		$this->db = new mysqli($conf["host"], $conf["user"], $conf["password"], $conf["database"]);
	}

	/**
	 * Destructor - close DB connection
	 *
	 * @param none
	 * @return none
	 */
	function __destruct()
	{
		$this->db->close();
	}


	function checkToken($token){
		$query = 'SELECT *'
				. ' FROM user AS u'
				. ' WHERE status=0 and token= \'' . $this->db->real_escape_string($token) . '\' '
				. ' ORDER BY u.username';
				$list = array();
				//echo $query;
				$result = $this->db->query($query);
				if ($result) {
					 while ($row = $result->fetch_assoc())
					 	{
					 	return true;
					 	}
					}
				return false;

	}


		function getUserByToken($params){
		$query = 'SELECT *'
				. ' FROM user AS u'
				. ' WHERE status=0 and token= \'' . $this->db->real_escape_string($params['token']) . '\' '
				. ' ORDER BY u.username';
				$list = array();
				//echo $query;
				$result = $this->db->query($query);
				if ($result) {
					 while ($row = $result->fetch_assoc())
					 	{
					 		$list=$row;
					 	}
					}
				return $list;

	}

    function getUserById($params){
        $query = 'SELECT *'
            . ' FROM user AS u'
            . ' WHERE status=0 and id= \'' . $this->db->real_escape_string($params['user_id']) . '\' ';
        $list = array();
        //echo $query;
        $result = $this->db->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc())
            {
                $list=$row;
            }
        }
        return $list;

    }

	function checkUser($params)
	{
		$query = 'SELECT *'
		. ' FROM user AS u'
		. ' WHERE status=0 and username= \'' . $this->db->real_escape_string($params['username']) . '\' '
		. '  and  password = \'' . $this->db->real_escape_string($params['password']) . '\' '
		. ' ORDER BY u.username'
		;
		$list = array();
		//echo $query;
		$result = $this->db->query($query);
		if ($result) {
			 while ($row = $result->fetch_assoc())
			 	{
			 	$list[] = $row;
			 	}
			}

		return $list;
	}

    function editUser($params){
        $query = "update user set "
            ." redirect_dest_url=\"".$params["user"]["redirect_dest_url"]."\","
            ." is_ran_out=\"".$params["user"]["is_ran_out"]."\","
            ." ran_out_email=\"".$params["user"]["ran_out_email"]."\","
            ." is_limit=\"".$params["user"]["is_limit"]."\","
            ." limit_email=\"".$params["user"]["limit_email"]."\" where id=".$params["user"]["id"];
        // echo $query;
        if ($this->db->query($query) === TRUE) {
            return true;
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
            return false;
        }
    }


	 /*
		 Post Sample
		 'title':this.title,
         'slug':this.slug,
         'redirect_url':this.redirect_url,
         'redirect_url_enabled':this.redirect_url_enabled,
         'token':this.token,
         'id':this.id,
         'action':'eidtCampaign'*/

	function addCampaign($params){
		$query = "insert into campaign (name,url_slug,redirect_url,is_redirect,create_time,user_id,status) value("
		."\"".$params["title"]."\","
		."\"".$params["slug"]."\","
		."\"".$params["redirect_url"]."\","
		."\"".$params["redirect_url_enabled"]."\","
		."\"".date("d-M-Y h:i A", mktime())."\","
		."\"".$params["user_id"]."\","
		."'active'"
		.")";
		//echo $query;
		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
		}

	}


	 /*
		 Post Sample
		 'title':this.title,
         'slug':this.slug,
         'redirect_url':this.redirect_url,
         'redirect_url_enabled':this.redirect_url_enabled,
         'token':this.token,
         'id':this.id,
         'action':'eidtCampaign'*/

	function editCampaign($params){

		$query = "update campaign set "
		." name=\"".$params["title"]."\","
		." url_slug=\"".$params["slug"]."\","
		." redirect_url=\"".$params["redirect_url"]."\","
		." is_redirect=\"".$params["redirect_url_enabled"]."\","
		." user_id='".$params["user_id"]."' where id=".$params["id"];

		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
		}

	}

	function updateCampaignStatus($params){

		$query = "update campaign set "
		." status='".$params["status"]."',"
		." user_id='".$params["user_id"]."' where id=".$params["id"];

			if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}

	}

	function getCampaignByUserId($params){

		$query = 'SELECT *'
		. ' FROM campaign '
		. ' WHERE user_id =\'' . $this->db->real_escape_string($params['user_id']) . '\' '
		. ' ORDER BY id desc'
		;
		$list = array();
		//echo $query;
		$result = $this->db->query($query);
		if ($result) {
			 while ($row = $result->fetch_assoc())
			 	{
			 	$list[] = $row;
			 	}
			}

		return $list;

	}


	function getCampaignById($params){

		$query = 'SELECT *'
		. ' FROM campaign '
		. ' WHERE id =\'' . $this->db->real_escape_string($params['id']) . '\' ';
		$list = array();
		//echo $query;
		$result = $this->db->query($query);
		if ($result) {
			 while ($row = $result->fetch_assoc())
			 	{
			 	$list[] = $row;
			 	}
			}

		return $list;

	}

	function duplicateCampaigns($params){

		$query = "insert into campaign (name,url_slug,redirect_url,is_redirect,create_time,user_id,status) select CONCAT(name,'_duplicated_with_id_".$params['id']."'),url_slug,redirect_url,is_redirect,create_time,user_id,status from campaign where id =".$params['id'];

		//echo $query;
		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
		}

	}

	function getOfferByCampaignId($params){
		$query = 'SELECT *'
		. ' FROM offer '
		. ' WHERE campaign_id =' . $this->db->real_escape_string($params['id']);
		$list = array();
		//echo $query;
		$result = $this->db->query($query);
		if ($result) {
			 while ($row = $result->fetch_assoc())
			 	{
			 	$list[] = $row;
			 	}
			}

		return $list;

	}


		function getActiveOfferByCampaignId($params){
		$query = 'SELECT offer.id'
		. ' FROM coupon,'
		. ' LEFT JOIN offer ON coupon.offer_id=offer.id and offer.status="true" and coupon.offer_id=offer.id and coupon.status="not used" and offer.campaign_id =' . $this->db->real_escape_string($params['id']);
		$list = array();
		echo $query;
		$result = $this->db->query($query);
		if ($result) {
			 while ($row = $result->fetch_assoc())
			 	{
			 	$list[] = $row;
			 	}
			}

		return $list;

	}




		function getTemplate(){
			$query = 'SELECT * FROM template order by id desc ';
			$list = array();
			//echo $query;
			$result = $this->db->query($query);
			if ($result) {
				 while ($row = $result->fetch_assoc())
				 	{
				 	$list[] = $row;
				 	}
				}

			return $list;

		}


		function addOffer($params){

			$query ="INSERT INTO offer("
				."`name`,"
				."`status`,"
				."`template_id`,"
				."`is_ever_green`,"
				."`start_date`,"
				."`end_date`,"
				."`daily_coupon_limited`,"
				."`market_place`,"
				."`sale_price`,"
				."`normal_price`,"
				."`product_name`,"
				."`brand`,"
				."`email`,"
				."`is_signup`,"
				."`benefit1`,"
				."`landing_analytics_code`,"
				."`benefit2`,"
				."`thank_you_analytics_code`,"
				."`seller_id`,"
				."`product_asin`,"
				."`canonical_url`,"
				."`buy_link_keywords`,"
				."`url_rotation`,"
				."`is_super_nova_url`,"
				."`super_noval_url_keyword`,"
				."`club_name`,"
				."`deal_club_url`,"
				."`campaign_id`,"
				."`aweber_id`,"
				."`search_key_words`,"
				."`add_to_wishlist`,"
				."`product_type`,"
				."`lead_sentence`,"
				."`product_description`,"
				."`freq_deal_description`,"
				."`freq_free_product_name`,"
				."`freq_free_product_value`,"
				."`freq_free_product_buy_url`,"
				."`freq_disc_description`,"
				."`freq_disc_product_name`,"
				."`freq_disc_product_value`,"
				."`freq_disc_product_discount`,"
				."`freq_disc_product_buy_url`,"
				."`is_upviral`,"
				."`upviral_code`,"
				."`user_id`) VALUES( \""
				.$params['name']."\",\""
				.$params['status']."\","
				.$params['template_id'].",\""
				.$params['is_ever_green']."\",\""
				.$params['start_date']."\",\""
				.$params['end_date']."\","
				.$params['daily_coupon_limited'].",\""
				.$params['market_place']."\",\""
				.$params['sale_price']."\",\""
				.$params['normal_price']."\",\""
				.$params['product_name']."\",\""
				.$params['brand']."\",\""
				.$params['email']."\",\""
				.$params['is_signup']."\",\""
				.$params['benefit1']."\",\""
				.$params['landing_analytics_code']."\",\""
				.$params['benefit2']."\",\""
				.$params['thank_you_analytics_code']."\",\""
				.$params['seller_id']."\",\""
				.$params['product_asin']."\",\""
				.$params['canonical_url']."\",\""
				.$params['buy_link_keywords']."\",\""
				.$params['url_rotation']."\",\""
				.$params['is_super_nova_url']."\",\""
				.$params['super_noval_url_keyword']."\",\""
				.$params['club_name']."\",\""
				.$params['deal_club_url']."\","
				.$params['campaign_id'].",\""
				.$params['aweber_id']."\",\""
				.$params['search_key_words']."\",\""
				.$params['add_to_']."\",\""
				.$params['product_type']."\",\""
				.$params['lead_sentence']."\",\""
				.$params['product_description']."\",\""
				.$params['freq_deal_description']."\",\""
				.$params['freq_free_product_name']."\",\""
				.$params['freq_free_product_value']."\",\""
				.$params['freq_free_product_buy_url']."\",\""
				.$params['freq_disc_description']."\",\""
				.$params['freq_disc_product_name']."\",\""
				.$params['freq_disc_product_value']."\",\""
				.$params['freq_disc_product_discount']."\",\""
				.$params['freq_disc_product_buy_url']."\",\""
				.$params['is_upviral']."\",\""
				.$params['upviral_code']."\","
				.$params['user_id'].")" ;


				#echo $query;
				if ($this->db->query($query) === TRUE) {
		   				return  $this->db->insert_id;;
					} else {
		    			echo "Error: " . $query . "<br>" . $this->db->error;
		    			return -1;
				}

	}




		function editOffer($params){

			$query ="update offer set "
				."`name`=\"".$params['name']."\","
				."`status`=\"".$params['status']."\","
				."`template_id`=\"".$params['selected_template']."\","
				."`is_ever_green`=\"".$params['is_ever_green']."\","
				."`start_date`=\"".$params['start_date']."\","
				."`end_date`=\"".$params['end_date']."\","
				."`daily_coupon_limited`=".$params['daily_coupon_limited'].","
				."`market_place`=\"".$params['market_place']."\","
				."`sale_price`=".$params['sale_price'].","
				."`normal_price`=".$params['normal_price'].","
				."`product_name`=\"".$params['product_name']."\","
				."`brand`=\"".$params['brand']."\","
				."`email`=\"".$params['email']."\","
				."`is_signup`=\"".$params['is_signup']."\","
				."`benefit1`=\"".$params['benefit1']."\","
				."`landing_analytics_code`=\"".$params['landing_analytics_code']."\","
				."`benefit2`=\"".$params['benefit2']."\","
				."`thank_you_analytics_code`=\"".$params['thank_you_analytics_code']."\","
				."`seller_id`=\"".$params['seller_id']."\","
				."`product_asin`=\"".$params['product_asin']."\","
				."`canonical_url`=\"".$params['canonical_url']."\","
				."`buy_link_keywords`=\"".$params['buy_link_keywords']."\","
				."`url_rotation`=\"".$params['url_rotation']."\","
				."`is_super_nova_url`=\"".$params['is_super_nova_url']."\","
				."`super_noval_url_keyword`=\"".$params['super_noval_url_keyword']."\","
				."`club_name`=\"".$params['club_name']."\","
				."`deal_club_url`=\"".$params['deal_club_url']."\","
				."`aweber_id`=\"".$params['aweber_id']."\","
				."`search_key_words`=\"".$params['search_key_words']."\","
				."`add_to_wishlist`=\"".$params['add_to_']."\","
				."`product_type`=\"".$params['product_type']."\","
				."`lead_sentence`=\"".$params['lead_sentence']."\","
				."`product_description`=\"".$params['product_description']."\","
				."`freq_deal_description`=\"".$params['freq_deal_description']."\","
				."`freq_free_product_name`=\"".$params['freq_free_product_name']."\","
				."`freq_free_product_value`=\"".$params['freq_free_product_value']."\","
				."`freq_free_product_buy_url`=\"".$params['freq_free_product_buy_url']."\","
				."`freq_disc_description`=\"".$params['freq_disc_description']."\","
				."`freq_disc_product_name`=\"".$params['freq_disc_product_name']."\","
				."`freq_disc_product_value`=\"".$params['freq_disc_product_value']."\","
				."`freq_disc_product_discount`=\"".$params['freq_disc_product_discount']."\","
				."`freq_disc_product_buy_url`=\"".$params['freq_disc_product_buy_url']."\","
				."`is_upviral`=\"".$params['is_upviral']."\","
				."`upviral_code`=\"".$params['upviral_code']."\" where id = ".$params['id'];


				// echo $query;
				// return $query;
				if ($this->db->query($query) === TRUE) {
		   				return true;
					} else {
		    			echo "Error: " . $query . "<br>" . $this->db->error;
		    				return false;
					}
			}



    function getCouponsByOfferId($params){
        $query = 'SELECT *'
            . ' FROM coupon'
            . ' WHERE offer_id ='
            . $this->db->real_escape_string($params['offer_id']);
        $list = array();
        //echo $query;
        $result = $this->db->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc())
            {
                $list[] = $row;
            }
        }
        return $list;
    }

    function getAvailableCoupons(){
        $query = 'SELECT * FROM coupon WHERE offer_id =-1 AND status = "not used" ';
        $list = array();
        //echo $query;
        $result = $this->db->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc())
            {
                $list[] = $row;
            }
        }
        return $list;
    }

     function getAvailableCouponsByOfferId($params){
        $query = 'SELECT * FROM coupon WHERE offer_id ='.$params['offer_id'].' AND status = "not used" ';
        $list = array();
        //echo $query;
        $result = $this->db->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc())
            {
                $list[] = $row;
            }
        }
        return $list;
    }



    function duplicateOffer($params){

    	$query ="INSERT INTO offer("
				."`name`,"
				."`status`,"
				."`template_id`,"
				."`is_ever_green`,"
				."`start_date`,"
				."`end_date`,"
				."`daily_coupon_limited`,"
				."`market_place`,"
				."`sale_price`,"
				."`normal_price`,"
				."`product_name`,"
				."`brand`,"
				."`email`,"
				."`is_signup`,"
				."`benefit1`,"
				."`landing_analytics_code`,"
				."`benefit2`,"
				."`thank_you_analytics_code`,"
				."`seller_id`,"
				."`product_asin`,"
				."`canonical_url`,"
				."`buy_link_keywords`,"
				."`url_rotation`,"
				."`is_super_nova_url`,"
				."`super_noval_url_keyword`,"
				."`club_name`,"
				."`deal_club_url`,"
				."`campaign_id`,"
				."`aweber_id`,"
				."`search_key_words`,"
				."`add_to_wishlist`,"
				."`product_type`,"
				."`lead_sentence`,"
				."`product_description`,"
				."`freq_deal_description`,"
				."`freq_free_product_name`,"
				."`freq_free_product_value`,"
				."`freq_free_product_buy_url`,"
				."`freq_disc_description`,"
				."`freq_disc_product_name`,"
				."`freq_disc_product_value`,"
				."`freq_disc_product_discount`,"
				."`freq_disc_product_buy_url`,"
				."`is_upviral`,"
				."`upviral_code`,"
				."`user_id`) select CONCAT(name,'_duplicated_with_id_".$params['id']
				."'),status,"
				."`template_id`,"
				."`is_ever_green`,"
				."`start_date`,"
				."`end_date`,"
				."`daily_coupon_limited`,"
				."`market_place`,"
				."`sale_price`,"
				."`normal_price`,"
				."`product_name`,"
				."`brand`,"
				."`email`,"
				."`is_signup`,"
				."`benefit1`,"
				."`landing_analytics_code`,"
				."`benefit2`,"
				."`thank_you_analytics_code`,"
				."`seller_id`,"
				."`product_asin`,"
				."`canonical_url`,"
				."`buy_link_keywords`,"
				."`url_rotation`,"
				."`is_super_nova_url`,"
				."`super_noval_url_keyword`,"
				."`club_name`,"
				."`deal_club_url`,"
				."`campaign_id`,"
				."`aweber_id`,"
				."`search_key_words`,"
				."`add_to_wishlist`,"
				."`product_type`,"
				."`lead_sentence`,"
				."`product_description`,"
				."`freq_deal_description`,"
				."`freq_free_product_name`,"
				."`freq_free_product_value`,"
				."`freq_free_product_buy_url`,"
				."`freq_disc_description`,"
				."`freq_disc_product_name`,"
				."`freq_disc_product_value`,"
				."`freq_disc_product_discount`,"
				."`freq_disc_product_buy_url`,"
				."`is_upviral`,"
				."`upviral_code`,"
				."`user_id` from offer where id =".$params['id'];

		//echo $query;
		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
		}

	}

    /*
        Post Sample
            'token': this.token,
            'offer_id': this.offer_id,
            'coupons': this.coupons,
            'spec_quantity': this.spec_quantity,
            'action': 'addCoupons'
    */
    function addCoupons($params){
        $query = "INSERT INTO coupon (coupon_code,offer_id,status) VALUES ";
        for ($i = 0; $i <  count($params['coupons']); $i++) {
            if ($params['spec_quantity'] > 0 ) {
                $query .= '(\'' . $params['coupons'][$i] . '\',' . $params['offer_id'] . ',"not used"),';
                --$params['spec_quantity'];
            } else {
                $query .= '(\'' . $params['coupons'][$i] . '\',-1,"not used"),';
            }
        }
        $query = rtrim($query, ',');
        if ($this->db->query($query) === TRUE) {
            return $this->db->insert_id;
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
            return -1;
        }

    }


	function updateOfferStatus($params){
		$query = "update offer set "
		." status='".$params["status"]."',"
		." user_id='".$params["user_id"]."' where id=".$params["id"];
		//echo $query;
			if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}

	}

    /*
    Post Sample
        'token': this.token,
        'offer_id': this.offer_id,
        'del_quantity': this.del_quantity,
        'action': 'deleteCoupons'
    */
    function deleteCoupons($params) {
        $query = "UPDATE coupon SET offer_id=-1 WHERE offer_id=" . $params['offer_id']
            . " AND status='not used' LIMIT " . $params['del_quantity'];

        if ($this->db->query($query) === TRUE) {
            return TRUE;
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
            return FALSE;
        }

    }


	function getOfferById($params){

		$query = 'SELECT '
		."offer.user_id,"
		."offer.id,"
		."offer.name,"
		."offer.status,"
		."offer.template_id,"
		."offer.is_ever_green,"
		."offer.start_date,"
		."offer.end_date,"
		."offer.daily_coupon_limited,"
		."offer.market_place,"
		."offer.sale_price,"
		."offer.normal_price,"
		."offer.product_name,"
		."offer.brand,"
		."offer.email,"
		."offer.is_signup,"
		."offer.benefit1,"
		."offer.landing_analytics_code,"
		."offer.benefit2,"
		."offer.thank_you_analytics_code,"
		."offer.seller_id,"
		."offer.product_asin,"
		."offer.canonical_url,"
		."offer.buy_link_keywords,"
		."offer.url_rotation,"
		."offer.is_super_nova_url,"
		."offer.super_noval_url_keyword,"
		."offer.club_name,"
		."offer.deal_club_url,"
		."offer.campaign_id,"
		."offer.aweber_id,"
		."offer.search_key_words,"
		."offer.add_to_wishlist,"
		."offer.product_type,"
		."offer.lead_sentence,"
		."offer.product_description,"
		."offer.freq_deal_description,"
		."offer.freq_free_product_name,"
		."offer.freq_free_product_value,"
		."offer.freq_free_product_buy_url,"
		."offer.freq_disc_description,"
		."offer.freq_disc_product_name,"
		."offer.freq_disc_product_value,"
		."offer.freq_disc_product_discount,"
		."offer.freq_disc_product_buy_url,"
		."offer.is_upviral,"
		."offer.upviral_code,"
		."campaign.redirect_url,"
		."campaign.is_redirect"
        . ' FROM offer,campaign '
        . ' WHERE campaign.id=offer.campaign_id and offer.id =' . $this->db->real_escape_string($params['id']);
        $list = array();
        //echo $query;
        $result = $this->db->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc())
            {
                $list[] = $row;
            }
        }

        return $list;
	}




	function updateCoupon($params){
		$query = "UPDATE coupon SET offer_id=".$params['offer_id']." WHERE id=". $params['coupon_id'];
		//echo $query;
        if ($this->db->query($query) === TRUE) {
            return TRUE;
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
            return FALSE;
        }
	}

	function updateCouponStatus($params){
		$query = "UPDATE coupon SET status='".$params['status']."' WHERE id=". $params['coupon_id'];
		//echo $query;
        if ($this->db->query($query) === TRUE) {
            return TRUE;
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
            return FALSE;
        }
	}


    function getImagesByOfferId($params){
        $query = 'SELECT *'
            . ' FROM offer_image '
            . ' WHERE offer_id =' . $this->db->real_escape_string($params['offer_id'])
            . ' AND status="active"';
        $list = array();
        // echo $query;
        $result = $this->db->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc())
            {
                $list[] = $row;
            }
        }
        return $list;
    }

    function addImage($params){
        $query = "INSERT INTO offer_image (offer_id,picture,status) VALUES ("
            ."'".$params["offer_id"]."',"
            ."'".$params["image_url"]."',"
            ."'active'"
            .")";
        //echo $query;
        if ($this->db->query($query) === TRUE) {
            return  $this->db->insert_id;;
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
            return -1;
        }

    }

    function deleteImages($params) {
        $query = "UPDATE offer_image SET status='deleted' WHERE id in ( ";
        for ($i = 0; $i < count($params['del_images']); $i++) {
            $query = $query . $params['del_images'][$i] . ',';
        }
        $query = rtrim($query, ',') . " )";
        // echo $query;
        if ($this->db->query($query) === TRUE) {
            return TRUE;
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
            return FALSE;
        }
    }

    function getUsedCoupon($params) {
         $query = 'SELECT *'
            . ' FROM coupon '
            . ' WHERE offer_id =' . $this->db->real_escape_string($params['offer_id'])
            . ' AND status="used"';
        $list = array();
        // echo $query;
        $result = $this->db->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc())
            {
                $list[] = $row;
            }
        }
        return $list;
    }

    function monitor($params){
    	$query = "INSERT INTO monitor (page,function,pos,data,testcase) VALUES ("
            ."'".$params["page"]."',"
            ."'".$params["function"]."',"
            ."'".$params["pos"]."',"
            ."'".$params["data"]."',"
            ."'".$params["testcase"]."'"
            .")";
        //echo $query;
        if ($this->db->query($query) === TRUE) {
            return  $this->db->insert_id;;
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
            return -1;
        }

    }

}
