$( document ).ready(function() {
    $( "#searchStudent" ).keyup(function() {

        var searchName = $("#searchStudent").val();

        if (searchName == '') {
            $("#showStudents").html("");
        } else {
            $.getJSON( "../../searchStudent/"+searchName, function( data ) {
                var output = "";
                $.each( data, function( key, value ) {
                    output += "<tr><td>";
                    output += value.name+"</td><td><button onclick='addStudent("+value.id+")'>voeg toe</button></td></tr>";
                });

                $("#showStudents").html(output);
            });
        }
    });
    $( "#searchStudent2" ).keyup(function() {

        var searchName = $("#searchStudent2").val();

        if (searchName == '') {
            $("#showStudents").html("");
        } else {
            $.getJSON( "../../searchStudent/"+searchName, function( data ) {
                var output = "";
                $.each( data, function( key, value ) {
                    output += "<tr><td>";
                    output += value.name+"</td><td><button onclick='addStudent2("+value.id+")'>voeg toe</button></td></tr>";
                });

                $("#showStudents").html(output);
            });
        }
    });
});

function addStudent(id)
{
    var groupe = $("#groupe_id").val();
    $.ajax({
        type: 'post',
        url: '../addStudentToGroupe',
        data: {
            '_token': $('input[name=_token]').val(),
            'student_id': id,
            'groupe_id': groupe,
        },
        success: function(data) {
            var output;

            for (let i = 0; i < data.lenght; i++) {
                output += data[i]+" ";
            }

            $("#showStudents").html(output);

            window.location="../";
        },
    });
}

function addStudent2(id)
{
    $.ajax({
        type: 'post',
        url: 'public/createGroupe',
        data: {
            '_token': $('input[name=_token]').val(),
            'student_id': id,
        },
        success: function(data) {
            var output;

            for (let i = 0; i < data.lenght; i++) {
                output += data[i]+" ";
            }

            $("#showStudents").html(output);

            window.location="../";
        },
    });
}
