<footer class="footer" role="contentinfo">
    <div class="footer__inner cf bg--medium-brown white can-be--dark-dark">
        <div class="layout-container">
            <div class="footer__unify-nav-desc spacing--until-large">
                <nav class="footer__nav">
                    <ul class="inline-list">
                        <li class="footer__nav-item inline-list__item">
                            <a href="https://wa.me/6282238165964" target="_blank"
                                class="footer__nav-link font--secondary link--white">Hubungi Kami</a>
                        </li>
                        <li class="footer__nav-item inline-list__item">
                            <a href="https://chat.whatsapp.com/IfxymVMpCEFKCkgxELBG4c" target="_blank"
                                class="footer__nav-link font--secondary link--white">Join WA Group</a>
                        </li>
                    </ul>
                </nav>

                <div class="footer__desc">
                    <span class="icon footer__logo">
                        <img src="<?= base_url('assets') ?>/image/logo_square.webp" loading="lazy">
                    </span>
                    <p class="footer__desc-text brown--light font--secondary">Sekolah Sabat ID merupakan situs
                        Pembelajaran Sekolah Sabat digital dalam Bahasa Indonesia &bull;
                        <a href="<?= base_url('') ?>pages/resource-links" class="link--white">Resource Links</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__legal bg--brown can-be--dark-light">
        <div class="footer__legal__inner layout-container spacing--quarter--until-large">
            <div class="footer__unify-copyright-address spacing--quarter--until-large">
                <p class="footer__copyright font--secondary--xs brown--light no-space--btm">Copyright &copy; 2024 -
                    SEKOLAH SABAT ID</p>
                <!-- <address class="footer__address font--secondary--xs brown--light">12501 Old Columbia Pike, Silver Spring, MD 20904, USA 301-680-6000</address> -->
            </div>

            <div class="footer__legal-links font--secondary--xs">
                <p class="footer__copyright font--secondary--xs brown--light no-space--btm">Presented With 💗 By<a
                        class="hover link--brown-light" href="https://linktr.ee/aiwerekministry" target="_blank">
                        AiWerek Ministry</a></p>

                <!--  <a class="hover link--brown-light space-half--right" href="https://www.adventist.org/en/copyright/trademark-and-logo-usage/">Trademark and Logo Usage</a>
                    <a class="hover link--brown-light" href="https://www.adventist.org/en/copyright/legal-notice/">Legal Notice</a> -->
                <!--  <button id="ot-sdk-btn" class="ot-sdk-show-settings" style="font-family: montserrat,helvetica,arial,sans-serif; font-size: .6875rem; line-height: 1rem; color: #ebe8df; text-decoration: underline; padding: 0; border: none; background:none; text-transform: none; margin-left: .625rem">Cookies Settings</button>
                </div> -->
            </div>
        </div>
</footer>
</div>


<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e1a22eb7ec749b0"
    async="async"></script>
<script>
    var refTagger = {
        settings: {
            bibleVersion: "NLT",
            customStyle: {
                heading: {
                    color: "#969797",
                    fontFamily: "Palatino, 'Palatino Linotype', 'Palatino LT STD', 'Book Antiqua', Georgia, serif"
                },
                body: {
                    color: "#686969"
                }
            }
        }
    };
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = "//api.reftagger.com/v2/RefTagger.js";
        s.parentNode.insertBefore(g, s);
    }(document, "script"));
</script>

<!-- CDN scripts -->
<script type="text/javascript" src="<?= base_url('assets') ?>/js/jquery/jquery-3.5.1.min.js" defer></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdn.adventist.org/alps/2/latest/js/script.min.js" type="text/javascript"></script>

<!-- Local scripts -->
<script type="text/javascript" src="<?= base_url('assets') ?>/js/slick/slick.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets') ?>/js/local.js"></script>

<script src="<?= base_url('assets/js/lesson/absg/script_lesson1.js') ?>" defer></script>
<script src="<?= base_url('assets/js/lesson/absg/script_lesson2.js') ?>" defer></script>



<script>
    function showFileNotAvailableToast() {
        $('#fileNotAvailableToast').toast('show');
    }

    function downloadFile(fileName) {
        var fileUrl = 'assets/documents/absg/' + fileName;

        $.ajax({
            url: fileUrl,
            type: 'HEAD',
            success: function () {
                var link = document.createElement('a');
                link.href = fileUrl;
                link.target = '_blank';
                link.download = fileName;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            },
            error: function () {
                showFileNotAvailableToast(); // Tampilkan Toast jika file tidak tersedia
            }
        });
    }
</script>

<!-- SCRIPT UNTUK MODAL notification -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the modal
        var modal = document.getElementById("notification-modal");

        // Get the buttons and badges
        var desktopNotificationBtn = document.getElementById("notification-icon");
        var desktopNotificationBadge = document.getElementById("notification-badge");
        var mobileNotificationBtn = document.getElementById("notification-icon-mobile");
        var mobileNotificationBadge = document.getElementById("notification-badge-mobile");

        // Get the <span> element that closes the modal
        var closeBtn = document.getElementsByClassName("close-notifmodal")[0];

        // Check if elements exist before adding event listeners
        if (modal && desktopNotificationBtn && closeBtn) {
            // When the user clicks the desktop notification button or badge, open the modal
            desktopNotificationBtn.addEventListener("click", function () {
                modal.style.display = "flex";
            });

            desktopNotificationBadge.addEventListener("click", function () {
                modal.style.display = "flex";
            });

            // Optional: Add event listeners for mobile notification elements if they exist
            if (mobileNotificationBtn && mobileNotificationBadge) {
                mobileNotificationBtn.addEventListener("click", function () {
                    modal.style.display = "flex";
                });

                mobileNotificationBadge.addEventListener("click", function () {
                    modal.style.display = "flex";
                });
            }

            // When the user clicks on close button (x), close the modal
            closeBtn.addEventListener("click", function () {
                modal.style.display = "none";
            });

            // When the user clicks anywhere outside of the modal, close it
            window.addEventListener("click", function (event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        } else {
            console.error("Notification elements not found!"); // Handle missing elements (optional)
        }
    });
</script>


<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S9TDVF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe>
</noscript>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"8a385045aa594073","version":"2024.6.1","serverTiming":{},"token":"a1941dea753748d089346baca208e42b","b":1}'
    crossorigin="anonymous"></script>

</body>

</html>