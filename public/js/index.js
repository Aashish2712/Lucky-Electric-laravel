const prevBtn = document.querySelector(".btn-scroll.prev");
const nextBtn = document.querySelector(".btn-scroll.next");
const productSection = document.querySelector(".product-section");

prevBtn.addEventListener("click", () => {
    productSection.scrollBy({
        left: -250,
        behavior: "smooth",
    });
});

nextBtn.addEventListener("click", () => {
    productSection.scrollBy({
        left: 250,
        behavior: "smooth",
    });
});
