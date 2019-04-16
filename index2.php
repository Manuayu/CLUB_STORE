 
    <?php


    session_start();
   echo " <h2><b><i>Welcome : ".$_SESSION['newUsername']."</i></b></h1>";
   
?>
<html>
<head>
 <link rel="stylesheet"  href="style6.css">   
     
    <meta  name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.button {
  background-color:darkseagreen;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.button:hover {
  background-color:cornflowerblue;
  color: white;
}
.custom-select {
  position:relative;
  font-family:sans-serif;
   top: -70px;
    left: 390px;
    }

.custom-select select {
  display:none; 
}

.select-selected {
  background-color:cornflowerblue;
}

.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}


.select-items {
  position: absolute;
  background-color:cornflowerblue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}


.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
    img:hover {
       cursor: pointer;
   }
   input[type=submit] {
       display: none;
   }
.btn {
 font-family:"Roboto", sans-serif;
    background-color:darkcyan;
   
  border: none;
  color: red;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display:inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}   
    .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

</head>     
    
    
    
    
<body>    
     
    <nav class="menu">
    <ul>
       <li><a href="#">HOME</a></li>
        <li><a href="#">EVENTS</a></li>
         <li><a href="feedback.html">FEEDBACK</a></li>
        <li><a href="#">ABOUT</a></li>
         <li><a href="contact.html">CONTACT</a></li>
          <li> <a href="index.html">LOGOUT</a></li>
       <li> <a href="index19.html">OUR TEAM</a></li>
    </ul>
        <form class="search-form">
        <input type="text" placeholder="Search ">
        <button onclick="myFunction()">Search</button>    
        </form>
        <script>
function myFunction() {
  location.replace("https://www.google.com/")
}
</script>
       <!-- <form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
<input name="sitesearch" type="hidden" value="example.com">
<input autocomplete="on" class="form-control search" name="q" placeholder="Search in example.com" required="required"  type="text">
<button class="button" type="submit">Search</button>
</form>
        -->
        
    </nav>    
    
    
    <div class="slider">
     <figure>
       <div class="slide">
          <img src="iot1.jpg" alt="">
       </div>
        <div class="slide">
          <img src="s1.jpg" alt="">
       </div>
     <div class="slide">
          <img src="s2.jpg" alt="">
       </div>
     
     <div class="slide">
          <img src="satrangal.jpg" alt="">
       </div>
      <div class="slide">
          <img src="natraj.jpg" alt="">
       </div>
    
    
</figure>
    </div>
     <h1 style="text-align:center;font-family: sans-serif;font-size: 60px;text-align: center;text-decoration-color: dodgerblue;margin-left: -70px;">CHOOSE YOUR CLUB </h1>
    <div>

    <button class="btn btn1" ><a href="index3.html">IOT</a></button>
    <button class="btn btn2"><a href="index8.html">NINAD</a></button>
    
    <button class="btn btn3"> <a href="index4.html">DRISHTI</a></button>
    
    <button class="btn btn4"><a href="index6.html">SATRUNGLE CLUB</a></button>
   

    
    <button class="btn btn5"><a href="index9.html">POETRY</a></button>
    
    <button class="btn btn6"><a href="index12.html">MATH'S</a></button>
    
    <button class="btn btn7"><a href="index15.html">FINE ARTS</a></button>

    <button class="btn btn8"><a href="index13.html">CODE-E-PHOBIA</a></button>
    <button class="btn btn9"><a href="literario.html">LITERARIO</a></button>
    <button class="btn btn10">PRASTUTI</button>
    <button class="btn btn11">QUIZ CLUB:MIND BLOGGERS</button>
    <button class="btn btn12">CHeMgLA:CHEMESTRY CLUB</button>
    <button class="btn btn13">SCIENCE CLUB</button>
    <button class="btn btn14">DROID</button>
    <button class="btn btn15">SOFTWARE CLUB</button>
    <button class="btn btn16">HARDWARE CLUB:GIZMO</button>
    <button class="btn btn17">SOCIAL CLUB:UNNATI</button>
</div>
    
   
</body>
</html>