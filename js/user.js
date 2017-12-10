var user = "";

if (localStorage.getItem("user") == null)
{
    user = "Guest";
    localStorage["user"]="Guest";
    console.log("Logged in as Guest");
}
else
{
    user = localStorage["user"];
    console.log("Logged in as " + user);
}

function login(username)
{
    console.log("Hello?");
    user = username;
    localStorage["user"] = username;
    console.log("Logged in as " + username);
}

function logout()
{
    user = "Guest";
    localStorage.clear();
    console.log("Logged out as " + username);
}

function changeName(idName)
{
    var name = document.getElementById(idName);
    name.innerHTML = user;
}


function assignLogin()
{
    var name = document.getElementById('accountButton');
    if (user !== "Guest")
    {
        name.href = '/account'
    }
    else
    {
        name.href = '/login' 
    }
}

function greeting() {
    var name = localStorage["user"];
    var greeting = document.getElementById('greeting');
    if (name === "Guest") {
        greeting.innerHTML = "Welcome, Guest!";
        document.getElementById('message_button').style.display = "none";
        document.getElementById('Logout_button').style.display = "none";
    } else {
        greeting.innerHTML = "Hello, " + name + "! ";
        var sign_up_button = document.getElementById('Signup_button')
        sign_up_button.style.display = "none";
        document.getElementById('signin_button').style.display = "none";
    }
}

$('document').ready(function(){
    greeting();
});
