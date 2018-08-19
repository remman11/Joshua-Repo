$(document).ready(function() {
    //Initialize iCheck
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
    $('#ISPSComplianceYes, #CStandardYes').iCheck('check');

    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        placement:'top'
    });

    //Initialize Date Picker for Last Dry Docked
    $('#editLastDryDocked').datepicker({
        format: 'yyyy-dd-mm',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });
    var editlddpicker= $('#editLastDryDocked').datepicker();
    
    //Initialize Date Picker for Date Built
    $('#editDateBuilt').datepicker({
        format: 'yyyy-dd-mm',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });
    var editldbpicker= $('#editDateBuilt').datepicker();

    //Initialize Date Picker for License Expiration Date
    $('#editLicenseExpDate').datepicker({
        format: 'yyyy-dd-mm',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });
    var editlcxppicker= $('#editLicenseExpDate').datepicker();

    // Custom Dropdown
    var dropdown = $('#editFlag').dropdown({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        valueField: 'id'
    });

    //Append another field for insurance
    var EditctrAdd = 2;
    var EditTClassCtr = 1;
    $("#btnEditInsuranceAdd").click(function () {
        
    if(EditctrAdd>4 && EditTClassCtr > 3){
        swal({
            title: "Only 3 Additional Insurance Fields are allowed",
            type: "info",
            showCancelButton: false,
            confirmButtonClass: "btn-info",
            confirmButtonText: "Ok",
            closeOnConfirm: false
        });
            return false;
    }   
        
    var txtTbInsurance = $(document.createElement('div'))
        .attr("id", 'TextBoxDiv' + EditctrAdd);
    txtTbInsurance.after().html('<label>Insurance #'+ EditctrAdd + ' </label>' +
        '<input class="form-control" type="text" name="editInsurance'+ EditctrAdd +'"  placeholder="Tugboat Insurance # ' + EditctrAdd + 
        '" id="editInsurance' + EditctrAdd + '" value="" >');
            
    txtTbInsurance.appendTo('#editTClassInsurance' + EditTClassCtr);

        EditTClassCtr++;	
        EditctrAdd++;
    });

     // Change Background Color
    $("#picCard").click(function () {
        $('body').css("background","linear-gradient(to right, #000046, #1cb5e0)");
        editlcxppicker.close();
        editldbpicker.close();
        editlddpicker.close();
    });
    $("#mInfoCard").click(function () {
        $('body').css("background","linear-gradient(to right, #34e89e, #0f3443)");
        editlcxppicker.close();
        editldbpicker.close();
        editlddpicker.close();
    });
    $("#tSpecCard").click(function () {
        $('body').css("background","linear-gradient(to right, #f0f2f0, #000c40)");
        editlcxppicker.close();
        editldbpicker.close();
        editlddpicker.close();
    });
    $("#tClassCard").click(function () {
        $('body').css("background","linear-gradient(to right, #43c6ac, #191654)");
        editlcxppicker.close();
        editldbpicker.close();
        editlddpicker.close();
    });

    // Get Image Name 
    $('#editFirstPic').change(function(e){
        var fileName = e.target.files[0].name;
        document.getElementById("editFirstFileChosen").innerHTML = fileName;
    });
    $('#editSecPic').change(function(e){
        var fileName = e.target.files[0].name;
        document.getElementById("editSecFileChosen").innerHTML = fileName;
    });
    $('#editThirdPic').change(function(e){
        var fileName = e.target.files[0].name;
        document.getElementById("editThirdFileChosen").innerHTML = fileName;
    });

    ////////////////////////////////////////////

    // Sweet Alerts 
    $('#btnEditgoBack').click(function(s) {
        s.preventDefault();
        swal({
            title: "You haven't saved your changes",
            text: "Are you sure you want to go back?",
            type: "error",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false
        },
        function(){
            window.location = "index.html"
        });
    });
    $('#btnEItemPics').click(function(s) {
        s.preventDefault();
        swal({
            title: "Changes won't be undone.",
            text: "Save changes?",
            type: "info",
            showCancelButton: true,
            confirmButtonClass: "btn-primary",
            confirmButtonText: "Confirm",
            closeOnConfirm: false
        },
        function(){
            swal("Updated!", "Energy Sun's Pictures has been updated.", "success");
        });
    });
    $('#btnEmInfoSubmit').click(function(s) {
        s.preventDefault();
        swal({
            title: "Changes won't be undone.",
            text: "Save changes?",
            type: "info",
            showCancelButton: true,
            confirmButtonClass: "btn-primary",
            confirmButtonText: "Confirm",
            closeOnConfirm: false
        },
        function(){
            swal("Updated!", "Energy Sun's Main Information has been updated.", "success");
        });
    });
    $(document).ready(function() {
        $('#btnETSpecSubmit').click(function(s) {
            s.preventDefault();
            swal({
                title: "Changes won't be undone.",
                text: "Save changes?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-primary",
                confirmButtonText: "Confirm",
                closeOnConfirm: false
            },
            function(){
                swal("Updated!", "Energy Sun's Tugboat Specification has been updated.", "success");
            });
        });
    });
    $('#btnETClassSubmit').click(function(s) {
        s.preventDefault();
        swal({
            title: "Changes won't be undone.",
            text: "Save changes?",
            type: "info",
            showCancelButton: true,
            confirmButtonClass: "btn-primary",
            confirmButtonText: "Confirm",
            closeOnConfirm: false
        },
        function(){
            swal("Updated!", "Energy Sun's Tugboat Classication has been updated.", "success");
        });
    });

    ///////////////////////////////////

    // Prepare the preview for profile picture
    $("#editFirstPic").change(function(){
        fPictureUpload(this);
    });

    $("#editSecPic").change(function(){
        sPictureUpload(this);
    });

    $("#editThirdPic").change(function(){
        tPictureUpload(this);
    });

});

//Function to show image before upload
function fPictureUpload(input) {
    if (input.files && input.files[0]) {
        var fPicReader = new FileReader();

        fPicReader.onload = function (e) {
            $('.editfPic').attr('src', e.target.result).fadeIn('slow');
        }
        fPicReader.readAsDataURL(input.files[0]);
    }
}
function sPictureUpload(input) {
    if (input.files && input.files[0]) {
        var sPicReader = new FileReader();

        sPicReader.onload = function (e) {
            $('.editsPic').attr('src', e.target.result).fadeIn('slow');
        }
        sPicReader.readAsDataURL(input.files[0]);
    }
}
function tPictureUpload(input) {
    if (input.files && input.files[0]) {
        var tPicReader = new FileReader();

        tPicReader.onload = function (e) {
            $('.edittPic').attr('src', e.target.result).fadeIn('slow');
        }
        tPicReader.readAsDataURL(input.files[0]);
    }
}

// Validate if the pictures have the proper file extension
        var _validFileExtensions = [".jpg", ".jpeg", ".png"];    
        function ValidateSingleInput(oInput) {
          if (oInput.type == "file") {
            var sFileName = oInput.files[0].name; ;
              if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                  var sCurExtension = _validFileExtensions[j];
                  if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                      blnValid = true;
                      break;
                  }
                }
                
                if (!blnValid) {
                  swal({
                    title: "Invalid File Extension!",
                    text:"Sorry, " + sFileName + " is invalid. \n Allowed extensions are: " + _validFileExtensions.join(", "),
                    type: "error",
                    showCancelButton: false,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Ok",
                    closeOnConfirm: false
                  });
                    oInput.value = "";
                    return false;
                }
            }
        }
            return true;
        }