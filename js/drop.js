document.querySelectorAll("nav ul li > a").forEach(item => {

  item.addEventListener("click", function(e) {

    const parent = this.parentElement;

    if (parent.querySelector("ul")) {
      e.preventDefault();

      document.querySelectorAll("nav ul li").forEach(li => {
        if (li !== parent) li.classList.remove("active");
      });

      parent.classList.toggle("active");
    }
  });

});


document.addEventListener("click", function(e) {
  if (!e.target.closest("nav")) {
    document.querySelectorAll("nav ul li").forEach(li => {
      li.classList.remove("active");
    });
  }
});
