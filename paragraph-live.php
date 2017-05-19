<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	h1{
		text-align: center;
		padding: 3%;
	}

	.row{
		text-align: center;
	}

	#input1, #text1{
		margin-top: 5%;
	}

	#text1{
		text-align: center;
	}


</style>
<body>
	<div class="container">
	<h1>Paragraph Changer</h1>
	
	<div class="row">
	  <div class="col-6 col-md-4">
	  		<div id="button1"></div>
	  </div>
	  <div class="col-6 col-md-4">
	  		<div id="button2"></div>
	  		<div id="input1"></div>
	  </div>
	  <div class="col-6 col-md-4">
	  		<div id="button3"></div>
	  </div>
	</div>

	<div id="text1"></div>

	</div>
</body>
<script type="text/javascript">
	"use strict";
	var b1 = document.createElement("button");
	b1.setAttribute("id", "myButton"); 
	b1.setAttribute("class", "btn btn-primary"); 
	b1.addEventListener("click", createFunc, false);
	var text1 = document.createTextNode("Create Paragraph"); 
	b1.appendChild(text1);
	var divButton1 = document.getElementById("button1").appendChild(b1);

	var b2 = document.createElement("button");
	b2.setAttribute("id", "myButton"); 
	b2.setAttribute("class", "btn btn-primary"); 
	b2.addEventListener("click", changeFunc, false);
	var text2 = document.createTextNode("Change text to what is in the textbox"); 
	b2.appendChild(text2);
	var divButton2 = document.getElementById("button2").appendChild(b2);

	var t1 = document.createElement("input");
	t1.setAttribute("id", "inputText1");
	t1.setAttribute("class", "form-control");
	t1.setAttribute("value", "Some text"); 
	var div1 = document.getElementById("input1").appendChild(t1);

	var b3 = document.createElement("button");
	b3.setAttribute("id", "myButton"); 
	b3.setAttribute("class", "btn btn-primary"); 
	b3.addEventListener("click", deleteFunc, false);
	var text3 = document.createTextNode("Delete Paragraph"); 
	b3.appendChild(text3);
	var divButton3 = document.getElementById("button3").appendChild(b3);

	function createFunc() {
		var p1 = document.createElement("p");
		var text1 = document.createTextNode("There is text inside the paragraph!"); 
		p1.appendChild(text1);
		var divText1 = document.getElementById("text1").appendChild(p1);
	}

	function changeFunc() {
		var getText = document.getElementById("inputText1").value;
		var setText = document.getElementById("text1").innerHTML = getText;
	}

	function deleteFunc(){
		var deleteText = document.getElementById("text1");
		deleteText.removeChild(deleteText.firstChild);
	}
</script>
</html>