// $.validator.setDefaults({
//   submitHandler: function() {
//     alert("submitted!");
//   }
// });

$.validator.addMethod("custpostalcode", function(value, element) {
  return this.optional(element) || /^[A-Z]\d[A-Z]?\d[A-Z]\d$/.test(value);
}, "Please provide a valid postal code.");

$().ready(function() {
  // toggle password visibility

  // $('.toggle-password').on('click', function() {
  //
  //   $(this).toggleClass('fa-eye').toggleClass('fa-eye-slash'); // toggle our classes for the eye icon
  //
  //   var input = $('#cust-password');
  //     if (input.attr("type") == "password") {
  //         input.attr("type", "text");
  //     } else {
  //       input.attr("type", "password");
  //     }
  // });
  // validate signup form on keyup and submit
  $("#signupForm,#contact-form").validate({
      rules: {
        custname: {
          required: true,
          minlength: 2
        },
        custlastname: {
          required: true,
          minlength: 2
        },
        custpassword: {
          required: true,
          minlength: 5
        },
        contactEmail: {
          required: true,
          email: true
        },
        contactMessage: {
          required: true,
        },
        contactname:{
          required: true,
        },
        contactlastname:{
          required: true,
        },
        contactemail:{
          required: true,
          email: true
        },
        custemail: {
          required: true,
          email: true
        },
        custaddress: {
          required: true,
          minlength: 4
        },
        custcity:{
          required:true,
        },
        custpostalcode:{
          custpostalcode:true,
          required: true,
        },
        contactMessage:{
          required: true,
        }

      },
      messages: {
        custname: "Please enter your first name",
        custlastname: "Please enter your last name",
        username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        custpassword: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        // confirm_password: {
        //   required: "Please provide a password",
        //   minlength: "Your password must be at least 5 characters long",
        //   equalTo: "Please enter the same password as above"
        // },
        custemail: "Please enter a valid email address",
        custaddress:"Please enter your address",
        custcity:"Please enter your city"
      }
    });

  });
