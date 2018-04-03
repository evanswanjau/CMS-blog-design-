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

// function to change your password
function changePassword(){

  // assign variables to form inputs
  var oldpassword = document.forms['myForm']['oldpassword'].value;
  var newpassword = document.forms['myForm']['newpassword'].value;
  var confirmpassword = document.forms['myForm']['confirmpassword'].value;

  if (oldpassword == '') {
    document.getElementById('oldpassworderror').innerHTML = 'Old password is required';
    document.getElementById('oldpassworderror').style.background = '#FF6868';
    document.getElementById('oldpasswordsuccess').innerHTML = '';
  }else {
    document.getElementById('oldpasswordsuccess').innerHTML = ' <img src="../png/check.png">';
    document.getElementById('oldpassworderror').innerHTML = '';
    document.getElementById('oldpassworderror').style.background = '#fff';
  }

  /*if (newpassword == '') {
    document.getElementById('newpassworderror').innerHTML = 'New password is required';
    document.getElementById('newpassworderror').style.background = '#FF6868';
    document.getElementById('newpasswordsuccess').innerHTML = '';
  }else {
    document.getElementById('newpasswordsuccess').innerHTML = ' <img src="../png/check.png">';
    document.getElementById('newpassworderror').innerHTML = '';
    document.getElementById('newpassworderror').style.background = '#fff';
  }*/

  /*if (confirmpassword == '') {
    document.getElementById('confirmpassworderror').innerHTML = 'Please confirm your new password';
    document.getElementById('confirmpassworderror').style.background = '#FF6868';
    document.getElementById('confirmpasswordsuccess').innerHTML = '';
  }else {
    document.getElementById('confirmpasswordsuccess').innerHTML = ' <img src="../png/check.png">';
    document.getElementById('confirmpassworderror').innerHTML = '';
    document.getElementById('confirmpassworderror').style.background = '#fff';
  }*/

  return false;
}
