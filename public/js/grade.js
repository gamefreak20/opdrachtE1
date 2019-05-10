$( document ).ready(function() {
  let studentNumber = $('.studentNumber').text();
  let studentArray = studentNumber.split("");

  $.each(studentArray, function(key){
    let grade = parseFloat($('#studentEndGrade'+ key).text());
    if(grade > 0 && grade < 5.5) {
      $('#studentEndGrade'+ key).addClass( "red" );
    } else if (grade >= 5.5 && grade < 6) {
      $('#studentEndGrade'+ key).addClass( "orange" );
    } else if (grade >= 6 && grade <= 10) {
      $('#studentEndGrade'+ key).addClass( "green" );
    }
  });

});
