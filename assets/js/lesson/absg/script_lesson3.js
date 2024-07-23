<!-- LESSON 3 SCRIPT -->

    $(document).ready(function() {

        //LESSON 3=====================================================================================
        // Full screen functionality
        $('#fullscreenIcon3').on('click', function(e) {
            e.preventDefault();
            var url = 'https://sabbath-school.adventech.io/in/2024-03/03/01'; // Ganti dengan URL yang benar
            window.open(url, '_blank');
        });

        // Load lesson content as before
        $('#modalLesson3').on('click', function(e) {
            e.preventDefault();
            $('#lesson3Content').html('<p>Loading...</p>'); // Loading message
            $.ajax({
                url: 'https://sabbath-school.adventech.io/in/2024-03/03/01',
                type: 'GET',
                success: function(data) {
                    $('#lesson3Content').html(data);
                },
                error: function() {
                    $('#lesson3Content').html('<p>Failed to load content. Please try again later.</p>');
                }
            });
        });
    });