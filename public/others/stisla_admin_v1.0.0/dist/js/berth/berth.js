$(document).ready(function(){
    $('#maintenanceTree').addClass("active");
    $('#berthMenu').addClass("active");
});
function getBerth(id){
    $.ajax({
        url : '/berth/'+id+'/edit',
        type : 'GET',
        dataType: 'JSON',
        success : function(data){
            console.log('Data Received', data);
            $('#editBerth').val(data.berths.strBerthName);
            $('#editPierSelect').val(data.berths.intBPierID);
            $('#editIDhide').val(data.berths.intBerthID);
        },
        error : function(error){
            throw error;
        }
    })
    $(document).ready(function(){
        $('#editLayout').css('display', 'block');
        $('#detLayout').css('display', 'none');
        $('#detLayout').css('display','none');
    });
}
function editBerthSubmit(){
    console.log('Trying to Submit Data');
    var berth = $('#editBerth').val();
    var pier = $('#editPierSelect').val();
    var id = $('#editIDhide').val();
    
    console.log(pier, berth);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url : "/berth/update",
        type : 'POST',
        data : { 
            "_token" : $('meta[name="csrf-token"]').attr('content'),    
            berthID : id,
            berthName : berth,    
            pier : pier
        }, 
        beforeSend: function (request) {
            return request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        },
        success : function(data){
            console.log('success pota');
            console.log(data);
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
                window.location = "/berth";
            });                       
        },
        error : function(error){
            throw error;
        }

    });
}

function postBerth(){
    $(document).ready(function(){
        console.log('Trying to Submit Data');
        var berth = $('#addBerth').val();
        var pier = $('#pierSelect').val();
        
        console.log(pier, berth);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url : "/berth/store",
            type : 'POST',
            data : { 
                "_token" : $('meta[name="csrf-token"]').attr('content'),    
                berthName : berth,    
                pier : pier
            }, 
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success : function(data){
                console.log('success pota');
                console.log(data);
                swal({
                    title: "Success",
                    text: "Data Submitted",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ok",
                    closeOnConfirm: true,
                    timer : 500
                },
                function(){
                    window.location = "/berth";
                });                       
            },
            error : function(error){
                throw error;
            }

        });
    });
}

function deleteBerth(dataID){
    console.log('Trying to Delete');
    console.log(dataID);
    $.ajax({
        url : '/berth/'+dataID+'/delete',
        type : 'GET',
        dataType : 'JSON',
        success: function(response){
            console.log('success');
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
            function(isConfirm){
                if (isConfirm) {
                    window.location = "/berth";
                }
            })
        },
        error : function(error){
            throw error;
            
        }
    })
}