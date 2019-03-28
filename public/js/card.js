$(document).ready(function()
{
  var d = new Date();
  var h = d.getHours();
  var m = d.getMinutes();
  var s = d.getSeconds();


  function time()
  {
    timeText = ((h.toString().length == 1) ? "0" + h : h) + " : " + ((m.toString().length == 1) ? "0" + m : m) + " : " + ((s.toString().length == 1) ? "0" + s : s);
    $('.timeText').html(timeText);
  }

  function toast()
  {
    $('.toast').toast(autohide = false);
    $('.toast').toast('show')
  }

  time();
  toast();
});
