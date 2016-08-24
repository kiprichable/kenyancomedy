/**
 * Created by danielcheruiyot on 8/5/16.
 */
var video = videojs('my-video');

console.log(video);

video.ready(function () {

    video.on('play', function(){

        var fullscreenOrNot = video.isFullscreen();
        // set
        video.isFullscreen(true); // tell the player it's in fullscreen
        alert('Video is playing');
    });




});





