<footer>
     <div class="container">
        <div class="FooterSection">
            <div class="row">
                <div class="col-md-8">
                    <div class="DFooterButton">
                        <ul>
                            <li><a href="#" class="icoFacebook"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="#" class="icoYoutube"><i class="fab fa-youtube"></i> Youtube</a></li>
                            <li><a href="#" class="icoWhatsapp"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
                        </ul>
                    </div>
                    <div class='DLaptopSec'>
                      <div class="main-wrapper">
                        <div class="upper-body">
                          <div class="bezel">
                            <div class="camera"></div>
                            <div class="screen">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/-PF-r4RBlhQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                          </div>
                        </div>
                        <div class="lower-body">
                          <div class="open"></div>
                        </div>
                      </div>
                    </div>
                </div>
                @guest
                <div class="col-md-4">
                    <div class="login-page">
                      <div class="form">
                        <form method="POST" action="{{ route('user-register') }}" class="register-form">
                            @csrf
                          <input type="text" placeholder="name" name="name" required/>

                          <input type="text" placeholder="email address" name="email" required/>
                          <input type="password" placeholder="password" name="password" required/>
                          <input type="password" placeholder="password confirmed" name="password_confirmation" id="password-confirm" required/>
                          <button type="submit">create</button>
                          <p class="message">Already registered? <a href="#">Sign In</a></p>
                        </form>

                        <form method="POST" action="{{ route('user.login') }}">
                            @csrf
                          <input type="text" placeholder="email" name="email"/>
                          <input type="password" placeholder="password" name="password"/>
                          <button type="submit">login</button>
                          <p class="message">Not registered? <a href="#">Create an account</a></p>
                        </form>


                      </div>
                    </div>
                </div>
                @endguest

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="DFooterBottomBg"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
