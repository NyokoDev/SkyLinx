let currentIndex = 0;
const images = document.querySelectorAll('.carousel-slide img'); // Select all images
const totalImages = images.length;

// Function to move to the next image
function moveToNextImage() {
  currentIndex++;
  
  // If we've reached the last image, reset back to the first image
  if (currentIndex >= totalImages) {
    currentIndex = 0;
  }

  // Move the carousel to the next image by adjusting the transform property
  document.querySelector('.carousel-slide').style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Automatically move to the next image every 3 seconds
setInterval(moveToNextImage, 3000); // Change image every 3 seconds
