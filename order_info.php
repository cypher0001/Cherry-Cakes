<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cherry Cakes</title>
<link rel="shortcut icon" href="pics/logoico.ico" />
<style>
* {
  box-sizing: border-box;
}	

.regf{width: 300px;
    height: 68px;
    border: none;
	margin:10px;
    padding: 0 30px;
    background-color: rgba(57, 57, 57, 0.07);
    border-radius: 10px;
	text-transform: capitalize;
	width:100%;
	}
	.uname1{width:685px;
	}
	.regbut{
		width:98.65px;
		height:68px;
		border:1px solid #fa416a;
		border-radius:10px;
			width:100%;
			margin:10px;
		
		
	}
	.regbut:hover{background-color:#fa416a;cursor:pointer;transition:1s ease; color:white;}
	.regf:hover,.uname1:hover{cursor:pointer;}
	.regform{
		background-color:whitesmoke;
		width:545px;
		
		
	}
	.regform,.regpic{float:left;}
	.regpic{border-radius: 0 0 0 50px;}
	
	.regform{position:relative;top:15px;left:20px;}
	
	
			.parentform{margin:0 auto;
			position:relative;top:80px;
			height:676px;	
			width:1050px;
			border-radius: 0 50px 0 50px; 
			background-color: whitesmoke;
			margin-bottom:80px;}
			
		.regfoot{position:relative;top:115px;}
		
			.pm{text-align:center;
			
			}
	.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
@media only screen and (max-width: 1149px),
  {

	
	table, thead, tbody,tr,td { 
		display:block; 
	  margin:0 auto;
	  
	}
	
	tr,td{width:100%;}
	td{margin-bottom:10px;text-align:center;}
	.regf,.regbut{float:none;margin-left:auto;margin-right:auto;padding:23px 100px;width:100%;position: static !important;}
	.regform{float:none;margin-left:auto;margin-right:auto; position: static !important;
	padding:30px;width:100%;}

.parentform{width:100%;height:1150px;margin-bottom:250px;}

  .regpic{display:none;}
}
	</style>
</head>

<body>
</div>
	<?php
            	
				include("header.php")
		
            ?>
			
         </div>
 
<div class="parentform">
<div class=" regpic "><img src="pics/placeorder.jpeg" width="450px" height="674px" style="border-radius: 0 0 0 50px"> </div>

<div class="regform ">
<form action="order_save.php" method="post">
<table>
	<tr>
    	
        <td> <input class="regf"type="text" name="fname2" style="text-transform: capitalize;" value="" placeholder="First name" required /></td>
    
    	
        <td> <input class="regf"type="text" name="lname2" value="" style="text-transform: capitalize;"  placeholder="Last name"/></td>
    </tr>
	<tr>
    	
        <td colspan="2" > <input style="width:100%" class="regf"type="text" name="add2" style=" text-transform:capitalize;" value="" required placeholder="Address" /></td>
    
    	
    </tr>
	<tr>
    	
        <td> <input class="regf" type="text" name="city2" required value="" style="text-transform: capitalize;"  placeholder="City"/></td>
		<td> <input class="regf"type="text" name="state2" required value="" style="text-transform: capitalize;"  placeholder="State" /></td>
    </tr>
	<tr>
	
        <td> <input class="regf" type="text" name="cont2" value="" required placeholder="Contact"/></td>
	<td><input class="regf" type="text" name="pincode2" value="" required placeholder="Pincode"/></td>

	</tr>
	
	<tr>
    	<td class="pm"> Payment Method: </td>
		<td>

  <select class="regf" name="paymentmode" required>
    <option style="font-size:18px;" value="cod">Cash On Delivery(COD)</option>
    <option style="font-size:18px" value="cc">Credit Card</option>
    <option style="font-size:18px" value="dc">Debit Card</option>
    
  </select></td>
     </tr>
	
	<tr>
	
        <td> <input class="regf" type="text" name="card_num" value=""  placeholder="Card Number"/></td>
	<td><input class="regf" type="text" name="expd" value="" placeholder="Expiration Date"/></td>
	
	

	</tr>
	
	
	<tr>
		<td><input class="regf" type="text" name="cvv" value="" placeholder="CVV"/></td>

    	<td>  <input class="regbut" type="submit" name="submit2" value="Submit" /></td>
    </tr>

</table>
</form>
</div>
</div>
	<?php
            	
				include("menubottom.php")
		
            ?>
			
         </div>
 <div class="regfoot">
        	<?php
            	include("footer.php");
            ?>
         </div>

</body>
</html>
