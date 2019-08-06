<!DOCTYPE html>
<html>
<style>
#myBtn1,#myBtn2,#myBtn3,#myBtn4{
background-color:#98FB98;
width:100px;
height:200px;
}
#myBtn5,#myBtn6,#myBtn7,#myBtn8{
background-color:#AFEEEE;
width:100px;
height:200px;
}
</style>
<body>
<div class="row1">
<input type="button" id="myBtn1" value="$100" onclick="myFunction1()">
<input type="button" id="myBtn2" value="$100" onclick="myFunction2()">
<input type="button" id="myBtn3" value="$100" onclick="myFunction3()">
<input type="button" id="myBtn4" value="$100" onclick="myFunction4()">
</div>
<div class="row2">
<input type="button" id="myBtn5" value="$50" onclick="myFunction5()">
<input type="button" id="myBtn6" value="$50" onclick="myFunction6()">
<input type="button" id="myBtn7" value="$50" onclick="myFunction7()">
<input type="button" id="myBtn8" value="$50" onclick="myFunction8()">
</div>

<p>Click Desired Parking Spot</p>


<p id="demo"></p>
<input id="input-button" onclick="display()" type="submit" value="Submit"/>



<script>
var cost=[];
var sum=0;
function display(){
alert("Total Cost: $"+sum);
location.replace("MainPage.php")
}
function myFunction1() {
   document.getElementById("myBtn1").disabled = true;
   cost.push(100);
   sum+=100;
}
function myFunction2() {
   document.getElementById("myBtn2").disabled = true;
   cost.push(100);
   sum+=100;
}
function myFunction3() {
   document.getElementById("myBtn3").disabled = true;
   cost.push(100);
   sum+=100;
}
function myFunction4() {
   document.getElementById("myBtn4").disabled = true;
   cost.push(100);
   sum+=100;
}
function myFunction5() {
   document.getElementById("myBtn5").disabled = true;
   cost.push(50);
   sum+=50;
}
function myFunction6() {
   document.getElementById("myBtn6").disabled = true;
   cost.push(50);
   sum+=50;
}
function myFunction7() {
   document.getElementById("myBtn7").disabled = true;
   cost.push(50);
   sum+=50;
}
function myFunction8() {
   document.getElementById("myBtn8").disabled = true;
   cost.push(50);
   sum+=50;
}
</script>

</body>
</html>
