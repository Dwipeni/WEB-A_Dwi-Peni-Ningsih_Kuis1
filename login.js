var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $formGroup = document.querySelectorAll('.form-group');
var $email = document.getElementById('email');
var $password = document.getElementById('password');

function addError(message) {
    $error.innerHTML = message;
    $error.style.display = 'block';
  }
  
  function removeError() {
    $error.innerHTML = '';
    $error.style.display = 'hidden';
  }

  function validate(event) {
    event.preventDefault();
    $error.style.display = 'none';

    if ($email.value !== 'levi@gmail.com' || $password.value !== 'dwipeni') {
      addError('Email atau password salah');
    } else {
      removeError();
      alert('Anda Berhasil Login!');
      document.location.href='order.html'
    }
  }
  
  $form.addEventListener('submit',validate);