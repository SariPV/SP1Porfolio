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
var educationInput = document.getElementById('education-input');
var add_more_fields = document.getElementById('add_more_fields');
var remove_fields = document.getElementById('remove_fields');

add_more_fields.onclick = function(){
	var newField = document.createElement('input');
  var endDate = document.createElement('input');
	/*newField.setAttribute('type','date');
	newField.setAttribute('id','startdate');*/
	newField.setAttribute('class','row');
	newField.setAttribute('siz',50);
	newField.setAttribute('placeholder','Another Field');

  /*endDate.setAttribute('type','date');
	endDate.setAttribute('id','enddate');
	endDate.setAttribute('class','col-md-6');
	endDate.setAttribute('siz',50);
	endDate.setAttribute('placeholder','Another Field');*/
	educationInput.appendChild(newField);
  //educationInput.appendChild(endDate);
}

remove_fields.onclick = function(){
	var input_tags = educationInput.getElementsByTagName('input');
	if(input_tags.length > 2) {
		educationInput.removeChild(input_tags[(input_tags.length) - 1]);
	}
}
/*==================== PORTFOLIO SWIPER  ====================*/
var onDateSelect = function(selectedDate, input) {
  if (input.id === 'Start') {
   //getting start date
    var start = $('#datepicker').datepicker("getDate");
    console.log("start - "+start);
    //setting it has mindate
    $("#End").datepicker('option', 'minDate', start);
  } else if(input.id === 'End'){ 
   //getting end date
    var end = $('#End').datepicker("getDate");
    console.log("end - "+end);
    //passing it max date in start
    $("#Start").datepicker('option', 'maxDate', end);
  }
};
var onDocumentReady = function() {
  var datepickerConfiguration = {
    onSelect: onDateSelect,
    dateFormat: "yyyy",
  };
  ///--- Component Binding ---///
  $('#Start, #End').datepicker(datepickerConfiguration);
  
};
$(onDocumentReady); 
/*==================== TESTIMONIAL ====================*/


/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/


/*==================== CHANGE BACKGROUND HEADER ====================*/ 


/*==================== SHOW SCROLL UP ====================*/ 


/*==================== DARK LIGHT THEME ====================*/ 