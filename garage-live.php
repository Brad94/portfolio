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

  button{
    margin: 5% 0 5% 0;
  }

</style>
<body>
<div class="container">
<h1>Car Repair Specialists</h1>
  <div class="row">
      <div class="col">
      <div id="input1"></div>
      <div id="button1"></div>
      <div id="button3"></div>
      <div id="costs"></div>
      </div>
      <div class="col">
        <div id="input2"></div>
        <div id="button2"></div>
      </div>
      <div class="col">
        <div id="cars">
      </div>
    </div>
  </div>
</div>

</body>
<script type="text/javascript">
"use strict";

function load() {
  populateDropdown();
  assignList(carsArray);
}
window.onload = load;

var carsArray = [
          ['Ford','Mustang',3,8,true,false],//make,model,doors,litres,brake issues, exhaust issues
          ['Kia','Panda',5,1,false,true]//make,model,doors,litres,brake issues, exhaust issues
        ];

var inputGroup1 = document.createElement("div");
inputGroup1.setAttribute("id", "inputGroup1"); 
inputGroup1.setAttribute("class", "input-group"); 
var div1 = document.getElementById("input1").appendChild(inputGroup1);

var span1 = document.createElement("span");
span1.setAttribute("class", "input-group-addon"); 
var span1Text = document.createTextNode("Make"); 
span1.appendChild(span1Text);
var spanAppend2 = document.getElementById("inputGroup1").appendChild(span1);

var make = document.createElement("input");
make.setAttribute("id", "inputText1"); 
make.setAttribute("class", "form-control");
make.setAttribute("value", "Toyota"); //testing
var div1 = document.getElementById("inputGroup1").appendChild(make);

var inputGroup2 = document.createElement("div");
inputGroup2.setAttribute("id", "inputGroup2"); 
inputGroup2.setAttribute("class", "input-group"); 
var div2 = document.getElementById("input1").appendChild(inputGroup2);

var span2 = document.createElement("span");
span2.setAttribute("class", "input-group-addon"); 
var span2Text = document.createTextNode("Model"); 
span2.appendChild(span2Text);
var spanAppend2 = document.getElementById("inputGroup2").appendChild(span2);

var model = document.createElement("input");
model.setAttribute("id", "inputText2"); 
model.setAttribute("class", "form-control");
model.setAttribute("value", "RAV4"); //testing
var div1 = document.getElementById("inputGroup2").appendChild(model);

var inputGroup3 = document.createElement("div");
inputGroup3.setAttribute("id", "inputGroup3"); 
inputGroup3.setAttribute("class", "input-group"); 
var div3 = document.getElementById("input1").appendChild(inputGroup3);

var span3 = document.createElement("span");
span3.setAttribute("class", "input-group-addon"); 
var span3Text = document.createTextNode("Doors"); 
span3.appendChild(span3Text);
var spanAppend3 = document.getElementById("inputGroup3").appendChild(span3);

var doors = document.createElement("input");
doors.setAttribute("id", "inputText3"); 
doors.setAttribute("class", "form-control");
doors.setAttribute("value", 5); //testing
var div1 = document.getElementById("inputGroup3").appendChild(doors);

var inputGroup4 = document.createElement("div");
inputGroup4.setAttribute("id", "inputGroup4"); 
inputGroup4.setAttribute("class", "input-group"); 
var div4 = document.getElementById("input1").appendChild(inputGroup4);

var span4 = document.createElement("span");
span4.setAttribute("class", "input-group-addon"); 
var span4Text = document.createTextNode("Litres"); 
span4.appendChild(span4Text);
var spanAppend4 = document.getElementById("inputGroup4").appendChild(span4);

var litres = document.createElement("input");
litres.setAttribute("id", "inputText4"); 
litres.setAttribute("class", "form-control");
litres.setAttribute("value", 6); //testing
var div1 = document.getElementById("inputGroup4").appendChild(litres);

var inputGroup5 = document.createElement("div");
inputGroup5.setAttribute("id", "inputGroup5"); 
inputGroup5.setAttribute("class", "btn-group");
inputGroup5.setAttribute("data-toggle", "buttons");
var div5 = document.getElementById("input1").appendChild(inputGroup5);

var label1 = document.createElement("label");
label1.setAttribute("class", "btn btn-primary");
label1.setAttribute("id", "label1");
var text1 = document.createTextNode("Brake Issues"); 
label1.appendChild(text1);
var div1 = document.getElementById("inputGroup5").appendChild(label1);

var checkbox1 = document.createElement("input");
checkbox1.setAttribute("type", "checkbox"); 
checkbox1.setAttribute("id", "checkbox1");
checkbox1.setAttribute("class", "btn btn-primary");
var div1 = document.getElementById("label1").appendChild(checkbox1);

var label2 = document.createElement("label");
label2.setAttribute("class", "btn btn-primary");
label2.setAttribute("id", "label2");
var text2 = document.createTextNode("Exhaust Issues"); 
label2.appendChild(text2);
var div1 = document.getElementById("inputGroup5").appendChild(label2);

var checkbox2 = document.createElement("input");
checkbox2.setAttribute("type", "checkbox"); 
checkbox2.setAttribute("id", "checkbox2"); 
checkbox2.setAttribute("class", "btn btn-primary");
var div2 = document.getElementById("label2").appendChild(checkbox2);

var b1 = document.createElement("button");
b1.setAttribute("id", "myButton"); 
b1.setAttribute("class", "btn btn-primary"); 
b1.addEventListener("click", function(){add();});
var text1 = document.createTextNode("Add"); 
b1.appendChild(text1);
var divButton1 = document.getElementById("button1").appendChild(b1);

var bcal = document.createElement("button");
bcal.setAttribute("id", "myButton"); 
bcal.setAttribute("class", "btn btn-primary"); 
bcal.addEventListener("click", function(){assignCost(carsArray);});
var textcal = document.createTextNode("Calculate"); 
bcal.appendChild(textcal);
var divButton3 = document.getElementById("button3").appendChild(bcal);

var t2 = document.createElement("select");
t2.setAttribute("id", "inputText5"); 
t2.setAttribute("class", "btn btn-secondary dropdown-toggle");
var div2 = document.getElementById("input2").appendChild(t2);

var b2 = document.createElement("button");
b2.setAttribute("id", "myButton"); 
b2.setAttribute("class", "btn btn-primary"); 
b2.addEventListener("click", function(){remove();});
var text2 = document.createTextNode("Remove"); 
b2.appendChild(text2);
var divButton2 = document.getElementById("button2").appendChild(b2);

function add() {
  var newCarArray = [];

  var valueText1 = document.getElementById("inputText1").value;
  var valueText2 = document.getElementById("inputText2").value;
  var valueText3 = document.getElementById("inputText3").value;
  var valueText4 = document.getElementById("inputText4").value;
  var valueCheck1 = document.getElementById("checkbox1");
  var valueCheck2 = document.getElementById("checkbox2");

  newCarArray.push(valueText1);
  newCarArray.push(valueText2);
  newCarArray.push(valueText3);
  newCarArray.push(valueText4);
  newCarArray.push(valueCheck1.checked);
  newCarArray.push(valueCheck2.checked);

  carsArray.push(newCarArray);
  div2.options.add(new Option(newCarArray,carsArray.length - 1));
  assignList(carsArray);
}

function remove() {
  var valueText = document.getElementById("inputText5");
  var selected2 = valueText.options[valueText.selectedIndex].value;
  valueText.remove(selected2);

  carsArray.splice(selected2,1);
  assignList(carsArray);
}

function listCars(carsArray){
  var checkIfExists = document.getElementById("ListCarsUL");
  if (checkIfExists !== null) {
    checkIfExists.parentNode.removeChild(checkIfExists);
  }
  var list = document.createElement('ul');
  list.setAttribute("id", "ListCarsUL"); 

  for (var i = 0; i < carsArray.length; i++) {
      var item = document.createElement('li');
      item.appendChild(document.createTextNode(carsArray[i]));
      list.appendChild(item);

  }
  return list;
}

function assignList(){
  var cars = document.getElementById("cars").appendChild(listCars(carsArray));
}

function calculate(carsArray){
  var baseCost = 1000;
  var perDoorCost = 100;
  var brakeCost = 2000;
  var exhaustCost = 500;


  var checkIfExists = document.getElementById("listCostsUL");
  if (checkIfExists !== null) {
    checkIfExists.parentNode.removeChild(checkIfExists);
  }

  var list = document.createElement('ul');
  list.setAttribute("id", "listCostsUL"); 

  for (var i = 0; i < carsArray.length; i++) {
    var total = 0;
    var doorCost = carsArray[i][2] * perDoorCost;
    if (carsArray[i][4] == true){
      total += brakeCost;
    }
    if (carsArray[i][5] == true){
      total += exhaustCost;
    }

    total += doorCost + baseCost;

    var item = document.createElement('li');
    item.appendChild(document.createTextNode(total));
    list.appendChild(item);
  }

  return list;
}

function assignCost(){

  var cost = document.getElementById("costs").appendChild(calculate(carsArray));
}

function populateDropdown(){
  for (var i = 0; i < carsArray.length; i++) {
    div2.options.add(new Option(carsArray[i],i));
  }
}

</script>
</html>