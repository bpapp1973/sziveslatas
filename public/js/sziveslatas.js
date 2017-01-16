function addTag(element) {
    var name = $('#tagInput').val();
    if (name != '') {
        document.getElementById("hiddentags").value += "#" + name;
        $('#tags').append('<div id="tag"><div id="name">' + name + '</div><div id="delete" onclick="deleteTag(this);">x</div></div>');
        $('#tagInput').val('');
    }
}

function deleteTag(element) {
    var name = $(element).parent().find('#name').text();
    $(element).parent().remove();

    var tags = $('#hiddentags').val();
    var tagArray = tags.split("#");
    var pos = tagArray.indexOf(name);
    tagArray.splice(pos, 1);
    var newTags = tagArray.join("#");
    $('#hiddentags').val(newTags);
}

function toggleElements(newCategoryId) {
    mainCategories = new Array('accomodation','catering','eventlocation','program');
    for(i=0;i<mainCategories.length;i++) {
        if (newCategoryId == i+1) {
            $('#'+mainCategories[i]).show();
        } else {
            $('#'+mainCategories[i]).hide();
        }
    }
}


drpoptions={
    "showDropdowns": true,
    "showISOWeekNumbers": true,
    "alwaysShowCalendars": true,
    "timePicker": true,
    "timePicker24Hour": true,
    "timePickerIncrement": 30,
    "minDate": new Date(),
    "maxDate": new Date("{!! $ads->expireson !!}"),
    "locale": {
        "format": "YYYY-MM-DD HH:mm:ss",
        "separator": " - ",
        "applyLabel": "Alkalmaz",
        "cancelLabel": "Mégsem",
        "fromLabel": "Tól",
        "toLabel": "Ig",
        "customRangeLabel": "Custom",
        "weekLabel": "H",
        "daysOfWeek": [
            "V",
            "H",
            "K",
            "Sz",
            "Cs",
            "P",
            "Sz"
        ],
        "monthNames": [
            "Január",
            "Február",
            "Március",
            "Április",
            "Május",
            "Június",
            "Július",
            "Augusztus",
            "Szeptember",
            "Október",
            "November",
            "December"
        ],
        "firstDay": 1
    },    
};