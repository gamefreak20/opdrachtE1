$( document ).ready(function() {

    // var hiddenDataClass = $("#hiddenDataClass").html();
    // $("#bodyOfRealForm").html(hiddenDataClass);

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

    $("a").click(function () {
        $("html, body").animate({
            scrollTop: $( $(this).attr('href')).offset().top
        }, 500);
        return false;
    });

    // $("#searchClassesField").keyup(function () {
    //
    //     var className = $("#searchClassesField").val();
    //
    //     if (className == '') {
    //
    //     } else {
    //         $.ajax({
    //             method: "GET",
    //             url: "/classes/search/",
    //             data: { name: className }
    //         })
    //         .done(function( data ) {
    //             var output = "";
    //             $.each( data, function( key, value ) {
    //                 output += "<tr>\n" +
    //                     "                          <th scope=\"row\">1</th>" +
    //                     "                          <td>data.class.name</td>" +
    //                     "                          <td>{{$averageGrade}}</td>" +
    //                     "                          <td>{{$averageAssignments}}</td>" +
    //                     "                          <td><svg class=\"tableBtn\" onclick=\"window.location='{{route('classes.show', $class->id)}}'\" version=\"1.1\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path d=\"M9,15 L11,15 L11,9 L9,9 L9,15 L9,15 Z M10,0 C4.5,0 0,4.5 0,10 C0,15.5 4.5,20 10,20 C15.5,20 20,15.5 20,10 C20,4.5 15.5,0 10,0 L10,0 Z M10,18 C5.6,18 2,14.4 2,10 C2,5.6 5.6,2 10,2 C14.4,2 18,5.6 18,10 C18,14.4 14.4,18 10,18 L10,18 Z M9,7 L11,7 L11,5 L9,5 L9,7 L9,7 Z\" id=\"Shape\"/></svg>" +
    //                     "                              <svg class=\"tableBtn\" onclick=\"window.location='{{route('classes.edit', $class->id)}}'\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"" +
    //                     "                                   viewBox=\"0 0 20 18\" style=\"enable-background:new 0 0 20 18;\" xml:space=\"preserve\"><path id=\"Shape\" d=\"M1,14.2V18h3.8l11-11.1L12,3.1L1,14.2z M18.7,4c0.4-0.4,0.4-1,0-1.4l-2.3-2.3c-0.4-0.4-1-0.4-1.4,0l-1.8,1.8 L17,5.9L18.7,4z\"/></svg>" +
    //                     "                              {!! Form::open(['method'=>'DELETE', 'action'=>['ClassesController@destroy', $class->id], 'class' => '', 'id' => 'formDestroy'.$class->id]) !!}" +
    //                     "                              <svg class=\"tableBtn delete\" onclick=\"document.getElementById('formDestroy{{$class->id}}').submit()\" id=\"Layer_1\" style=\"enable-background:new 0 0 512 512;\" version=\"1.1\" viewBox=\"0 0 512 512\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><g><path d=\"M89.4,100l26.2,347.9c2.5,32.5,29.6,58.1,60.7,58.1h159.3c31.1,0,58.2-25.6,60.7-58.1L422.6,100H89.4z M190.1,460.8   c0.3,7.1-5.1,12.7-12,12.7s-12.7-5.7-13.1-12.7l-14.6-296.6c-0.5-9.6,5.7-17.4,13.8-17.4s14.9,7.8,15.3,17.4L190.1,460.8z    M268.5,460.8c0,7.1-5.7,12.7-12.5,12.7s-12.5-5.7-12.5-12.7l-2-296.6c-0.1-9.6,6.4-17.4,14.5-17.4c8.1,0,14.6,7.8,14.5,17.4   L268.5,460.8z M346.9,460.8c-0.3,7.1-6.2,12.7-13.1,12.7s-12.2-5.7-12-12.7l10.6-296.6c0.3-9.6,7.2-17.4,15.3-17.4   c8.1,0,14.3,7.8,13.8,17.4L346.9,460.8z\"/><path d=\"M445.3,82.8H66.7v0c-1.8-21.1,10.7-38.4,27.9-38.4h322.9C434.6,44.4,447.1,61.8,445.3,82.8L445.3,82.8z\" id=\"XMLID_2_\"/><path d=\"M324.3,58.6H187.7l-0.2-7.8C186.7,26.3,202.1,6,221.9,6h68.3c19.7,0,35.1,20.3,34.4,44.7L324.3,58.6z\" id=\"XMLID_1_\"/></g></svg>" +
    //                     "                              {!! Form::close() !!}" +
    //                     "                          </td>" +
    //                     "                      </tr>";
    //             });
    //
    //         });
    //     }
    //
    // });

    $("#searchClassesField").keyup(function () {
        var link = $("#hiddenlink").val();
        link += "#class";
        link += $("#searchClassesField").val();
        $("#searchButton").attr("href", link);
    });
});

var output;
var studentIds = [];

function addStudent2(id)
{
    $.getJSON( "../../searchStudentById/"+id, function( data ) {
        output = $("#selectedStudents").html();
        output += "<tr id='studentId"+data.id+"'><th scope='row'>1</th><td>";

        if (data.insertion == null) {
            var insertion = "";
        } else {
            var insertion = " "+data.insertion;
        }

        output += data.name+insertion+" "+data.last_name+"</td><td><svg class='tableBtn delete' onclick='remove("+data.id+")' id='Layer_1' style='enable-background:new 0 0 512 512;' version='1.1' viewBox='0 0 512 512' xml:space='preserve' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><g><path d='M89.4,100l26.2,347.9c2.5,32.5,29.6,58.1,60.7,58.1h159.3c31.1,0,58.2-25.6,60.7-58.1L422.6,100H89.4z M190.1,460.8   c0.3,7.1-5.1,12.7-12,12.7s-12.7-5.7-13.1-12.7l-14.6-296.6c-0.5-9.6,5.7-17.4,13.8-17.4s14.9,7.8,15.3,17.4L190.1,460.8z    M268.5,460.8c0,7.1-5.7,12.7-12.5,12.7s-12.5-5.7-12.5-12.7l-2-296.6c-0.1-9.6,6.4-17.4,14.5-17.4c8.1,0,14.6,7.8,14.5,17.4   L268.5,460.8z M346.9,460.8c-0.3,7.1-6.2,12.7-13.1,12.7s-12.2-5.7-12-12.7l10.6-296.6c0.3-9.6,7.2-17.4,15.3-17.4   c8.1,0,14.3,7.8,13.8,17.4L346.9,460.8z'/><path d='M445.3,82.8H66.7v0c-1.8-21.1,10.7-38.4,27.9-38.4h322.9C434.6,44.4,447.1,61.8,445.3,82.8L445.3,82.8z' id='XMLID_2_'/><path d='M324.3,58.6H187.7l-0.2-7.8C186.7,26.3,202.1,6,221.9,6h68.3c19.7,0,35.1,20.3,34.4,44.7L324.3,58.6z' id='XMLID_1_'/></g></svg></td></tr>";

        studentIds.push(data.id);

        console.log(studentIds);

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
