/**
 * Created by sachin on 6/1/2016.
 */
var map,autocomplete,input;

$(function(){
    $('#pac-input').keypress(function(e) {
        if (e.keyCode == '13') {
            input = document.getElementById('pac-input');
            var firstResult = $(".pac-container .pac-item:first").text();
            $(".pac-container .pac-item:first").addClass("pac-selected");
            input.value = firstResult;
            latLong(firstResult);
        }
    });
});

function latLong(address){
    address = address.replace(/[^\w\s]/gi, " ");
    var splitAddress = address.split(" ");
    var finalAddress = "";
    for(var i=0;i<splitAddress.length;i++){
        splitAddress[i] = splitAddress[i].trim();
        if(splitAddress[i]!=""){
            splitAddress[i] = splitAddress[i].trim();
            if(splitAddress[i].indexOf("Kathmandu")!=-1 && splitAddress[i].length>9){
                var firstPart = splitAddress[i].substr(0,splitAddress[i].indexOf("Kathmandu"));
                var ktmPart = splitAddress[i].substr(splitAddress[i].indexOf("Kathmandu"),splitAddress[i].length);
                finalAddress+=firstPart+"+"+ktmPart;
            }else{
                finalAddress+=splitAddress[i];
            }
            if(i!=splitAddress.length-1){
                finalAddress+="+";
            }
        }
    }
    var fetchLatLng = "https://maps.googleapis.com/maps/api/geocode/json?address="+finalAddress+"";
    console.log(fetchLatLng);
    $.getJSON(fetchLatLng, function( json ) {
        if(json.status=="OK"){
            var location = json.results[0].geometry.location;
            var latlong = {lat:location.lat,lng:location.lng};
            map.setCenter(latlong);
            map.setZoom(18);
            $('#pac-input').attr("disabled",true);
            if(address.indexOf("Kathmandu")!=-1){
                var indexOfKtm = address.indexOf("Kathmandu");
                if(address.charAt(indexOfKtm)!=" "){
                    address = address.substr(0,indexOfKtm)+" "+address.substr(indexOfKtm,address.length)
                }

            }
            input.value = address;
            if(address.length<20){
                var marker = new MarkerWithLabel({
                    position: latlong,
                    map: map,
                    labelContent:address,
                    labelAnchor: new google.maps.Point(22, 0),
                    labelClass: "hostelLabel", // the CSS class for the label
                });
            }else{
               var marker = new google.maps.Marker({
                   position: latlong,
                   map: map,
                   title:address
               });
            }

        }else{
            var message = "<span style='color: red;'>Map Not Available</span>";
            $("#hostelMap").append(message);
        }
    });
}

function initialize(lat,lng,location,name) {
    var lat = lat;
    var long = lng;
    var myLatLng = {lat: lat, lng: long};
    var mapProp = {
        center:new google.maps.LatLng(lat,long),
        zoom:18,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    map=new google.maps.Map(document.getElementById("hostelMap"),mapProp);
    geocoder = new google.maps.Geocoder();
    if(lat!=27.7172 && long!=85.3240) {
        $('#pac-input').hide();
        var marker = new MarkerWithLabel({
            position: myLatLng,
            map: map,
            labelContent: name,
            labelAnchor: new google.maps.Point(22, 0),
            labelClass: "hostelLabel", // the CSS class for the label
        });

    }else{
        var input = document.getElementById('pac-input');
        autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        autocomplete.addListener('place_changed', function() {

        });
        input.value=location;
        setTimeout(
            function()
            {
                var e = jQuery.Event("keypress");
                e.which = 13; //choose the one you want
                e.keyCode = 13;
                $("#pac-input").keypress();
                $("#pac-input").trigger(e);
            }, 4000);
    }

}