// Client-side project filtering by type (all / work / side).
(function () {
  const buttons = document.querySelectorAll(".filter-btn");
  const cards = document.querySelectorAll("#project-grid .project-card");
  const empty = document.getElementById("filter-empty");
  if (!buttons.length || !cards.length) return;

  function apply(filter) {
    let shown = 0;
    cards.forEach(function (card) {
      const match = filter === "all" || card.dataset.type === filter;
      card.hidden = !match;
      if (match) shown++;
    });
    if (empty) empty.hidden = shown !== 0;
  }

  buttons.forEach(function (btn) {
    btn.addEventListener("click", function () {
      buttons.forEach((b) => b.classList.remove("is-active"));
      btn.classList.add("is-active");
      apply(btn.dataset.filter);
    });
  });
})();
