var out = false;

$("#hamburger").click(function() {
  if(out) {
    $(".verticalNav").css("left", "+=420px");

    $("#hamburger svg").css("fill", "#A2E147");
    $("#hamburger svg").css("left", "20px");

    $(".horizontalNav").css("width", "75%");
    $(".horizontalNav").css("max-width", "calc(100% - 300px)");
    $(".horizontalNav").css("min-width", "calc(100% - 420px)");

    $(".mainDiv").css("width", "75%");
    $(".mainDiv").css("max-width", "calc(100% - 300px)");
    $(".mainDiv").css("min-width", "calc(100% - 420px)");

    out = false;
  } else {
    $(".verticalNav").css("left" ,"-=420px");

    $("#hamburger svg").css("fill", "white");
    $("#hamburger svg").css("left", "120px");

    $(".horizontalNav").css("width", "100%");
    $(".horizontalNav").css("max-width", "100%");
    $(".horizontalNav").css("min-width", "100%");

    $(".mainDiv").css("width", "100%");
    $(".mainDiv").css("max-width", "100%");
    $(".mainDiv").css("min-width", "100%");

    out = true;
  }
});