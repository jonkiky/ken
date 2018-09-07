<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<h2>Test GET web service</h2>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">


function getUser (id) {
	var formData={
		'id':id,
		'action':'getUser'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("getUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

getUser(1);



function checkUser (username,pwd) {
	var formData={
		'username':username,
		'password':pwd,
		'action':'checkUser'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

checkUser(0,1)
checkUser('user','user')
checkUser('user1','user1')

function addUser (username,pwd,email) {
	var formData={
		'username':username,
		'password':pwd,
		'email':email,
		'action':'addUser'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

addUser('user1','user1','user1');
addUser('user2','user2','user2');


function updateUser (input) {
	var formData={
		'username':input["username"],
		'password':input["password"],
		'email':input["email"],
		'id':input["id"],
		'status':input["status"],
		'action':'updateUser'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}
updateUserinput = [];
updateUserinput["username"] ="asdf";
updateUserinput["password"] ="asdf";
updateUserinput["email"] ="=";
updateUserinput["id"] =1;
updateUserinput["status"] =-1;
updateUser(updateUserinput)

function addAmazonCode (input) {
	var formData={
		'landpages_id':input["landpages_id"],
		'code':input["code"],
		'action':'addAmazonCode'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}


addAmazonCodeinput = [];
addAmazonCodeinput["landpages_id"] =1;
addAmazonCodeinput["code"] ="asdf";
addAmazonCode(addAmazonCodeinput);


function updateAmazonCode (input) {
	var formData={
		'landpages_id':input["landpages_id"],
		'code':input["code"],
		'status':input["status"],
		'id':input["id"],
		'action':'updateAmazonCode'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

updateAmazonCodeinput = [];
updateAmazonCodeinput["landpages_id"] =1;
updateAmazonCodeinput["code"] ="asdf12321";
updateAmazonCodeinput["id"] =1;
updateAmazonCodeinput["status"] =-1;
updateAmazonCode(updateAmazonCodeinput);



function getAmazonCodeById (id) {
	var formData={
		'id':id,
		'action':'getAmazonCodeById'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}



getAmazonCodeById(1);



function getAmazonCodeByLangpagesId (id) {
	var formData={
		'id':id,
		'action':'getAmazonCodeByLangpagesId'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

getAmazonCodeByLangpagesId(1);
getAmazonCodeByLangpagesId(2);




function getOpenedAmazonCodeByLangpagesId (id) {
	var formData={
		'id':id,
		'action':'getOpenedAmazonCodeByLangpagesId'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}
getOpenedAmazonCodeByLangpagesId(1);
getOpenedAmazonCodeByLangpagesId(2);




function addKeywords (keywords) {
	var formData={
		'keywords':keywords,
		'action':'addKeywords'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

addKeywords("addKeywords");



function getKeyWords () {
	var formData={
		'action':'getKeyWords'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}
getKeyWords();




function updateKeyWords (id,keywords) {
	var formData={
		'action':'updateKeyWords',
		'keywords':keywords,
		'id':id
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}
updateKeyWords(1,"12312")




function addLangpages (input) {
	var formData={
		'action':'addLangpages',
		'title':input["title"],
		'subtitle':input["subtitle"],
		'abstract':input["abstract"],
		'image':input["image"],
		'detail_title':input["detail_title"],
		'details':input["details"],
		'status':input["status"],
		'minutes':input["minutes"]
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}



function updateLangpages (input) {
	var formData={
		'action':'updateLangpages',
		'title':input["title"],
		'subtitle':input["subtitle"],
		'abstract':input["abstract"],
		'image':input["image"],
		'detail_title':input["detail_title"],
		'details':input["details"],
		'status':input["status"],
		'id':input["id"],
		'minutes':input["minutes"]
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}






function getLangpages () {
	var formData={
		'action':'getLangpages',

	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

getLangpages();


function getLangpagesById (id) {
	var formData={
		'action':'getLangpagesById',
		'id':id
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

getLangpagesById(id);



function getOpenedLangpages () {
	var formData={
		'action':'getOpenedLangpages',
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

getOpenedLangpages();


function getDefaultLangpages () {
	var formData={
		'action':'getDefaultLangpages',
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}


getDefaultLangpages();


</script>
</body>
</html>
