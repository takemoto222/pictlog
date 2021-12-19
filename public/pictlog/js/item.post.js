const target1 = document.getElementById("myImage1");
const preview1 = document.getElementById("preview1");
target1.addEventListener("change", (e) => {
    const url = URL.createObjectURL(e.target.files[0]);
    preview1.style.backgroundImage = `url(${url})`;
});


const target2 = document.getElementById("myImage2");
const preview2 = document.getElementById("preview2");
target2.addEventListener("change", (e) => {
    const url = URL.createObjectURL(e.target.files[0]);
    preview2.style.backgroundImage = `url(${url})`;
});

const target3 = document.getElementById("myImage3");
const preview3 = document.getElementById("preview3");
target3.addEventListener("change", (e) => {
    const url = URL.createObjectURL(e.target.files[0]);
    preview3.style.backgroundImage = `url(${url})`;
});

const target4 = document.getElementById("myImage4");
const preview4 = document.getElementById("preview4");
target4.addEventListener("change", (e) => {
    const url = URL.createObjectURL(e.target.files[0]);
    preview4.style.backgroundImage = `url(${url})`;
});


const target5 = document.getElementById("myImage5");
const preview5 = document.getElementById("preview5");
target5.addEventListener("change", (e) => {
    const url = URL.createObjectURL(e.target.files[0]);
    preview5.style.backgroundImage = `url(${url})`;
});
