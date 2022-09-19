$(document).ready(function () {
    validate();
    $('#Email, #uploadfile').change(validate);

    $("#submit").click(function () {
        let file_data = $('#uploadfile').prop('files')[0];
        let user_email = $('#Email').val();
        let form_data = new FormData();                  
        form_data.append('myfile', file_data);
        form_data.append('email', user_email);                            
        $.ajax({
            url: './upload.php',
            dataType: 'text',  
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,                         
            type: 'POST',
            success: function(response){
                if(response == "Succesfull") {
                    alert("File uploaded succesfully");
                    $.ajax({
                        url: './database/retrieve_last_record.php',
                        dataType: 'text',
                        type: 'POST',
                        success: function(response_retrieve_record) {
                            if($("tbody tr td:first").text() == "Empty") {
                                $("tbody").html(response_retrieve_record);
                            } else {
                                $("tbody").append(response_retrieve_record);
                            }
                        },
                        error: function(err) {
                            alert("Error while fetching data from db " + err);
                        }
                    });
                }
                else {
                    alert(response);
                }
            },
            error: function(err) {
                alert("Error While uploading file");
            }
        });
        clear_fields();
        validate();
    });
});


function clear_fields() {
    $('#Email').val("");
    $('#uploadfile').val("");
}

function validate() {
    let emailIsValid = validateEmail();
    let fileIsValid = validateUploadFile();

    if(emailIsValid && fileIsValid) {
        $("#submit").prop("disabled", false);
    }
    else {
        $("#submit").prop("disabled", true);
    }
}

function validateEmail(){
    const email = document.getElementById('Email');
    let validateEmailFlag = false;

    if ($('#Email').val().length > 0) {
        const email = document.getElementById('Email');
        let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
        let s = email.value;

        if(regex.test(s)) {
            email.classList.remove('is-invalid');
            email.classList.add('is-valid');
            validateEmailFlag = true;
        }
        else {
            email.classList.remove('is-valid');
            email.classList.add('is-invalid');
            validateEmailFlag = false;
        }
    }
    else {
        email.classList.remove('is-valid');
        validateEmailFlag = false;
    }
    return validateEmailFlag;
}

function validateUploadFile() {
    const file = document.getElementById('uploadfile');
    
    if($('#uploadfile').val().length > 0) {
        let fileName = file.value;
        let extension = fileName.split('.').pop();
        
        if(extension == "doc" || extension == "docx" || extension == "xlsx") {
            file.classList.remove('is-invalid');
            file.classList.add('is-valid');
            return true;
        }
        else {
            file.classList.remove('is-valid');
            file.classList.add('is-invalid');
            return false;
        }
    } 
    else {
        file.classList.remove('is-valid');
        return false;
    }
}