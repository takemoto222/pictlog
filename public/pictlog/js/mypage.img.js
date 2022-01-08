const target = document.getElementById("myImage");
const preview = document.getElementById("preview");
target.addEventListener("change", (e) => {
    const url = URL.createObjectURL(e.target.files[0]);
    preview.style.backgroundImage = `url(${url})`;
});
//マイページ画像のプレビュー　未完成