function getUserData() {
    var user= localStorage.getItem("user");
    document.getElementById("userName").innerHTML = user;
}