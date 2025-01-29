        </main>
        <!--end::App Main-->
        
        <!--begin::Footer-->
        <footer class="app-footer"> <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline"> <a href="https://aiwerek.tech" class="text-decoration-none"><strong>AiWerek Tech</strong></a></div> <!--end::To the end-->
            &copy; 2024&nbsp; Sekolah Sabat ID | All rights reserved.
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper-->
    
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9DVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"></script>

    <!-- jQuery dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <!-- Bootstrap 5 JS and Popper.js KLW DIAKTIFKAN, ICON DI NAVBAR TIDAK BERFUNGSI--> 
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->

    <script src="<?= base_url('assets') ?>/adminlte4/dist/js/adminlte.js"></script>
    <!-- Loading Indikator Pace.JS -->
    <script src="<?= base_url('assets') ?>/plugins/pace-progress/pace.min.js"></script>
    
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/tables/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js" integrity="sha256-5SPy1/00NR75iVOk7p0Ci0nwAAM8Ab7j31wyie+DKYw=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-cno/x2geGU6Q9+c+49QQLpX/rW10sXt-rJ+IVD/ANDQ=" crossorigin="anonymous"></script> -->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script>
        const connectedSortables =
            document.querySelectorAll(".connectedSortable");
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: "shared",
                handle: ".card-header",
            });
        });

        const cardHeaders = document.querySelectorAll(
            ".connectedSortable .card-header",
        );
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = "move";
        });
    </script>
    
    <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
    <script>
        const sales_chart_options = {
            series: [{
                    name: "SS Anak-anak",
                    data: [50, 95, 80, 5],
                },
                {
                    name: "SS Remaja",
                    data: [60, 99, 80, 1],
                },
            ],
            chart: {
                height: 300,
                type: "area",
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ["#0d6efd", "#20c997"],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
            },
            xaxis: {
                type: "text",
                categories: [
                    "Triwulan 1",
                    "Triwulan 2",
                    "Triwulan 3",
                    "Triwulan 4",
                ],
            },
            tooltip: {
                x: {
                    format: "MMMM yyyy",
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector("#revenue-chart"),
            sales_chart_options,
        );
        sales_chart.render();
    </script> 

    <!-- DARK MODE -->
    <script>
        // Color Mode Toggler
        (() => {
        "use strict";

        const storedTheme = localStorage.getItem("theme");

        const getPreferredTheme = () => {
            if (storedTheme) {
            return storedTheme;
            }

            return window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        };

        const setTheme = function (theme) {
            if (
            theme === "auto" &&
            window.matchMedia("(prefers-color-scheme: dark)").matches
            ) {
            document.documentElement.setAttribute("data-bs-theme", "dark");
            } else {
            document.documentElement.setAttribute("data-bs-theme", theme);
            }
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme, focus = false) => {
            const themeSwitcher = document.querySelector("#bd-theme");

            if (!themeSwitcher) {
            return;
            }

            const themeSwitcherText = document.querySelector("#bd-theme-text");
            const activeThemeIcon = document.querySelector(".theme-icon-active i");
            const btnToActive = document.querySelector(
            `[data-bs-theme-value="${theme}"]`
            );
            const svgOfActiveBtn = btnToActive.querySelector("i").getAttribute("class");

            for (const element of document.querySelectorAll("[data-bs-theme-value]")) {
            element.classList.remove("active");
            element.setAttribute("aria-pressed", "false");
            }

            btnToActive.classList.add("active");
            btnToActive.setAttribute("aria-pressed", "true");
            activeThemeIcon.setAttribute("class", svgOfActiveBtn);
            const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
            themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

            if (focus) {
            themeSwitcher.focus();
            }
        };

        window
            .matchMedia("(prefers-color-scheme: dark)")
            .addEventListener("change", () => {
            if (storedTheme !== "light" || storedTheme !== "dark") {
                setTheme(getPreferredTheme());
            }
            });

        window.addEventListener("DOMContentLoaded", () => {
            showActiveTheme(getPreferredTheme());

            for (const toggle of document.querySelectorAll("[data-bs-theme-value]")) {
            toggle.addEventListener("click", () => {
                const theme = toggle.getAttribute("data-bs-theme-value");
                localStorage.setItem("theme", theme);
                setTheme(theme);
                showActiveTheme(theme, true);
            });
            }
        });
        })();
    </script>
    <script>
        function reload_ajax() {
        table.ajax.reload();
        }

        var initDestroyTimeOutPace = function () {
            var counter = 0;

            var refreshIntervalId = setInterval(function () {
                var progress;

                if (typeof $('.pace-progress').attr('data-progress-text') !== 'undefined') {
                    progress = Number($('.pace-progress').attr('data-progress-text').replace("%", ''));
                }

                if (progress === 99) {
                    counter++;
                }

                if (counter > 50) {
                    clearInterval(refreshIntervalId);
                    Pace.stop();
                }
            }, 100);
        };
        initDestroyTimeOutPace();
    </script>
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        // "dom": 'Bfrtip',
        });
    });
    </script>

    <script>
        $(document).ready(function() {
            $('#editPermissionModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Tombol yang memicu modal
                var id = button.data('id'); // Ambil data-id
                var name = button.data('name'); // Ambil data-name
                var description = button.data('description'); // Ambil data-description

                // Update isi modal dengan data
                var modal = $(this);
                modal.find('#edit_permission_id').val(id);
                modal.find('#edit_permission_name').val(name);
                modal.find('#edit_description').val(description);
            });
        });
    </script>

    <!-- JS Summernote dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi Summernote
            // Inisialisasi Summernote dengan tinggi yang berbeda berdasarkan kelas tambahan
            $('.summernote-short').summernote({
                height: 100, // Tinggi untuk elemen dengan kelas .summernote-short
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    // ['font', ['strikethrough', 'superscript', 'subscript']],
                    // ['fontsize', ['fontsize']],
                    // ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['height', ['height']]
                ]
            });

            $('.summernote-tall').summernote({
                height: 300, // Tinggi untuk elemen dengan kelas .summernote-tall
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });

            // Default tinggi jika hanya menggunakan .summernote
            $('.summernote').summernote({
                height: 300, // Tinggi default
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });


            // Format huruf pertama sebelum pengiriman
            $('form').on('submit', function() {
                let content = $('#teks_cerita').summernote('code');
                let formattedContent = formatFirstLetter(content);
                $('#teks_cerita').val(formattedContent); // Set value ke textarea sebelum submit
            });

            // Fungsi untuk memformat huruf pertama
            function formatFirstLetter(text) {
                // Cari tag paragraf pertama dan format hanya huruf pertama
                let firstParagraphMatch = text.match(/<p>(.*?)<\/p>/); // Cari paragraf pertama

                if (firstParagraphMatch) {
                    let firstParagraph = firstParagraphMatch[0]; // Paragraf pertama lengkap
                    let formattedParagraph = firstParagraph.replace(/<p>(\s*)(\w)/, (match, p1, p2) => {
                        return '<p>' + p1 + '<span class="cap">' + p2.toUpperCase() + '</span>';
                    });
                    // Ganti paragraf pertama di teks keseluruhan dengan yang diformat
                    return text.replace(firstParagraph, formattedParagraph);
                }
                return text; // Kembalikan teks asli jika tidak ada perubahan
            }

        });
    </script>



    <!--end::Script-->
</body>
</html>