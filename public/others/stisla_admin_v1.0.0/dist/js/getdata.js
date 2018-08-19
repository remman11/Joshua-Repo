
//Display Info modal
function getData(id){
    console.log('hi');
    $.ajax({
        url : "/tugboat/"+id+"/please",
        type : 'GET',
        dataType : 'JSON',
        aysnc : true,
        success : function(data){
            console.log('success', data);
            console.log(data.main.datLastDrydocked);
            $('#tugboatName').html(data.main.strName);
            $('#infoModalLabel').html(data.main.strName);      
            $('#tugboatLength').html(data.main.strLength);
            $('#tugboatBreadth').html(data.main.strBreadth);
            $('#tugboatDepth').html(data.main.strDepth);
            $('#tugboatHorsePower').html(data.main.strDepth);
            $('#tugboatMaxSpeed').html(data.main.strMaxSpeed);
            $('#tugboatBollardPull').html(data.main.strBollardPull);
            $('#tugboatGrossTonnage').html(data.main.strGrossTonnage);
            $('#tugboatNetTonnage').html(data.main.strNetTonnage);
            $('#tugboatDryDocked').html(data.main.datLastDrydocked);
            $('#tugboatLicenseNum').html(data.class.strClassNum);
            $('#tugboatBuiltIn').html(data.specs.strBuiltIn);
            $('#tugboatBuilder').html(data.specs.strBuilder);
            $('#tugboatMakerPower').html(data.specs.strMakerPower);
            $('#tugboatHullMaterial').html(data.specs.strHullMaterial);
            $('#tugboatDrive').html(data.specs.strDrive);
            $('#tugboatCylCycle').html(data.specs.strCylinderperCycle);
            $('#tugboatAuxEngine').html(data.specs.strAuxEngine);
            $('#tugboatClassNum').html(data.class.strClassNum);
            $('#tugboatOfficialNum').html(data.class.strOfficialNum);
            $('#tugboatIMONum').html(data.class.strIMONum);
            $('#tugboatFlag').html(data.class.strTugboatFlag);
            $('#tugboatType').html(data.class.strTugboatType);
            $('#tugboatTradingArea').html(data.class.strTradingArea);
            $('#tugboatHomePort').html(data.class.strHomePort);
            $('#tugboatISPSCode').html(data.class.enumISPSCodeCompliance);
            $('#tugboatISMCode').html(data.class.enumISMCodeStandard);
            $('#tugboatID').val(data.main.intTugboatMainID);
            
            var cylcyc = data.specs.strCylinderperCycle;
            console.log(cylcyc.length);
            var split = cylcyc.split('/');
            var cylinder = split[0];
            var cycle = split[1];
               
            console.log('cylinder', cylinder);
            console.log('cycle', cycle);
            console.log(data.maxID.classID, 'incremented ID : ', data.maxID.classID + 1);
            console.log(data.maxID.mainID,'incremented ID : ',  data.maxID.mainID + 1);
            console.log(data.maxID.specsID, 'incremented ID : ', data.maxID.specsID + 1);
            console.log(data.maxID.tugboatID, 'incremented ID : ', data.maxID.tugboatID + 1);
        }
    });
    $('#infoModal').modal('show');

}

//Edit from Information Modal
function infoEdit(){
    console.log('HI');
    console.log($('#tugboatID').val());
    var id = $('#tugboatID').val();

    console.log('Requesting Data');
    console.log('Data Sent');

    $.ajax({
        url : "/tugboat/"+id+"/please",
        type : 'GET',
        dataType : 'JSON',
        success : function(data){
            console.log('Data Recieved',data);
            console.log('Drydocked',data.main.datLastDrydocked);
            console.log('classnum',data.class.strClassNum);
            console.log(data.class.strHomePort);
            
            $('#editName').val(data.main.strName);
            $('#infoModalLabel').val(data.main.strName);      
            $('#editLength').val(data.main.strLength);
            $('#editBreadth').val(data.main.strBreadth);
            $('#editDepth').val(data.main.strDepth);
            $('#editHorsePower').val(data.main.strDepth);
            $('#editMaxSpeed').val(data.main.strMaxSpeed);
            $('#editBollardPull').val(data.main.strBollardPull);
            $('#editGrossTonnage').val(data.main.strGrossTonnage);
            $('#editNetTonnage').val(data.main.strNetTonnage);
            $('#editLastDryDocked').val(data.main.datLastDrydocked);
            $('#editLicenseNumber').val(data.class.strClassNum);
            $('#editTugID').val(data.main.intTugboatMainID);
            
            $('#editLocBuilt').val(data.specs.strBuiltIn);
            $('#editDateBuilt').val(data.specs.strBuiltIn);
            $('#editBuilder').val(data.specs.strBuilder);
            $('#editMakerPower').val(data.specs.strMakerPower);
            $('#editHullMaterial').val(data.specs.strHullMaterial);
            $('#editDrive').val(data.specs.strDrive);
            $('#editAuxEngine').val(data.specs.strAuxEngine);
            var split = data.specs.strCylinderperCycle;
            splitted = split.split('/');
            cylinder = splitted[0];
            cycle = splitted[1];
            var a = cylinder.split(' ');
            var b = cycle.split(' ');
            cyl = a[0];
            cyc = b[0];
            console.log(cylinder);
            console.log(cycle);
            console.log(cyl);
            console.log(cyc);
            console.log(data.specs.strCylinderperCycle);
            $('#editCylinder').val(cylinder);
            $('#editCycle').val(cycle);
            $('#editClassNum').val(data.class.strClassNum);
            $('#editOfficialNum').val(data.class.strOfficialNum);
            $('#editIMONum').val(data.class.strIMONum);
            $('#editTradingArea').val(data.class.strTradingArea);
            $('#editType').val(data.class.strTugboatType);
            $('#editHomePort').val(data.class.strHomePort);
            $('#editIS')
            //$('input[name=addISPSCompliance]:checked').val(data.class.enumISPSCodeCompliance);
            
        }
    });
    $(document).ready(function(){
        $('#cardView').removeClass('active');
        $('#detView').addClass('active');
        $('#editLayout').css('display', 'block');
        $('#cardLayout').css('display', 'none');
        $('#detLayout').css('display', 'none');
        $('#searchBar').css('display', 'none');
        $('#selectViews').css('display', 'none');
        $('#infoModal').modal('hide');
    });
}

//Edit from card and table
function editData(findid){
    console.log('Requesting Data');
    console.log('Data Sent');
    $.ajax({
        url : "/tugboat/"+findid+"/please",
        type : 'GET',
        dataType : 'JSON',
        success : function(data){
            console.log('Data Recieved',data);
            console.log('Drydocked',data.main.datLastDrydocked);
            console.log('classnum',data.class.strClassNum);
            console.log(data.class.strHomePort);
            
            $('#editName').val(data.main.strName);
            $('#infoModalLabel').val(data.main.strName);      
            $('#editLength').val(data.main.strLength);
            $('#editBreadth').val(data.main.strBreadth);
            $('#editDepth').val(data.main.strDepth);
            $('#editHorsePower').val(data.main.strDepth);
            $('#editMaxSpeed').val(data.main.strMaxSpeed);
            $('#editBollardPull').val(data.main.strBollardPull);
            $('#editGrossTonnage').val(data.main.strGrossTonnage);
            $('#editNetTonnage').val(data.main.strNetTonnage);
            $('#editLastDryDocked').val(data.main.datLastDrydocked);
            $('#editLicenseNumber').val(data.class.strClassNum);
            $('#editTugID').val(data.main.intTugboatMainID);
            
            $('#editLocBuilt').val(data.specs.strBuiltIn);
            $('#editDateBuilt').val(data.specs.strBuiltIn);
            $('#editBuilder').val(data.specs.strBuilder);
            $('#editMakerPower').val(data.specs.strMakerPower);
            $('#editHullMaterial').val(data.specs.strHullMaterial);
            $('#editDrive').val(data.specs.strDrive);
            $('#editAuxEngine').val(data.specs.strAuxEngine);
            var split = data.specs.strCylinderperCycle;
            splitted = split.split('/');
            cylinder = splitted[0];
            cycle = splitted[1];
            var a = cylinder.split(' ');
            var b = cycle.split(' ');
            cyl = a[0];
            cyc = b[0];
            console.log(cylinder);
            console.log(cycle);
            console.log(cyl);
            console.log(cyc);
            console.log(data.specs.strCylinderperCycle);
            console.log(data.class.strClassNum);
            $('#editCylinder').val(cylinder);
            $('#editCycle').val(cycle);
            $('#editClassNum').val(data.class.strClassNum);
            $('#editOfficialNum').val(data.class.strOfficialNum);
            $('#editIMONum').val(data.class.strIMONum);
            $('#editTradingArea').val(data.class.strTradingArea);
            $('#editType').val(data.class.strTugboatType);
            $('#editHomePort').val(data.class.strHomePort);
            var checked = 'no';
            $('.editISPSForm').find($('input[value="'+data.class.enumISPSCodeCompliance+'"]')).attr('checked',true);
            $('.editISMForm').find($('input[value="'+data.class.enumISMCodeStandard+'"]')).attr('checked',true);
            //$('input[name=addISPSCompliance]:checked').val(data.class.enumISPSCodeCompliance);
            
        }
    });
    $(document).ready(function(){
        $('#cardView').removeClass('active');
        $('#detView').addClass('active');
        $('#editLayout').css('display', 'block');
        $('#cardLayout').css('display', 'none');
        $('#detLayout').css('display', 'none');
        $('#searchBar').css('display', 'none');
        $('#selectViews').css('display', 'none');
    });
}

//Create Tugboat
function postData(){
    $(document).ready(function(){     
        console.log('trying to submit data');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var classID = parseInt($('#classID').val());
        var mainID = parseInt($('#mainID').val());
        var specsID = parseInt($('#specsID').val());
        var tugboatID = parseInt($('#tugboatsID').val());
        console.log('Class ID : ', classID ,'incremented ID : ', classID+1);
        console.log('Main ID : ', mainID ,'incremented ID : ', mainID+1 );
        console.log('Specs ID : ', specsID ,'incremented ID : ', specsID+1);
        console.log('Tugboat ID : ', tugboatID ,'incremented ID : ', tugboatID+1);
        
        classID = classID + 1 ;
        mainID = mainID + 1;
        specsID = specsID + 1;
        tugboatID = tugboatID + 1;
        console.log(classID, mainID, specsID, tugboatID);
        
        var tugboatName = $('#sumName').html();
        var breadth = $('#sumBreadth').html();
        var depth = $('#sumDepth').html();
        var hp = $('#sumHorsePower').html();
        var maxspeed = $('#sumMaxSpeed').html();
        var bpull = $('#sumBollardPull').html();
        var gton = $('#sumGrossTonnage').html();
        var nton = $('#sumNetTonnage').html();
        var drydocked = $('#sumDryDocked').html();
        var licensenum = $('#sumLicenseNum').html();
        var licenseexp = $('#sumLicenseExp').html();

        $('#sumBuilt').html();
        var datebuilt = $('#sumDateBuilt').html();
        var makerpower = $('#sumMakerPower').html();
        var builder = $('#sumBuilder').html();
        var hullmaterial = $('#sumHullMaterial').html();
        var drive = $('#sumDrive').html();
        //$('#sumCylCycle').html(cylinder +' '+ cyl +'<br>'+ cycle +' per '+ cyc;
        var cylinder = $('#sumCylinder').val();
        var cycle = $('#sumCycle').val();
        var auxengine = $('#sumAuxEngine').val();

        var classnum = $('#sumClassNum').html();
        var officialnum = $('#sumOffNum').html();
        var imonum = $('#sumIMONum').html();
        var flag = $('#sumFlag').html();
        var type = $('#sumType').html();
        var tarea = $('#sumTradingArea').html();
        var home = $('#sumHomeport').html();
        var ispscomp = $('#sumISPS').html();
        var ismcode = $('#sumISMCode').html();
        var insurance = $('#sumInsurances').html();
        console.log ($('#editTugID'));
        console.log(cylinder);
        console.log(cycle);
        var cylcycle = cylinder +'/'+cycle;
        console.log(cylcycle);  
        $.ajax({
            url : "/tugboat/store",
            type : 'POST',
            aysnc : true,
            data : {"_token" : $('meta[name=_token]').attr('content'), 
                //Increment ID's
                tugboatID : tugboatID,
                classID : classID,                
                mainID : mainID,
                specsID : specsID,
                //TugboatMain
                tugboatName : tugboatName,
                length : length,
                breadth : breadth,
                depth : depth,
                horsePower : hp,
                maxSpeed : maxspeed,
                bollardPull : bpull,
                grossTonnage : gton,
                netTonnage : nton,
                lastDryDocked : drydocked,
                //class
                tugboatFlag : flag,
                tugboatType : type,
                classNum : classnum,
                officialNum : officialnum,
                imoNum : imonum,
                tradingArea : tarea,
                homePort : home, 
                ispsComp : ispscomp,
                ismCode : ismcode,
                //specs
                hullMaterial : hullmaterial,
                builder : builder,
                makerPower : makerpower,
                drive : drive,
                cylinderpercycle : cylcycle,
                auxEngine : auxengine,
                //builtIn : builtIn,
                
            },
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            },
            success : function(data){
                console.log('success pota');
                
                swal({
                    title: "Success",
                    text: "Data Submitted",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ok",
                    closeOnConfirm: true,
                    timer : 1000
                },
                function (){
                    window.location = "/tugboat";
                });
                
            },
            error : function(error){
                throw error;
                swal({
                    title: "Error",
                    text: "Data submission error",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Ok",
                    closeOnConfirm: true
                  });
            }

        }); 
    });
}

// Edit Picture 
function editPictureSubmit(){
    console.log('Trying to submit Data');
}

//Edit Main Information
function editMainInformationSubmit(){
    console.log('Trying to submit Data');
    
    var name = $('#editName').val();    
    var length = $('#editLength').val();
    var breadth= $('#editBreadth').val();
    var depth = $('#editDepth').val();
    var hp = $('#editHorsePower').val();
    var maxspeed = $('#editMaxSpeed').val();
    var bpull = $('#editBollardPull').val();
    var gton = $('#editGrossTonnage').val();
    var nton = $('#editNetTonnage').val();
    var drydocked = $('#editLastDryDocked').val();
    var licensenum = $('#editLicenseNumber').val();
    var id = parseInt($('#editTugID').val());
    console.log ('The ID is : ' , id);
    
    console.log(name, '|' ,length, '|', breadth, '|',depth, '|', hp , '|', maxspeed,'|',bpull,'|',gton,'|',nton,'|',drydocked,'|',licensenum);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url : '/tugboat/maininfo',
        type : 'POST',
        aysnc : true,
        data : {
            "_token" : $('meta[name=_token]').attr('content'),
            mainID : id,
            tugboatName : name,
            length : length,
            breadth : breadth,
            depth : depth,
            horsePower : hp,
            maxSpeed : maxspeed,
            bollardPull : bpull,
            grossTonnage : gton,
            netTonnage : nton,
            lastDryDocked : drydocked
        },
        beforeSend: function (request) {
            return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
        },
        success : function(data,response){
            toastr.success(name +"'s Main Information was Updated",'Success', { positionClass: 'toast-top-right', preventDuplicates: true, });    
            //window.location.reload(true);
        },
        error : function(error){
            throw error;
        }
    })
}

//Edit Specifications
function editSpecificationSubmit(){
    console.log('Trying to submit Data');
    var name = $('#editName').val();
    var datebuilt = $('#editLocBuilt').val();
    var locbuilt = $('#editDateBuilt').val();
    var builder = $('#editBuilder').val();
    var makerpower = $('#editMakerPower').val();
    var hullmaterial = $('#editHullMaterial').val();
    var cylinder = $('#editCylinder').val();
    var cycle = $('#editCycle').val();
    var drive = $('#editDrive').val();
    var auxengine = $('#editAuxEngine').val();
    var id = parseInt($('#editTugID').val());
    var cylcycle = cylinder +'/'+ cycle ;
    console.log(cylcycle);
    console.log(id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url : '/tugboat/specifications',
        type : 'POST',
        aysnc : true,
        data : {
            "_token" : $('meta[name=_token]').attr('content'),
            specsID : id,
            builtIn : datebuilt,
            hullMaterial : hullmaterial,
            builder : builder,
            makerPower : makerpower,
            drive : drive,
            cylinderpercycle : cylcycle,
            auxEngine : auxengine,
        },
        beforeSend: function (request) {
            return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
        },
        success : function(data,response){
            toastr.success(name +"'s Specifications was Updated",'Success', { positionClass: 'toast-top-right', preventDuplicates: true, });    
            //window.location.reload(true);
        },
        error : function(error){
            throw error;
        }
    })
}

//Edit Classification
function editClassificationSubmit(){
    console.log('Trying to submit Data');
    var id = parseInt($('#editTugID').val());
    var officialnum = $('#editOfficialNum').val();
    var classnum = $('#editClassNum').val();
    var imonum = $('#editIMONum').val();
    var tarea = $('#editTradingArea').val();
    var type = $('#editType').val();
    var home = $('#editHomePort').val();
    var name = $('#editName').val();
    var ispscomp = $('input[name=editISPSCompliance]:checked').val();
    var ismcode = $('input[name=editCStandard]:checked').val();
    console.log(id, ispscomp, ismcode);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url : '/tugboat/classification',
        type : 'POST',
        aysnc : true,
        data : {
            "_token" : $('meta[name=_token]').attr('content'),
            classID : id,
            // tugboatFlag : flag,
            tugboatType : type,
            classNum : classnum,
            officialNum : officialnum,
            imoNum : imonum,
            tradingArea : tarea,
            homePort : home, 
            ispsComp : ispscomp,
            ismCode : ismcode  
        },
        beforeSend: function (request) {
            return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
        },
        success : function(data,response){
            toastr.success(name +"'s Specifications was Updated",'Success', { positionClass: 'toast-top-right', preventDuplicates: true, });    
            //window.location.reload(true);
        },
        error : function(error){
            throw error;
        }
    })

}
function deleteTugboat(deleteID){
    console.log('hi');
    console.log('Trying to Delete Data');
    console.log(deleteID);
    $.ajax({
        url : '/tugboat/'+deleteID+'/delete',
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
                window.location = '/tugboat'  
            })
        },
        error : function(error){
            throw error;
        }
    })

}