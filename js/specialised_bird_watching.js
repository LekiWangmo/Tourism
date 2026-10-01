const accordionItems = document.querySelectorAll(".accordion-item");

accordionItems.forEach(item => {

    const header = item.querySelector(".accordion-header");

    header.addEventListener("click", () => {

        const isActive = item.classList.contains("active");

        // Close all accordion items
        accordionItems.forEach(i => {
            i.classList.remove("active");
        });

        // Open the clicked one
        if(!isActive){
            item.classList.add("active");

            // Auto scroll to the opened item
            setTimeout(() => {
                item.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }, 200);
        }

    });

});