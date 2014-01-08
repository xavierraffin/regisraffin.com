var originalUrl = document.location.href;

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
  
  document.location.href = originalUrl+"?movie=1";
}