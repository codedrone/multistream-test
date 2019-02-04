var live = new Vue({
    el: '#live-cam',
    data: {
        title: 'Live Cam',
        url: "http://testing.grappler.tk/files/2013/01/trailer_1080p.mp4"
    },
});

var stream = new Vue({
    el: '#input-streams',
});

jwplayer('player_1').setup({
    file: live.url,
    width: "100%",
    height: "auto",
    stretching: "uniform",
    primary: "flash",
    flashplayer:"//cdn.jsdelivr.net/jwplayer/7.1.4/jwplayer.flash.swf"
});