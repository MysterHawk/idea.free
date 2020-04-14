
window.onload = function(){

    const form = document.getElementById("loginForm");

    form.addEventListener("submit", function(e){
        e.preventDefault();
        alert("hello world");
        login(form);
        });

}




function login(form){

    let formData = new FormData(form);    
    
   // Ajax call
   fetch("/api/login", {
    method: 'POST',
    body: formData
    }).then((response) => response.json())
    .then((response) => {
        console.log(response);
    }).catch(error => console.log(error));

}

