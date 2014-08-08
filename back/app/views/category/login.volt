
<body class="loginbody">

<div class="loginwrapper">
	<div class="loginwrap zindex100 animate2 bounceInDown">

	{{ content() }}
	<style>
	.alert-error{font-size:18px}
	</style>

	<h1 class="logintitle"><span class="iconfa-lock"></span> 黄家医圈 <span class="subtitle">Hello! Sign in to get you started!</span></h1>
        <div class="loginwrapperinner">


            {{ form('admin/start', 'id':'loginform') }}


                <p class="animate4 bounceIn">{{ text_field('email') }}</p>

                <p class="animate5 bounceIn">{{ password_field('password') }}</p>

                <p class="animate6 bounceIn"><button class="btn btn-default btn-block">Submit</button></p>
                <p class="animate7 fadeIn"><a href=""><span class="icon-question-sign icon-white"></span> Forgot Password?</a></p>
            </form>
        </div><!--loginwrapperinner-->
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div><!--loginwrapper-->



</body>

