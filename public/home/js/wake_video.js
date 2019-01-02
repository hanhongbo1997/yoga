function wakeVideo() {
	var player;
	this.init = function () {
	    player = videojs('player1');
	    console.log(player);
	},
	
	this.addEvent = function (event, func) {
		player.on(event, func);
	},

	this.reloadSrc = function (url) {
		player.src({src: url, type: "application/x-mpegURL"});
	},
	
	this.reloadSrc_mp4 = function (url) {
		player.src(url);
	},
	
	this.reloadSrc_mp3 = function (url) {
		player.src({src: url, type: "video/mp4"});
	},
	
	this.play = function () {
		player.play();
	}
	
	this.pause = function () {
		player.pause();
	}
};






