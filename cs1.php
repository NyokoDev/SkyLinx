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
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    <nav class="navbar navbar-expand-sm bg-db">
        <div class="container-fluid">
            <div class="d-flex">
                <a class="nav-item" href="index.html">Mods</a>
                <a class="nav-item" href="support.html">Support</a>
                <a class="nav-item" href="modpreview.php">Updated Design</a>
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

   <?php include 'render_mods.php'; ?>
           


    <a id="noResultsLabel" href="https://forms.gle/UP6zPhTdwPiNbBhk6" style="display: none; color: red; text-decoration: none; cursor: pointer;">No results found. Request this mod?</a>
    <p>This website is hosted by Nyoko with the assistance of Chamëleon TBN.</p>
    <a href="https://discord.gg/GqGbeUD8Dg" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Support</a>
    <a href="privacypolicy.html" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Privacy Policy</a>

    <p><h2>Normal procedure:</h2> To obtain the Mods, utilize SkyLinx's 'Direct Download' feature. After downloading, you'll need to manually move these files to the %LocalAppData%\Colossal Order\Cities_Skylines\Addons\Mods directory within the Cities Skylines' AppData folder. Direct Download automatically retrieves the mods from their corresponding GitHub releases.</p>
    <h2>Problems?</h2>

    <p>If you're experiencing difficulties getting the above to work, head to my discord server for support: <a href="https://discord.gg/GqGbeUD8Dg">https://discord.gg/GqGbeUD8Dg</a></p>
    <p>This website is hosted by Nyoko with the assistance of Chamëleon TBN.</p>
    <p>SkyLinx might not contain all mods, if you're looking for a particular mod make sure to join the discord server below for requests and more.</p>
    <a href="https://forms.gle/UP6zPhTdwPiNbBhk6">Request a mod</a>
    <p>Having trouble installing mods from this website? CSLModsWiki provides a helpful guide for Epic Games users. <a href="https://cslmods.wikitide.org/wiki/Installing_Mods_on_Epic_Games">Check it out here</a>.</p>


    <h2>Algernon Mods</h2>
    <p>For anything algernon (Loading Screen Mod Revisited and more), you must obtain the 'Epic' role there. You can get the releases from the algernon's mods discord: <a href="https://discord.gg/WEyYtxb88K">https://discord.gg/WEyYtxb88K</a></p>
    <p>Skylinx offers direct downloads from the discord server in this website. However, if for any reason the buttons don't work for you then join the server mentioned.</p>
    <p>What does 'Recompiled' mean? The mod was recompiled because the author was unreachable. All recompiled versions were tested.</p>

    <h4 style="font-family: 'Courier New', monospace; color: green;">Help this website keep running! Only $1!</h4>
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


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modSearchInput = document.getElementById("modSearch");
            const modNames = Array.from(document.querySelectorAll("table tr td:nth-child(2)")); // Adjust the index to target the "Mod Name" column
            const noResultsLabel = document.getElementById("noResultsLabel");

            modSearchInput.addEventListener("input", function () {
                const searchTerm = modSearchInput.value.toLowerCase();
                let anyMatch = false;

                modNames.forEach(function (modName) {
                    const modNameText = modName.textContent.toLowerCase();
                    const row = modName.parentElement;
                    if (modNameText.includes(searchTerm)) {
                        row.style.display = "table-row";
                        anyMatch = true;
                    } else {
                        row.style.display = "none";
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
