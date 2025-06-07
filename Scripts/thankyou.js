document.getElementById('downloadLink').addEventListener('click', function(e) {
    e.preventDefault(); // prevent default link behavior
    
    const url = this.href;
    
    // Open the download link in a new tab/window
    const newWindow = window.open(url, '_blank');
    
    if (newWindow) {
      // If popup was allowed, redirect current page after slight delay
      setTimeout(() => {
        window.location.href = "thank-you.html";
      }, 200);
    } else {
      // Popup blocked, fallback: just redirect current page to download
      window.location.href = url;
    }
  });