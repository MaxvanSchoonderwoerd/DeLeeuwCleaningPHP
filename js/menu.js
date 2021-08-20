window.addEventListener('load', init)

function init(){
    let body = document.body
    body.addEventListener("click", clickHandler)
}


function clickHandler(e){
    let target = e.target
    console.log(target)
    if (target.id === "hamburgerBtn"){
        menu()
    }
}

function menu() {
    let links = document.getElementById("hamburgerLinks")
        links.classList.toggle("animate-in")
        links.classList.toggle("animate-out")
}