let block = document.querySelector('.block_slider');
let count = 0;
let left = 0;
block.onclick = function () {
  if (count !== 2) {
    left -= 825;
    count += 1;
  } else {
    count = 0;
    left = 0;
  }
  block.style = "left:" + left + "px;";
};


// Галерея
require(['./lightgallery/lightgallery.min'], function() {
  require(["./lightgallery/lg-zoom.js", "./lightgallery/lg-thumbnail.min"], function(){
      lightGallery(document.querySelector('.gallery')); 
  });
});



