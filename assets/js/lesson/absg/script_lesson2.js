<!-- LESSON 2 SCRIPT -->

    $(document).ready(function() {

        //LESSON 2=====================================================================================
        // Full screen functionality
        $('#fullscreenIcon2').on('click', function(e) {
            e.preventDefault();
            var url = 'https://sabbath-school.adventech.io/in/2024-03/02/01'; // Ganti dengan URL yang benar
            window.open(url, '_blank');
        });

        // Load lesson content as before
        $('#modalLesson2').on('click', function(e) {
            e.preventDefault();
            $('#lesson2Content').html('<p>Loading...</p>'); // Loading message
            $.ajax({
                url: 'https://sabbath-school.adventech.io/in/2024-03/02/01',
                type: 'GET',
                success: function(data) {
                    $('#lesson2Content').html(data);
                },
                error: function() {
                    $('#lesson2Content').html('<p>Failed to load content. Please try again later.</p>');
                }
            });
        });


    });