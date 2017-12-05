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
}

function login(username)
{
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
