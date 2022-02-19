/*==================== MENU SHOW Y HIDDEN ====================*/
/*const navMenu = document.getElementById('nav-menu'),
navToggle = document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
/*if(navToggle){
    navToggle.addEventListener('click',() => {
        navMenu.classList.toggle('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
/*if(navClose){
    navClose.addEventListener('click',() => {
        navMenu.classList.remove('show-menu')
    })
}
*/
/*==================== REMOVE MENU MOBILE ====================*/
/*const navLink = document.querySelectorAll('.nav_link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))*/
const hamburger = document.querySelector(".toggle");
const navMenu = document.querySelector(".nav-menu");
const navLink = document.querySelectorAll(".nav-link");

hamburger.addEventListener("click", mobileMenu);
navLink.forEach(n => n.addEventListener("click", closeMenu));

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("nav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky-nav")
  } else {
    navbar.classList.remove("sticky-nav");
  }
}

/*==================== Tabs ====================*/
const tabLinks = document.querySelectorAll(".tabs a");
const tabPanels = document.querySelectorAll(".tabs-panel");

for (let eli of tabLinks) {
  eli.addEventListener("click", e => {
    e.preventDefault();

    document.querySelector(".tabs li.active").classList.remove("active");
    document.querySelector(".tabs-panel.active").classList.remove("active");

    const parentListItem = eli.parentElement;
    parentListItem.classList.add("active");
    const indexs = [...parentListItem.parentElement.children].indexOf(parentListItem);

    const panel = [...tabPanels].filter(eli => eli.getAttribute("data-index") == indexs);
    panel[0].classList.add("active");
    });
  }

/*==================== PROFILE PICTURE ====================*/


/*==================== SERVICES MODAL ====================*/
// var html = ''
var x = 1;
        var field = ' <div class="row"  id="row"><div class="col-12"><input type="text" name="institution" class="wrapper" required><label>Institution</label></div></div> <div class="row"> <div class="col-12"><input type="text" name="degree" id="degree" required><label>Degree</label></div></div><div class="row"><div class="col-md-6"><!-- <input type="date" name="start" id="startdate" name="startdate"> --><label >Start:</label><select class="form-select" name="startyear" id="year"><option value="">Select Year</option></select></div><div class="col-md-6"><!-- <input type="date" class="date" name="end" id="graddate" name="graddate"> <input type="text" class="date-picker form-control" name="datepicker"  id="datepicker" /> --><label >End:</label><select class="form-select" name="endyear" id="endyear"><option value="">Select Year</option></select></div></div></div>'
        var add_more_fields = document.getElementById('add_more_fields');
        var remove_fields = document.getElementById('remove_fields');
        var educationInput = document.getElementById('education-input');
        //   $('#add_more_fields').click(function() {
//     var html = $('.row:first').parent().html();
//     $(html).insertBefore(this);
// });

// $(document).on("click", ".deleteButton", function() {
//     $(this).closest('.row').remove();
// });
add_more_fields.onclick = function(){
  if(x < 10){
        educationInput.append(field);
        x++;
    }else{
        alert("max ten field allowed");
    }
};
educationInput.on("click" ,".remove_button" , function(){
    $(this).parent("div").remove();
        x--;
});
// var educationInput = document.getElementById('form');

// var x=1
// add_more_fields.onclick = function(){

//   //var html = $('.row:first').parent().html();
// 	// var newField = document.createElement('input');
//   // var endDate = document.createElement('input');
// 	// /*newField.setAttribute('type','date');
// 	// newField.setAttribute('id','startdate');*/
// 	// newField.setAttribute('class','row');
// 	// newField.setAttribute('siz',50);
// 	// newField.setAttribute('placeholder','Another Field');

//   // /*endDate.setAttribute('type','date');
// 	// endDate.setAttribute('id','enddate');
// 	// endDate.setAttribute('class','col-md-6');
// 	// endDate.setAttribute('siz',50);
// 	// endDate.setAttribute('placeholder','Another Field');*/
// 	// educationInput.appendChild(newField);
//   //educationInput.appendChild(endDate);
// }

// remove_fields.onclick = function(){
// 	var input_tags = educationInput.getElementsByTagName('input');
// 	if(input_tags.length > 2) {
// 		educationInput.removeChild(input_tags[(input_tags.length) - 1]);
// 	}
// }
// /*==================== PORTFOLIO SWIPER  ====================*/
function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}

/*==================== TESTIMONIAL ====================*/
$('#datepicker').datetimepicker({
  format      :   "YYYY",
  viewMode    :   "years", 
});
//changeYear event trigger's
// dp.on('changeYear', function (e) {    
// //do something here
// alert("Year changed ");
// });


/*==================== ADMIN ====================*/
var slider = document.getElementById('slider'),
    sliderItems = document.getElementById('items'),
    prev = document.getElementById('prev'),
    next = document.getElementById('next');
slide(slider, sliderItems, prev, next);
function slide(wrapper, items, prev, next) {
  var posX1 = 0,
      posX2 = 0,
      posInitial,
      posFinal,
      threshold = 100,
      slides = items.getElementsByClassName('slide'),
      slidesLength = slides.length,
      slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
      firstSlide = slides[0],
      lastSlide = slides[slidesLength - 1],
      cloneFirst = firstSlide.cloneNode(true),
      cloneLast = lastSlide.cloneNode(true),
      index = 0,
      allowShift = true;
  
  // Clone first and last slide
  items.appendChild(cloneFirst);
  items.insertBefore(cloneLast, firstSlide);
  wrapper.classList.add('loaded');
  
  // Mouse and Touch events
  items.onmousedown = dragStart;
  
  // Touch events
  items.addEventListener('touchstart', dragStart);
  items.addEventListener('touchend', dragEnd);
  items.addEventListener('touchmove', dragAction);
  
  // Click events
  prev.addEventListener('click', function () { shiftSlide(-1) });
  next.addEventListener('click', function () { shiftSlide(1) });
  
  // Transition events
  items.addEventListener('transitionend', checkIndex);
  
  function dragStart (e) {
    e = e || window.event;
    e.preventDefault();
    posInitial = items.offsetLeft;
    
    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }
  function dragAction (e) {
    e = e || window.event;
    
    if (e.type == 'touchmove') {
      posX2 = posX1 - e.touches[0].clientX;
      posX1 = e.touches[0].clientX;
    } else {
      posX2 = posX1 - e.clientX;
      posX1 = e.clientX;
    }
    items.style.left = (items.offsetLeft - posX2) + "px";
  }
  
  function dragEnd (e) {
    posFinal = items.offsetLeft;
    if (posFinal - posInitial < -threshold) {
      shiftSlide(1, 'drag');
    } else if (posFinal - posInitial > threshold) {
      shiftSlide(-1, 'drag');
    } else {
      items.style.left = (posInitial) + "px";
    }
    document.onmouseup = null;
    document.onmousemove = null;
  }
  
  function shiftSlide(dir, action) {
    items.classList.add('shifting');
    
    if (allowShift) {
      if (!action) { posInitial = items.offsetLeft; }
      if (dir == 1) {
        items.style.left = (posInitial - slideSize) + "px";
        index++;      
      } else if (dir == -1) {
        items.style.left = (posInitial + slideSize) + "px";
        index--;      
      }
    };
    
    allowShift = false;
  }
    
  function checkIndex (){
    items.classList.remove('shifting');
    if (index == -1) {
      items.style.left = -(slidesLength * slideSize) + "px";
      index = slidesLength - 1;
    }
    if (index == slidesLength) {
      items.style.left = -(1 * slideSize) + "px";
      index = 0;
    }
    
    allowShift = true;
  }
}
/*==================== CHANGE BACKGROUND HEADER ====================*/ 

function add_field(){

  var x = document.getElementById("form");
  // create an input field to insert
  var new_field = document.createElement("input");
  // set input field data type to text
  new_field.setAttribute("type", "text");
  // set input field name 
  new_field.setAttribute("name", "text_field[]");
  // select last position to insert element before it
  var pos = x.childElementCount;

  // insert element
  x.insertBefore(new_field, x.childNodes[pos]);
}
/*==================== SHOW SCROLL UP ====================*/ 


/*==================== DARK LIGHT THEME ====================*/ 