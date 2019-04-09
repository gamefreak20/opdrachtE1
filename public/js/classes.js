$( document ).ready(function() {

    $( "#studentNameSearch" ).keyup(function() {
        var studentName = $("#studentNameSearch").val();

        if (studentName == '') {
            $("#searchStudentNameField").html("<p class='updateSelect'>Geen studenten gevonden</p>");
        } else {
            $.getJSON( "../../searchStudent/"+studentName, function( data ) {
                var output = "";
                $.each( data, function( key, value ) {
                    output += "<p class='updateSelect'><button class='btn btn-primary' type='button' onclick='addStudent2("+value.id+")'>"+value.name+"</button></p>";
                });
                if (output == "") {
                  $("#searchStudentNameField").html("<p class='updateSelect'>Geen studenten gevonden</p>");
                }
                else {
                  $("#searchStudentNameField").html(output);
                }
            });
        }

    });

});

var output;
var studentIds = [];

function addStudent2(id)
{
    $.getJSON( "../../searchStudentById/"+id, function( data ) {

        output = $("#selectedStudents").html();
        output += data.name + "<button type='button' onclick='remove("+id+")'>verwijder</button>";

        studentIds.push(data.id);

        var newStudentIds = JSON.stringify(studentIds);
        console.log(newStudentIds);

        $("#selectedStudents").html(output);
        $("#studentIdsSelected").val(newStudentIds);
    });
}
