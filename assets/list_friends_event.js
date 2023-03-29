const searchBar = document.querySelector(".search input");
const searchIcon = document.querySelector(".search button");
const usersList = document.querySelector(".users-list");

setInterval(() => {
	let xhr = new XMLHttpRequest();
	xhr.open("POST", 'api/list_friends.php', true);
	xhr.onload = () => {
		if((xhr.readyState === XMLHttpRequest.DONE) && (xhr.status === 200)){
            usersList.innerHTML = xhr.response;
		}
	}
	xhr.send();
}, 500);