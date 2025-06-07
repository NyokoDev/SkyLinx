document.addEventListener("DOMContentLoaded", function () {
  const imageBlock = document.getElementById("imageBlock");

  fetch("mods_data.csv")
    .then(response => response.text())
    .then(data => {
      const rows = data.split("\n");
      const headers = rows[0].split(",");

      for (let i = 1; i < rows.length; i++) {
        const columns = rows[i].split(",");
        const steamLink = columns[0];
        const name = columns[1];
        const downloadLink = columns[2];
        const version = columns[3];
        const imageLink = columns[11]; // Use the correct index for imageLink

        const imageItem = document.createElement("div");
        imageItem.className = "image-item";
        imageItem.innerHTML = `
          <a href="${steamLink}" target="_blank" class="steam-link">
            <img src="UI/steam.png" alt="Steam" class="steam-icon">
          </a>
          <a href="${downloadLink}" target="_blank" class="download-link">
            <img src="${imageLink}" alt="${name}">
          </a>
          <h3>${name}</h3>
          <p>Version: ${version}</p>
        `;

        imageBlock.appendChild(imageItem);
      }
    });

  // Event delegation for download links inside imageBlock
  imageBlock.addEventListener("click", function (event) {
    const target = event.target;

    // Check if clicked element is inside an <a.download-link> or the <a> itself
    const downloadAnchor = target.closest("a.download-link");
    if (!downloadAnchor) return; // Not a download link, ignore

    event.preventDefault();

    const url = downloadAnchor.href;

    // Open download in new tab
    const newWindow = window.open(url, "_blank");

    if (newWindow) {
      // Redirect current page to thank you after short delay
      setTimeout(() => {
        window.location.href = "thank-you.html";
      }, 200);
    } else {
      // Popup blocked fallback - just redirect to download
      window.location.href = url;
    }
  });
});
