const setname = document.querySelector(".setname");
const form_setting_name = document.querySelector(".form_setting_name");
const cancel_setting_name = document.querySelector(".form_setting_button .cancel");

const update_avt = document.querySelector(".update_avt");
const form_setting_img = document.querySelector(".form_setting_img");
const cancel_setting_img = document.querySelector(".form_setting_img_button .cancel");

const delete_user = document.querySelector(".delete_user");
const form_setting_delete_user = document.querySelector(".form_setting_delete_user");
const cancel_delete_user = document.querySelector(".form_setting_delete_user_button .cancel");




setname.onclick = function(){
	form_setting_name.classList.add("active");
	
}

cancel_setting_name.onclick = function(){
	form_setting_name.classList.remove("active");
	
}

update_avt.onclick = function(){
	form_setting_img.classList.add("active");
	
}


cancel_setting_img.onclick = function(){
	form_setting_img.classList.remove("active");

	
}

delete_user.onclick = function(){
	form_setting_delete_user.classList.add("active");
	
}


cancel_delete_user.onclick = function(){
	form_setting_delete_user.classList.remove("active");

	
}


