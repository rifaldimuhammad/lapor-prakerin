<header class="header">
    <div class="header-container">
        <div class="header-search">
            <ion-icon name="search"></ion-icon>
            <input class="header-search__input" type="text" placeholder="Search..." />
        </div>
        <div class="header__profile" id="box-profile-popup">
            <div class="header__profile-notif">
                <ion-icon name="notifications" class="header__profile-notif__icon"></ion-icon>
            </div>
            <div class="header__profile-info" id="btn-profile-popup" onmouseover="popupProfile('profile')"
                onmouseout="popupProfile('profile')">
                <div class="header__profile-info__img"></div>
                <div class="header__profile-info__name">
                    <p class="header__profile-info__name-1">{{ Session::get('name_user') }}</p>
                    <p class="header__profile-info__name-2">Student Account</p>
                </div>
            </div>

            <!-- popup profile -->
            <div class="header__profile-popup" id="modal-profile-popup">
                <div class="header__profile-popup__img">
                    <div class="header__profile-popup__img--img"></div>
                </div>
                <div class="header__profile-popup__name">
                    <p class="header__profile-popup__name-student">{{ Session::get('name_user') }}</p>
                    <p class="header__profile-popup__name-email">{{ Session::get('email_user') }}</p>
                </div>
                <div class="header__profile-popup__info">
                    <div class="header__profile-popup__info-box">
                        <div class="header__profile-popup__info-box--title">
                            <img src={{ asset('./img/CheckedUserMale.svg') }} />
                            <p>Jurusan</p>
                        </div>
                        <div class="header__profile-popup__info-box--mayor">{{Session::get('class_user')}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
