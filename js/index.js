var BV;
$(function() {
    
    // initialize BigVideo
    BV = new $.BigVideo();
	BV.init();
	BV.show('http://localhost/leo/wwz-clip.ogg', {ambient:true});

});
