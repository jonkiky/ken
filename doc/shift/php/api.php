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


	function addCustomerInfo($params){
		$query  = "INSERT INTO customer (lname, fname, email,message) VALUES"
		." ('".$params["lname"]."', '".$params["fname"]."', '".$params["email"]."', '".$params["message"]."')";
			
		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
			}


	}
	/**
	 * Get the list of users
	 *
	 * @param none or user id
	 * @return list of data on JSON format
	 */
	function getUser($params)
	{
		$query = 'SELECT u.id AS id'
		. ', u.username AS username'
		. ', u.password AS password'
		. ', u.email AS email'
		. ' FROM user AS u'
		. ($params['id'] == ''? '' : ' WHERE u.id = ' . $this->db->real_escape_string($params['id']) )
		. ' ORDER BY u.username'
		;
		$list = array();
		
		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}


	function checkUser($params)
	{
		$query = 'SELECT u.id AS id'
		. ', u.username AS username'
		. ', u.password AS password'
		. ', u.email AS email'
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
			 	return true;
			 	}
			}

		return false;
	}

	function insertUser($params){

		$query  = "INSERT INTO user (username, password, email,status) VALUES"
		." ('".$params["username"]."', '".$params["password"]."', '".$params["email"]."', 0)";
			
		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
			}

	}


	function updateUser($params){

		$query  = "Update user "
		."SET username='".$params["username"]."',"
		." password='".$params["password"]."',"
		." email='".$params["email"]."',"
		." status=".$params["status"]
		." where id=".$params["id"];
		
		
		if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}

	}



	function insertAmazonCode($params){

		$query  = "INSERT INTO amazon_code (landpages_id, code, status) VALUES"
		." ('".$params["landpages_id"]."', '".$params["code"]."',  0)";
			
		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
			}

	}


	function updateAmazonCode($params){

		$query  = "Update amazon_code "
		."SET landpages_id=".$params["landpages_id"].","
		." code='".$params["code"]."',"
		." status=".$params["status"]
		." where id=".$params["id"];
		
		
		if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}

	}




	function getAmazonCode()
	{
		$query = 'SELECT u.id AS id'
		. ', u.code AS code'
		. ', u.status AS status'
		. ', u.landpages_id AS landpages_id'
		. ', l.title AS title'
		. ' FROM amazon_code AS u , landpages As l where u.landpages_id=l.id and l.status!=-1';
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




	function getAmazonCodeById($params)
	{
		$query = 'SELECT u.id AS id'
		. ', u.code AS code'
		. ', u.status AS status'
		. ', u.landpages_id AS landpages_id'
		. ' FROM amazon_code AS u'
		. ($params['id'] == ''? '' : ' WHERE u.id = \'' . $this->db->real_escape_string($params['id']) . '\'');
		$list = array();

		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}


	function getAmazonCodeByLangpagesId($params)
	{
		$query = 'SELECT u.id AS id'
		. ', u.code AS code'
		. ', u.status AS status'
		. ', u.landpages_id AS landpages_id'
		. ' FROM amazon_code AS u'
		. ($params['id'] == ''? '' : ' WHERE u.landpages_id = \'' . $this->db->real_escape_string($params['id']) . '\'')
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


	function getOpenedAmazonCodeByLangpagesId($params)
	{
		$query = 'SELECT u.id AS id'
		. ', u.code AS code'
		. ', u.status AS status'
		. ', u.landpages_id AS landpages_id'
		. ' FROM amazon_code AS u'
		. ($params['id'] == ''? '' : ' WHERE u.status= 0 and u.landpages_id = \'' . $this->db->real_escape_string($params['id']) . '\'');
		$list = array();

		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}

	function getKeyWords($params){
		$query = 'SELECT u.id AS id'
		. ', u.keywords AS keywords'
		. ' FROM keywords AS u';
		$list = array();
		
		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}

	function insertKeyWords($params){
		$query  = "INSERT INTO keywords (keywords) VALUES"
		." ('".$params["keywords"]."')";
			
		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
			}
	}


	function updateKeyWords($params){
		$query  = "Update keywords "
		."SET keywords='".$params["keywords"]."'"
		." where id=".$params["id"];
		if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}

	}

	function delKeyWords($params){
		$query  = "DELETE from keywords "
		." where id=".$params["id"];
		if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}

	}


	function getLangpages($params){

		$query = 'SELECT u.id AS id'
		. ', u.title AS title'
		. ', u.subtitle AS subtitle'
		. ', u.abstract AS abstract'
		. ', u.image AS image'
		. ', u.detail_title AS detail_title'
		. ', u.details AS details'
		. ', u.status AS status'
		. ', u.detail_sub_title AS detail_sub_title'
		. ', u.steps AS steps'
		. ', u.minute AS minute'
		. ' FROM landpages AS u'
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


	function getLangpagesById($params){
		$query = 'SELECT u.id AS id'
		. ', u.title AS title'
		. ', u.subtitle AS subtitle'
		. ', u.abstract AS abstract'
		. ', u.image AS image'
		. ', u.detail_title AS detail_title'
		. ', u.details AS details'
		. ', u.status AS status'
		. ', u.detail_sub_title AS detail_sub_title'
		. ', u.steps AS steps'
		. ', u.minute AS minute'
		.', u.temple AS temple'
		. ' FROM landpages AS u'
		." where id=".$params["id"];
		 ;
		$list = array();
		
		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}


	function getOpenedLangpages($params){
		$query = 'SELECT u.id AS id'
		. ', u.title AS title'
		. ', u.subtitle AS subtitle'
		. ', u.abstract AS abstract'
		. ', u.image AS image'
		. ', u.detail_title AS detail_title'
		. ', u.details AS detail'
		. ', u.status AS status'
		. ', u.detail_sub_title AS detail_sub_title'
		. ', u.steps AS steps'
		. ', u.temple AS temple'
		. ', u.minute AS minute'
		. ' FROM landpages AS u'
		." where status=0 ";
		$list = array();
		//echo $query ;
		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}


	function getDefaultLangpages($params){
		$query = 'SELECT u.id AS id'
		. ', u.title AS title'
		. ', u.subtitle AS subtitle'
		. ', u.abstract AS abstract'
		. ', u.image AS image'
		. ', u.detail_title AS detail_title'
		. ', u.details AS details'
		. ', u.status AS status'
		. ', u.detail_sub_title AS detail_sub_title'
		. ', u.steps AS steps'
		. ', u.minute AS minute'
		. ' FROM landpages AS u'
		." where status=99 ";
		 ;
		$list = array();
		
		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}


	function insertLandpages($params){
		
		$query  = "INSERT INTO landpages (title,subtitle,abstract"
			.",image,detail_title,details,status,minute,temple,detail_sub_title,steps) VALUES"
		." ('".$params["title"]."',
			'".$params["subtitle"]."',
			'".$params["abstract"]."',
			'".$params["image"]."',
			'".$params["detail_title"]."',
			'".$params["details"]."',
			".$params["status"].",
			".$params["minutes"].",
			'".$params["temple"]."',
			'".$params["detail_sub_title"]."',
			'".$params["steps"]."'
			)";
			
		if ($this->db->query($query) === TRUE) {
				//echo $this->db->insert_id;
   				return $this->db->insert_id;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
			}

	}


	function updateLandpages($params){

		$query  = "Update landpages "
		."SET title='".$params["title"]."',"
		." subtitle='".$params["subtitle"]."',"
		." abstract='".$params["abstract"]."',"
		." image='".$params["image"]."',"
		." detail_title='".$params["detail_title"]."',"
		." details='".$params["details"]."',"
		." temple='".$params["temple"]."',"
		." detail_sub_title='".$params["detail_sub_title"]."',"
		." steps='".$params["steps"]."',"
		." status=".$params["status"].","
		." minute=".$params["minute"].""
		." where id=".$params["id"];
		
		
		if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}
	}



	function getSystem($params){
		$query = 'SELECT * from systempro'
		 ;
		$list = array();
		
		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}

	function insertSystem($params){

	}


	function updateSystem($params){

	}





function getURL($params){
		$query = 'SELECT u.id AS id'
		. ', u.url AS url'
		. ' FROM url AS u';
		$list = array();
		
		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}

	function insertURL($params){
		$query  = "INSERT INTO url (url) VALUES"
		." ('".$params["url"]."')";
			
		if ($this->db->query($query) === TRUE) {
   				return  $this->db->insert_id;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    			return -1;
			}
	}


	function updateURL($params){
		$query  = "Update url "
		."SET url='".$params["url"]."'"
		." where id=".$params["id"];
		if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}

	}

	function delURL($params){
		$query  = "DELETE from url "
		." where id=".$params["id"];
		if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}

	}

	function getIsEmail(){
		$query = 'SELECT id,is_email'
		. ' FROM systempro';
		$list = array();
		
		$result = $this->db->query($query);
		if ($result) {
			while ($row = $result->fetch_assoc())
				{
				$list[] = $row;
				}
			}
		return $list;
	}

	function updateIsEmail($params){
		$query  = "Update systempro "
		."SET is_email=".$params["is_email"].""
		." where id=".$params["id"];
		if ($this->db->query($query) === TRUE) {
   				return true;
			} else {
    			echo "Error: " . $query . "<br>" . $this->db->error;
    				return false;
			}
		return $list;
	}

}
