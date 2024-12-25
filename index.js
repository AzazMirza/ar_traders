alertFunction = () =>{
    alert("It does work!")
}

var errorSound = new Audio("Audio/error.mp3");


const numbers = {
	"Mirza Raees": "426010652",
	"Mirza Qaisar" : "456888033",
	"Mirza Ali": "475255557"

};  

	// if( nam != ""){

	// } else{
	// 	alert("Fill the fields")
	// }

function pagePrint  () {
     print();



	 const currentDate = ''+ new Date() +'';
	shortDate = currentDate.replace("GMT+0500 (Pakistan Standard Time)", "")
	console.log(shortDate)

	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let message = document.getElementById('message').value;

	let number = '+923' + numbers[name];

	var url = "https://wa.me/" + number + "?text="
	+ "Name : " +name+ "%0a"
	+ "Email : " +email+ "%0a"
	+ "Message : " +message+ "%0a";
	
	newWindow = window.open(url );
	

	var data = [];
	data.push(name);

	var text = JSON.stringify(data);

	localStorage.setItem(shortDate,text);
  
	console.log(text)
	}


    const currentDate = ''+ new Date() +'';
	shortDate = currentDate.replace("GMT+0500 (Pakistan Standard Time)", "")

	document.getElementById("form").innerHTML = " "+  shortDate +" ";


	// WE CAN USE GOOGLE DRIVE TO STORE AND VIEW DATA INSTEAD OF A WEBSITE