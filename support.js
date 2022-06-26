function validate(valfrm) {
  var str = "";

  if (valfrm.name.value == "") str += "Enter Name\n";
  if (valfrm.contact.value == "") str += "Enter Contact number\n";

  // Name validation
  var username = /^[a-zA-Z]+$/;
  var ifcorrect = valfrm.name.value.match(username);
  if (ifcorrect == null) {
    str += "Your Name is not valid. Only characters A-Z, a-z are acceptable.\n";
  }
  //   Name validation end

  //   Email validation
  if (valfrm.email.value == "") str += "Enter Email\n";
  else {
    if (valfrm.email.value.indexOf(" ") >= 0)
      str += "Email Address Can not have Spaces\n";
    if (valfrm.email.value.indexOf("@") == -1)
      str += "Email Address does not contain @\n";
    if (valfrm.email.value.indexOf(".") == -1)
      str += "Email Address does not contain '.'\n";
  }
  //   Email validation end

  //   Contact Validation
  var contactnumber = /^[0-9]+$/;
  var ifcontact = valfrm.contact.value.match(contactnumber);
  if (ifcontact == null) {
    str += "Invalid mobile number. Only 0 to 9 are acceptable.\n";
  }
  // Contact validation end

  // Service is selected or not validation
  if (valfrm.Service[0].checked == false && valfrm.Service[1].checked == false)
    str += "Select Atleast 1 Service\n";
  // Service is selected or not validation

  // Laptop brand is selected or not validation
  if (valfrm.Laptop[0].checked == false && valfrm.Laptop[1].checked == false)
    str += "Select Atleast 1 Laptop Brand\n";
  // Laptop brand is selected or not validation

  // Printing all the errors
  if (str != "") {
    str = "Please Complete Following Fields \n" + str;
    alert(str);
    return false;
  } else return true;
}
