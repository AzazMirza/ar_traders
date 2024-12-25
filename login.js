function redirect () {
    window.location.assign("home.html")
}

//we cant name a variable 'name' 

function auth(){
    var nam = document.getElementById('name').value
    var password = document.getElementById('password').value

   
    if(nam == 'a' && password == 'a'){
        redirect()
    }
    else {
        alert('Wrong UserName or Password')
    }
    // alert('afsdfsd')

}

alert(nam)

    // var nam1 = document.getElementById('name').value
    // var password1 = document.getElementById('password').value
//   const n = ''
    // export default n;


   