<html>
<head>
  <title>Booking A Seat</title>
  <link rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.0/jquery.maphilight.min.js"></script>
 
<style>
    
.planebtn {
  
}

.planebtn-content 
{
  display: none;
  position: absolute;
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  min-width: 160px;
  font-size: 16px;
  border: none;
  z-index: 1;
}

.planebtn-content:hover
{
display: block;
}

area[data-title]:hover:after {
  content: attr(data-title);
  background: rgba(0,0,0,0.5);
  color: pink;
  opacity: 2;
  height: 50px;
  width: 150px;
  position: absolute;
  text-align: center;
  padding-top: 14px;
  left: 27%;
  top: 40%;
}

img:hover {
  box-shadow: 3px 3px 2px 1px rgba(0, 140, 186, 0.5);
}



</style>


</head>

<body>
<p>Selected Seats</p>
<p id="demo"></p>
<br>
<input id="input-button" onclick="display()" type="submit" value="Submit"/>
<br>

<!-- Image Map Generated by http://www.image-map.net/ -->
<img src="delta.png" usemap="#image-map">

<div class="planebtn">
<map name="image-map" class = "map">
    <area target="" id=A1 onclick="myFunction(this.id)" alt="A1" title = "A1" data-title="A1" href="#A1" coords="510,303,532,329" shape="rect">
    <area target="" id=B1 onclick="myFunction(this.id)" alt="B1" data-title="B1" href="#B1" coords="536,302,558,330" shape="rect">
    <area target="" id=C1 onclick="myFunction(this.id)" alt="C1" data-title="C1" href="#C1" coords="593,305,613,331" shape="rect">
    <area target="" id=D1 onclick="myFunction(this.id)" alt="D1" data-title="D1" href="#D1" coords="619,302,639,333" shape="rect">

    <area target="" id=A2 onclick="myFunction(this.id)" alt="A2" data-title="A2" href="#A2" coords="510,343,532,370" shape="rect">
    <area target="" id=B2 onclick="myFunction(this.id)" alt="B2" data-title="B2" href="#B2" coords="535,341,557,371" shape="rect">
    <area target="" id=C2 onclick="myFunction(this.id)" alt="C2" data-title="C2" href="#C2" coords="593,341,615,372" shape="rect">
    <area target="" id=D2 onclick="myFunction(this.id)" alt="D2" data-title="D2" href="#D2" coords="618,341,638,369" shape="rect">

    <area target="" id=A3 onclick="myFunction(this.id)" alt="A3" data-title="A3" href="#A3" coords="512,382,531,410" shape="rect">
    <area target="" id=B3 onclick="myFunction(this.id)" alt="B3" data-title="B3" href="#B3" coords="537,383,557,408" shape="rect">
    <area target="" id=C3 onclick="myFunction(this.id)" alt="C3" data-title="C3" href="#C3" coords="593,382,615,408" shape="rect">
    <area target="" id=D3 onclick="myFunction(this.id)" alt="D3" data-title="D3" href="#D3" coords="617,382,638,408" shape="rect">

    <area target="" id=A10 onclick="myFunction(this.id)" alt="A10" title="A10" href="#A10" coords="510,427,525,450" shape="rect">
    <area target="" id=B10 onclick="myFunction(this.id)" alt="B10" title="B10" href="#B10" coords="528,427,544,447" shape="rect">
    <area target="" id=C10 onclick="myFunction(this.id)" alt="C10" title="C10" href="#C10" coords="586,427,602,448" shape="rect">
    <area target="" id=D10 onclick="myFunction(this.id)" alt="D10" title="D10" href="#D10" coords="605,428,621,448" shape="rect">
    <area target="" id=E10 onclick="myFunction(this.id)" alt="E10" title="E10" href="#E10" coords="626,427,640,447" shape="rect">

    <area target="" id=A11 onclick="myFunction(this.id)" alt="A11" title="A11" href="#A11" coords="509,461,525,482" shape="rect">
    <area target="" id=B11 onclick="myFunction(this.id)" alt="B11" title="B11" href="#B11" coords="528,461,546,485" shape="rect">
    <area target="" id=C11 onclick="myFunction(this.id)" alt="C11" title="C11" href="#C11" coords="586,461,602,485" shape="rect">
    <area target="" id=D11 onclick="myFunction(this.id)" alt="D11" title="D11" href="#D11" coords="604,462,621,481" shape="rect">
    <area target="" id=E11 onclick="myFunction(this.id)" alt="E11" title="E11" href="#E11" coords="626,460,642,483" shape="rect">

    <area target="" id=A12 onclick="myFunction(this.id)" alt="A12" title="A12" href="#A12" coords="509,499,525,520" shape="rect">
    <area target="" id=B12 onclick="myFunction(this.id)" alt="B12" title="B12" href="#B12" coords="528,499,546,519" shape="rect">
    <area target="" id=C12 onclick="myFunction(this.id)" alt="C12" title="C12" href="#C12" coords="585,497,601,519" shape="rect">
    <area target="" id=D12 onclick="myFunction(this.id)" alt="D12" title="D12" href="#D12" coords="606,498,621,520" shape="rect">
    <area target="" id=E12 onclick="myFunction(this.id)" alt="E12" title="E12" href="" coords="625,498,641,521" shape="rect">

    <area target="" alt="A13" title="A13" href="" coords="508,533,526,555" shape="rect">
    <area target="" alt="B13" title="B13" href="" coords="529,532,546,554" shape="rect">
    <area target="" alt="C13" title="C13" href="" coords="586,533,601,554" shape="rect">
    <area target="" alt="D13" title="D13" href="" coords="605,532,622,556" shape="rect">
    <area target="" alt="E13" title="E13" href="" coords="624,534,641,555" shape="rect">

    <area target="" id=A14 onclick="myFunction(this.id)" alt="A14" title="A14" href="#A14" coords="510,565,525,588" shape="rect">
    <area target="" id=B14 onclick="myFunction(this.id)" alt="B14" title="B14" href="#B14" coords="528,566,546,585" shape="rect">
    <area target="" id=C14 onclick="myFunction(this.id)" alt="C14" title="C14" href="#C14" coords="586,564,601,585" shape="rect">
    <area target="" id=D14 onclick="myFunction(this.id)" alt="D14" title="D14" href="#D14" coords="606,564,622,585" shape="rect">
    <area target="" id=E14 onclick="myFunction(this.id)" alt="E14" title="E14" href="#E14" coords="626,565,641,587" shape="rect">

    <area target="" id=A15 onclick="myFunction(this.id)" alt="A15" title="A15" href="#A15" coords="509,595,525,619" shape="rect">
    <area target="" id=B15 onclick="myFunction(this.id)" alt="B15" title="B15" href="#B15" coords="529,593,545,617" shape="rect">
    <area target="" id=C15 onclick="myFunction(this.id)" alt="C15" title="C15" href="#C15" coords="584,594,601,618" shape="rect">
    <area target="" id=D15 onclick="myFunction(this.id)" alt="D15" title="D15" href="#D15" coords="603,619,622,594" shape="rect">
    <area target="" id=E15 onclick="myFunction(this.id)" alt="E15" title="E15" href="#E15" coords="626,594,640,617" shape="rect">

    <area target="" id=A16 onclick="myFunction(this.id)" alt="A16" title="A16" href="#A16" coords="509,630,525,651" shape="rect">
    <area target="" id=B16 onclick="myFunction(this.id)" alt="B16" title="B16" href="B16" coords="529,629,546,653" shape="rect">
    <area target="" id=C16 onclick="myFunction(this.id)" alt="C16" title="C16" href="#C16" coords="586,627,603,652" shape="rect">
    <area target="" id=D16 onclick="myFunction(this.id)" alt="D16" title="D16" href="#D16" coords="605,630,621,651" shape="rect">
    <area target="" id=E16 onclick="myFunction(this.id)" alt="E16" title="E16" href="#E16" coords="626,629,640,650" shape="rect">

    <area target="" id=A17 onclick="myFunction(this.id)" alt="A17" title="A17" href="A17" coords="509,661,524,683" shape="rect">
    <area target="" id=B17 onclick="myFunction(this.id)" alt="B17" title="B17" href="#B17" coords="529,662,544,683" shape="rect">
    <area target="" id=C17 onclick="myFunction(this.id)" alt="C17" title="C17" href="#C17" coords="585,662,602,683" shape="rect">
    <area target="" id=D17 onclick="myFunction(this.id)" alt="D17" title="D17" href="#D17" coords="604,660,622,685" shape="rect">
    <area target="" id=E17 onclick="myFunction(this.id)" alt="E17" title="E17" href="#E17" coords="625,661,641,685" shape="rect">

    <area target="" id=A18 onclick="myFunction(this.id)" alt="A18" title="A18" href="#A18" coords="510,697,525,717" shape="rect">
    <area target="" id=B18 onclick="myFunction(this.id)" alt="B18" title="B18" href="#B18" coords="528,695,546,716" shape="rect">
    <area target="" id=C18 onclick="myFunction(this.id)" alt="C18" title="C18" href="#C18" coords="586,695,601,717" shape="rect">
    <area target="" id=D18 onclick="myFunction(this.id)" alt="D18" title="D18" href="#D18" coords="606,695,622,717" shape="rect">
    <area target="" id=E18 onclick="myFunction(this.id)" alt="E18" title="E18" href="#E18" coords="626,695,641,718" shape="rect">

    <area target="" id=A19 onclick="myFunction(this.id)" alt="A19" title="A19" href="#A19" coords="507,730,525,755" shape="rect">
    <area target="" id=B19 onclick="myFunction(this.id)" alt="B19" title="B19" href="#B19" coords="529,732,545,755" shape="rect">
    <area target="" id=C19 onclick="myFunction(this.id)" alt="C19" title="C19" href="#C19" coords="584,732,601,755" shape="rect">
    <area target="" id=D19 onclick="myFunction(this.id)" alt="D19" title="D19" href="#D19" coords="603,732,622,754" shape="rect">
    <area target="" id=E19 onclick="myFunction(this.id)" alt="E19" title="E19" href="#E19" coords="625,733,641,755" shape="rect">

    <area target="" id=B20 onclick="myFunction(this.id)" alt="B20" title="B20" href="#B20" coords="528,769,545,792" shape="rect">
    <area target="" id=C20 onclick="myFunction(this.id)" alt="C20" title="C20" href="#C20" coords="585,768,601,790" shape="rect">
    <area target="" id=D20 onclick="myFunction(this.id)" alt="D20" title="D20" href="#D20" coords="604,768,622,789" shape="rect">

    <area target="" id=A21 onclick="myFunction(this.id)" alt="A21" title="A21" href="#A21" coords="509,803,526,824" shape="rect">
    <area target="" id=B21 onclick="myFunction(this.id)" alt="B21" title="B21" href="#B21" coords="528,802,545,825" shape="rect">
    <area target="" id=C21 onclick="myFunction(this.id)" alt="C21" title="C21" href="#C21" coords="586,803,601,825" shape="rect">
    <area target="" id=D21 onclick="myFunction(this.id)" alt="D21" title="D21" href="#D21" coords="604,802,621,825" shape="rect">
    <area target="" id=E21 onclick="myFunction(this.id)" alt="E21" title="E21" href="#E21" coords="625,802,641,825" shape="rect">

    <area target="" id=A22 onclick="myFunction(this.id)" alt="A22" title="A22" href="#A22" coords="508,835,524,855" shape="rect">
    <area target="" id=B22 onclick="myFunction(this.id)" alt="B22" title="B22" href="#B22" coords="527,835,546,858" shape="rect">
    <area target="" id=C22 onclick="myFunction(this.id)" alt="C22" title="C22" href="#C22" coords="586,834,601,855" shape="rect">
    <area target="" id=D22 onclick="myFunction(this.id)" alt="D22" title="D22" href="#D22" coords="605,833,621,859" shape="rect">
    <area target="" id=E22 onclick="myFunction(this.id)" alt="E22" title="E22" href="#E22" coords="625,834,640,857" shape="rect">

    <area target="" id=A23 onclick="myFunction(this.id)" alt="A23" title="A23" href="#A23" coords="509,868,524,891" shape="rect">
    <area target="" id=B23 onclick="myFunction(this.id)" alt="B23" title="B23" href="#B23" coords="528,869,545,892" shape="rect">
    <area target="" id=C23 onclick="myFunction(this.id)" alt="C23" title="C23" href="#C23" coords="586,869,600,889" shape="rect">
    <area target="" id=D23 onclick="myFunction(this.id)" alt="D23" title="D23" href="#D23" coords="604,870,622,892" shape="rect">
    <area target="" id=E23 onclick="myFunction(this.id)" alt="E23" title="E23" href="#E23" coords="626,868,641,889" shape="rect">

    <area target="" id=A24 onclick="myFunction(this.id)" alt="A24" title="A24" href="#A24" coords="510,901,524,924" shape="rect">
    <area target="" id=B24 onclick="myFunction(this.id)" alt="B24" title="B24" href="#B24" coords="529,901,545,923" shape="rect">
    <area target="" id=C24 onclick="myFunction(this.id)" alt="C24" title="C24" href="#C24" coords="586,901,601,923" shape="rect">
    <area target="" id=D24 onclick="myFunction(this.id)" alt="D24" title="D24" href="#D24" coords="606,902,621,922" shape="rect">
    <area target="" id=E24 onclick="myFunction(this.id)" alt="E24" title="E24" href="#E24" coords="626,902,640,921" shape="rect">

    <area target="" id=A25 onclick="myFunction(this.id)" alt="A25" title="A25" href="#A25" coords="509,935,525,956" shape="rect">
    <area target="" id=B25 onclick="myFunction(this.id)" alt="B25" title="B25" href="#B25" coords="529,934,545,957" shape="rect">
    <area target="" id=C25 onclick="myFunction(this.id)" alt="C25" title="C25" href="#C25" coords="586,932,601,955" shape="rect">
    <area target="" id=D25 onclick="myFunction(this.id)" alt="D25" title="D25" href="#D25" coords="604,933,621,955" shape="rect">
    <area target="" id=E25 onclick="myFunction(this.id)" alt="E25" title="E25" href="#E25" coords="625,934,641,954" shape="rect">

    <area target="" id=A26 onclick="myFunction(this.id)" alt="A26" title="A26" href="#A26" coords="509,967,525,989" shape="rect">
    <area target="" id=B26 onclick="myFunction(this.id)" alt="B26" title="B26" href="#B26" coords="529,968,546,989" shape="rect">
    <area target="" id=C26 onclick="myFunction(this.id)" alt="C26" title="C26" href="#C26" coords="586,966,601,989" shape="rect">
    <area target="" id=D26 onclick="myFunction(this.id)" alt="D26" title="D26" href="#D26" coords="605,966,621,988" shape="rect">
    <area target="" id=E26 onclick="myFunction(this.id)" alt="E26" title="E26" href="#E26" coords="627,967,642,987" shape="rect">

    <area target="" id=A27 onclick="myFunction(this.id)" alt="A27" title="A27" href="#A27" coords="508,996,525,1020" shape="rect">
    <area target="" id=B27 onclick="myFunction(this.id)" alt="B27" title="B27" href="#B27" coords="528,998,545,1022" shape="rect">
    <area target="" id=C27 onclick="myFunction(this.id)" alt="C27" title="C27" href="#C27" coords="583,997,601,1023" shape="rect">
    <area target="" id=D27 onclick="myFunction(this.id)" alt="D27" title="D27" href="#D27" coords="605,1000,622,1023" shape="rect">
    <area target="" id=E27 onclick="myFunction(this.id)" alt="E27" title="E27" href="#E27" coords="626,999,641,1022" shape="rect">

    <area target="" id=A28 onclick="myFunction(this.id)" alt="A28" title="A28" href="#A28" coords="508,1033,524,1056" shape="rect">
    <area target="" id=B28 onclick="myFunction(this.id)" alt="B28" title="B28" href="#B28" coords="529,1034,545,1053" shape="rect">
    <area target="" id=C28 onclick="myFunction(this.id)" alt="C28" title="C28" href="#C28" coords="586,1031,602,1053" shape="rect">
    <area target="" id=D28 onclick="myFunction(this.id)" alt="D28" title="D28" href="#D28" coords="606,1031,621,1052" shape="rect">
    <area target="" id=E28 onclick="myFunction(this.id)" alt="E28" title="E28" href="#E28" coords="626,1032,641,1052" shape="rect">

    <area target="" id=A29 onclick="myFunction(this.id)" alt="A29" title="A29" href="#A29" coords="509,1063,524,1086" shape="rect">
    <area target="" id=B29 onclick="myFunction(this.id)" alt="B29" title="B29" href="#B29" coords="529,1065,545,1085" shape="rect">
    <area target="" id=C29 onclick="myFunction(this.id)" alt="C29" title="C29" href="#C29" coords="585,1061,601,1083" shape="rect">
    <area target="" id=D29 onclick="myFunction(this.id)" alt="D29" title="D29" href="#D29" coords="605,1060,621,1085" shape="rect">
    <area target="" id=E29 onclick="myFunction(this.id)" alt="E29" title="E29" href="#E29" coords="627,1061,639,1081" shape="rect">
</map>
</div>



</div>
 <script>
    var seats=[];
    function myFunction(clickedid){
        if(this.seats.indexOf(clickedid)<=-1)
        {
            this.seats.push(clickedid);
            document.getElementById("demo").innerHTML = seats;
        }
    }
</script>
</body>
</html>