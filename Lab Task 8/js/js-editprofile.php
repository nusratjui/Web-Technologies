<script type="text/javascript">
		function validateform()
		{  
			var name=document.myform.name.value; 
			var email=document.myform.email.value;
			var contactno=document.myform.contactno.value;  
			  
			if (name==null || name=="")
			{  
			  alert("Name can't be empty!");  
			  return false;  
			}
			else if (email==null || email=="")
			{  
			  alert("Email can't be empty!");  
			  return false;  
			}
			else if (contactno==null || contactno=="")
			{  
			  alert("ContactNo can't be empty!");  
			  return false;  
			}
		}
		
 		 function checkEmpty() 
		{
		  	if (document.myform.name.value = "") 
		  	{
		  		alert("Name can't be empty!");
		        return false;  
		  	}
		 }  
		function checkName() 
		{
			if (document.getElementById("name").value == "") 
			{
			  	document.getElementById("nameErr").innerHTML = "Name can't be empty!";
			  	
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}
			
			else
			{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }
		
        function checkEmail() 
		{
			reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@(([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (document.getElementById("email").value == "") 
			{
			  	document.getElementById("emailErr").innerHTML = "Email can't be empty!";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}
			
			else if(!reg.test(document.getElementById("email").value))
            {   document.getElementById("emailErr").innerHTML = "Email format is Invalid!";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
            }
			else
			{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}
			
        }
		
        function checkContactno() 
		{
			if (document.getElementById("contactno").value == "") 
			{
			  	document.getElementById("contactnoErr").innerHTML = "ContactNo can't be empty!";
			  	document.getElementById("contactnoErr").style.color = "red";
			  	document.getElementById("contactno").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("contactnoErr").innerHTML = "";
				document.getElementById("contactno").style.borderColor = "black";
			}
			
        }
	</script>
