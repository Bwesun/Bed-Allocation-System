<html>
<head>
<style>
body{ margin-left:10%;
margin-right:10%;
}
#content{ background-color:#CCCCCC;
padding:20px;
border-radius:10px;
border:2px solid #333333;}
#menu, #menu ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
#menu {
    margin: 10px auto;
    border: 1px solid #222;
    background-color: #111;
    background-image: linear-gradient(#444, #111);
    border-radius: 6px;
    box-shadow: 0 1px 1px #777;
}
#menu:before,
#menu:after {
    content: "";
    display: table;
}

#menu:after {
    clear: both;
}

#menu {
    zoom:1;
}
#menu li {
    float: left;
    border-right: 1px solid #222;
    box-shadow: 1px 0 0 #444;
    position: relative;
}

#menu a {
    float: left;
    padding: 12px 30px;
    color: #999;
    text-transform: uppercase;
    font: bold 12px Arial, Helvetica;
    text-decoration: none;
    text-shadow: 0 1px 0 #000;
}

#menu li:hover > a {
    color: #fafafa;
}

*html #menu li a:hover { /* IE6 only */
    color: #fafafa;
}
#menu ul {
    margin: 20px 0 0 0;
    _margin: 0; /*IE6 only*/
    opacity: 0;
    visibility: hidden;
    position: absolute;
    top: 38px;
    left: 0;
    z-index: 1;    
    background: #444;   
    background: linear-gradient(#444, #111);
    box-shadow: 0 -1px 0 rgba(255,255,255,.3);  
    border-radius: 3px;
    transition: all .2s ease-in-out;
}

#menu li:hover > ul {
    opacity: 1;
    visibility: visible;
    margin: 0;
}

#menu ul ul {
    top: 0;
    left: 150px;
    margin: 0 0 0 20px;
    _margin: 0; /*IE6 only*/
    box-shadow: -1px 0 0 rgba(255,255,255,.3);      
}

#menu ul li {
    float: none;
    display: block;
    border: 0;
    _line-height: 0; /*IE6 only*/
    box-shadow: 0 1px 0 #111, 0 2px 0 #666;
}

#menu ul li:last-child {   
    box-shadow: none;    
}

#menu ul a {    
    padding: 10px;
    width: 130px;
    _height: 10px; /*IE6 only*/
    display: block;
    white-space: no wrap;
    float: none;
    text-transform: none;
}

#menu ul a:hover {
    background-color: #0186ba;
    background-image: linear-gradient(#04acec, #0186ba);
}
#menu ul li:first-child > a {
    border-radius: 3px 3px 0 0;
}

#menu ul li:first-child > a:after {
    content: '';
    position: absolute;
    left: 40px;
    top: -6px;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #444;
}

#menu ul ul li:first-child a:after {
    left: -6px;
    top: 50%;
    margin-top: -6px;
    border-left: 0; 
    border-bottom: 6px solid transparent;
    border-top: 6px solid transparent;
    border-right: 6px solid #3b3b3b;
}

#menu ul li:first-child a:hover:after {
    border-bottom-color: #04acec; 
}

#menu ul ul li:first-child a:hover:after {
    border-right-color: #0299d3; 
    border-bottom-color: transparent;   
}

#menu ul li:last-child > a {
    border-radius: 0 0 3px 3px;
}

#link{ padding:5px;
background-color:#333333;
color:white;
text-decoration:none;
border:1px solid white;
border-radius:5px;
}
#link:hover{border:1px solid black;
color:#000000;
background-color:white;
}

input,textarea,select {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}
input:hover,
.btn:hover {
  opacity: 1;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
<meta name="viewport" content="width=device-width">
<title>Occupancy Form</title></head>
<body>
<div id="main_wrapper">
<div class="menu">
<ul id="menu">
    <li><a href="index.php">Home</a></li>
	<li><a href="#">Beds</a>
		<ul>
	<li><a href="add_bed.php">Add Bed</a> </li>
	<li><a href="delete_bed.php">Delete Bed</a> </li>
		</ul>
	</li>
	<li><a href="#">View</a>
		<ul>
			<li><a href="view_oc_space.php">Occupied Bed Space</a></li>
			<li><a href="index.php">Allocate Bed Space</a></li>
			<li><a href="View_pat_record.php">Patients Records</a></li>
		</ul>
	 </li>
    <li>
<a href="about.php">About</a>	</li>
    <li><a href="contact.php">Contact</a></li>
	<li><a href="../" title="Log Out">Log Out</a> </li>
	
	
</ul>
</div>
<div id="content">
  <div align="left">
    <h1>Allocation Form
    </h1>
	<h4>Fill the form to assign a patient to the selected bed space</h4>
  </div>
  <?php
  include('connect.php');
  
  $id=$_GET['id'];
  $sql="SELECT * FROM beds WHERE bed_id='$id'";
  $result=mysql_query($sql);
 $rows=mysql_fetch_assoc($result);
  ?>
  <form action="oc_form_ac.php" method="post">
   
   <input type="text" name="name" placeholder="Enter Patient Name" />
   <input type="text" name="phone" placeholder="Enter Patient's Phone Number" />
   <input type="email" name="email" placeholder="Enter Patient's Email" />
   Gender
   <select type="text" name="gender">
   	<option value="">-------Select Gender--------</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
   </select>
   <input type="number" name="age" placeholder="Enter Patient's Age" />
   <textarea name="address" placeholder="Enter Patient's Address"></textarea>
   <textarea name="symptoms" placeholder="Enter symptoms"></textarea>
   <input type="hidden" name="bed_id" value="<?php echo $rows['bed_id'];  ?>" />
   <input type="hidden" name="bed_name" value="<?php echo $rows['bed_name'];  ?>" />
   <input type="submit" value="Add" />
   </form>
    <br><a href="index.php" id="link" title="Go to Home">Back</a>
 
	<?php
	//close connection
	mysql_close();
	?>


</div>


</div>
</body>
</html>