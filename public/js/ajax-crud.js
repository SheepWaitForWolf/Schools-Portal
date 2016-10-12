$(document).ready(function(){

    var url = "/registration";

    //display modal form for child editing
    $('.open-modal').click(function(){
        var child_id = $(this).val();

        $.get(url + '/' + child_id, function (data) {
            //success data
            // console.log(data);
            $('#child_id').val(data.child_id);
            $('#f_name').val(data.f_name);
            $('#l_name').val(data.l_name);
             $('#btn-save').attr('value', child_id);

            $('#myModal').modal('show');
        }) 
    });

    //delete child and remove it from list
    $('.delete-child').on('click', function(){
        var child_id = $(this).val();
        console.log(child_id);
        var delete_url = url + "/" + child_id;
        console.log(delete_url);
    
 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({

            type: "DELETE",
            url: delete_url,
            success: function (data) {

                $("#child" + child_id).remove();
                //call some new function that renders the view again
                // console.log(data);
                document.write(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    //create new child / update existing child
    $("#btn-save").click(function (e) {
        // console.log($(this));
                e.preventDefault(); 
        var child_id = $(this).val();
        console.log("Hello" + child_id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })



        var formData = {
            child_id: $('#child_id').val(),
            f_name: $('#f_name').val(),
            l_name: $('#l_name').val(),
            gender: $('#gender').val(),
            dob: $('#dob').val()
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
   
        var my_url = url + '/' + child_id;

        
        console.log(child_id);
        console.log(my_url);

        $.ajax({

            type: "PUT",
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                // console.log(data);

                // var child = '<tr id="child' + data.id + '"><td>' + data.id + '</td><td>' + data.child + '</td><td>' + data.l_name + '</td><td>' + data.created_at + '</td>';
                // child += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.child_id + '">Edit</button>';
                // child += '<button class="btn btn-danger btn-xs btn-delete delete-child" value="' + data.child_id + '">Delete</button></td></tr>';

                if (state == "add"){ //if user added a new record
                    $('#child-list').append(child);
                }else{ //if user updated an existing record

                    $("#child" + child_id).replaceWith( child );
                }

                $('#frmchilds').trigger("reset");

                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});