/** @format */

(() => {
  const $menu = document.querySelector("#menu-btn");
  const $header = document.querySelector(".header");
  const $section = document.querySelectorAll("section");
  const $navbar = document.querySelectorAll(".header .navbar a");

  //ヘッダーナビゲーション設定
  $menu.addEventListener("click", () => {
    $menu.classList.toggle("fa-times");
    $header.classList.toggle("active");
    document.body.classList.toggle("active");
  });

  window.addEventListener("scroll", () => {
    if (window.innerWidth < 991) {
      $menu.classList.remove("fa-times");
      $header.classList.remove("active");
      document.body.classList.remove("active");
    }

    $section.forEach((sec) => {
      let top = window.scrollY; //現在のウィンドウY座標
      let offset = sec.offsetTop - 150; //各要素の上端がウィンドウのビューポートからどれだけ離れているかを表す
      let height = sec.offsetHeight; //各要素の高さ
      let id = sec.getAttribute("id");

      if (top >= offset && top < offset + height) {
        $navbar.forEach((nav) => {
          nav.classList.remove("active");
          document
            .querySelector('.header .navbar a[href*="' + id + '"]')
            .classList.add("active");
        });
      }
    });
  });

  // AOS js
  AOS.init({
    duration: 700,
    delay: 100,
  });
})();
