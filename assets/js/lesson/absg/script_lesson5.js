<!-- LESSON 5 SCRIPT -->

    $(document).ready(function() {

        //LESSON 5=====================================================================================
        // Full screen functionality
        $('#fullscreenIcon5').on('click', function(e) {
            e.preventDefault();
            var url = 'https://sabbath-school.adventech.io/in/2024-03/05/01'; // Ganti dengan URL yang benar
            window.open(url, '_blank');
        });

        // Load lesson content as before
        $('#modalLesson5').on('click', function(e) {
            e.preventDefault();
            $('#lesson5Content').html('<p>Loading...</p>'); // Loading message
            $.ajax({
                url: 'https://sabbath-school.adventech.io/in/2024-03/05/01',
                type: 'GET',
                success: function(data) {
                    $('#lesson5Content').html(data);
                },
                error: function() {
                    $('#lesson5Content').html('<p>Failed to load content. Please try again later.</p>');
                }
            });
        });



        // $('#penuntunGuru5').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson5Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_PENUNTUN_GURU', function(data) {
        //         $('#lesson5Content').html(data);
        //     }).fail(function() {
        //         $('#lesson5Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });

        // $('#egwNotes5').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson5Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_EGW_NOTES', function(data) {
        //         $('#lesson5Content').html(data);
        //     }).fail(function() {
        //         $('#lesson5Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });

        // $('#edisiMudah5').on('click', function(e) {
        //     e.preventDefault();
        //     $('#lesson5Content').html('<p>Loading...</p>'); // Loading message
        //     $.get('URL_EDISI_MUDAH', function(data) {
        //         $('#lesson5Content').html(data);
        //     }).fail(function() {
        //         $('#lesson5Content').html('<p>Failed to load content. Please try again later.</p>');
        //     });
        // });
    });