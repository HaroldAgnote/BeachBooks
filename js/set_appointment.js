var request_id = 0;

function set_appointment(clicked_id) {
    console.log(clicked_id);
    request_id = clicked_id.split('_')[1];
    console.log(request_id)
    console.log(typeof(request_id));
    var hide_id = "request_";
    hide_id += request_id;
    hide_id += "_hide";
    var hide_element = document.getElementById(hide_id);
    hide_element.value = request_id;
}

