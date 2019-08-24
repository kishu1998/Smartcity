 <script type="text/javascript">
		 function validate()
		 {
  if(!document.getElementById("email1").value == "")
  {
     if(!document.getElementById("email1").value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/))
              {
                  document.getElementById("msg1").style.display="block";
                  document.getElementById("msg1").style.color="red";
                  document.getElementById("msg1").innerHTML="Invalid email address";
                 
                  return false;
              }
      else
      {
           document.getElementById("msg1").style.display="none";
           return true;
      }
  }
  else
  {
    document.getElementById("msg1").style.display="block";
    document.getElementById("msg1").style.color="red";
    document.getElementById("msg1").innerHTML="Field cannot be empty";

    return false;
  }
}
		 }
		 </script>