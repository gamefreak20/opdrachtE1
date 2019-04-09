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
        output += "<tr id='studentId"+data.id+"'><td>";
        output += data.name+"</td><td><button type='button' onclick='remove("+data.id+")'>verwijder</button></td></tr>";

        studentIds.push(data.id);

        var newStudentIds = JSON.stringify(studentIds);

        $("#selectedStudents").html(output);
        $("#studentIdsSelected").val(newStudentIds);
    });
}

function remove(id)
{
    const index = studentIds.indexOf(id);
    studentIds.splice(index, 1);
    var newStudentIds = JSON.stringify(studentIds);
    $("#studentIdsSelected").val(newStudentIds);

    $("#studentId"+id).remove();
}
