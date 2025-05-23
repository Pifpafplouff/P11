document.addEventListener("DOMContentLoaded", function () {
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementsByClassName("contactlink"); // Première occurrence de la classe 'myBtn'

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
  Array.from(btn).forEach((el) => {
    el.onclick = function () {
      modal.style.display = "block";
    };
  });

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
});
