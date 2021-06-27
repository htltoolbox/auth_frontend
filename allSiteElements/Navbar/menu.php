<?php

echo "

    <link crossorigin='anonymous' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'
      integrity='sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr' rel='stylesheet'>

<div class='sidebar' id='mySidebar'>
    <a class='closebtn' href='javascript:void(0)' onclick='closeNav()'>&times;</a>
    <a href='#'><img alt='logo_missing' src='../content/Logo.png' width=85%;></a>
    <a href='../projekt%C3%9Cbersicht.php'>LT-Online</a>
    <a href='../FTKL/index.html'>FTKL-Online</a>
</div>

<div class='navbar' style='background-color: #1e272e; height: 50px;'>
    <button class='openbtn' onclick='openNav()'>&#9776;Menü</button>
    <div class='w3-right usertag'
         style='display: block; padding:5px; margin: 5px; border: solid white 2px; border-radius: 7px; margin-top: 6px; margin-right: 5px;'>
        Christoph Weberbauer
        <span class='fas fa-user' style='padding-left: 5px;'></span>
    </div>
</div>


<script>

    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById('mySidebar').style.width = '250px';
        document.getElementById('main').style.marginLeft = '250px';
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById('mySidebar').style.width = '0';
        document.getElementById('main').style.marginLeft = '0';
    }
</script>

";
