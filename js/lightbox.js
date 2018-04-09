(function(){
 var ports = document.querySelectorAll('.imgHolder');

function callThumbnails(){
  const url = './admin/scripts/functions.php?getImages=true';

  fetch(url)
  .then((resp) => resp.json())
  .then((data) => {displayThumbnails(data); })
  .catch(function(error){
    console.log(error);
});}

function displayThumbnails(data){
  let workThumbs = document.querySelector("#myWork");
  data.forEach(thumb => {
  let showOn =
  `<div id="${thumb.images_projects}" class="imgHolder small-12 medium-6 large-4 columns"> <img src="./images/${thumb.images_link}" alt="Projects"></div>`

  workThumbs.innerHTML += showOn;
  let ports = document.querySelectorAll(".imgHolder");

  ports.forEach(function(element, index){
  element. addEventListener('click', lightboxOpen, false)
});
});
}

function lightboxOpen() {
  const url = './admin/scripts/functions.php?portContent=' + this.id;

  fetch(url)
  .then((resp) => resp.json())
  .then((data) => {contentFill(data); })
  .catch(function(error){
    console.log(error);

});}

function contentFill(data){
const {images_link, images_title, images_sub, images_desc} = data;
var lightBox = document.querySelector('.lightbox');
var title = document.querySelector('.title');
var subTitle = document.querySelector('.sub');
var lightboxImg = document.querySelector('.lightbox-img');
var lightboxDesc = document.querySelector('.lightbox-desc');
var lightboxClose = document.querySelector('.close-lightbox');

   lightBox.style.display = "block";
   lightboxClose.addEventListener('click', closelightbox ,false);


   var name = document.querySelector('.title').textContent = images_title;
   var sub = document.querySelector('.sub').textContent = images_sub;
   var image = document.querySelector('.lightbox-img').src = "images/" + images_link;
   var desc = document.querySelector('.lightbox-desc').textContent = images_desc;
 }

function closelightbox(){
  let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = "none";
		document.body.style.overflow = "visible";
    lightbox.style.display = "none";
}

callThumbnails();
})();
