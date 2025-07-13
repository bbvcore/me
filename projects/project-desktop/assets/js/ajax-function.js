
/*
        Project: Desktop web
        Author: Borja Bas Ventín
*/
/***********************************************************************************
                                AJAX OBJECT
/**********************************************************************************/
// Creating a new ajax object
// 1.- Only with a one function
function ajaxObject () { 
    let objectNew;
    if (XMLHttpRequest) {
        // Standard method (support by all modern browsers)
        objectNew = new XMLHttpRequest();
    }else if (!XMLHttpRequest) { 
        // Microsoft method one
        objectNew = new ActiveXObject(Microsoft.XMLHTTP);
        }else{
        // Microsoft method two
        objectNew = new ActiveXObject(Msxml2.XMLHTTP);
        }
        // Return the created ajax object
        console.log(objectNew);
        return objectNew;
}

