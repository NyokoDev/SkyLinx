<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SkyLinx - Cities Skylines Mods</title>
    <meta property="og:title" content="SkyLinx - The Mod Resource">
    <meta property="og:description" content="Mods and Assets for Cities: Skylines.">
    <meta property="og:image" content="https://i.imgur.com/J4WudTa.png">
    <meta property="og:url" content="https://skylinx.onrender.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="icon" href="https://i.imgur.com/J4WudTa.png" type="image/png">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/CS2Render.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    <nav class="navbar navbar-expand-sm bg-db">
        <div class="container-fluid">
            <div class="d-flex">
                <a class="nav-item" href="index.html">Mods</a>
                <a class="nav-item" href="support.html">Support</a>
            
            </div>
            <div id="skylinx-nav-logo" class="mx-auto text-center">
                <div class="navbar-brand position-absolute top-50 start-50 translate-middle">
                    <img src="UI/Skylinxlogowhite.svg"
                         alt="SkyLinx"
                         height="50"
                         width="100"
                         class="d-inline-block align-top" />
                </div>
                <div class="search-bar">
                    <input type="text" id="modSearch" placeholder="Search for mods...">
                </div>
            </div>
        </div>
    </nav>








    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7488957148914773"
            crossorigin="anonymous"></script>
    <script async src="https://fundingchoicesmessages.google.com/i/pub-7488957148914773?ers=1" nonce="osr_F8wNzA06drl2ClVt6Q"></script>
    <script nonce="osr_F8wNzA06drl2ClVt6Q">(function () { function signalGooglefcPresent() { if (!window.frames['googlefcPresent']) { if (document.body) { const iframe = document.createElement('iframe'); iframe.style = 'width: 0; height: 0; border: none; z-index: -1000; left: -1000px; top: -1000px;'; iframe.style.display = 'none'; iframe.name = 'googlefcPresent'; document.body.appendChild(iframe); } else { setTimeout(signalGooglefcPresent, 0); } } } signalGooglefcPresent(); })();</script>

    <div class="warning">

        <img class="warningimage"  src="UI/attention.png" alt="">
        <h1>
            These mods aren't official—they're not developed or supported by the game creators. </h1>
            <h2>To use them, you'll need an external loader called <a href="https://thunderstore.io/c/cities-skylines-ii/p/BepInEx/BepInExPack/">BepInEx</a> for them to work properly in the game.</h2>

        
     
        </div>
     

   <?php include 'CS2/CS2Render.php'; ?>

   
                


           


   <div class="info"> 
    <a id="noResultsLabel" href="https://forms.gle/UP6zPhTdwPiNbBhk6" style="display: none; color: red; text-decoration: none; cursor: pointer;">No results found. Request this mod?</a>
    <p>This website is owned and developed by Nyoko. For contact and support see the discord link below.</p>
    <a href="https://discord.gg/GqGbeUD8Dg" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Support</a>
    <a href="privacypolicy.html" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Privacy Policy</a>

</div>
<div class="donatebutton">
    <h4 style="font-family: 'Gilgan', monospace; color: rgb(249, 124, 124)">Help this website keep running! Only $1!</h4>

    <div id="donate-button-container">
        <div id="donate-button"></div>
        <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
        <script>
            PayPal.Donation.Button({
                env: 'production',
                hosted_button_id: '63FG57K3EL8NJ',
                image: {
                    src: 'https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif',
                    alt: 'Donate with PayPal button',
                    title: 'PayPal - The safer, easier way to pay online!',
                }
            }).render('#donate-button');
        </script>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modSearchInput = document.getElementById("modSearch");
        const modNames = Array.from(document.querySelectorAll(".image-item h3")); // Targeting mod names within h3 tags
        const noResultsLabel = document.getElementById("noResultsLabel");

        modSearchInput.addEventListener("input", function () {
            const searchTerm = modSearchInput.value.toLowerCase();
            let anyMatch = false;

            modNames.forEach(function (modNameElement) {
                const modNameText = modNameElement.textContent.toLowerCase();
                const imageItem = modNameElement.parentElement;
                if (modNameText.includes(searchTerm)) {
                    imageItem.style.display = "block";
                    anyMatch = true;
                } else {
                    imageItem.style.display = "none";
                }
            });

            if (!anyMatch) {
                noResultsLabel.style.display = "block";
            } else {
                noResultsLabel.style.display = "none";
            }
        });
    });
</script>

</body>
</html>
