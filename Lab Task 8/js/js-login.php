<script type="text/javascript">
		function validateform()
		{  
			var name=document.myform.name.value; 
			var password=document.myform.password.value;  
			  
			if (name==null || name=="")
			{  
			  alert("UserName can't be empty!");  
			  return false;  
			}
			else if (password==null || password=="")
			{  
			  alert("Password can't be empty!");  
			  return false;  
			}
		}
		
 		function checkEmpty() 
		{
		  	if (document.myform.name.value = "") 
		  	{
		  		alert("UserName can't be empty!");
		        return false;  
		  	}
		} 
		
		function checkName() 
		{
			if (document.getElementById("name").value == "") 
			{
			  	document.getElementById("nameErr").innerHTML = "UserName can't be empty!";			  	
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }
		
        function checkPassword() 
		{
			

			if (document.getElementById("password").value == "") 
			{
			  	document.getElementById("passwordErr").innerHTML = "Password can't be empty!";
			  	document.getElementById("passwordErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}
			
   

			else
			{
			  	document.getElementById("passwordErr").innerHTML = "";
				document.getElementById("password").style.borderColor = "black";
			}
			
        }
</script>