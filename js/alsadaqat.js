//common urls
//var getCitisUrl = false;
//var YII_CSRF_TOKEN = false;

//update cities drop down list
function updateCitiesDropDown(country_id, listId, empty_text) {
    jQuery.ajax({
        type : "GET",
        url  : getCitisUrl,
        data : {
            country_id : country_id,
            YII_CSRF_TOKEN : YII_CSRF_TOKEN
        }
    }).done(function(response) {

        var new_options = '';

        if (empty_text)
            new_options += '<option value = "">' + empty_text + '</option>';

        $.each($.parseJSON(response), function(id, name) {
            new_options += '<option value = "' + id + '">' + name + '</option>';
        });

        $('#'+listId).empty().append(new_options);

    });
}

function showPhoto(photo) {
    if ( photo != '' ) {
        photo = photo.replace("_", ""); 
        window.open(photo);
    }

}

function updateDesireDropDown(URL, listId, empty_text, country_id) {
    jQuery.ajax({
        type : "GET",
        url  : URL,
        data : {
            country_id : country_id,
            YII_CSRF_TOKEN : YII_CSRF_TOKEN
        }
    }).done(function(response) {

        var new_options = '';

        if (empty_text)
            new_options += '<option value = "">' + empty_text + '</option>';

        $.each($.parseJSON(response), function(id, name) {
            new_options += '<option value = "' + id + '">' + name + '</option>';
        });

        $('#'+listId).empty().append(new_options);

    });
}