const target1 = document.getElementById("myImage1");
const preview1 = document.getElementById("preview1");
target1.addEventListener("change", (e) => {
    const url = URL.createObjectURL(e.target.files[0]);
    preview1.style.backgroundImage = `url(${url})`;
});