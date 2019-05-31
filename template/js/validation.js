function f_submit() {


    var width = document.forms["frm"].width.value;
    var height = document.forms["frm"].height.value;
    var radius = document.forms["frm"].radius.value;

    if (!width || !isNumber(width)) {
        window.alert("Please enter correct width!");
        return false;
    }
    if (!height || !isNumber(height)) {
        window.alert("Please enter correct  height!");
        return false;
    }
    if (!radius || !isNumber(radius)) {
        window.alert("Please enter correct radius!");
        return false;
    }
    if (radius > (width / 2)) {
        window.alert("Please enter radius less then half width!");
        return false;
    }
    if (radius > (height / 2)) {

        window.alert("Please enter radius less then half height!");
        return false;
    }

}

function isNumber(str) {
    if (isNaN(str))
        return false;
    return true;
}


