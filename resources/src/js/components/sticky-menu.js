window.onscroll = () => {
  scrollFunction();
};

function scrollFunction() {
  const menu = document.getElementById("header");
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    menu.classList.add("header-sticky");
  } else {
    menu.classList.remove("header-sticky");
  }
}
