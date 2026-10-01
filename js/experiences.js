document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".image-wrapper"); // Select all the images
    let currentCenter = document.querySelector(".center"); // Get the current center image

    // Function to swap the images' positions and sizes
    function swapImages(clickedImage) {
        if (clickedImage !== currentCenter) {
            // Get the sizes of the clicked image and the center image
            const clickedImageSize = {
                width: clickedImage.style.width,
                height: clickedImage.style.height
            };

            const centerImageSize = {
                width: currentCenter.style.width,
                height: currentCenter.style.height
            };

            // Swap the sizes
            clickedImage.style.width = centerImageSize.width;
            clickedImage.style.height = centerImageSize.height;

            currentCenter.style.width = clickedImageSize.width;
            currentCenter.style.height = clickedImageSize.height;

            // Swap the "order" of the clicked image and the center image
            const clickedOrder = clickedImage.style.order;
            const centerOrder = currentCenter.style.order;

            clickedImage.style.order = centerOrder;
            currentCenter.style.order = clickedOrder;

            // Swap the "center" class to the clicked image
            currentCenter.classList.remove("center");
            clickedImage.classList.add("center");

            // Update currentCenter reference to the new center image
            currentCenter = clickedImage;
        }
    }

    // Initially, set Image3 as the center image
    document.querySelector(".image3").classList.add("center");

    // Set initial order for the images
    let order = 0;
    images.forEach(image => {
        image.style.order = order++;
    });

    // Add click event listeners to all images
    images.forEach(image => {
        image.addEventListener("click", function () {
            swapImages(image);
        });
    });
});