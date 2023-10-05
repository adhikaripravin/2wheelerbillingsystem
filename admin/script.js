function validation(){
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var bike_model = document.getElementById("bike_model").value;
    var parts = document.getElementById("parts").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    
    error_message.style.padding = "10px";
    error_message.style.color = "red";
    error_message.style.textAlign = "center";
    error_message.style.backgroundColor = "#fe8b8e";
    error_message.style.transition = "all 0.5s ease";
    error_message.style.fontSize = "20px";
    
    var text;
    if(name.length < 5){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(phone) || phone.length != 10){
      text = "Please Enter valid Phone Number";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") <=0 || email.length <6){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if(bike_model.length < 5){
      text = "Please Specify your bike model";
      error_message.innerHTML = text;
      return false;
    }
    if(parts.length < 5){
      text = "Please Specify your bike part";
      error_message.innerHTML = text;
      return false;
    }
    if(message.length <= 10){
      text = "Please Enter Message More Than 10 Characters";
      error_message.innerHTML = text;
      return false;
    }
    // alert("Submitted Successfully!");
    return true;
  }