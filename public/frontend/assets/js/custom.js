

/* Portfolio */
$(document).ready(function(){
  $(".lightbox").click(function(){
    $(".backdrop").animate({"opacity": ".70"}, 500);
    $(".box").animate({"opacity": "1.0"}, 500);
    $(".backdrop, .box").css("display", "block");
  });
  
  $(".thumb").click(function(){
    var largeImage = $(this).attr("src");
    $(".largeImage").attr({src: largeImage});
  });
  
  $(".close").click(function(){
    closeBox();
  });
  
  $(".backdrop").click(function(){
    closeBox();
  });
});

function closeBox(){
  $(".backdrop, .box").animate({"opacity": "0"}, 500, function(){
  $(".backdrop, .box").css("display", "none");
  });
}
/* Portfolio */
/*Testomial*/
$( document ).ready(function($) {
$('#testimoon').slick({
dots: false,
arrows: true,
infinite: true,
speed: 1000,
slidesToShow: 2,
loop: true,
autoplay: false,
speed:2000,
//rows: 2,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1200,
settings: {
//slidesPerRow: 1,
slidesToScroll: 1,
slidesToShow: 1,
//rows: 2,
dots: false
}
},
{
breakpoint: 480,
settings: {
//slidesPerRow: 1,
slidesToScroll: 1,
slidesToShow: 1,
//rows: 1,
dots: false
}
}
]
});
});
/*Testomial*/

/*Menu*/
$(".menu-bottom").on("click",function(){$("html").toggleClass("menu-open")});
$(".menu-bottom").click(function(){$(this).toggleClass("click")});
/*Menu*/

/*Video popup*/
    
  // When the button is clicked make the lightbox fade in in the span of 1 second, hide itself and start the video
  $("#button").on("click", function() {
    $("#lightbox").fadeIn(1000);
    $(this).hide();
    var videoURL = $('#video').prop('src');
    videoURL += "?autoplay=1";
    $('#video').prop('src',videoURL);
  });
  
  // When the close button is clicked make the lightbox fade out in the span of 0.5 seconds and show the play button
  $("#close-btn").on("click", function() {
    $("#lightbox").fadeOut(500);
    $("#button").show(250);
  });
/*Video popup*/

   $('.preloader').fadeOut('slow');





/*For 1st Datepicker*/

var headerHtml = $("#material-header-holder .ui-datepicker-material-header");

var changeMaterialHeader = function (header, date) {
  var year = date.format("YYYY");
  var month = date.format("MMM");
  var dayNum = date.format("D");
  var isoDay = date.isoWeekday();

  var weekday = new Array(7);
  weekday[1] = "Monday";
  weekday[2] = "Tuesday";
  weekday[3] = "Wednesday";
  weekday[4] = "Thursday";
  weekday[5] = "Friday";
  weekday[6] = "Saturday";
  weekday[7] = "Sunday";

  $(".ui-datepicker-material-day", header).text(weekday[isoDay]);
  $(".ui-datepicker-material-year", header).text(year);
  $(".ui-datepicker-material-month", header).text(month);
  $(".ui-datepicker-material-day-num", header).text(dayNum);
};

$.datepicker._selectDateOverload = $.datepicker._selectDate;
$.datepicker._selectDate = function (id, dateStr) {
  var target = $(id);
  var inst = this._getInst(target[0]);
  inst.inline = true;
  $.datepicker._selectDateOverload(id, dateStr);
  inst.inline = false;
  this._updateDatepicker(inst);

  headerHtml.remove();
  $(".ui-datepicker").prepend(headerHtml);
};

$("input[data-type='date']").on("focus", function () {
  //var date;
  //if (this.value == "") {
  //  date = moment();
  //} else {
  //  date = moment(this.value, 'MM/DD/YYYY');
  //}

  $(".ui-datepicker").prepend(headerHtml);
  //$(this).datepicker._selectDate(this, date);
});

$("input[data-type='date']").datepicker({
  showButtonPanel: true,
  closeText: "OK",
  onSelect: function (date, inst) {
    changeMaterialHeader(headerHtml, moment(date, "MM/DD/YYYY"));
  }
});

changeMaterialHeader(headerHtml, moment());
$("input").datepicker("show");

/*For 1st Datepicker*/


/*Password*/

let passwordInput = document.getElementById('txtPassword'),
    toggle = document.getElementById('btnToggle'),
    icon =  document.getElementById('eyeIcon');

function togglePassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    icon.classList.add("fa-eye-slash");
    //toggle.innerHTML = 'hide';
  } else {
    passwordInput.type = 'password';
    icon.classList.remove("fa-eye-slash");
    //toggle.innerHTML = 'show';
  }
}

function checkInput() {
  //if (passwordInput.value === '') {
  //toggle.style.display = 'none';
  //toggle.innerHTML = 'show';
  //  passwordInput.type = 'password';
  //} else {
  //  toggle.style.display = 'block';
  //}
}

toggle.addEventListener('click', togglePassword, false);
passwordInput.addEventListener('keyup', checkInput, false);
/*Password*/