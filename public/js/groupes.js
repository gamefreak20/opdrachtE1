$( document ).ready(function() {
    $( "#searchStudent" ).keyup(function() {

        var searchName = $("#searchStudent");

        $.ajax({
            type: 'post',
            url: '/searchStudent',
            data: {
                '_token': $('input[name=_token]').val(),
                'searchName': searchName
            },
            success: function(data) {
                var output;

                for (let i = 0; i < count(data); i++) {
                    output += data[i]+" ";
                }

                $("#showStudents").html(output);
            },
        });

    });
});