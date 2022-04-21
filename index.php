<?php
include_once 'functions.php';
var_dump(test(5));
?>
<form class='appForm' method="POST">
  Name: <br><input type="text" name="name">
  Phone:<br><input type="text" name="phone">
  <button type="submit">Send</button>
  <p class='err'></p>
</form>
<script>
let form = document.querySelector('.appForm')
form.addEventListener('submit', function(e) {
  e.preventDefault()
  let formData = new FormData(form)
  fetch('api.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(json => {
      console.log(json)
      if (json.res) {
        form.innerHTML = 'DONE'
      } else {
        document.querySelector('.err').innerHTML = json.error
      }
    })
})
</script>