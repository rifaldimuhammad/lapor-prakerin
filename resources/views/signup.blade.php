@extends('index')
@section('content')
    <div class="signup">
        <div class="signup-img">
            <img src={{ asset('./img/login-img.svg') }} alt="" />
        </div>
        <div class="signup-box">
            <div class="signup-box__content">

                <div class="signup-box__content-title">
                    <p class="signup-box__content-title--register">Lets Register Account</p>
                    <div class="signup-box__content-title__btn">
                        <div class="signup-box__content-title__btn-siswa" id="btn-form-siswa">Siswa</div>
                        <div class="signup-box__content-title__btn-guru" id="btn-form-guru">Guru</div>
                    </div>
                </div>
                {{-- form siswa --}}
                <form action="/siswa" method="POST" class="signup-box__content-form  form-siswa">
                    @csrf
                    <div class="signup-box__content-form--name">
                        <p class="signup-box__content-form--name-text">Name</p>
                        <input type="text" name="name" placeholder="Please enter your Name" required
                            class="signup-box__content-form--name-input" id="name" />
                    </div>
                    <div class="signup-box__content-form--email">
                        <p class="signup-box__content-form--email-text">School Email</p>
                        <input type="email" name="email" placeholder="youremail@smkn1purwosari.sch.id" required
                            class="signup-box__content-form--email-input" id="email" />
                    </div>
                    <div class="signup-box__content-form--password">
                        <p class="signup-box__content-form--password-text">Password</p>
                        <input type="password" name="password" id="password" required
                            class="signup-box__content-form--pasword-input" />
                    </div>
                    <div class="signup-box__content-form--class">
                        <p class="signup-box__content-form--class-text">Class</p>
                        <div class="signup-box__content-form--class-input" id="input-form-box-class">
                            <input name="class" type="text" id="class" placeholder="XI Rekayasa Perangkat Lunak"
                                required />
                        </div>
                    </div>
                    <div class="signup-box__content-form--industries">
                        <p class="signup-box__content-form--industries-text">industries</p>
                        <div class="signup-box__content-form--industries-input" id="input-form-box-industries">
                            <input name="industries" type="text" placeholder="Illiyin Studio" required id="industries" />
                        </div>
                    </div>
                    <div class="signup-box__content-form--submit">
                        <input type="submit" name="submit" id="submit" placeholder="Login" />
                    </div>
                </form>

                {{-- form guru --}}
                <form action="/guru" method="POST" class="signup-box__content-form form-guru">
                    @csrf
                    <div class="signup-box__content-form--name">
                        <p class="signup-box__content-form--name-text">Name</p>
                        <input type="text" name="name" placeholder="Please enter your Name" required
                            class="signup-box__content-form--name-input" id="name" />
                    </div>
                    <div class="signup-box__content-form--email">
                        <p class="signup-box__content-form--email-text">School Email</p>
                        <input type="email" name="email" placeholder="youremail@smkn1purwosari.sch.id" required
                            class="signup-box__content-form--email-input" id="email" />
                    </div>
                    <div class="signup-box__content-form--password">
                        <p class="signup-box__content-form--password-text">Password</p>
                        <input type="password" name="password" id="password" required
                            class="signup-box__content-form--pasword-input" />
                    </div>
                    <div class="signup-box__content-form--class">
                        <p class="signup-box__content-form--class-text">Monitoring Class</p>
                        <div class="signup-box__content-form--class-input" id="input-form-box-class">
                            <input name="class" type="text" id="class" placeholder="XI Rekayasa Perangkat Lunak"
                                required />
                        </div>
                    </div>
                    <div class="signup-box__content-form--industries">
                        <p class="signup-box__content-form--industries-text">Monitoring industries</p>
                        <div class="signup-box__content-form--industries-input" id="input-form-box-industries">
                            <input name="industries" type="text" placeholder="Illiyin Studio" required id="industries" />
                        </div>
                    </div>
                    <div class="signup-box__content-form--submit">
                        <input type="submit" name="submit" id="submit" placeholder="Login" />
                    </div>
                </form>


                <div class="signup-box__content-ready">
                    <p>already registered ?<a href="/login"> Login</a></p>
                </div>
                <div class="signup-box__content-or">
                    <div></div>
                    <p>Or</p>
                </div>
                <div class="signup-box__content-media">
                    <p class="signup-box__content-media--title">Login using</p>
                    <div class="signup-box__content-media--box">
                        <div class="signup-box__content-media--box__icon-google"><img
                                src={{ asset('./icons/gmail.svg') }} alt=""> </div>
                        <div class="signup-box__content-media--box__icon-ms"><img
                                src={{ asset('./icons/Microsoft.svg') }}> </div>
                        <div class="signup-box__content-media--box__icon-apple"><img
                                src={{ asset('./icons/Apple.svg') }}>
                        </div>
                        <div class="signup-box__content-media--box__icon-fb"><img
                                src={{ asset('./icons/Facebook.svg') }}>
                        </div>
                        <div class="signup-box__content-media--box__icon-yahoo"><img
                                src={{ asset('./icons/Yahoo.svg') }}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        // function outline(name) {
        //     $('#input-form-' + name).on('focus', function() {
        //         $('#input-form-box-' + name).addClass('outline-blue');
        //     });
        //     $(window).on('click', (e) => {
        //         if (
        //             !$('#input-form-' + name)
        //             .get(0)
        //             .contains(e.target)
        //         ) {
        //             $('#input-form-box-' + name).removeClass('outline-blue');
        //         }
        //     });
        // }

        // function dropdown(name) {
        //     $('.arrow-dropdown-' + name).on('click', function() {
        //         $('.dropdown-' + name).toggleClass('display-flex');
        //         $('.arrow-dropdown-' + name).toggleClass('rotate-arrow');
        //     });



        //     $(window).on('click', (e) => {
        //         if (
        //             !$('.dropdown-' + name)
        //             .get(0)
        //             .contains(e.target) &&
        //             !$('.arrow-dropdown-' + name)
        //             .get(0)
        //             .contains(e.target)
        //         ) {
        //             $('.dropdown-' + name).removeClass('display-flex');
        //             $('.arrow-dropdown-' + name).removeClass('rotate-arrow');
        //         }
        //     });
        // }


        $('.form-guru').hide()
        $('#btn-form-siswa').addClass('bg-bform')
        $('#btn-form-siswa').on('click', function() {
            $(this).addClass('bg-bform')
            $('#btn-form-guru').removeClass('bg-bform')
            $('.form-guru').hide()
            $('.form-siswa').show()
            $('.signup-box__content-form').removeClass('arrow-form')
        })

        $('#btn-form-guru').on('click', function() {
            $('.form-guru').show()
            $('.form-siswa').hide()
            $(this).addClass('bg-bform')
            $('#btn-form-siswa').removeClass('bg-bform')
            $('.signup-box__content-form').addClass('arrow-form')
        })
    </script>
@endsection
