
function validation(formId)
{ 
  // First we clear all fields. ---------------------------------------------------------
  var anyInvalid= false;
  var requiredFields= [];

  if (true)
  {
    clearErrors(formId);

    switch (formId)
    {
      case 'contact': // Contact form
        // Let's configure the required fields. ----------------------------------------------
        requiredFields= ["email", "subject"];

        // Let's validate the email. ---------------------------------------------------------
        // .. but only if the user filled it...
        if (jQuery("#email").val())
        {
          if (!validateEmail(jQuery("#email").val()))
          {
            addError(
              "email",
              "Email not valid"
            );      
          }  
        }

        break;

    }
    
    // Let's validate the required fields. ------------------------------------------------
    for (var i=0; i<requiredFields.length; i++)
    {
      if (!jQuery("#" + requiredFields[i]).val())
      {
        addError(
          requiredFields[i],
          'Field required'
        );      
      }
    }
  }

  // Then return if ok or not. ---------------------------------------------------------
  if (anyInvalid)
  {
    alert("There are some invalid fields..");
  }
  else
  {
    
  }

  return !anyInvalid;


  // Private functions. ----------------------------------------------------------------
  function clearErrors(formId)
  {
    jQuery("#" + formId +" input").removeClass("no-validated");
    jQuery("#" + formId +" textarea").removeClass("no-validated");
    jQuery("#" + formId +"  span.validation-text").remove();
  }

  function addError(id, txt)
  {
    jQuery("#" + id).addClass("no-validated");
    jQuery("#" + id).parent().prepend("<span class='validation-text validation-above' style='color: red; width: 100%; font-size: 11px; font-weight: bold;'>" + txt + "</span>");

    anyInvalid= true;
  }

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }
}

function sendForm()
{

  var data= { 
      'name': jQuery("#name"),
      'email': jQuery("#email"),
      'subject': jQuery("#subject"),
      'comment': jQuery("#comment"),
  };

  jQuery.ajax("./contact", {
      type     :"POST",
      async    : false,
      cache    : true,
      data     : data,
      dataType : 'json',
      success  : function(data, textStatus, qXHR) {
        console.log(data);
      }
  });
}