$(document).ready(function() {
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        placement:'top'
    });

    // Initialize Date Picker for Last Dry Docked
    
    $('#AddLastDryDocked').datepicker({
        format: 'yyyy-dd-mm',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });
    var addlddpicker= $('#AddLastDryDocked').datepicker();

    // Initialize Date Picker for Date Built
    $('#AddDateBuilt').datepicker({
        format: 'yyyy-dd-mm',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });
    var addldbpicker= $('#AddDateBuilt').datepicker();

    // Initialize Date Picker for License Expiration Date
    $('#AddLicenseExpDate').datepicker({
        format: 'yyyy-dd-mm',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });
    var addlcxppicker= $('#AddLicenseExpDate').datepicker();

    // Custom Dropdown
    var dropdown = $('#AddFlag').dropdown({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        valueField: 'id'
    });

    //Append another field for insurance
        var AddctrAdd = 2;
        var AddtClassCtr = 1;
    $("#btnAddInsuranceAdd").click(function () {
		
	if(AddctrAdd>4 && AddtClassCtr > 3){
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
	     .attr("id", 'TextBoxDiv' + AddctrAdd);
	txtTbInsurance.after().html('<label>Insurance #'+ AddctrAdd + ' </label>' +
	      '<input class="form-control" type="text" name="AddInsurance'+ AddctrAdd +'"  placeholder="Tugboat Insurance # ' + AddctrAdd + 
	      '" id="AddInsurance' + AddctrAdd + '" value="" >');
            
	txtTbInsurance.appendTo('#AddTClassInsurance' + AddtClassCtr);

        AddtClassCtr++;	
        AddctrAdd++;
    });

    //Go to Main Info using Main Info Tab 
    $('#btnAddmInfoTab').click(function(s) {
        s.preventDefault();
        addlddpicker.close();
        addlcxppicker.close();
        addldbpicker.close();
        $('#AddmInfo').addClass('bounceInLeft animated');
        $('#AddmInfo').css('display', 'block');
        $('#AddtugSpec').css('display', 'none');
        $('#AddtugClass').css('display', 'none');
        $('#AddcSummary').css('display', 'none');
        $('#btnAddmInfoTab').addClass('active');
        $('#btnAddtSpecTab').removeClass('active');
        $('#btnAddtClassTab').removeClass('active');
        $('#btnAddcSummaryTab').removeClass('active');
        $('body').css("background","linear-gradient(to left, #4ca1af, #c4e0e5)");
        document.getElementById("addTitle").innerHTML = "Main Information";
    });

    //Go to Tugboat Specification using Tug Spec Tab 
    $('#btnAddtSpecTab').click(function(e) {
        e.preventDefault();
        addlddpicker.close();
        addlcxppicker.close();
        addldbpicker.close();
        $('#AddtugSpec').addClass('bounceInLeft animated');
        $('#AddtugSpec').css('display', 'block');
        $('#AddmInfo').css('display', 'none');
        $('#AddtugClass').css('display', 'none');
        $('#AddcSummary').css('display', 'none');
        $('#btnAddtSpecTab').addClass('active');
        $('#btnAddmInfoTab').removeClass('active');
        $('#btnAddtClassTab').removeClass('active');
        $('#btnAddcSummaryTab').removeClass('active');
        $('body').css("background","linear-gradient(to left, #4b79a1, #283e51)");
        document.getElementById("addTitle").innerHTML = "Tugboat Specification";
    });

    //Go to Tugboat Classification using Tug Class Tab 
    $('#btnAddtClassTab').click(function(e) {
        e.preventDefault();
        addlddpicker.close();
        addlcxppicker.close();
        addldbpicker.close();
        $('#AddtugClass').addClass('bounceInLeft animated');
        $('#AddtugClass').css('display', 'block');
        $('#AddtugSpec').css('display', 'none');
        $('#AddmInfo').css('display', 'none');
        $('#AddcSummary').css('display', 'none');
        $('#btnAddtClassTab').addClass('active');
        $('#btnAddmInfoTab').removeClass('active');
        $('#btnAddtSpecTab').removeClass('active');
        $('#btnAddcSummaryTab').removeClass('active');
        $('body').css("background","linear-gradient(to left, #000046, #1cb5e0)");
        document.getElementById("addTitle").innerHTML = "Tugboat Classification";
    });

    //Go to Create Summary using Create Summary Tab 
    $('#btnAddcSummaryTab').click(function(s) {
        s.preventDefault();
        addlddpicker.close();
        addlcxppicker.close();
        addldbpicker.close();
        $('#AddmInfo').addClass('bounceInLeft animated');
        $('#AddcSummary').css('display', 'block');
        $('#AddmInfo').css('display', 'none');
        $('#AddtugSpec').css('display', 'none');
        $('#AddtugClass').css('display', 'none');
        $('#btnAddcSummaryTab').addClass('active');
        $('#btnAddmInfoTab').removeClass('active');
        $('#btnAddtSpecTab').removeClass('active');
        $('#btnAddtClassTab').removeClass('active');
        $('body').css("background","linear-gradient(to right, #134e5e, #71b280)");
        document.getElementById("addTitle").innerHTML = "Input Summary";
    });

    //Main Info to AddtugSpec 
    $('#btnNextAddmInfo').click(function(e) {
        e.preventDefault();
        addlddpicker.close();
        addlcxppicker.close();
        addldbpicker.close();
        $('#AddtugSpec').addClass('bounceInLeft animated');
        $('#AddtugSpec').css('display', 'block');
        $('#AddmInfo').css('display', 'none');
        $('#btnAddtSpecTab').prop('disabled', false);
        $('#btnAddtSpecTab').addClass('active');
        $('#btnAddmInfoTab').removeClass('active');
        $('#btnAddtClassTab').removeClass('active');
        $('#btnAddcSummaryTab').removeClass('active');
        $('body').css("background","linear-gradient(to left, #4b79a1, #283e51)");
        document.getElementById("btnAddmInfoTab").innerHTML = "<i class='fas fa-check' aria-hidden='true'></i>"+"      "+"Main Information";
        document.getElementById("addTitle").innerHTML = "Tugboat Specification";
        $(".progress-bar").css("background-color","#17a2b8");
            $('.progress-bar').animate(
            {
                width: '33%'
            }, 
            {
                duration: 1      
            }        
            );
    });
    
    //AddtugSpec to AddmInfo   
    $('#btnPrevAddtugSpec').click(function(s) {
        s.preventDefault();
        addldbpicker.close();
        $('#AddmInfo').addClass('bounceInRight animated');
        $('#AddmInfo').css('display', 'block');
        $('#AddtugSpec').css('display', 'none');
        $('#btnAddmInfoTab').addClass('active');
        $('#btnAddtSpecTab').removeClass('active');
        $('#btnAddtClassTab').removeClass('active');
        $('#btnAddcSummaryTab').removeClass('active');
        $('body').css("background","linear-gradient(to left, #4ca1af, #c4e0e5)");
        document.getElementById("addTitle").innerHTML = "Main Information";
    });
    //AddtugSpec to AddtugClass   
    $('#btnNextAddtugSpec').click(function(m) {
        m.preventDefault();
        addldbpicker.close();
        $('#AddtugClass').addClass('bounceInLeft animated');
        $('#AddtugSpec').css('display', 'none');
        $('#AddtugClass').css('display', 'block');
        $('#btnAddtClassTab').prop('disabled', false);
        $('#btnAddtClassTab').addClass('active');
        $('#btnAddmInfoTab').removeClass('active');
        $('#btnAddtSpecTab').removeClass('active');
        $('#btnAddcSummaryTab').removeClass('active');
        $('body').css("background","linear-gradient(to left, #000046, #1cb5e0)");
        document.getElementById("btnAddtSpecTab").innerHTML = "<i class='fas fa-check' aria-hidden='true'></i>"+"      "+"Tugboat Specification";
        document.getElementById("addTitle").innerHTML = "Tugboat Classification";
        $(".progress-bar").css("background-color","#007bff");
            $('.progress-bar').animate(
                {
                width: '66%'
                }, 
                {
                duration: 1      
                }        
            );
    });
    //AddtugClass to AddtugSpec   
    $('#btnPrevAddtugClass').click(function(s) {
        s.preventDefault();
        $('#AddtugSpec').addClass('bounceInRight animated');
        $('#AddtugSpec').css('display', 'block');
        $('#AddtugClass').css('display', 'none');
        $('#btnAddtSpecTab').addClass('active');
        $('#btnAddmInfoTab').removeClass('active');
        $('#btnAddtClassTab').removeClass('active');
        $('#btnAddcSummaryTab').removeClass('active');
        $('body').css("background","linear-gradient(to left, #4b79a1, #283e51)");
        document.getElementById("addTitle").innerHTML = "Tugboat Specification";
    });
    //AddtugClass to Create Summary   
    $('#btnNextAddtugClass').click(function(q) {
        q.preventDefault();
        $('#AddcSummary').addClass('bounceInLeft animated');
        $('#AddcSummary').css('display', 'block');
        $('#AddtugClass').css('display', 'none');
        $('#btnAddcSummaryTab').prop('disabled', false);
        $('#btnAddcSummaryTab').addClass('active');
        $('#btnAddmInfoTab').removeClass('active');
        $('#btnAddtSpecTab').removeClass('active');
        $('#btnAddtClassTab').removeClass('active');
        $('body').css("background","linear-gradient(to right, #134e5e, #71b280)");
        document.getElementById("btnAddtClassTab").innerHTML = "<i class='fas fa-check' aria-hidden='true'></i>"+"      "+"Tugboat Classification";
        document.getElementById("addTitle").innerHTML = "Input Summary";
        $(".progress-bar").css("background-color","#28a745");
            $('.progress-bar').animate(
            {
                width: '100%'
            }, 
            {
                duration: 1      
            }        
            );
    });
    //Create Summary to AddtugClass  
    $('#btnPrevSummary').click(function(g) {
        g.preventDefault();
        $('#AddtugClass').addClass('bounceInRight animated');
        $('#AddtugClass').css('display', 'block');
        $('#AddcSummary').css('display', 'none');
        $('#btnAddtClassTab').addClass('active');
        $('#btnAddmInfoTab').removeClass('active');
        $('#btnAddtSpecTab').removeClass('active');
        $('#btnAddcSummaryTab').removeClass('active');
        $('body').css("background","linear-gradient(to right, #4b79a1, #283e51)");
        document.getElementById("addTitle").innerHTML = "Tugboat Classfication";
    });
   
    // Create Summary button
    $('#btnAddCreate').click(function(g) {
        swal({
            title: "Add Tugboat",
            text: "Aquarius will be added",
            type: "info",
            showCancelButton: true,
            confirmButtonClass: "btn-primary",
            confirmButtonText: "Confirm",
            closeOnConfirm: false
        },
        function(){
            swal("Added!", "Aquarius has been added!", "success");
            document.getElementById("btnAddcSummaryTab").innerHTML = "<i class='fas fa-check' aria-hidden='true'></i>"+"      "+"Summary";
        }); 
    });
    // Go back
    $('#btnAddgBack').click(function(s) {
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
    // Reset Form
    $('#btnAddUndo').click(function(g) {
        document.getElementById('formInfo').reset();
        document.getElementById('formClass').reset();
        document.getElementById('formSpecs').reset();
    });
    // Prepare the preview for profile picture
    $("#AddfirstPic").change(function(){
        fPictureUpload(this);
    });

    $("#AddsecPic").change(function(){
        sPictureUpload(this);
    });

    $("#AddthirdPic").change(function(){
        tPictureUpload(this);
    });

    // Get Image Name 
    $('#AddfirstPic').change(function(e){
        var fileName = e.target.files[0].name;
        document.getElementById("AddfirstFileChosen").innerHTML = fileName;
    });
    $('#AddsecPic').change(function(e){
        var fileName = e.target.files[0].name;
        document.getElementById("AddsecFileChosen").innerHTML = fileName;
    });
    $('#AddthirdPic').change(function(e){
        var fileName = e.target.files[0].name;
        document.getElementById("AddthirdFileChosen").innerHTML = fileName;
    });

    //Main Info Form Validation

    // bootstrapValidate('#AddName', 'min:8:Enter atleast 8 characters!|max:20:Do not enter more than 20 characters!|alpha: You can only input alpabhetic characters!');
    // bootstrapValidate(['#AddLength','#AddBreadth','#AddDepth','#AddHorsePower','#AddMaxSpeed','#AddBollardPull','#AddGTonnage','#AddNTonnage','#AddIMONum'],'numeric: You can only input numeric characters!');
    // bootstrapValidate(['#AddCyl','#AddCircle'],'integer: You can only input integers!');
    // bootstrapValidate('#AddBuilder','alpha: You can only input alphabetic characters!');
    // bootstrapValidate('#AddBuilder','alpha: You can only input alphabetic characters!');
    // bootstrapValidate(['#AddLastDryDocked','#AddLicenseExpDate','#AddDateBuilt'], 'ISO8601:Invalid Input! YYYY-MM-DD format must be used.');
});

  
      

 //Function to show image before upload
    function fPictureUpload(input) {
        if (input.files && input.files[0]) {
            var fPicReader = new FileReader();

            fPicReader.onload = function (e) {
                $('.AddfPic').attr('src', e.target.result).fadeIn('slow');
            }
            fPicReader.readAsDataURL(input.files[0]);
        }
    }
    function sPictureUpload(input) {
        if (input.files && input.files[0]) {
            var sPicReader = new FileReader();

            sPicReader.onload = function (e) {
                $('.AddsPic').attr('src', e.target.result).fadeIn('slow');
            }
            sPicReader.readAsDataURL(input.files[0]);
        }
    }
    function tPictureUpload(input) {
        if (input.files && input.files[0]) {
            var tPicReader = new FileReader();

            tPicReader.onload = function (e) {
                $('.AddtPic').attr('src', e.target.result).fadeIn('slow');
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
    
    // var strLblfPic =  document.getElementById("AddfirstFileChosen").textContent;
    // var strLblsPic =  document.getElementById("AddsecFileChosen").textContent;
    // var strLbltPic =  document.getElementById("AddthirdFileChosen").textContent;
    // function isTheSame() {
    //     if(strLblfPic == strLblsPic){
    //         swal({
    //             title: "Only 3 Additional Insurance Fields are allowed",
    //             type: "info",
    //             showCancelButton: false,
    //             confirmButtonClass: "btn-info",
    //             confirmButtonText: "Ok",
    //             closeOnConfirm: false
    //         });
    //     }
    // }
    
    // window.onload = isTheSame;
    