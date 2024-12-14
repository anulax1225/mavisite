import './bootstrap';

window.addEventListener("scroll", () => {
    document.body.style.setProperty(
    "--scroll",
    window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
    );
});

function themeToggle() {
    document.querySelector("html").classList.toggle("dark");
    document.querySelector("#btn-theme").querySelector("img").setAttribute("src", 
        document.querySelector("html").classList.contains("dark") ?
        "/img/dark.svg" : "/img/light-2.svg"
    )
}

window.themeToggle = themeToggle;