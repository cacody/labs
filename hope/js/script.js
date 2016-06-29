/* JS File */
$(document).ready(function(){

// Taking search text and comparing it against text in relevant paragraphs
// When there's a hit, the targeted parent element is visible
// Otherwise it's hidden
$('#box').keyup(function(){
   var valThis = $(this).val().toLowerCase();
    if(valThis == ""){
        $('#publications').find('p').show();
        $('#publications').find('.other-pub').show();
    } else {
        $('#publications').find('.panel-default').each(function(){
            var text = $(this).text().toLowerCase();
            (text.indexOf(valThis) >= 0) ? $(this).show() : $(this).hide();
        });
	$('#publications').find('.other-pub').each(function(){
            var text = $(this).text().toLowerCase();
            (text.indexOf(valThis) >= 0) ? $(this).show() : $(this).hide();
        });
   };
});
// Developing an number display for actively visible records
// Should be light grey and be next to the search field
// And update right in time with the results as the user searches
// KEEPING HIDDEN FOR NOW - not ready for production
var pubsCount = $('.panel-default').length;
$(".pubs-count").text(pubsCount);


});
