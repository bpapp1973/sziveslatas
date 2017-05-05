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

function init() {
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
            geocodeAddress(geocoder);
        });
        document.getElementById('city').addEventListener('change', function() {
            geocodeAddress(geocoder);
        });
        document.getElementById('address').addEventListener('change', function() {
            geocodeAddress(geocoder);
        });
    }

function geocodeAddress(geocoder) {
    //alert("geocodeAddress");
    var city = document.getElementById('city');
    var cityText = city.options[city.selectedIndex].text;
    var address = document.getElementById('address').value;
    try {
        geocoder.geocode({'address': cityText+' '+address}, function(results, status) {
            if (status === 'OK') {
                document.getElementById('zipcode').value=results[0]["address_components"][4]["long_name"];
            } else {
                alert('Az irányítószám lekérdezése nem sikerült: ' + status);
            }
        });

    } catch(e) {
        alert('Error: '+e);
    }
}
