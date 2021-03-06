var originalUrl = document.location.href;
var getPos = originalUrl.lastIndexOf("=") + 1;

function loadVideo(movie)
{
  video = $(".video");
  $("#vimeo").attr('src','//player.vimeo.com/video/'+videos[movie].vimeocode);
  $(video).css("display","inline-block");
  
  legend = $(".legend");
  legendCustomer = $(".legend .customer");
  legendDesc = $(".legend .desc");
  $(legendCustomer).html(videos[movie].head);
  $(legendDesc).html(videos[movie].desc);
  $(legend).css("display","inline-block");
  
  window.history.pushState('page2', 'Title', '?video=' + movie);
  for (i = 0; i < 20; i++) {
    $("#movie"+i).show();
  }
  $("#"+movie).hide();
}


$(function() {

$('.mov').hammer().on("tap", function(event) {
		  loadVideo($( this ).attr('id'));
});

if(getPos != 0)
{
	movieToLoad = originalUrl.substring(getPos);
	loadVideo(movieToLoad);
}
});