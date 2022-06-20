<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Lapor Prakerin | Monitoring</title>
  </head>
  <body>
    <div class="dashboard">
      <div class="dashboard__nav">
        <div class="dashboard__nav-title">
          <img src="../assets/icons/logo.png" class="dashboard__nav-title__logo" />
          <div class="dashboard__nav-title__text">Guru</div>
        </div>
        <ul class="dashboard__nav-link">
          <li class="dashboard__nav-link__item">
            <a href="guru-dashboard.html" class="dashboard__nav-link__item-list">
              <ion-icon name="home"></ion-icon>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="dashboard__nav-link__item">
            <a href="guru-monitoring.html" class="dashboard__nav-link__item-list">
              <ion-icon name="calendar"></ion-icon>
              <p>Siswa Pkl</p>
            </a>
          </li>
          <li class="dashboard__nav-link__item">
            <a href="#" class="dashboard__nav-link__item-list">
              <ion-icon name="book"></ion-icon>
              <p>Report Monthly</p>
            </a>
          </li>
        </ul>
        <ul class="dashboard__nav-logout">
          <li class="dashboard__nav-logout__item">
            <a href="../login.html" class="dashboard__nav-logout__item-list">
              <ion-icon name="log-out"></ion-icon>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
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
          <div class="header__profile-info" id="btn-profile-popup" onmouseover="popupProfile('profile')" onmouseout="popupProfile('profile')">
            <div class="header__profile-info__img"></div>
            <div class="header__profile-info__name">
              <p class="header__profile-info__name-1">Annie Leonhart</p>
              <p class="header__profile-info__name-2">Student Account</p>
            </div>
          </div>

          <!-- popup profile -->
          <div class="header__profile-popup" id="modal-profile-popup">
            <div class="header__profile-popup__img">
              <div class="header__profile-popup__img--img"></div>
            </div>
            <div class="header__profile-popup__name">
              <p class="header__profile-popup__name-student">Annie Lonhart</p>
              <p class="header__profile-popup__name-email">youremail@smkn1purwosari.sch.id</p>
            </div>
            <div class="header__profile-popup__info">
              <div class="header__profile-popup__info-box">
                <div class="header__profile-popup__info-box--title">
                  <img src="../assets/img/CheckedUserMale.svg" />
                  <p>Mentor jurusan</p>
                </div>
                <div class="header__profile-popup__info-box--mayor">rekayasa perangkat lunak</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="guru">
      <div class="absensi-content">
        <!-- data absensi -->
        <div class="absensi-content__data">
          <div class="absensi-content__data-box">
            <div class="absensi-content__data-box__header">
              <div class="absensi-content__data-box__header--title">Daily Attendance Report</div>
            </div>

            <div id="data-table-absensi-box"></div>
          </div>
        </div>

        <div class="guru-content__descsiswa" id="modal-desc-popup">
          <div class="guru-content__descsiswa-container">
            <div class="guru-content__descsiswa-container__header">
              <p class="guru-content__descsiswa-container__header--title">Description Siswa</p>
              <p class="guru-content__descsiswa-container__header--close" onmouseover="popupDesc('desc')" onmouseout="popupDesc('desc')" id="btn-desc-close">&#10005;</p>
            </div>
            <div class="guru-content__descsiswa-container__info">
              <div class="guru-content__descsiswa-container__info-profile">
                <img class="guru-content__descsiswa-container__info-profile__img" src="../assets/img/student.svg" alt="" />
                <div class="guru-content__descsiswa-container__info-profile__man">
                  <p class="guru-content__descsiswa-container__info-profile__man-name">MUHAMMAD RIFALDI</p>
                  <p class="guru-content__descsiswa-container__info-profile__man-email">Muhammadrifaldi.2020@smkn1purwosari.sch.id</p>
                  <div class="guru-content__descsiswa-container__info-profile__man-pkl">
                    <p>internship at illiyin studio | Active</p>
                    <img src="../assets/icons/Ok.svg" />
                  </div>
                </div>
              </div>
              <div class="guru-content__descsiswa-container__info-content">
                <div class="guru-content__descsiswa-container__info-content__school">
                  <div class="guru-content__descsiswa-container__info-content__school-box">
                    <p class="guru-content__descsiswa-container__info-content__school-box__title">School</p>
                    <div class="guru-content__descsiswa-container__info-content__school-box--class">
                      <p>Class</p>
                      <span>XI</span>
                    </div>
                    <div class="guru-content__descsiswa-container__info-content__school-box--absen">
                      <p>No Absen</p>
                      <span>20</span>
                    </div>
                    <div class="guru-content__descsiswa-container__info-content__school-box--jurusan">
                      <p>Jurusan</p>
                      <span>Rekayasa Perangkat Lunak</span>
                    </div>
                    <div class="guru-content__descsiswa-container__info-content__school-box--email">
                      <p>Email</p>
                      <span>muhammadrifaldi.2020@smkn1purwosari.sch.id</span>
                    </div>
                  </div>
                </div>

                <div class="guru-content__descsiswa-container__info-content__industries">
                  <div class="guru-content__descsiswa-container__info-content__industries-box">
                    <p class="guru-content__descsiswa-container__info-content__industries-box__title">School</p>
                    <div class="guru-content__descsiswa-container__info-content__industries-box--class">
                      <p>Class</p>
                      <span>XI</span>
                    </div>
                    <div class="guru-content__descsiswa-container__info-content__industries-box--absen">
                      <p>No Absen</p>
                      <span>20</span>
                    </div>
                    <div class="guru-content__descsiswa-container__info-content__industries-box--jurusan">
                      <p>Jurusan</p>
                      <span>Rekayasa Perangkat Lunak</span>
                    </div>
                    <div class="guru-content__descsiswa-container__info-content__industries-box--email">
                      <p>Email</p>
                      <span>youremail@smkn1purwosari.sch.id</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
      $('#data-table-absensi').children('tbody').addClass('display-none');

      function popupDesc(name) {
        $('#btn-' + name + '-popup').on('click', () => {
          $('#modal-' + name + '-popup').toggleClass('display-flex');
        });
        $('#btn-' + name + '-close').on('click', () => {
          $('#modal-' + name + '-popup').removeClass('display-flex');
        });
      }

      function popup(name) {
        $('#btn-' + name + '-popup').on('click', () => {
          $('#modal-' + name + '-popup').addClass('display-flex');
        });

        $(window).on('click', (e) => {
          if (
            !$('#modal-' + name + '-popup')
              .get(0)
              .contains(e.target) &&
            !$('#btn-' + name + '-popup')
              .get(0)
              .contains(e.target)
          ) {
            $('#modal-' + name + '-popup').removeClass('display-flex');
          }
        });
      }

      //data table

      $('#data-table-absensi-box').append(
        `<table id="data-table-absensi" class="display" style="width:100%">
          <thead>
            <tr>
              <th>No Absen</th>
              <th>Name</th>
              <th>Industries</th>
              <th>absen</th>
              <th>Action</th>
              </tr>
              </thead>
              </table>`
      );
      $(document).ready(function () {
        $('#data-table-absensi').DataTable({
          ajax: '../assets/data/guru-dailyAbsen.json',
          columns: [{ data: 'no' }, { data: 'name' }, { data: 'industries' }, { data: 'dayliAbsen' }, { data: 'action' }],
        });

        $('#data-table-absensi_filter').insertAfter('.absensi-content__data-box__header--title');


        $(document).on('click', '.data-table-action', function () {
          if (!$(this).siblings('.action-box').hasClass('display-flex')) {
            $('.action-box').removeClass('display-flex');
          }
          $(this).siblings('.action-box').toggleClass('display-flex');
        });
        $(document).on('click', '.btn-desc-popup', () => {
          $('#modal-desc-popup').addClass('display-flex');
          $('#close-desc-popup').on('click', () => {
            $('#modal-desc-popup').removeClass('display-flex');
          });
        });

        $('#data-table-absensi_filter label')
          .contents()
          .filter((index, el) => el.nodeType === 3)
          .remove();

          $(`<ion-icon class="search-icon" name="search"></ion-icon>`).prependTo($('#data-table-absensi_filter label'));
        
      });
    </script>
  </body>
</html>
