let year = document.querySelector("#year");
if (year) {
	year.innerHTML = (new Date).getFullYear();
}

window.addEventListener("load", () => {
	window.addEventListener("offline", () => {
		alert("you are seem offline. check your internet connection");
	});
});

// let sidebarToggle = document.querySelector('#sidebarToggle');
// let sidebar = document.querySelector('#sidebar');
// let sm = window.matchMedia("(max-width: 640px)");

// if (sidebar) {
// 	sidebarToggle.addEventListener('click', () => {
// 		(sidebar.style.display === "none") ? sidebar.style.display = "block"
// 			: sidebar.style.display = "none";
// 	});

// 	sm.addEventListener('change', (event) => {
// 		if (event.matches) {
// 			sidebar.style.display = "none";
// 		} else {
// 			sidebar.style.display = "block"
// 		}
// 	});
// }

const deleteTopics = document.querySelectorAll('#delete-topics');

if (deleteTopics) {
	for (const topic of deleteTopics) {
		topic.addEventListener('click', function onClick() {
			Swalfire('Any fool can use a computer');
		});
	}
}

		// event.defaultPrevented;
		// Swal.fire({
		// 	title: 'Are you sure?',
		// 	text: "You won't be able to revert this!",
		// 	icon: 'warning',
		// 	showCancelButton: true,
		// 	confirmButtonColor: '#3085d6',
		// 	cancelButtonColor: '#d33',
		// 	confirmButtonText: 'Yes, delete it!'
		// }).then((result) => {
		// 	if (result.isConfirmed) {
		// 		deleteTopics.click();
		// 	}
		// })
