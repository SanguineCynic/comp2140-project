window.onload= function(){
  var logbtn = document.getElementById("LogButton")
  var username = document.getElementsByTagName("input")[0]
  var password = document.getElementsByTagName("input")[1]
  var res = document.getElementById("errorcheckdiv")

  logbtn.addEventListener("click", function() {
    if (username.value == ""){
      errorcheckdiv.innerHTML = "Please enter a valid username"
      username.style.border = '1px solid red'
    }
    else{
      errorcheckdiv.innterHTML = ""
      username.style.border = "1px solid gray"
    }

    if(password.value == ""){
      errorcheckdiv.innerHTML = "Please enter a valid password"
      password.style.border = '1px solid red'
    }
    else{
      errorcheckdiv.innterHTML = ""
      password.style.border = "1px solid gray"
    }
})
}
