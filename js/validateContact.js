function validateContact(){

  //validate values...

  ////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////

  //validate first name
  var firstName = document.form1.fname.value;
  var lastName = document.form1.lname.value;
  var regex=/^[a-zA-Z]+$/;

  if(document.form1.fname.value == "" ) {
    alert( "Please provide your first name!" );
    document.form1.fname.focus() ;
    return false;
  }

  //deny anything except string
  if (!firstName.match(regex))
  {
    alert("Please enter only text for first name!");
    return false;
  }

  ////////////////////////////////////////////////////////////

  //validate last name
  if( document.form1.lname.value == "" ) {
    alert( "Please provide your last name!" );
    document.form1.lname.focus() ;
    return false;
  }

  //deny anything except string
  if (!lastName.match(regex))
  {
    alert("Please enter only text for last name!");
    return false;
  }

  ////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////

  //validate email
  if( document.form1.email.value == "" ) {
    alert( "Please provide your email!" );
    document.form1.email.focus() ;
    return false;
  }

  //validate email with @ and .com
  var emailID = document.form1.email.value;
  var atpos = emailID.indexOf("@");
  var dotpos = emailID.lastIndexOf(".");
  
  if (atpos < 1 || ( dotpos - atpos < 2 )) {
     alert("Please enter correct email in the form of 'abc@xyz.com'!");
     document.form1.email.focus() ;
     return false;
  }

  ////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////

  
  //validate message
  if( document.form1.contactmessage.value == "" ) {
    alert( "Please provide your message!" );
    document.form1.contactmessage.focus() ;
    return false;
  }

  ////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////

}