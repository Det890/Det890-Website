	?php echo $this->Html->css('login_style')?>

	<div id="login">

        <form action="javascript:void(0);" method="get">

            <fieldset class="clearfix">

                <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" value="Sign In"></p>

            </fieldset>

        </form>

        <p>Not a member? <a href="#">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

    </div> <!-- end login -->