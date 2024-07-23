<!-- LESSON 4 SCRIPT -->

    $(document).ready(function() {

        //LESSON 4=====================================================================================
        // Full screen functionality
        $('#fullscreenIcon4').on('click', function(e) {
            e.preventDefault();
            var url = 'https://sabbath-school.adventech.io/in/2024-03/04/01'; // Ganti dengan URL yang benar
            window.open(url, '_blank');
        });

        // Load lesson content as before
        $('#modalLesson4').on('click', function(e) {
            e.preventDefault();
            $('#lesson4Content').html('<p>Loading...</p>'); // Loading message
            $.ajax({
                url: 'https://sabbath-school.adventech.io/in/2024-03/04/01',
                type: 'GET',
                success: function(data) {
                    $('#lesson4Content').html(data);
                },
                error: function() {
                    $('#lesson4Content').html('<p>Failed to load content. Please try again later.</p>');
                }
            });
        });



        // $('#penuntunGuru4').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson4Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_PENUNTUN_GURU', function(data) {
        //         $('#lesson4Content').html(data);
        //     }).fail(function() {
        //         $('#lesson4Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });

        // $('#egwNotes4').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson4Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_EGW_NOTES', function(data) {
        //         $('#lesson4Content').html(data);
        //     }).fail(function() {
        //         $('#lesson4Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });

        // $('#edisiMudah4').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson4Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_EDISI_MUDAH', function(data) {
        //         $('#lesson4Content').html(data);
        //     }).fail(function() {
        //         $('#lesson4Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });
    });