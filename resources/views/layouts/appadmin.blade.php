<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <style>
       * {box-sizing: border-box}
body {font-family: "Lato", sans-serif; }

/* Style the tab */
.tab {
    float: left;
    height: 100%;
    width: 160px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #111;
    padding-top: 66px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: #FFFFFF;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
	font:bold;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: ;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #808080;
}

/* Style the tab content */
.tabcontent {
    float: auto;
    padding: 0px 12px;
    border: 0px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
ggez{
border:none;
width:500px;
margin:0px auto;
}	
#Layer1 {
	position:absolute;
	width:550px;
	height:50px;
	z-index:1;
	left: 750px;
	top: 100px;
}
/* The sidebar menu */
.sidenav {
    float: left;
    height: 100%;
    width: 160px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #111;
    padding-top: 66px;
}

/* The navigation menu links */
.sidenav a {
    display: block;
    background-color: inherit;
    color: #FFFFFF;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
	font:bold;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #808080;
}

.sidenav a.active {
    background-color: #808080;
}

/* Style page content */
.main {
    margin-left: 160px; /* Same as the width of the sidebar */
    padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
    </style>    
     @include('inc.admincss')
</head>

<body>
    <section>
    @include('inc.adminnavbar')
    </section>  
    //@include('inc.messages');
    @yield('content')
    @include('inc.adminjs')
</body>

</html>