/*function submitStory(){

  // assign variables to form inputs
  var heading = document.forms['myForm']['heading'].value;
  //var image = document.forms['myForm']['image'].value;
  var story = document.forms['myForm']['story'].value;

  //valueValidation(heading, 'heading', 'A heading is required');
  //valueValidation(story, 'story', 'Start by saying something');

  //return false;
}
*/
var oldpassword, newpassword, confirmpassword, submit;

function confirmOldPassword(value) {

  oldpassword = value;

  if (oldpassword.length < 1) {
    document.getElementById('oldpassworderror').innerHTML = 'Old password is required';
    document.getElementById('oldpassworderror').style.background = '#FF6868';
    document.getElementById('oldpasswordsuccess').innerHTML = '';
  }else {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 0) {
              document.getElementById('oldpassworderror').innerHTML = 'Incorrect password';
              document.getElementById('oldpassworderror').style.background = '#FF6868';
              document.getElementById('oldpasswordsuccess').innerHTML = '';
            }else {
              document.getElementById('oldpasswordsuccess').innerHTML = ' <img src="../png/check.png">';
              document.getElementById('oldpassworderror').innerHTML = '';
              document.getElementById('oldpassworderror').style.background = '#fff';
            }
        }
    };

    xmlhttp.open("POST", "../engine/cogs.php?oldpassword=" + oldpassword, true);
    xmlhttp.send();

    return false;
  }
}

function confirmNewPassword(value){

  newpassword = value;

  if (newpassword == '') {
    document.getElementById('newpassworderror').innerHTML = 'New password is required';
    document.getElementById('newpassworderror').style.background = '#FF6868';
    document.getElementById('newpasswordsuccess').innerHTML = '';
  }else {
    if (newpassword.length < 7) {
      document.getElementById('newpassworderror').innerHTML = 'Password cannot be less than 7 characters';
      document.getElementById('newpassworderror').style.background = '#FF6868';
      document.getElementById('newpasswordsuccess').innerHTML = '';
    }else {
      document.getElementById('newpassworderror').innerHTML = '';
      document.getElementById('newpassworderror').style.background = '#fff';
      if (newpassword == oldpassword) {
        document.getElementById('newpassworderror').innerHTML = 'New password cannot be similar to old password';
        document.getElementById('newpassworderror').style.background = '#FF6868';
        document.getElementById('newpasswordsuccess').innerHTML = '';
      }else {
        document.getElementById('newpasswordsuccess').innerHTML = ' <img src="../png/check.png">';
        document.getElementById('newpassworderror').innerHTML = '';
        document.getElementById('newpassworderror').style.background = '#fff';
      }
    }
  }

  return false;
}

// function to change your password
function confirmSecondPassword(value){

  confirmpassword = value;

  if (confirmpassword == '') {
    document.getElementById('confirmpassworderror').innerHTML = 'Please confirm your new password';
    document.getElementById('confirmpassworderror').style.background = '#FF6868';
    document.getElementById('confirmpasswordsuccess').innerHTML = '';
  }else {
    if (newpassword == confirmpassword) {
      document.getElementById('confirmpasswordsuccess').innerHTML = ' <img src="../png/check.png">';
      document.getElementById('confirmpassworderror').innerHTML = '';
      document.getElementById('confirmpassworderror').style.background = '#fff';

      submit = true;

    }else {
      document.getElementById('confirmpassworderror').innerHTML = 'Passwords are not similar';
      document.getElementById('confirmpassworderror').style.background = '#FF6868';
      document.getElementById('confirmpasswordsuccess').innerHTML = '';
    }
  }

  return confirmpassword;
}

function updatePassword() {

  if (submit == true) {
    // push and update password to db
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if (this.responseText == true) {
            document.getElementById("successmessage").innerHTML = 'Password updated successfully';
            document.getElementById('successmessage').style.background = '#3FFF7E';
            document.getElementById('oldpasswordsuccess').innerHTML = '';
            document.getElementById('newpasswordsuccess').innerHTML = '';
            document.getElementById('confirmpasswordsuccess').innerHTML = '';
            document.forms["myForm"]["oldpassword"].value = '';
            document.forms["myForm"]["newpassword"].value = '';
            document.forms["myForm"]["confirmpassword"].value = '';
          }

        }
    };

    xmlhttp.open("POST", "../engine/cogs.php?updatepassword=" + newpassword, true);
    xmlhttp.send();
  }

  return false;
}
