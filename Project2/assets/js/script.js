// Gerrit Wissink
// ISTE 240 Individual Project
// Spring 2024
// JavaScript File

// Changes hero image every 5 seconds
setInterval(changeImage,5000);


// MAP COMPONENT FROM GOOGLE MAPS
let map;

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: { lat: 38.53303074804096, lng: -78.45365560434647 },
    zoom: 10,
  });
}

initMap();


// IMAGE CAROUSEL CODE
let images = ['hero.jpeg', 'hero2.jpeg', 'hero3.jpeg'];
let images_wide = ['hero_wide.jpeg', 'hero2_wide.jpeg', 'hero3_wide.jpeg'];
let imageIndex = 0;
let length = images.length;

function changeImage() {
  imageIndex = (imageIndex + 1) % length;
  if(window.innerWidth >= 600){
    document.getElementById('hero_wide').setAttribute('srcset', 'assets/images/' + images_wide[imageIndex]);
  }else{
    document.getElementById('hero').setAttribute('src', 'assets/images/' + images[imageIndex]);
  }
}

// JAVASCRIPT ANIMATION FOR OPENING MOBILE NAV
function animateNav(targetWidth) {
  var element = document.getElementById('hidden-nav');
  var currentWidth = element.offsetWidth; // Get current width
  var duration = 500; // Animation duration in milliseconds

  var startTime = null;

  function animate(timestamp) {
    if (!startTime) startTime = timestamp;
    var progress = timestamp - startTime;
    var easingProgress = progress / duration;
    var newWidth = currentWidth + (targetWidth - currentWidth) * easingProgress;

    element.style.width = newWidth + "px";

    if (progress < duration) {
      requestAnimationFrame(animate);
    }
  }

  requestAnimationFrame(animate);
}



//Opens the vertical nav on mobile devices and sets dimensions of all elements inside
function openNav(){
    document.getElementById('hidden-nav').style.height = '1000px';
    document.getElementById('hidden-nav').style.borderLeft = '2px solid white';
    document.getElementById('hidden-nav').style.backgroundColor = '#0f532f';
    document.getElementById('hidden-nav').style.padding = '5px';
    animateNav(250);

    // document.getElementsByClassName('here')[0].style.color = 'rgb(18, 147, 18)';
    // document.getElementsByClassName('here')[0].style.backgroundColor = 'transparent';

    Array.from(document.getElementsByClassName('hidden-link')).forEach((element) => {
        element.style.width = 'auto';
        element.style.height = 'auto';
        element.style.visibility = 'visible';
        element.style.fontSize = '30px';
      })

    Array.from(document.getElementsByClassName('hidden-rule')).forEach((element) => {
        element.style.width = 'auto';
        element.style.height = 'auto';
        element.style.visibility = 'visible';
        element.style.borderWidth = '1px';
      })
    
      document.getElementById('close-icon').style.visibility = 'visible';
      document.getElementById('close-icon').style.maxWidth = '100px';
      document.getElementById('close-icon').style.width = 'auto';
      document.getElementById('close-icon').style.padding = '0';
      document.getElementById('close-icon').style.paddingLeft = '150px';
}


//Closes the vertical nav on mobile devices and reduces dimensions of all elements inside
function closeNav(){
    document.getElementById('hidden-nav').style.height = '0vh';
    document.getElementById('hidden-nav').style.borderLeft = '0px solid white';
    document.getElementById('hidden-nav').style.backgroundColor = 'transparent';
    animateNav(0);

    document.getElementById('close-icon').style.visibility = 'hidden';
    document.getElementById('close-icon').style.maxWidth = '0px';
    document.getElementById('close-icon').style.paddingLeft = '0px';
    

    Array.from(document.getElementsByClassName('hidden-link')).forEach((element) => {
        element.style.visibility = 'hidden';
        element.style.fontSize = '0px';
        element.style.padding = '0';
      })

    Array.from(document.getElementsByClassName('hidden-rule')).forEach((element) => {
        element.style.visibility = 'hidden';
        element.style.borderWidth = '0px';
      })
}

// JAVASCRIPT VALIDATION FOR FORM
function validateInfo(){
  let name = document.getElementById('name').value;

  let lettersOnly = /^[A-Za-z]+$/;

  if(!(lettersOnly.test(name))){
    document.getElementById('name').style.backgroundColor = '#f3a2c1';
    return false;
  }
  return true;
}
