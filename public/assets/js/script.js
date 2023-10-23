
document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("body").style.overflow = "hidden";
        document.querySelector(".loader-container").style.visibility = "visible";
    } else {
        document.querySelector(".loader-container").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
        document.querySelector("body").style.overflow = "visible";
        document.querySelector(".intro-left").classList.add("animate__fadeInLeft");
        document.querySelector(".intro-right").classList.add("animate__fadeInRight");
    }
};
