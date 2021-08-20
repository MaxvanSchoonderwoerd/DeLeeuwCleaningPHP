window.addEventListener('load', init)

function init() {
    const slider = document.getElementById("slider")
    const foregroundImg = document.getElementsByClassName("img foreground-img")
    const sliderButton = document.getElementsByClassName("slider-button")

    console.log(foregroundImg)
    slider.addEventListener("input", (e) => {
        let sliderPos = e.target.value

        // Update the width of the foreground image
        foregroundImg[0].style.width = `${sliderPos}%`

        // Update the position of the slider button
        sliderButton[0].style.left = `calc(${sliderPos}% - 18px)`
    })
}

