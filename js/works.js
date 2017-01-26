    $(function(){
        $('.stop').click(function(event) {
            /* Act on the event */

            //  callPlayer("hi", function() {
            //     // This function runs once the player is ready ("onYouTubePlayerReady")
            //     callPlayer("hi", "stopVideo");
            // });
            // // When the player is not ready yet, the function will be queued.
            // // When the iframe cannot be found, a message is logged in the console.
        callPlayer("work11", "stopVideo");
        });

        $('#play').click(function(event) {
            callPlayer("work11", "playVideo");
        });

        $('#pause').click(function(event) {
            callPlayer("work11", "pauseVideo");
        });
    });