$(document).ready(function() {
  // Load the initial content
  $('#daftar').load('daftar.php');

  // Load the content when the button is clicked
  $('#tombolMuatUlang').on('click', function() {
    $('#daftar').load('daftar.php');
  });
});
