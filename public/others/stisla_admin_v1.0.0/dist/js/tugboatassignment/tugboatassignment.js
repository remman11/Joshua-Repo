$(document).ready(function(){
    $('#maintenanceTree').addClass("active");
    $('#tugboatassignmentMenu').addClass("active");
});

function ScheduleSubmot(){
    $(document).ready(function(){
        console.log('Trying to Submit Data');
        var Schedule = $('#Schedule').val();
        var TA = $('#TA').val();
        var ETD = $('#ETD').val();
        var ETA = $('#ETA').val();
        
        console.log(Schedule, TA, ETD, ETA);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url : "/TugboatAssignment/store",
            type : 'POST',
            data : { 
                "_token" : $('meta[name="csrf-token"]').attr('content'),
                intJobSchedSID : Schedule,
                intJobSchedAID :TA,
                tmETD : ETD,
                tmETA : ETA,
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
                    window.location = "/schedule";
                });                       
            },
            error : function(error){
                throw error;
            }

        });
    });
}
