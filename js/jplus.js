/**
 * Created by Frederik on 12/05/2014.
 */



function validate() {
    var text = document.getElementById("password");
    var lentext = text.value.length;
    if (lentext < 6) {
        //red
        text.style.backgroundColor = "#FF0000";
    }
    else {
        //green
        text.style.backgroundColor = "#00FF00";
    }
}