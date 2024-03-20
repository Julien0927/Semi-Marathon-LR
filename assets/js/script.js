window.scroll({
    top: 100,
    left: 100,
    behavior: "smooth",
  });

  document.addEventListener("DOMContentLoaded", function() {
    const myModal = new bootstrap.Modal(document.getElementById('Modal'));
    myModal.show();
  });


