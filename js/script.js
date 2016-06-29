

// On document ready;

$(function(){

    // Instantiate MixItUp:

    $('#sortme').mixItUp();

});



$(".filter").click(function() {
    var selected = $(this).text();
    $(".themeValue").text(selected);
    $(".themeValue").css("visibility","visible");
	if (selected!=="All") {
		$(".themeValue").append('&nbsp;&nbsp;<a href="#"><i class="fa fa-times iconclose"></i></a>');
	}
	$(".iconclose").click(function() {
		//alert("worked");	
		$(".themeValue").css("visibility","hidden");
		$('#sortme').mixItUp('filter', 'all');
	});

})






$(function() {

  $("#sortme").mixItUp();

  var inputText;
  var $matching = $();

  // Delay function
  var delay = (function(){
    var timer = 0;
    return function(callback, ms){
      clearTimeout (timer);
      timer = setTimeout(callback, ms);
    };
  })();

  $("#input").keyup(function(){
    // Delay function invoked to make sure user stopped typing
    delay(function(){
      inputText = $("#input").val().toLowerCase();
      
      // Check to see if input field is empty
      if ((inputText.length) > 0) {            
        $( '.mix').each(function() {
          $this = $("this");
          
           // add item to be filtered out if input text matches items inside the title   
           if($(this).children('h3, h3>a, h3>a>small, .mix>p').text().toLowerCase().match(inputText)) {
            $matching = $matching.add(this);
          }
          else {
            // removes any previously matched item
            $matching = $matching.not(this);
          }
		 
 

        });
        $("#sortme").mixItUp('filter', $matching);
      }

      else {
        // resets the filter to show all item if input is empty
        $("#sortme").mixItUp('filter', 'all');
      }
    }, 200 );
  });
})

// bind click event to x icon
// on click, set remove active class from all li's
// set active class on first li









