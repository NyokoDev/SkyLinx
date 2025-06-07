document.addEventListener("DOMContentLoaded", () => {
  const modSearch = document.getElementById("modSearch");
  const noResultsLabel = document.getElementById("noResultsLabel");

  if (!modSearch || !noResultsLabel) {
    console.warn("Search input or no results label not found.");
    return;
  }

  modSearch.addEventListener("input", () => {
    const searchTerm = modSearch.value.trim().toLowerCase();
    const modItems = document.getElementsByClassName("image-item");
    let hasResults = false;

    Array.from(modItems).forEach(item => {
      const h3 = item.querySelector("h3");
      if (!h3) return;

      const modName = h3.textContent.toLowerCase();

      if (modName.includes(searchTerm)) {
        item.style.display = "";
        hasResults = true;
      } else {
        item.style.display = "none";
      }
    });

    noResultsLabel.style.display = hasResults ? "none" : "block";
  });
});
