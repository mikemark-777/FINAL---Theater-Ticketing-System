function verify() {
    var isLoggedIn= localStorage.getItem("loggedIn");

    if(!isLoggedIn) {
        alert("Please Login First!");
    }
    else {
        window.location.href = "../pages/movies.html";
    }
}