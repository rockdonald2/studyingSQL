$(document).ready(function () {
    $('#go').click(function () {

        function checkIfComplete() {
            if (isComplete == false) {
                isComplete = true;
            } else {
                place = 'second'
            }
        }

        let carWidth = $('.car').width();

        let raceTrackWidth = $(window).width() - carWidth;

        let raceTime1 = Math.floor((Math.random() * 5000) + 1);
        let raceTime2 = Math.floor((Math.random() * 5000) + 1);

        let isComplete = false;
        let place = 'first';

        $('#car1').animate({
            left: raceTrackWidth
        }, raceTime1, function () {
            // animation is complete

            checkIfComplete();

            $('#raceInfo1 span').text('Finished in ' + place + ' place and clocked in at ' + raceTime1 + ' milliseconds');
        });

        $('#car2').animate({
            left: raceTrackWidth
        }, raceTime2, function () {
            // animation is complete

            checkIfComplete();

            $('#raceInfo2 span').text('Finished in ' + place + ' place and clocked in at ' + raceTime2 + ' milliseconds');
        });
    })

    $('#reset').click(function() {
        $('#car1').css('left', '0');
        $('#car2').css('left', '0');

        $('#raceInfo1 span').text("");
        $('#raceInfo2 span').text("");
    })
})