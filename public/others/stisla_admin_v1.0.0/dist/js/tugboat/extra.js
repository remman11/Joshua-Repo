$(document).ready(function(){
    $('select').niceSelect();
    $('#editLastDryDocked').datepicker();
    $('#AddLastDryDocked').datepicker();
    //Initialize Date Picker for Date Built
    $('#editDateBuilt').datepicker();
    $('#AddDateBuilt').datepicker();
    //Initialize Date Picker for License Expiration Date
    $('#editLicenseExpDate').datepicker();
    $('#AddLicenseExpDate').datepicker();
    // Country Picker
    $(".niceCountryInputSelector").each(function(i,e){
        new NiceCountryInput(e).init();
    });
});
function onChangeCallback(ctr){
    console.log("The country was changed: " + ctr);
    //$("#selectionSpan").text(ctr);
    console.log(ctr);
    
    $('#hideFlag').val(ctr);
}
    