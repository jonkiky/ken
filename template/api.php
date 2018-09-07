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


	function getCampaignById($params){

		$query = 'SELECT *'
		. ' FROM campaign '
		. ' WHERE id =\'' . $this->db->real_escape_string($params) . '\' ';
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
		$query = 'SELECT  Distinct offer.id,offer.template_id'
		. ' FROM coupon'
		. ' JOIN offer ON coupon.offer_id=offer.id and offer.status="true"  and coupon.status="not used" and coupon.offer_id=offer.id and offer.campaign_id=' . $this->db->real_escape_string($params);
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



}
