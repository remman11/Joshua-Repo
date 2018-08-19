$(document).ready(function(){
    $('#transactionTree').addClass("active");
    $('#tConsignee').addClass("active");
    $('#contractsMenu').addClass("active");
});
console.log("bitches");


//Display Info modal
function showData(id){
    $.ajax({
        url : "/DispatchTicket/"+id+"/show",
        type : 'GET',
        dataType : 'JSON',
        aysnc : true,
        success : function(data){
            console.log('enter');
            $('#intdispatchticketid').html(data.main.dispatchticketid);
            
        }
    });
    $('#infoModal').modal('show');

}
