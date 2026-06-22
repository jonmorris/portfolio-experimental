// Light/dark theme toggle, persisted to localStorage.
(function () {
  const root = document.documentElement;
  const btn = document.querySelector(".theme-toggle");
  if (!btn) return;

  function current() {
    return root.getAttribute("data-theme") || "dark";
  }

  btn.addEventListener("click", function () {
    const next = current() === "dark" ? "light" : "dark";
    root.setAttribute("data-theme", next);
    try {
      localStorage.setItem("theme", next);
    } catch (e) {}
  });
})();
