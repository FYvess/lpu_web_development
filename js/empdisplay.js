document.getElementById('uploadfile').addEventListener('change', displayImage);

function displayImage() {
    var fileInput = document.getElementById('uploadfile');
    var picBox = document.getElementById('pic-box');
    var picPathInput = document.getElementById('picpath');

    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            picBox.style.backgroundImage = 'url(' + e.target.result + ')';
            picBox.style.backgroundSize = 'cover';

            // Update the value of the picpath input with only the image URL
            var imageUrl = e.target.result;
            picPathInput.value = imageUrl;
        };
        reader.readAsDataURL(fileInput.files[0]);
    }
}
