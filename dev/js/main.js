$(function() {

	$('.Sections').curtain();
	
	timedUpdate();
});



/* ==========================================================================
 MOMENT
 ========================================================================== */

var $time = $("time");
function timedUpdate() {
    $time.each(function (i, v) {
        var $v = $(v);
        //2013-09-11/12:23:47
        $v.text(moment($v.attr("datetime"), "YYYY-MM-DD/HH:mm:ss").fromNow());
    })
}
