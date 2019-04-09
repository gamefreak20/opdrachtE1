

$( document ).ready(function() {

    $( "#studentNameSearch" ).keyup(function() {
        var studentName = $("#studentNameSearch").val();

        if (studentName == '') {
            $("#searchStudentNameField").html("");
        } else {
            $.getJSON( "../../searchStudent/"+studentName, function( data ) {
                var output = "";
                $.each( data, function( key, value ) {
                    output += "<tr><td>";
                    output += value.name+"</td><td><button type='button' onclick='addStudent2("+value.id+")'>voeg toe</button></td></tr>";
                });

                $("#searchStudentNameField").html(output);
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

        studentIds.push(id);

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
