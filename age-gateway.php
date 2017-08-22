<div class="page_section" id="age-gateway">
    <div id="container">
    	<div class="center-title">
        	<img src="images/landing/title.png" />
        </div>
        <div id="gateway-form">
        <form class="inputBirth" method="post" action="{$basedomain}login/age_check">
        	<input type="text" name="dday" onBlur="if(this.value=='')this.value='DD';" onFocus="if(this.value=='DD')this.value='';" value="DD"  onchange="handleChange(this,31);" onkeypress="return isNumberKey(event)" maxlength="2" />
        	<input type="text" name="dmonth" onBlur="if(this.value=='')this.value='MM';" onFocus="if(this.value=='MM')this.value='';" value="MM" onchange="handleChange(this,12);" onkeypress="return isNumberKey(event)" maxlength="2"  />
            <input type="text" name="dyear" onBlur="if(this.value=='')this.value='YY';" onFocus="if(this.value=='YY')this.value='';" value="YY" onchange="handleChange(this);" onkeypress="return isNumberKey(event)" maxlength="2"  />
        	<input type="hidden" name="age_check" value="1" />
            <p>BY SUBMITTING THIS FORM, YOU AGREE TO THE PRIVACY AND COOKIE POLICY OF THIS WEBSITE. THIS WEBSITE WILL MAKE USE OF COOKIES.
				TO LEARN MORE, PLEASE READ OUR <a href="#">PRIVACY AND COOKIE POLICY.</a>   <a href="#">Drink-Savvy</a></p>
            <div class="row">
           	 <input type="submit" value="ENTER" class="button" />
            </div>
        </form>
        </div><!-- end #gateway-form -->
        <div class="ice-container">
            <div class="ice4">
                <img src="images/landing/ice4.png" />
            </div><!-- end .ice4 -->
            <div class="ice3">
                <img src="images/landing/ice3.png" />
            </div><!-- end .ice4 -->
            <div class="ice2">
                <img src="images/landing/ice2.png" />
            </div><!-- end .ice4 -->
            <div class="ice1">
                <img src="images/landing/ice1.png" />
            </div><!-- end .ice4 -->
            <div class="flare">
                <img src="images/landing/lens_flare.png" />
            </div><!-- end .flare -->
        </div><!-- end .ice-container -->
    </div><!-- end #container -->
</div><!-- end #home -->