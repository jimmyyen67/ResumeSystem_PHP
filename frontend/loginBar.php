<?php
SESSION_START();
if (empty($_SESSION['login'])) {
?>
  <div class="loginBarText"><i class="fas fa-sign-in-alt"></i> Log-in</div>
  <div id="loginBurger" onclick="openLogin()">
    <span class="loginBurgerLine"></span>
  </div>
  <!-- Login Panel -->
  <div class="loginPanel">
    <form action="api/checkLogin.php" method="post" class="loginForm">
      <div class="loginInput mt-10"><span class="loginIcon"><i class="fas fa-user-alt"></i></span><input type="text" name="acc" id="acc" placeholder="Account"><br>
      </div>
      <div class="loginInput mt-10"><span class="loginIcon"><i class="fas fa-lock"></i></span><input type="password" name="pwd" id="pwd" placeholder="Password"><br>
      </div>
      <input type="submit" class="mt-10" value="登入">
    </form>
  </div>
<?php
} else {
?>
  <div class="loginBarText"><p>Edit</p></div>
  <div id="loginBurger" onclick="openLogin()">
    <span class="loginBurgerLine"></span>
  </div>
  <!-- Login Panel -->
  <div class="loginPanel">
    <div>
      <button onclick="editOn()">後台管理頁</button><br>
      <button onclick="logout()">使用者登出</button>
    </div>
  </div>
<?php
}
?>