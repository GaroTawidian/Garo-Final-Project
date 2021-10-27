function validatePurchase(){

    //validate values...
  
    ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////
  
    //validate first name
    var firstName = document.form2.fname.value;
    var lastName = document.form2.lname.value;
    var regex=/^[a-zA-Z]+$/;
  
    if(document.form2.fname.value == "" ) {
      alert( "Please provide your first name!" );
      document.form2.fname.focus() ;
      return false;
    }
  
    //deny anything except string
    if (!firstName.match(regex))
    {
      alert("Please enter only text for first name!");
      return false;
    }
  
    ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////
  
    //validate last name
    if( document.form2.lname.value == "" ) {
      alert( "Please provide your last name!" );
      document.form2.lname.focus() ;
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
    if( document.form2.email.value == "" ) {
        alert( "Please provide your email!" );
        document.form2.email.focus() ;
        return false;
      }
    
      //validate email with @ and .com
      var emailID = document.form2.email.value;
      var atpos = emailID.indexOf("@");
      var dotpos = emailID.lastIndexOf(".");
      
      if (atpos < 1 || ( dotpos - atpos < 2 )) {
         alert("Please enter correct email ID");
         document.form2.email.focus() ;
         return false;
      }
    
    ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////
      
    //validate card type
    if( document.form2.cardtype.value == "" ) {
        alert( "Please provide your card type!" );
        document.form2.cardtype.focus() ;
        return false;
      }
    
    ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////
  
    //validate cardholder name
    if( document.form2.cardname.value == "" ) {
      alert( "Please provide the cardholder's name!" );
      document.form2.cardname.focus() ;
      return false;
    }
  
    ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////
      
    //validate card number
    if( document.form2.cardnum.value == "" ) {
        alert( "Please provide the card number!" );
        document.form2.cardnum.focus() ;
        return false;
      }
    
    ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////
      
    //validate expiry date
    if( document.form2.expdate.value == "" ) {
        alert( "Please provide the expiry date!" );
        document.form2.expdate.focus() ;
        return false;
      }
    
    ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////
      
    //validate expiry date
    if( document.form2.streetaddress.value == "" ) {
        alert( "Please provide your street address!" );
        document.form2.streetaddress.focus() ;
        return false;
      }
    
    ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////

  }