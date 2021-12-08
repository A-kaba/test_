
<div id="sideBar">
    <!-- I will need to create an overlay, the same way I did in the donkey project -->
    <!-- logged out -->
    <!-- if no session -->
    <div id="loggedOut">
        <form id="loginForm" action="index.php" method="POST">
            <input type="hidden" name="action" value="login">
            <h3>LOGIN</h3>
            <input type="text" name="username" placeholder="username">
            <input type="password" password="username" placeholder="password">
            <button type="submit">Login</button>
            <div id="checkBox">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox">Remember user name</label>
            </div>    
        </form>
        <div id="infoSection">
            <h3>Privacy Policy</h3>
            <p>53, Seonggyeoldaehak-ro, Manan-gu, Anyang-si, Gyeonggi-do, Republic of Korea (14097) Tel : +82-31-467-8114</p>
        </div>
    </div>
        <!-- logged in  if session-->
    <div id="loggedIn">
        <img id="profilePic" src="data:image/jpeg;base64,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" alt="">
        <div>username (add php here)</div>
        <div>admin (add php here)</div>
        <div id="loggedInMenu">
            <div class="loggedInItems"><i class="fas fa-adjust"></i>My profile</div>
            <div class="loggedInItems"><i class="fas fa-adjust"></i> My courses</div>
            <div class="loggedInItems"><i class="fas fa-adjust"></i> Manage Users</div>
            <div>
                <form action="index.php" method=POST>
                    <input type="hidden" name="action" value="logout">
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
        
    </div>
</div>