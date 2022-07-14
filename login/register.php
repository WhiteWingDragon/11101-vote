<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="stylesheet" href="./assets/js/register.js">
</head>
<body>
<div class="container">
		<form class="registration" action="./add_member.php" method="post">
    <div id="header">
    <?php 
          include "../layout/login_nav.php";
    ?>
    </div>
      <h1>會員註冊</h1>
                 <!-- 帳號  -->
			<label>
				<span>User-name</span>

				<input type="text" id="username" minlength="3" name="acc" required="required">

				<ul class="input-requirements">
					<li>At least 3 characters long</li>
					<li>Must only contain letters and numbers (no special characters)</li>
				</ul>
			</label>
                <!-- 帳號close  -->


                <!-- 密碼  -->
			<label for="password">
				<span>Password</span>
        <input type="password" name="pw" id="password" 
						maxlength="100" minlength="8" required="required">

				<ul class="input-requirements">
					<li>At least 8 characters long (and less than 100 characters)</li>
					<li>Contains at least 1 number</li>
					<li>Contains at least 1 lowercase letter</li>
					<li>Contains at least 1 uppercase letter</li>
					<li>Contains a special character (e.g. @ !)</li>
				</ul>
            <span id="toggle" onclick="showHide();"></span>
			</label>

                 <!-- 密碼close  -->



            <!-- 確認密碼close  -->
			<label for="password_repeat">
				<span>Repeat Password</span>
				<input type="password" id="password_repeat" maxlength="100" minlength="8" required>
			</label>
            <!-- 確認密碼close  -->

                <!-- 名字  -->
			<label>
				<span>name</span>
				<input type="text" id="" minlength="3" name="name" required="required">
			</label>
                <!-- 名字close  -->

                <!-- 生日  -->
      <label>
				<span>birthday</span>
				<input type="date" id="" name="birthday" minlength="3" name="name" required="required">
			</label>
                <!-- 名字close  -->

                <!-- 住址  -->
      <label>
				<span>address</span>
				<input type="text" id="" name="addr" minlength="3" name="name" required="required">
			</label>
                <!-- 住址close  -->

                <!-- e-mail  -->
       <label>
				<span>e-mail</span>
				<input type="email" id="" name="email" minlength="3" name="name" required="required">
			</label>
                <!-- e-mail close  -->

                <!-- password question  -->
      <label>
				<span>passnote</span>
				<input type="text" id="" name="passnote" minlength="3" name="name" required="required">
			</label>
                <!-- password question close  -->
			<br>

			<input type="submit" value="送出">	

		</form>
	</div>




    <script type="text/javascript">
    $(".txtb input").on("focus",function(){
      $(this).addClass("focus");
    });

    $(".txtb input").on("blur",function(){
      if($(this).val() == "")
      $(this).removeClass("focus");
    });
  </script>

<script>
    // 宣告一個password 是id-password裡面的內容
    const password = document.getElementById('password')
    // 宣告一個toggle 是取得id toggle的內容
    const toggle = document.getElementById('toggle')

    // 設定一個function 叫做showHide
    function showHide() {
      // 如果 password的內容 跟 password相同時
      if (password.type === 'password') {
        // 設定為文本顯示
        password.setAttribute('type', 'text')
        toggle.classList.add('hide')
      } else {
        // 反之 隱藏密碼
        password.setAttribute('type', 'password')
        toggle.classList.remove('hide')
      }
    }
  </script>
  <div>
    <?php include "../layout/footer.php";?>    
  </div>
</body>
</html>