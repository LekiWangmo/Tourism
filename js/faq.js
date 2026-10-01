document.addEventListener('DOMContentLoaded', function () {
    const collapsibles = document.querySelectorAll('.collapsible-btn');

    collapsibles.forEach(function (button) {
        button.addEventListener('click', function () {
            const content = button.nextElementSibling;

            // Close all other content sections
            const allContents = document.querySelectorAll('.content');
            allContents.forEach(function (otherContent) {
                if (otherContent !== content) {
                    otherContent.style.display = 'none';
                }
            });

            // Toggle the clicked section
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }

            // Toggle active class for the button
            button.classList.toggle('active');
        });
    });
});