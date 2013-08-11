<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Purchase</title>
<style type= "text/css">

#invalid_1
{
 color:red;
 position:absolute;
 top:0px;
 left: 375px;
}
#invalid_2
{
 color:red;
 position:absolute;
 top:35px;
 left: 375px;
}
#invalid_3
{
 color:red;
 position:absolute;
 top:70px;
 left: 375px;
}
#invalid_4
{
 color:red;
 position:absolute;
 top:105px;
 left: 375px;
}
#invalid_5
{
 color:red;
 position:absolute;
 top:140px;
 left: 375px;
}
#invalid_6
{
 color:red;
 position:absolute;
 top:180px;
 left: 375px;
}
#invalid_7
{
 color:red;
 position:absolute;
 top:220px;
 left: 375px;
}
#invalid_8
{
 color:red;
 position:absolute;
 top:250px;
 left: 375px;
}
</style>
<script type="text/javascript">
 function validateForm()
{
 var x=document.forms["purchase"]["Item_Name"].value
 var y=document.forms["purchase"]["Item_ID"].value
 var a=document.forms["purchase"]["Serial_No"].value
 var b=document.forms["purchase"]["Purchase_Date"].value
 var c=document.forms["purchase"]["Warranty_Period"].value
 var d=document.forms["purchase"]["Expird_Date"].value
 var e=document.forms["purchase"]["Vender_Name"].value
 var f=document.forms["purchase"]["Vender_ID"].value

if ( x=="" && y==""&& a=="" && b=="" && c=="" && d=="" && e=="" && f==""  )
  {
	document.getElementById("invalid_1").innerHTML="you must type Item Name ";
	document.getElementById("invalid_2").innerHTML="you must type Item ID ";
	document.getElementById("invalid_3").innerHTML="you must type Serial No ";
	document.getElementById("invalid_4").innerHTML="you must type Purchase Date ";
	document.getElementById("invalid_5").innerHTML="you must type Warranty Period ";
	document.getElementById("invalid_6").innerHTML="you must type Expird Date ";
	document.getElementById("invalid_7").innerHTML="you must type Vender Name ";
	document.getElementById("invalid_8").innerHTML="you must type Vender ID ";
  	return false;
  }
  if (  y==""&& a=="" && b=="" && c=="" && d=="" && e=="" && f==""  )
  {
	
	document.getElementById("invalid_2").innerHTML="you must type Item ID ";
	document.getElementById("invalid_3").innerHTML="you must type Serial No ";
	document.getElementById("invalid_4").innerHTML="you must type Purchase Date ";
	document.getElementById("invalid_5").innerHTML="you must type Warranty Period ";
	document.getElementById("invalid_6").innerHTML="you must type Expird Date ";
	document.getElementById("invalid_7").innerHTML="you must type Vender Name ";
	document.getElementById("invalid_8").innerHTML="you must type Vender ID ";
  	return false;
  }
  
  if (   a=="" && b=="" && c=="" && d=="" && e=="" && f==""  )
  {
	
	//document.getElementById("invalid_2").innerHTML="you must type Serial No ";
	document.getElementById("invalid_3").innerHTML="you must type Serial No ";
	document.getElementById("invalid_4").innerHTML="you must type Purchase Date ";
	document.getElementById("invalid_5").innerHTML="you must type Warranty Period ";
	document.getElementById("invalid_6").innerHTML="you must type Expird Date ";
	document.getElementById("invalid_7").innerHTML="you must type Vender Name ";
	document.getElementById("invalid_8").innerHTML="you must type Vender ID ";
  	return false;
  }
  if (    b=="" && c=="" && d=="" && e=="" && f==""  )
  {
	
	//document.getElementById("invalid_2").innerHTML="you must type Serial No ";
	//document.getElementById("invalid_3").innerHTML="you must type Serial No ";
	document.getElementById("invalid_4").innerHTML="you must type Purchase Date ";
	document.getElementById("invalid_5").innerHTML="you must type Warranty Period ";
	document.getElementById("invalid_6").innerHTML="you must type Expird Date ";
	document.getElementById("invalid_7").innerHTML="you must type Vender Name ";
	document.getElementById("invalid_8").innerHTML="you must type Vender ID ";
  	return false;
  }
  if (   c=="" && d=="" && e=="" && f==""  )
  {
	
	//document.getElementById("invalid_2").innerHTML="you must type Serial No ";
	//document.getElementById("invalid_3").innerHTML="you must type Serial No ";
	//document.getElementById("invalid_4").innerHTML="you must type Purchase Date ";
	document.getElementById("invalid_5").innerHTML="you must type Warranty Period ";
	document.getElementById("invalid_6").innerHTML="you must type Expird Date ";
	document.getElementById("invalid_7").innerHTML="you must type Vender Name ";
	document.getElementById("invalid_8").innerHTML="you must type Vender ID ";
  	return false;
  }
  if (    d=="" && e=="" && f==""  )
  {
	
	//document.getElementById("invalid_2").innerHTML="you must type Serial No ";
	//document.getElementById("invalid_3").innerHTML="you must type Serial No ";
	//document.getElementById("invalid_4").innerHTML="you must type Purchase Date ";
	//document.getElementById("invalid_5").innerHTML="you must type Warranty Period ";
	document.getElementById("invalid_6").innerHTML="you must type Expird Date ";
	document.getElementById("invalid_7").innerHTML="you must type Vender Name ";
	document.getElementById("invalid_8").innerHTML="you must type Vender ID ";
  	return false;
  }
  if (   e=="" && f==""  )
  {
	
	//document.getElementById("invalid_2").innerHTML="you must type Serial No ";
	//document.getElementById("invalid_3").innerHTML="you must type Serial No ";
	//document.getElementById("invalid_4").innerHTML="you must type Purchase Date ";
	//document.getElementById("invalid_5").innerHTML="you must type Warranty Period ";
	//document.getElementById("invalid_6").innerHTML="you must type Expird Date ";
	document.getElementById("invalid_7").innerHTML="you must type Vender Name ";
	document.getElementById("invalid_8").innerHTML="you must type Vender ID ";
  	return false;
  }
if (x==null || x=="")
  {
  	document.getElementById("invalid_1").innerHTML="you must type Item ID ";
  	return false;
  }
  if (y==null || y=="")
  {
   document.getElementById("invalid_2").innerHTML="you must type Serial No ";
 	 return false;
  }
  if (a==null || a=="")
  {
  	 document.getElementById("invalid_3").innerHTML="you must type Serial No ";
  	return false;
  }
  if (b==null || b=="")
  {
   document.getElementById("invalid_4").innerHTML="you must type Serial No ";
  return false;
  }
  if (c==null || c=="")
  {
   document.getElementById("invalid_5").innerHTML="you must type Serial No ";
  return false;
  }
  if (d==null || d=="")
  {
   document.getElementById("invalid_6").innerHTML="you must type Serial No ";
  return false;
  }
  if (e==null || e=="")
  {
   document.getElementById("invalid_7").innerHTML="you must type Serial No ";
  return false;
  }
  if (f==null || f=="")
  {
   document.getElementById("invalid_8").innerHTML="you must type Serial No ";
  return false;
  }
  
  }
</script>
</head>

<body>
<form id="purchase" name="purchase" action="purch.php" onsubmit="return validateForm()" method="post">
<table width="534" cellpadding="6">
  <tr>
    <td width="188"><div align="left">Item Name</div></td>
    <td width="314"><div align="left">
      <input type="text" name="Item_Name" id="Item_Name" />
    </div></td>
  </tr>
  <tr>
    <td><div align="left">Item ID</div></td>
    <td><div align="left">
      <input type="text" name="Item_ID" id="Item_ID" />
    </div></td>
  </tr>
   <tr>
    <td><div align="left">Serial No</div>
    <td><div align="left">
      <input type="text" name="Serial_No" id="Serial_No" />
    </div></td>
    </tr>

  <tr>
    <td><div align="left">Purchase Date</div>
    <td><div align="left">
      <input type="text" name="Purchase_Date" id="Purchase_Date" />
    </div></td>
    </tr>
    <tr>
    <td><div align="left">Warranty Period</div>
    <td><div align="left">
      <input type="text" name="Warranty_Period" id="Warranty_Period" />
    </div></td>
    </tr>
    <tr>
    <td><div align="left">Expird Date</div>
    <td><div align="left">
      <input type="text" name="Expird_Date" id="Expird_Date" />
    </div></td>
    <tr>
    <td><div align="left">Vender Name</div>
    <td><div align="left">
      <input type="text" name="Vender_Name" id="Vender_Name" />
    </div></td>
    <tr>
    <td><div align="left">Vender ID</div>
    <td><div align="left">
      <input type="text" name="Vender_ID" id="Vender_ID" />
    </div></td>
    </tr>
    
    
  </table>
<br>
  <input name="Submit" type="submit" value="Submit" action"post" />
  <input name="Clear" type="reset" value="Clear" />



</form>
<p id=invalid_1 ></p>
<p id=invalid_2 ></p>
<p id=invalid_3 ></p>
<p id=invalid_4 ></p>
<p id=invalid_5 ></p>
<p id=invalid_6 ></p>
<p id=invalid_7 ></p>
<p id=invalid_8 ></p>

</body>
</html>
