<!DOCTYPE html>
<html>

<script type="text/javascript"> 

function stopRKey(evt) { 
	
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 
function confirmSubmit() {
	var eleform=document.forms;
	var usern=eleform.uname.value;
	var headl=eleform.headLine.value;
	var descr=eleform.description.value;
  if (confirm("Hey "+usern+"! Are you sure you want to submit the form?"+"\nThis is what you entered .\nHeadline :"+headl+"\nDescription :"+descr)) {
    document.getElementById("submitform").submit();
  }
  return false;
}
</script>

<body>

<h1>IITh NEWS ADMIN</h1>
<br/>
<br/>

<form name="forms" id="submitform" action="action.php" method="post" enctype="multipart/form-data" onsubmit="return confirmSubmit(); " >
 <p>User<input type="text" name="uname"/></p>
 <p>Password<input type="password" name="pswd"/></p>
 <p>Headline: <input type="text" name="headLine"  /></p>
 <p>Description and Details: <textarea style="height:100px; width:300px" type="text" name="description"> </textarea>
 </p>
 <input  name="upfile" type="file" id="fileToUpload"/>
 <p><input type="submit" value="send data" /></p>
</form>
</body>
</html>



