// register jQuery extension
jQuery.extend(jQuery.expr[':'], {
focusable: function (el, index, selector) {
return $(el).is('a, button, :input, [tabindex]');
}
});
$(document).on('keypress', 'input,select', function (e) {
if (e.which == 13) {
e.preventDefault();
// Get all focusable elements on the page
var $canfocus = $(':focusable');
var index = $canfocus.index(this) + 1;
if (index >= $canfocus.length) index = 0;
$canfocus.eq(index).focus();
}
});

$(window).load(function(){
$( "input" )
.keyup(function() {
var value = $( this ).val(),
dataViewId = $( this ).data( "view-id" );  // get your data-attribute value
// use this value as a selector:
$( dataViewId ).text( value );
})
.keyup();
});

$(document).ready(function(){
    var current = 1;
    widget      = $(".step");
    btnnext     = $(".next");
    btnback     = $(".back");
    btnsubmit   = $(".submit");
    // Init buttons and UI
    widget.not(':eq(0)').hide();
    hideButtons(current);
    setProgress(current);
    // Next button click action
    btnnext.click(function(){
        if(current < widget.length){
            // Check validation
            if($(".form").valid()){
            widget.show();
            widget.not(':eq('+(current++)+')').hide();
            setProgress(current);
            }
        }
    hideButtons(current);
    })

    // Back button click action
    btnback.click(function(){
    if(current > 1){
        current = current - 2;
        if(current < widget.length){
        widget.show();
        widget.not(':eq('+(current++)+')').hide();
        setProgress(current);
        }
    }
    hideButtons(current);
    })

    $('.form').validate({ // initialize plugin
        ignore:":not(:visible)",
        
    });
    });
    // Change progress bar action
    setProgress = function(currstep){
        var percent = parseFloat(100 / widget.length) * currstep;
        percent = percent.toFixed();
        $(".progress-bar").css("width",percent+"%").html(percent+"%");
        $(".current-page").html(currstep)
        $(".total-page").html(widget.length)

    }

    // Hide buttons according to the current step
    hideButtons = function(current){
        var limit = parseInt(widget.length);
        $(".action").hide();
        if(current < limit) btnnext.show();
        if(current > 1) btnback.show();
        if (current == limit) {
        // Show entered values
        $(".display label.lbl").each(function(){
        $(this).html($("#"+$(this).data("id")).val());
        });
        btnnext.hide();
        btnsubmit.show();
    }
}
