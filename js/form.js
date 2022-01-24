$('#sendForm').on('click', () => {
  const name = $('#name').val().trim();
  const surname = $('#surname').val().trim();
  const tel = $('#tel').val().trim();
  const email = $('#email').val().trim();

  // Validates form
  if (name == '') {
    $('#errorMess').text('Please provide your name.');
    return false;
  } else if (surname == '') {
    $('#errorMess').text('Please provide your surname.');
    return false;
  } else if (tel == '') {
    $('#errorMess').text('Please provide your phone number.');
    return false;
  } else if (email == '') {
    $('#errorMess').text('Please provide your email.');
    return false;
  }

  $('#errorMess').text('');

  // Sends form's data to handle-form.php
  $.ajax({
    url: 'ajax/handle-form.php',
    type: 'POST',
    cache: false,
    data: { name: name, surname: surname, tel: tel, email: email },
    dataType: 'text',
    beforeSend: () => {
      $('#sendForm').prop('disabled', true);
    },
    success: () => {
      $('#successMess').text('Your account has been successfully created!');
      $('#sendForm').prop('disabled', false);
    },
  });
});
