<script>


    if (localStorage.getItem("visited") === null) {
        // If the user hasn't visited before, set a flag in localStorage
        localStorage.setItem("visited", "true");
    } else {
        // If the user has visited before, change the logo color
        const logo = document.getElementById("logo");
        logo.style.filter = "hue-rotate(180deg)"; // Change the color (in this case, a hue rotation)
    }
</script>
