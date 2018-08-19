$(document).ready(function(){
    $('#maintenanceTree').addClass("active");
    $('#employeesMenu').addClass("active");

});
function getEmployees(id)
{
    console.log('Requesting Data');
    console.log($('#empID').val());
    $.ajax({
        url: '/employees/'+id+'/edit',
        dataType : 'JSON',
        success : function(data, response)
        {
            console.log('Data Received', data, response);
            var posID = data.employee.intEPositionID;
            console.log(posID);
            $('#editPositionSelect').val(posID);
            $('#editLastName').val(data.employee.strLName);
            $('#editFirstName').val(data.employee.strFName);
            $('#editMiddleName').val(data.employee.strMName);
            $('#editEmpType').val(data.employee.enumEmpType);
            //document.getElementById("editPositionSelect").value = posID;
            $('#empID').val(data.employee.intEmployeeID);
        }
        
    });
    $(document).ready(function(){
        $('#editLayout').css('display', 'block');
        $('#detLayout').css('display', 'none');
        $('#detLayout').css('display','none');
    });

}
function editEmployeeSubmit(id){
    console.log($('#empID').val());
    var id = $('#empID').val();
    var  position = $('#editPositionSelect').val();
    var lname = $('#editLastName').val();
    var fname = $('#editFirstName').val();
    var mname = $('#editMiddleName').val();
    var emptype = $('#editEmpType').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({ 
        url : '/employees/update',
        type : 'POST',
        data : { 
            "_token" : $('meta[name="csrf-token"]').attr('content'),
            positionID : id,
            lastName : lname,
            firstName : fname,
            middleName : mname,
            position : position,
            employeeType : emptype
        },
        beforeSend: function (request) {
            return request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        },
        success : function(data){
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
                window.location = "/employees";
            })
        },
        error : function(error){
            throw error;
        }
    }); 
}
function postEmployee(){
    var position = parseInt($('#positionSelect').val());
    var lname = $('#addLastName').val();
    var fname = $('#addFirstName').val();
    var mname = $('#addMiddleName').val();
    var emptype = $('#addEmpType').val();
    console.log(position, lname, fname, mname, emptype);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({ 
        url : '/employees/store',
        type : 'POST',
        data : { 
            "_token" : $('meta[name="csrf-token"]').attr('content'),
            lastName : lname,
            firstName : fname,
            middleName : mname,
            position : position,
            employeeType : emptype
        },
        beforeSend: function (request) {
            return request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        },
        success : function(data, response){
            console.log(response);
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
                window.location = "/employees";
            })
        },
        error : function(error){
            throw error;
        }
    });
}
function deleteEmployees(dataID){
    console.log('Trying to Delete Data');
    console.log(dataID);
    $.ajax({
        url : '/employees/'+dataID+'/delete',
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
            })
            
        },
        error : function(error){
            throw error;
        }
    })
}