let slider = tns({
    container: ".my-slider",
    "slideBy": 1,
    "speed": 400,
    "nav": false,
    controlsContainer: "#controls",
    prevButton: ".previous",
    nextButton: ".next",
    responsive: {
        1600: {
            item: 4,
            gutter: 20
        },
        1024: {
            item: 3,
            gutter: 20
        },
        768: {
            item: 2,
            gutter: 20
        },
        480: {
            item: 1

        }
    }

})