// $.validator.setDefaults({
//   submitHandler: function() {
//     alert("submitted!");
//   }
// });

$().ready(function() {
  // toggle password visibility

  $('.toggle-password').on('click', function() {

    $(this).toggleClass('fa-eye').toggleClass('fa-eye-slash'); // toggle our classes for the eye icon

    var input = $('#cust-password');
      if (input.attr("type") == "password") {
          input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
  });
  // validate signup form on keyup and submit
  $("#signupForm").validate({
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
      // confirm_password: { Does not exist
      //   required: true,
      //   minlength: 5,
      //   equalTo: "#password"
      // },
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
        required: true,
      }

    },
    messages: {
      custname: "Please enter your firstname",
      custlastname: "Please enter your lastname",
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
      custcity:"Please enter your City"
    }
  });

  // propose username by combining first- and lastname
  $("#username").focus(function() {
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    if (firstname && lastname && !this.value) {
      this.value = firstname + "." + lastname;
    }
  });

  //code to hide topic selection, disable for demo
  var newsletter = $("#newsletter");
  // newsletter topics are optional, hide at first
  var inital = newsletter.is(":checked");
  var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
  var topicInputs = topics.find("input").attr("disabled", !inital);
  // show when newsletter is checked
  newsletter.click(function() {
    topics[this.checked ? "removeClass" : "addClass"]("gray");
    topicInputs.attr("disabled", !this.checked);
  });
});
