$(document).ready(function(){
    $('#agreementsMenu').addClass("active");
    $('#maintenanceTree').addClass("active");
});
function createAgreements(){
    var title = $('#addAgreementTitle').val();
    var details = $('#addContractDetails').val();
    var quotations = $('#addQuotations').val();
    var standard = $('#addStandard').val();
    console.log(title, details, quotations, standard);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $.ajax({
        url : '/agreements/store',
        type : 'POST',
        data : {
            "_token" : $('meta[name="csrf-token"]').attr('content'),
            agreementTitle : title,
            agreementQuotations : quotations,
            agreementStandard : standard,
            agreementDetails : details,
        },
        beforeSend : function (request) {
            return request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        },
        success : function(data, response){
            console.log(response);
            console.log(data);
            console.log('Success');
            swal({
                title: "Success",
                text: "Agreement Created",
                type: "success",
                showCancelButton: false,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok",
                closeOnConfirm: true,
                timer : 1500
            },
            function(){
                setTimeout(window.location = '/agreements',2000);
            });
        },
        error : function(error){
            throw error;
        }
    });
}
function getAgreements(getID){
    console.log('Trying to get Data');
    console.log(getID);
    $.ajax({
        url : '/agreements/'+getID+'/show',
        type : 'GET',
        dataType : 'JSON',
        success : function(data){
            console.log(data);
            console.log(data.agreements[0].strAgreementTitle);
            $('#agreementTitle').html(data.agreements[0].strAgreementTitle);
                $('#agreementDetails').html(data.agreements[0].strAgreementDesc);
                $('#agreementStandard').html(data.agreements[0].strStandardDesc);
                $('#agreementDet').html(data.agreements[0].fltSDeliveryRate
                +'<br>'+data.agreements[0].strQuotationDesc);
                // $('#agreementInfoModal').clone().prepend(
            //     '<h1>'+ data.agreements[0].strAgreementTitle +'</h1>' +
            //     '<p>'+data.agreements[0].strAgreementDesc+'</p>' +
            //     '<h3>'+ data.agreements[0].strStandardDesc +'</h3>' + 
            //     '<p>'+ data.agreements[0].fltSDeliveryRate +' php </p>'+
            //     '<p>'+ data.agreements[0].strQuotationDesc +'</p>'
            // ).appendTo('#agreementInfoModal');
        },
        error : function(error){
            throw error;
        }
    })
    $('#viewAgreementInfo').modal('show');
}
function editAgreements(editID){
    
    console.log('Requesting Data');
    console.log(editID);
    $.ajax({
        url : '/agreements/'+editID+'/edit',
        type : 'GET',
        dataType : 'JSON',
        success : function(data,response){
            console.log('Success');
            console.log(response);
            console.log(data);
            console.log(data.agreements.intAStandardID);
            var standardID = data.agreements.intAStandardID;
            var quotationsID = data.agreements.intAQuotationID;
            console.log('Quotations :', quotationsID);
            console.log('Standard ID : ', standardID);
            $('#editAgreementTitle').val(data.agreements.strAgreementTitle);
            $('#editQuotes').val(quotationsID).niceSelect('update');
            $('#editStandard').val(standardID).niceSelect('update');
            $('#editAgreementDetails').summernote('code',data.agreements.strAgreementDesc);
            $('#hideAgreementsID').val(data.agreements.intAgreementID);
            //need to update niceselect in order to view changes
            
        },
        error : function(error){
            throw error;
        }
    })
    // $('select').niceSelect('update');
    $('#editContractInfo').modal('show');
}
function editAgreementSubmit(){
    // var terms = $('#editTermsCondition').val();
    var id = $('#hideAgreementsID').val();
    var quotations = $('#editQuotes').val();
    var standard = $('#editStandard').val();
    var title = $('#editAgreementTitle').val();
    var details = $('#editAgreementDetails').val();
    console.log(id);
    console.log(quotations);
    console.log(standard);
    console.log(title,details, "ID");
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });   
    $.ajax({
        url : '/agreements/update',
        type : 'POST',
        data : {
            "_token" : $('meta[name="csrf-token"]').attr('content'),
            agreementsID : id,
            agreementsTitle : title,
            agreementsQuotation : quotations,
            agreementsStandard : standard,
            agreementsDetails : details
        },
        success : function(data,response){
            console.log('Success');
            swal({
                title: "Success",
                text: "Agreement Updated",
                type: "success",
                showCancelButton: false,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok",
                closeOnConfirm: true,
                timer : 1500
            },
            function(){
                window.location = "/agreements";
            })
        },
        error : function(error){

        }
    });
    
}
function validateData(a){
    if(a == '0' || a == null){
        console.log('error', null);
        alert('Must Select A Value from field(s)');
        return false;
    }else{
        console.log('No Errors');
        return a;
    }
}