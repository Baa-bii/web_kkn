import './bootstrap';
import 'flowbite';

function changePreview(imageSrc, templateSrc) {
    let previewImage = document.getElementById('previewImage');
    let templatePath = document.getElementById('templatePath');
    if (previewImage) {
        previewImage.src = imageSrc;
        templatePath.href = templateSrc;
    } else {
        console.error("Preview image element not found");
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    console.log("DOM fully loaded and parsed");
    
    // Add event listeners to the image elements
    document.querySelectorAll('.template-image').forEach(image => {
        image.addEventListener('click', function() {
            let imageSrc = this.getAttribute('data-image-src');
            let templateSrc = this.getAttribute('data-template-src')
            changePreview(imageSrc, templateSrc);
        });
    });
});