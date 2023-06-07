document.getElementById("genre").addEventListener("change", function() {
    var genre = this.value;
    if (genre === "au") {
        window.location.href = "action.php";
    } else if (genre === "ad") {
        window.location.href = "adventure.php";
    } else if (genre === "an") {
        window.location.href = "animation.php";
    } else if (genre === "sf") {
        window.location.href = "sciencefiction.php";
    }
});