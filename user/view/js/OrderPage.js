var Categories="";
var Products=""
loadcategory();
loadproducts();
function loadcategory(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			 myObj = JSON.parse(this.responseText);
			for (x in myObj) {
          		 Categories += "<div class='categoriesElement'>"
          		 +"<p>"+myObj[x].name +"</p>"
          		 +"<img src='admin/uploads/image/"+myObj[x].image+"' alt=''>"
          		 +"</div>";
        	}
        	document.getElementById("Categories").innerHTML = Categories;
		}
	};
	xmlhttp.open("GET", "index.php?action=resultCategories", true);
	xmlhttp.send();
}
function loadproducts(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			 myObj = JSON.parse(this.responseText);
			for (x in myObj) {
          		 Products += "<div class='ProductElement category"+myObj[x].categories_id+"' >"
          		 +"<p>"+myObj[x].name +"</p>"
          		 +"<img src='admin/uploads/image/"+myObj[x].image+"' alt=''>"
          		 +"</div>";
        	}
        	document.getElementById("Products").innerHTML = Products;
		}
	};
	xmlhttp.open("GET", "index.php?action=resultProducts", true);
	xmlhttp.send();
}
