function startPayment() {
    // Prompt for email before proceeding
    const email = prompt("Please enter your email for donation:");
  
    if (!email) {
      alert("Email is required to proceed with the donation.");
      return;
    }
  
    // Show the PayPal button container when payment starts
    const paypalButtonContainer = document.getElementById("paypal-button-container");
    paypalButtonContainer.style.display = "block";
  
    // Set up PayPal donation button using the SDK
    paypal.DonationButton({
      env: 'production', // or 'sandbox' for testing
      commit: true,
      hosted_button_id: '63FG57K3EL8NJ', // Replace with your hosted button ID
      style: {
        layout: 'vertical',
        size: 'small',
        color: 'gold',
      },
      onApprove: function (data, actions) {
        alert('Donation completed by ' + email);
  
        // Optionally, hide the button container after successful donation
        paypalButtonContainer.style.display = "none";
      },
      onError: function (err) {
        console.error("PayPal error:", err);
        alert("Donation failed. Please try again.");
  
        // Hide the PayPal button container if there was an error
        paypalButtonContainer.style.display = "none";
      }
    }).render('#paypal-button-container');
  }
  