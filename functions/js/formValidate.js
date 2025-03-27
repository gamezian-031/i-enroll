function validateForm(){
    var status = true;

    const regex = /^[\w\-_.,@\s]+$/;
    var inputs = document.querySelectorAll("#formText");
    for (var i=0; i<inputs.length; i++){
        if (inputs[i].value == "" || !regex.test(inputs[i].value)){
            alert("Invalid Characters in input");
            status = false;
        }
    }

    /*
    var number = document.querySelector("#contactNo").value;
    
    if(number == ''){
        alert("No Contact Number Input");w
        status = false;
    }else{
        if(number.substring(0,2) != "09"){
            alert("Invalid Number Prefix");
            status = false;
        }
    }
    */
    return status;
}
