let year = document.querySelector("#year");
if (year) {
	year.innerHTML = (new Date).getFullYear();
}

window.addEventListener("load", () => {
	window.addEventListener("offline", () => {
		alert("you are seem offline. check your internet connection");
	});
});