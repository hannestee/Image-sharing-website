<?php
<form>
            <fieldset style="width: 28.7em; height: 29em">
                
            <p>Full name:</p>
            <input class="syotekentta" style="width: 230px" type="text" name="fullname" placeholder="Enter your full name" required>
            
            <p>Username:</p>
            <input class="syotekentta" style="width: 230px" type="text" name="username" placeholder="Enter a username" required>
            
            <p>E-mail:</p>
            <input class="syotekentta" style="width: 230px" type="email" name="email" placeholder="Enter a valid email address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            
            <p>Phone number:</p>
            <input class="syotekentta" style="width: 230px" type="tel" name="phonenumber" placeholder="Enter a phone number" required pattern="[0-9].{4,15}">
            
            <p>Country:</p>
            <input class="syotekentta" style="width: 230px" type="text" name="country" placeholder="Enter your country" required>
            
            
            <p>Password:</p>
            <input class="syotekentta" style="width: 230px" type="password" name="password" placeholder="Enter password" required>
            <br><br>
            
            <input class="syotekentta" style="width: 230px" type="submit" name="submit" value="Register"><br>
            </fieldset>
?>