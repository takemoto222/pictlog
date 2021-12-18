const target = document.getElementsByClassName("post_img");
const preview = document.getElementsByClassName("test_img");
for (i = 0; i < 5; i++) {
    target[i].addEventListener("change", function (e) {
        const url = URL.createObjectURL(e.target.files[0]);
        preview[i].style.backgroundImage = `url(${url})`;
    });
}