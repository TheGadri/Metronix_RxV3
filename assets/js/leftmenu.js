var base_url = 'http://localhost:80/Metronix_RxV3/';


function current_show() {
    $(".fakeloader").css("visibility", "visible");
}

function current_opac() {
    $(".fakeloader").css("visibility", "hidden");
}

function hideLoader(){
    $(".modal").removeClass('show');
    $(".modal-backdrop").remove();
}

function getstep(act, id, id2) {
    hideLoader();
    current_show();
    $.ajax({
        type: "POST",
        url: base_url + 'getstep.php',
        data: $('form').serialize() + "&act=" + act + "&id=" + id + "&idd2=" + id2,
        success: function (msg) {
            //changed insert form #currentarea to #kt_content
            $("#currentarea").html(msg);
            //current_opac();
            // Materialize.toast('Success! Patient Information Saved.', 4000, 'success');
        }
    });
}
//replacing principal/dependent when user click on addnew dependent
function get_content(sender){
    if (sender == 'add_dependent'){
        $('#default').addClass('d-none');
        $("#add_dependent").removeClass('d-none');
    }else if (sender == 'view_dependent'){
        $('#add_dependent').addClass('d-none');
        $("#default").removeClass('d-none');
    }
}

//replacing principal/dependent when user click on addnew dependent
function get_content_billing(sender){
    if (sender == 'add_new_bill'){
        $('#default').addClass('d-none');
        $("#add_new_bill").removeClass('d-none');
    }else if (sender == 'view_bill'){
        $('#add_new_bill').addClass('d-none');
        $("#default").removeClass('d-none');
    }
}

function get_content_payment(sender){
    if (sender == 'add_new_payment'){
        $("#default_payment").addClass('d-none');
        $("#add_new_payment").removeClass('d-none');
    }else if (sender == 'view_payment'){
        $("#add_new_payment").addClass('d-none');
        $("#default_payment").removeClass('d-none');
    }
}

$("#visitType").change(function(){
    alert("sd" );
});
