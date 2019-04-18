var i = 0;
var card = false;

function select(id)
{
  if (id == i) {
    $("#"+id).toggleClass("selectCard");
    card =  false;
    i = 0;
    $("#idSelected").val(i);
  } else {
    $(".allCards").removeClass("selectCard");
    $("#"+id).toggleClass("selectCard");
    card = true;
    i = id;
    $("#idSelected").val(i);
  }
}
