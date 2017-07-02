function loop_picture()
{
	setInterval(change_image, 7500);
}

function change_image()
{ 
	var image_src = document.getElementById("loop_picture_img").getAttribute("src");
	var current_image_number = image_src.substring(image_src.lastIndexOf("/") + 1, image_src.lastIndexOf("/") + 2);

	if(current_image_number == 3)
	{
		current_image_number = 0;
	}

	var new_image = "slide_show/" + (Number(current_image_number) + 1) 
	+ ".jpg";
	document.getElementById("loop_picture_img").setAttribute("src", new_image);

}