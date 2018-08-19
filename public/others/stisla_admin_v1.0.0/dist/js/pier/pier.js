$(document).ready(function(){
    $('#maintenanceTree').addClass("active");
    $('#pierMenu').addClass("active");
});

function getPier(id){
    console.log('Requesting Data');
    $.ajax({
        url : '/pier/'+id+'/edit',
        type : 'GET',
        dataType: 'JSON',
        success : function(data){
            console.log('Data Recieved', data);
            $('#editPier').val(data.piers.strPierName);
            $('#editIDhide').val(data.piers.intPierID);
        },
        error : function(error){
            console.log('Request Failed');
            throw error;
        }
    });
    $(document).ready(function(){
        $('#editLayout').css('display', 'block');
        $('#detLayout').css('display', 'none');
        $('#detLayout').css('display','none');
    });
}

function postPier(){
    $(document).ready(function(){
        console.log('Trying to Submit Data');
        var name = $('#addPier').val();
        console.log(name);


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url : "/pier/store",
            type : 'POST',
            data : { "_token" : $('meta[name="csrf-token"]').attr('content'),
                    pierName : name}, 
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success : function(data){
                console.log('success pota');
                console.log(data);
                if((data.errors)){
                    console.log('title', data.errors.title);
                    console.log('body', data.errors.body);
                }
                swal({
                    title: "Success",
                    text: "Data Submitted",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ok",
                    closeOnConfirm: true,
                    timer : 1500
                },
                function(){
                    window.location = "/pier";
                });                       
            },
            error : function(error){
                throw error;
                console.log('title', error.errors.title);
                console.log('body', error.errors.body);
            }

        });
    });
}

function editPierSubmit(){

    var id = $('#editIDhide').val();
    var name = $('#editPier').val();
    
    console.log(id);
    console.log(name);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url : "/pier/update",
        type : 'POST',
        data : { "_token" : $('meta[name="csrf-token"]').attr('content'),
            pierName : name,
            pierID : id
        },
        beforeSend: function (request) {
            return request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        },
        success : function(data){
            console.log('Data Submitted')
            swal({
                title: "Success",
                text: "Data Submitted",
                type: "success",
                showCancelButton: false,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok",
                closeOnConfirm: true,
                timer : 1500
            },
            function(){
                window.location = "/pier";
            });                       
        },
        error : function(error){
            throw error;
            console.log('title', error.errors.title);
            console.log('body', error.errors.body);
        } 
    });
}
function deletePier(dataID){
    console.log('Trying To Delete');
    console.log(dataID);
    $.ajax({
        url : '/pier/'+dataID+'/delete',
        type : 'GET',
        dataType : 'JSON',
        success : function(response){
            console.log('Data Deleted');
            console.log(response);
            swal({
                title: "Success",
                text: "Data Deleted",
                type: "success",
                showCancelButton: false,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok",
                closeOnConfirm: true,
                timer : 1000
            },
            function(){
                window.location = '/pier';
            })
        },
        error : function(error){
            throw error;
        }
    })
}