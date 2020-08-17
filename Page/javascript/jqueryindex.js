$(document).ready(function() {
    $(".forma").hide();
    $(".devenir").mouseenter(function() {
        $(".forma").show();
    });
    $(".devenir").mouseleave(function() {
        $(".forma").hide();
    })
    console.log("hh")
    $("#showModal").click(function() {
        $(".modal").addClass("is-active");
    });

    $(".modal-close").click(function() {
        $(".modal").removeClass("is-active");
    });
})