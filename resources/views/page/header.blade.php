@extends('index')

@section('header')

<!-- HEADER -->
    <div class="w3-bar w3-white w3-large">
        <a href="/" class="w3-bar-item w3-button w3-blue w3-mobile">BLOG BEST</a>
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-large">Login</button>
        <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-large">Register</button>
    </div>

<!-- SUPPORT HEADER -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-blue w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <h1 align="center"> LOGIN</h1>
            <form class="w3-container" action="login.php" method="post">
                <div class="w3-section">
                    <label>Username</label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" id="username" required>

                    <label><b>Password</b></label>
                    <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password" required>
                        
                    <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

    <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-blue w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <h1 align="center">REGISTER</h1>
            <form class="w3-container" action="register.php" method="post">
                <div class="w3-section">
                    <label><b>Email</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="username" id="username" required>
                    <label><b>Password</b></label>
                    <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" id="psw" required>
                    <label><b>Repeat Password</b></label>
                    <input class="w3-input w3-border" type="password" placeholder="Repeat Password" name="repsw" id="repsw" required>
                    <label><b>First Name</b></label>
                    <input class="w3-input w3-border" type="text" placeholder="First Name" name="fname" id="fname" required>
                    <label><b>Sur Name</b></label>
                    <input class="w3-input w3-border" type="text" placeholder="Sur Name" name="sname" id="sname" required>
                    <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection