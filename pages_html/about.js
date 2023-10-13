
function showItems() {
    var x = document.getElementById("hide");
    var btn = document.getElementById("btn-list");
    if (x.style.display === "none") {
        x.style.display = "block";
        btn.textContent = "Hide"
    } else {
        x.style.display = "none";
        btn.textContent = "View more"
    }
}