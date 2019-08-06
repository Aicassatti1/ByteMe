<html>
<head>
  <link rel="stylesheet" type="text/css" href="card.css">
</head>
<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:400,900,700,500);

body {
  padding: 60px 0;
  background-image:url(cloud.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  margin: 0 auto;
  width: 600px;
}
.body-text {
  padding: 0 20px 30px 20px;
  font-family: "Roboto";
  font-size: 1em;
  color: #333333;
  text-align: center;
  line-height: 1.2em;
}
.form-container {
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.card-wrapper {
  background-color: #6FB7E9;
  width: 100%;
  display: flex;

}
.personal-information {
  background-color: #3C8DC5;
  color: #ffffff;
  padding: 1px 0;
  text-align: center;
}
h1 {
  font-size: 1.3em;
  font-family: "Roboto"
}
input {
  margin: 1px 0;
  padding-left: 3%;
  font-size: 14px;
}
input[type="text"]{
  display: block;
  height: 50px;
  width: 100%;
  border: none;
}
input[type="email"]{
  display: block;
  height: 50px;
  width: 100%;
  border: none;
}
input[type="submit"]{
  display: block;
  height: 60px;
  width: 100%;
  border: none;
  background-color: #3C8DC5;
  color: #fff;
  margin-top: 2px;
  curson: pointer;
  font-size: 0.9em;
  text-transform: uppercase;
  font-weight: bold;
  cursor: pointer;
}
input[type="submit"]:hover{
  background-color: #6FB7E9;
  transition: 0.3s ease;
}
#first-name,#expiry,#city{
  width: 50%;
  float: left;
  margin-bottom: 2px;
}
#last-name,#cvc,#zipcode{
  width: 50%;
  float: right;
}

.alert{
  text-align: center;
  padding:10px;
  background: #90EE90;
  color:#000000;
  font-weight: bold;
  margin-bottom:10px;
  display: none;
}

</style>
<body>
  <form id="newCard">
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> 
          <div class="alert">Your Payment Info Has Been Sent</div>
          <input id="first-name" type="text" name="first-name" placeholder="First Name"/>
          <input id="last-name" type="text" name="last-name" placeholder="Last Name"/>
          <input id="number" type="text" name="number" placeholder="Card Number"/>
          <input id="expiry" type="text" name="expiry" placeholder="MM / YY"/>
          <input id="cvc" type="text" name="cvc" placeholder="CCV"/>
         
          <div class="card-wrapper"></div>
      
          <input id="streetaddress" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Street Address"/>
          <input id="city" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/>
          <input id="zipcode" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
          <input id="email" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
          <input id="input-button" type="submit" value="Submit"/>
        
  </div>
<!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js"></script>
        <script type="text/javascript">
          
// Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyB1ogebh3YmY-rVFfngaByTjlMRQm7brKg",
    authDomain: "webprogramming-9feb2.firebaseapp.com",
    databaseURL: "https://webprogramming-9feb2.firebaseio.com",
    projectId: "webprogramming-9feb2",
    storageBucket: "",
    messagingSenderId: "158174771244",
    appId: "1:158174771244:web:68b7536f09175484"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

var messagesRef = firebase.database().ref('messages');

document.getElementById('newCard').addEventListener('submit',submitForm);
//Submit form
function submitForm(e){
  e.preventDefault();

  var firstName=getInputVal('first-name');
  var lastName=getInputVal('last-name');
  var number=getInputVal('number');
  var expiry=getInputVal('expiry');
  var cvc=getInputVal('cvc');
  var street=getInputVal('streetaddress');
  var city=getInputVal('city');
  var zipcode=getInputVal('zipcode');
  var email=getInputVal('email');
  //Save Message
  saveMessage(firstName,lastName,number,expiry,cvc,street,city,zipcode,email);
  //Show alert
  document.querySelector('.alert').style.display='block';
  //Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display='none';
  },3000);

  setTimeout("location.href = 'MainPage.php';",1000);
  //Clear form
  document.getElementById('newCard').reset();
  $(".jp-card-number").html("&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;");
  $(".jp-card-name").html("Full Name");
  $(".jp-card-expiry").html("&bull;&bull;/&bull;&bull;");
  $(".jp-card-cvc").html("&bull;&bull;&bull;");
}

function getInputVal(id){
  return document.getElementById(id).value;
}

//Save message to Firebase
function saveMessage(firstName,lastName,number,expiry,cvc,street,city,zipcode,email){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    firstName:firstName,
    lastName:lastName,
    number:number,
    expiry:expiry,
    cvc:cvc,
    street:street,
    city:city,
    zipcode:zipcode,
    email:email
  });
}


$('form').card({
    container: '.card-wrapper',
    width: 280,

    formSelectors: {
        nameInput: 'input[name="first-name"], input[name="last-name"]'
    }
});




        </script>
  </form>
  </body>
  </html>
