$(document).ready(function(){
    $('#transactionTree').addClass("active");
    $('#tConsignee').addClass("active");
    $('#requestsMenu').addClass("active");
});
console.log("hello");

function postRequest(){
    var companyid = $('#addcompanyid').val();
    console.log("pumasok ako sa postR");
    console.log(companyid);



    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $.ajax({
        url : '/Requests/store',
        type : 'POST',
        data : {
            "_token" : $('meta[name="csrf-token"]').attr('content'),

            Companyid : companyid



        },
        beforeSend : function (request) {
            return request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        },
        success : function(data){
            // console.log(response);
            console.log(data);
            console.log('Success');
            swal({
                title: "Success",
                text: "Request Accepted",
                type: "success",
                showCancelButton: false,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok",
                closeOnConfirm: true,
                timer : 1500
            },
            function(){
                setTimeout(window.location = '/Requests',2000);
            });
        },
        error : function(error){
            console.log('error')
            throw error;
        }
    })
}
