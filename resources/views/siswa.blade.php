@extends('index')


@section('content')
@include('layout/sidebar')
@include('layout/header')
    <div class="siswa">
        <div class="siswa-content">
            <div class="industres-statistics-categories-calender-box">
                <div class="industries-statistics-box">
                    <div class="siswa-content__industries">
                        <header class="siswa-content__industries-header">
                            <p class="siswa-content__industries-header__title">Popular Industries</p>
                            <div class="siswa-content__industries-header__arrow">
                                <p class="siswa-content__industries-header__arrow-left">&#10094;</p>
                                <p class="siswa-content__industries-header__arrow-right">&#10095;</p>
                            </div>
                        </header>
                        <div class="siswa-content__industries-container">
                            <div class="siswa-content__industries-container-slide">
                                <div class="siswa-content__industries-container-slide__box">
                                    <img class="siswa-content__industries-container-slide__box-img"
                                        src={{ asset('./img/mkt.svg') }} />
                                    <p class="siswa-content__industries-container-slide__box-text">Books and Library</p>
                                </div>
                                <div class="siswa-content__industries-container-slide__box">
                                    <img class="siswa-content__industries-container-slide__box-img"
                                        src={{ asset('./img/rpl.svg') }} />
                                    <p class="siswa-content__industries-container-slide__box-text">Books and Library</p>
                                </div>
                                <div class="siswa-content__industries-container-slide__box">
                                    <img class="siswa-content__industries-container-slide__box-img"
                                        src={{ asset('./img/tmp.svg') }} />
                                    <p class="siswa-content__industries-container-slide__box-text">Books and Library</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- statistics -->
                    <div class="siswa-content__statistics">
                        <div class="siswa-content__statistics-header">
                            <p class="siswa-content__statistics-header__title">Statistics</p>
                            <div class="siswa-content__statistics-header__arrow">
                                <p class="siswa-content__statistics-header__arrow-left">&#10094;</p>
                                <p class="siswa-content__statistics-header__arrow-year">2022</p>

                                <p class="siswa-content__statistics-header__arrow-right">&#10095;</p>
                            </div>
                        </div>
                        <div class="siswa-content__statistics-chart">
                            <div id="statistics-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="categories-calender-box">
                    <div class="siswa-content__categories">
                        <p class="siswa-content__categories-title">Categories</p>
                        <div class="siswa-content__categories-box">
                            <img class="siswa-content__categories-box--img" src={{ asset('icons/cat-book.svg') }} />
                            <div class="siswa-content__categories-box--text">
                                <p class="siswa-content__categories-box--text-1">Dayli Absen</p>
                                <p class="siswa-content__categories-box--text-2">13 siswa</p>
                            </div>
                        </div>
                        <div class="siswa-content__categories-box">
                            <img class="siswa-content__categories-box--img" src={{ asset('icons/cat-book.svg') }} />
                            <div class="siswa-content__categories-box--text">
                                <p class="siswa-content__categories-box--text-1">Report Montly</p>
                                <p class="siswa-content__categories-box--text-2">4 Day Ago</p>
                            </div>
                        </div>
                        <div class="siswa-content__categories-box">
                            <img class="siswa-content__categories-box--img" src={{ asset('icons/cat-book.svg') }} />
                            <div class="siswa-content__categories-box--text">
                                <p class="siswa-content__categories-box--text-1">Activity</p>
                                <p class="siswa-content__categories-box--text-2">20%</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var chart = new ApexCharts(document.querySelector('#statistics-chart'), options);
        chart.render();

        // popup

        //

        function popupProfile(name) {
            $('#btn-' + name + '-popup').on('click', () => {
                $('#modal-' + name + '-popup').toggleClass('display-flex');
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
    </script>
@endsection
