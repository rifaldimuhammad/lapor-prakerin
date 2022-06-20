@extends('index')

@section('content')
    @include('layout/sidebar')
    @include('layout/header')
    <div class="absensi">
        <div class="absensi-content">
            <!-- data absensi -->
            <div class="absensi-content__data">
                <div class="absensi-content__data-box">
                    <div class="absensi-content__data-box__header">
                        <div class="absensi-content__data-box__header--title">
                            Daily Attendance Report
                            <div onmouseover="popupForm('form')" onmouseout="popupForm('form')"
                                class="absensi-content__data-box__header--title-btn" id="btn-form-popup">Daily Attendance
                            </div>
                        </div>
                    </div>

                    <div id="data-table-absensi-box"></div>
                </div>
            </div>
            <div class="form" id="modal-form-popup">
                <div class="absensi-content__form">
                    <div class="absensi-content__form-header">
                        <p class="absensi-content__form-header--title">Daily Attendance</p>
                    </div>
                    <form action="/absensiForm" method="POST" class="absensi-content__form-container">
                        {{ csrf_field() }}
                        {{-- @dd(session()->all()) --}}
                        <div class="absensi-content__form-container__box">
                            <p class="absensi-content__form-container__box-title">Full Name</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="name" id="name" required
                                    placeholder="Muhammad Rifaldi" />
                                <p class="absensi-content__form-container__box-input-action"></p>
                            </div>
                        </div>
                        <div class="absensi-content__form-container__box">
                            <p class="absensi-content__form-container__box-title">Input Class</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="class" id="class" required
                                    placeholder="Rekayasa Perangkat Lunak" />
                            </div>
                        </div>
                        <div class="absensi-content__form-container__box">
                            <p class="absensi-content__form-container__box-title">Date</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="date" name="date" id="date" required
                                    placeholder="Muhammad Rifaldi" />

                            </div>
                        </div>
                        <div class="absensi-content__form-container__box">
                            <p class="absensi-content__form-container__box-title">WorkHour</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="time" name="time" id="time" required
                                    placeholder="Muhammad Rifaldi" />
                            </div>
                        </div>

                        <div class="absensi-content__form-container__boxbtn">
                            <div class="absensi-content__form-container__boxbtn-cancel" id="close-form-popup">Cancel</div>
                            <input type="submit" name="submit" id="submit" placeholder="Submit"
                                class="absensi-content__form-container__boxbtn-submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        function popupForm(name) {
            $('#btn-' + name + '-popup').on('click', () => {
                $('#modal-' + name + '-popup').toggleClass('display-flex');
            });
            $('#close-' + name + '-popup').on('click', () => {
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

        function dropdown(name) {
            $('#arrow-dropdown-' + name).on('click', () => {
                $('#dropdown-' + name).toggleClass('display-flex');
                $('#arrow-dropdown-' + name).toggleClass('rotate-arrow');
            });

            $(window).on('click', (e) => {
                if (
                    !$('#dropdown-' + name)
                    .get(0)
                    .contains(e.target) &&
                    !$('#arrow-dropdown-' + name)
                    .get(0)
                    .contains(e.target)
                ) {
                    $('#dropdown-' + name).removeClass('display-flex');
                    $('#arrow-dropdown-' + name).removeClass('rotate-arrow');
                }
            });
        }

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

        // $('#data-table-absensi_filter').addClass('display-none')

        //data table

        $('#data-table-absensi-box').append(
            `<table id="data-table-absensi" class="display" style="width:100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Industries</th>
              <th>work Hour</th>
              <th>Update</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>`
        );

        $(document).ready(function() {
            $('#data-table-absensi').DataTable({
                // ajax: '../resources/data/absensi.json',
                columns: [{
                    data: 'name'
                }, {
                    data: 'industries'
                }, {
                    data: 'workHour'
                }, {
                    data: 'update'
                }, {
                    data: 'action'
                }],
            });
            $('#data-table-absensi_filter').insertAfter('.absensi-content__data-box__header--title');
            $(document).on('click', '.data-table-action', function() {
                if (!$(this).siblings('.action-box').hasClass('display-flex')) {
                    $('.action-box').removeClass('display-flex');
                }
                $(this).siblings('.action-box').toggleClass('display-flex');
            });

            $(window).on('click', '.action-box', function() {
                if (!$(this).siblings('.action-box').get(0).contains(e.target) && !$('.data-table-action')
                    .get(0).contains(e.target)) {
                    $(this).removeClass('display-flex');
                }
            });

            $(document).on('click', '.btn-desc-popup', function() {
                $('#modal-form-popup').addClass('display-flex');
                $('#close-form-popup').on('click', () => {
                    $('#modal-form-popup').removeClass('display-flex');
                });
            });

            $('#data-table-absensi_filter label')
                .contents()
                .filter((index, el) => el.nodeType === 3)
                .remove();

            $(`<ion-icon class="search-icon" name="search"></ion-icon>`).prependTo($(
                '#data-table-absensi_filter label'));

        });
    </script>
@endsection
