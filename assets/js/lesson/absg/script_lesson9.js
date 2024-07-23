<!-- LESSON 1 SCRIPT -->

    $(document).ready(function() {

        //LESSON 1=====================================================================================
        // Full screen functionality
        $('#fullscreenIcon').on('click', function(e) {
            e.preventDefault();
            var url = 'https://sabbath-school.adventech.io/in/2024-03/01/01'; // Ganti dengan URL yang benar
            window.open(url, '_blank');
        });

        // Load lesson content as before
        $('#modalLesson1').on('click', function(e) {
            e.preventDefault();
            $('#lesson1Content').html('<p>Loading...</p>'); // Loading message
            $.ajax({
                url: 'https://sabbath-school.adventech.io/in/2024-03/01/01',
                type: 'GET',
                success: function(data) {
                    $('#lesson1Content').html(data);
                },
                error: function() {
                    $('#lesson1Content').html('<p>Failed to load content. Please try again later.</p>');
                }
            });
        });



        // $('#penuntunGuru1').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson1Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_PENUNTUN_GURU', function(data) {
        //         $('#lesson1Content').html(data);
        //     }).fail(function() {
        //         $('#lesson1Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });

        // $('#egwNotes1').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson1Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_EGW_NOTES', function(data) {
        //         $('#lesson1Content').html(data);
        //     }).fail(function() {
        //         $('#lesson1Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });

        // $('#edisiMudah1').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson1Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_EDISI_MUDAH', function(data) {
        //         $('#lesson1Content').html(data);
        //     }).fail(function() {
        //         $('#lesson1Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });
    });