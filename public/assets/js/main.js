// scroll to top button
(()=>{
    document.addEventListener("DOMContentLoaded", () => {
        const scrollToTopBtn = document.getElementById("scrollToTop");
        const rootElement = document.documentElement;
        const bodyElement = document.body;
        const progressBar = document.getElementById("progress-bar");
        const pathLength = document.querySelector("#progress-bar > svg > path").getTotalLength();

        scrollToTopBtn.addEventListener("click", () => {
            rootElement.scrollTo({ top: 0, behavior: "smooth" });
        });

        document.addEventListener("scroll", () => {
            const scrollAmount = pathLength / 100;
            const scrollPosition = Math.round(
                ((rootElement.scrollTop || bodyElement.scrollTop) /
                ((rootElement.scrollHeight || bodyElement.scrollHeight) -
                    innerHeight)) * 100 *scrollAmount
            );

            if (scrollPosition > 5) {
                scrollToTopBtn.classList.add("showBtn");
                progressBar.style.setProperty("--scrollAmount", scrollPosition + "px");
            } else {
                scrollToTopBtn.classList.remove("showBtn");
            }
        });
    })
})();

// handle header toggle menu
(()=>{
    const toggleMenu = document.getElementById("toggle-menu");
    toggleMenu.addEventListener("click", ()=>{
        toggleMenu.classList.toggle("active");
        document.querySelector(".header-form").classList.toggle("active");
    })
})();

// secondary nav handeling
(()=>{
    const menuButtonsList= document.querySelectorAll("#secondary-nav .main-btn-nav");
    menuButtonsList.forEach(btn => {
        btn.addEventListener("click", (e) => {
            menuButtonsList.forEach(btn=>btn.classList.remove("active"));
            e.target.classList.toggle("active");
        });
    });
})();