

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

        output += "<tr><td>";
        output += data.name+"</td></tr>";

        studentIds.push(data.id);

        var newStudentIds = JSON.stringify(studentIds);
        console.log(newStudentIds);

        $("#selectedStudents").html(output);
        $("#studentIdsSelected").val(newStudentIds);
    });
}
