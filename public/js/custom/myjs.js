// image preview
$(".image").change(function() {

    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);
    }

});

$(document).ready(function() {
    var elem = $(".tasks-overflow");
    if (elem) {
        if (elem.text().length > 10)
            elem.text(elem.text().substr(0, 10) + "...")
    }
});