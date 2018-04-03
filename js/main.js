function submitStory(){

  // assign variables to form inputs
  var heading = document.forms['myForm']['heading'].value;
  //var image = document.forms['myForm']['image'].value;
  var story = document.forms['myForm']['story'].value;

  valueValidation(heading, 'heading', 'a heading is required');
  valueValidation(story, 'story', 'start by saying something');

  return false;
}

function changePassword(){

  // assign variables to form inputs
  var oldpassword = document.forms['myForm']['oldpassword'].value;
  var newpassword = document.forms['myForm']['newpassword'].value;
  var confirmpassword = document.forms['myForm']['confirmpassword'].value;

  valueValidation(oldpassword, 'oldpassword', 'old password is required');
  valueValidation(newpassword, 'newpassword', 'new password is required');
  valueValidation(confirmpassword, 'confirmpassword', 'please confirm your new password');

  return false;
}

function valueValidation(value, position, error){

  if (value == '') {
    document.getElementById(position + 'error').innerHTML = error;
    document.getElementById(position + 'error').style.background = '#FF6868';
  }else {
    document.getElementById(position + 'error').innerHTML = value;
    document.getElementById(position + 'error').style.background = '#FF6868';

  }

  return false;
}
