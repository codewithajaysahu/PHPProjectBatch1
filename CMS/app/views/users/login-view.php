<!----------------------------------login starts------------------------------->

<section class="loginn bg-white">
    <div class="container" style="text-align: center;">

        <div class="row">
            <div class="col-lg-12">
                <image class="img-fluid" src="assets/frontend/img/r.jpg" style="height: 500px;  box-shadow:10px 10px 10px #000;
              -webkit-box-shadow:10px 10px 10px #000;
              -moz-box-shadow: 10px 10px 10px #000; "></image>
                <h2>Login here</h2>
                <div class="btn">
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                </div>
            </div>
        </div>
    </div>




    <div id="id01" class="modal">

        <form class="modal-content animate" action="?module=users&action=login" method="post">
            <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>
                <img src="img/l (1).svg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user_name" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <div class="btn">
                    <button type="submit"><a href="login.html">Login</a></button>
                </div>
                <label>
                    <input type="checkbox" checked="checked" name="remember_me" id="remember_me" onclick="setRememberMe(this);> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function setRememberMe(obj) {
            if(obj.checked)
                document.getElementById("remember_me").value = 1;
            else
                document.getElementById("remember_me").value = 0;
        }
    </script>
</section>
<!----------------------------------login ends------------------------------->