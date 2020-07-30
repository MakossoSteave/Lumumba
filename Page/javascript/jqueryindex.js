$(document).ready(function() {
    $(".forma").hide();
    $(".devenir").mouseenter(function() {
        $(".forma").show();
    });
    $(".devenir").mouseleave(function() {
        $(".forma").hide();
    })

})