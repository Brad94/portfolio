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

	#result{
		margin-top: 5%;
	}

	#button1{
		margin-top: 5%;
	}

	.row{
		text-align: center;
	}
</style>
<body>
	<div class="container">
	<h1>Pok&eacutemon</h1>
	<div class="row">
		<div class="col-6">
				<div id="text1"></div>
				<div id="input1"></div></div>
		<div class="col-6">
				<div id="text2"></div>
				<div id="input2"></div>
		</div>
	</div>
	<div class="row">
			  <div class="col-6 col-md-4"></div>
			  <div class="col-6 col-md-4">
			  		<div id="button1"></div>
			  </div>
			  <div class="col-6 col-md-4"></div>
	</div>
	<div class="row">
			  <div class="col-6 col-md-4"></div>
			  <div class="col-6 col-md-4">
			  		<h2 id="result"></h2>
			  </div>
			  <div class="col-6 col-md-4"></div>
	</div>
	</div>
</body>
<script type="text/javascript">
	"use strict";
	var total;

	var p1 = document.createElement("p");
	var text1 = document.createTextNode("Please select a type of move"); 
	p1.appendChild(text1);
	var divText1 = document.getElementById("text1").appendChild(p1);

	var input1 = document.createElement("select");
	input1.setAttribute("id", "select1");
	input1.setAttribute("class", "btn btn-secondary dropdown-toggle"); 
	var divInput1 = document.getElementById("input1").appendChild(input1);
	input1.options.add(new Option("Fire","fire", true, true));
	input1.options.add(new Option("Fighting","fighting"));
	input1.options.add(new Option("Psychic","psychic"));
	input1.options.add(new Option("Water","water"));


	var p2 = document.createElement("p");
	var text2 = document.createTextNode("Please select a type of Pokemon and any additional"); 
	p2.appendChild(text2);
	var divText2 = document.getElementById("text2").appendChild(p2);

	var input2 = document.createElement("select");
	input2.setAttribute("id", "select2");
	input2.setAttribute("class", "btn btn-secondary dropdown-toggle");
	var divInput2 = document.getElementById("input2").appendChild(input2);
	input2.options.add(new Option("Grass","grass", true, true));
	input2.options.add(new Option("Ice","ice"));
	input2.options.add(new Option("Rock","rock"));
	input2.options.add(new Option("Poison","poison"));
	input2.options.add(new Option("Dark","dark"));
	input2.options.add(new Option("Normal","normal"));

	var input3 = document.createElement("select");
	input3.setAttribute("id", "select3");
	input3.setAttribute("class", "btn btn-secondary dropdown-toggle");
	var divInput3 = document.getElementById("input2").appendChild(input3);
	input3.options.add(new Option("","null", true, true));
	input3.options.add(new Option("Grass","grass"));
	input3.options.add(new Option("Ice","ice"));
	input3.options.add(new Option("Rock","rock"));
	input3.options.add(new Option("Poison","poison"));
	input3.options.add(new Option("Dark","dark"));
	input3.options.add(new Option("Normal","normal"));

	var b1 = document.createElement("button");
	b1.setAttribute("id", "myButton"); 
	b1.setAttribute("class", "btn btn-primary"); 
	b1.addEventListener("click", go, false);
	var text3 = document.createTextNode("Go!"); 
	b1.appendChild(text3);
	var divButton1 = document.getElementById("button1").appendChild(b1);

	function go(argument) {
		
		var getSelected1 = document.getElementById("select1");
		var selected1 = getSelected1.options[getSelected1.selectedIndex].value;

		var getSelected2 = document.getElementById("select2");
		var selected2 = getSelected2.options[getSelected2.selectedIndex].value;

		var getSelected3 = document.getElementById("select3");
		var selected3 = getSelected3.options[getSelected3.selectedIndex].value;

		var moves = {
			fire: 0,
			fighting: 1,
			psychic: 2,
			water: 3,
		}
		var cal = {
			grass: [2,1,1,0.5],
			ice: [2,2,1,1],
			rock: [0.5,2,1,2],
			poison: [1,0.5,2,1],
			dark: [1,2,0,1],
			normal: [1,2,1,1],


		}

		if (!selected3 == "null") {
			var type1 = cal[selected2][moves[selected1]];
			var type2 = cal[selected3][moves[selected1]];
			total = type1 + type2;


		}else{

			var type1 = cal[selected2][moves[selected1]];
			total = type1;
		}

		document.getElementById("result").innerHTML = total + "x";

	}
</script>
</html>