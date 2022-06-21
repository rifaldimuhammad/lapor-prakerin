@extends('index')

@section('content')
    @include('layout/sidebar')
    @include('layout/header')
    <div class="report">
        <div class="absensi-content">
            <!-- data absensi -->
            <div class="absensi-content__data">
                <div class="absensi-content__data-box">
                    <div class="absensi-content__data-box__header">
                        <div class="absensi-content__data-box__header--title">
                            Laporan Kegiatan Prakerin
                            <div onmouseover="popupForm('form')" onmouseout="popupForm('form')"
                                class="absensi-content__data-box__header--title-btn" id="btn-form-popup">Report</div>
                        </div>
                    </div>

                    <div id="data-table-absensi-box">
                        <table id="data-table-absensi" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>class</th>
                                    <th>Work Hour</th>
                                    <th>Update</th>
                                    <th>Position</th>
                                    <th>Activity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($report as $r)
                                    <tr>
                                        <td>{{ $r->name }}</td>
                                        <td>{{ $r->class }}</td>
                                        <td>{{ $r->time }} - {{ $r->untiltime }}</td>
                                        <td>{{ $r->date }}</td>
                                        <td>{{ $r->position }}</td>
                                        <td>{{ $r->activity }}</td>
                                        <td>
                                            <span class='data-table-action'> &bull;&bull;&bull; </span>
                                            <div class='action-box'>
                                                <input type="hidden" class="nameValue{{ $r->id }}"
                                                    value="{{ $r->name }}">
                                                <input type="hidden" class="classValue{{ $r->id }}"
                                                    value="{{ $r->class }}">
                                                <input type="hidden" class="dateValue{{ $r->id }}"
                                                    value="{{ $r->date }}">
                                                <input type="hidden" class="timeValue{{ $r->id }}"
                                                    value="{{ $r->time }}">
                                                <input type="hidden" class="untilTimeValue{{ $r->id }}"
                                                    value="{{ $r->untiltime }}">
                                                <input type="hidden" class="positionValue{{ $r->id }}"
                                                    value="{{ $r->position }}">
                                                <input type="hidden" class="activityValue{{ $r->id }}"
                                                    value="{{ $r->activity }}">
                                                <div class='btn-desc-popup'
                                                    onClick="editvalueFunction({{ $r->id }})">Edit
                                                </div>
                                                <a href="/report/delete/{{ $r->id }}"
                                                    class='btn-delete-popup'>Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="form" id="modal-form-popup">
                <div class="absensi-content__form">
                    <div class="absensi-content__form-header">
                        <p class="absensi-content__form-header--title">Monthly Report</p>
                    </div>
                    <form action="reportForm" method="POST" class="absensi-content__form-container" id="report-container">
                        {{ csrf_field() }}
                        <div class="absensi-content__form-container__box" id="report-form-name">
                            <p class="absensi-content__form-container__box-title">Full Name</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="name" id="name" required
                                    placeholder="Muhammad Rifaldi" />
                            </div>
                        </div>

                        <div class="absensi-content__form-container__box" id="report-form-class">
                            <p class="absensi-content__form-container__box-title">Input Class</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="class" id="class" required
                                    placeholder="Rekayasa Perangkat Lunak" />
                            </div>
                        </div>

                        <div class="absensi-content__form-container__box" id="report-form-date">
                            <p class="absensi-content__form-container__box-title">Date</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="date" name="date" id="date" required
                                    placeholder="Muhammad Rifaldi" />
                            </div>
                        </div>

                        <div class="absensi-content__form-container__box" id="report-form-hour">
                            <p class="absensi-content__form-container__box-title">WorkHour</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="time" name="time" id="time" required
                                    placeholder="Muhammad Rifaldi" />
                                sampai
                                <input type="time" name="untiltime" id="untiltime" required
                                    placeholder="Muhammad Rifaldi" />
                            </div>
                        </div>

                        <div class="absensi-content__form-container__box" id="report-form-position">
                            <p class="absensi-content__form-container__box-title">Position</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="position" id="position" required
                                    placeholder="Frontend Developer" />
                            </div>
                        </div>
                        <div class="absensi-content__form-container__box" id="report-form-activity">
                            <p class="absensi-content__form-container__box-title">activity</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="activity" id="activity" required
                                    placeholder="Slicing UI - London Mosque Project" />
                                {{-- <div class="absensi-content__form-container__box-input-action" onmouseover="show('desc')"
                                    onmouseout="show('desc')" id="btn-desc-show">
                                    <p>&bull;&bull;&bull;</p>
                                </div>
                                <div class="absensi-content__form-container__box-input-desc" id="modal-desc-show">Add
                                    Description</div> --}}
                            </div>
                        </div>

                        <div class="absensi-content__form-container__boxbtn">
                            <div class="absensi-content__form-container__boxbtn-cancel close-form-popup" id="">
                                Cancel</div>
                            <input type="submit" name="submit" id="submit"
                                class="absensi-content__form-container__boxbtn-submit">
                        </div>
                    </form>
                </div>
            </div>




            <div class="form edit" id="modal-form-popup">
                <div class="absensi-content__form">
                    <div class="absensi-content__form-header">
                        <p class="absensi-content__form-header--title">Edit Monthly Report</p>
                    </div>
                    <form action="editReport" method="POST" class="absensi-content__form-container"
                        id="report-container">
                        {{ csrf_field() }}
                        <div class="absensi-content__form-container__box" id="report-form-name">
                            <p class="absensi-content__form-container__box-title">Full Name</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="name" class="editName" required
                                    placeholder="Muhammad Rifaldi" />
                                <input type="hidden" name="id" class="editId">
                            </div>
                        </div>

                        <div class="absensi-content__form-container__box" id="report-form-class">
                            <p class="absensi-content__form-container__box-title">Input Class</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="class" class="editClass" required
                                    placeholder="Rekayasa Perangkat Lunak" />
                            </div>
                        </div>

                        <div class="absensi-content__form-container__box" id="report-form-date">
                            <p class="absensi-content__form-container__box-title">Date</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="date" name="date" class="editDate" required
                                    placeholder="Muhammad Rifaldi" />
                            </div>
                        </div>

                        <div class="absensi-content__form-container__box" id="report-form-hour">
                            <p class="absensi-content__form-container__box-title">WorkHour</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="time" name="time" class="editTime" required
                                    placeholder="Muhammad Rifaldi" />
                                sampai
                                <input type="time" name="untiltime" class="editUntilTime" id="untiltime" required
                                    placeholder="Muhammad Rifaldi" />
                            </div>
                        </div>

                        <div class="absensi-content__form-container__box" id="report-form-position">
                            <p class="absensi-content__form-container__box-title">Position</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="position" class="editPosition" required
                                    placeholder="Frontend Developer" />
                            </div>
                        </div>
                        <div class="absensi-content__form-container__box" id="report-form-activity">
                            <p class="absensi-content__form-container__box-title">activity</p>
                            <div class="absensi-content__form-container__box-input">
                                <input type="text" name="activity" class="editActivity" required
                                    placeholder="Slicing UI - London Mosque Project" />
                                {{-- <div class="absensi-content__form-container__box-input-action" onmouseover="show('desc')"
                                    onmouseout="show('desc')" id="btn-desc-show">
                                    <p>&bull;&bull;&bull;</p>
                                </div>
                                <div class="absensi-content__form-container__box-input-desc" id="modal-desc-show">Add
                                    Description</div> --}}
                            </div>
                        </div>

                        <div class="absensi-content__form-container__boxbtn">
                            <div class="absensi-content__form-container__boxbtn-cancel close-form-popup">Cancel</div>
                            <input type="submit" name="submit" class="absensi-content__form-container__boxbtn-submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        function editvalueFunction($id) {
            $('.editName').val($('.nameValue' + $id).val())
            $('.editId').val($id)
            $('.editClass').val($('.classValue' + $id).val())
            $('.editDate').val($('.dateValue' + $id).val())
            $('.editTime').val($('.timeValue' + $id).val())
            $('.editUntilTime').val($('.untilTimeValue' + $id).val())
            $('.editPosition').val($('.positionValue' + $id).val())
            $('.editActivity').val($('.activityValue' + $id).val())
        }

        function popupForm(name) {
            $('#btn-' + name + '-popup').on('click', () => {
                $('#modal-' + name + '-popup').toggleClass('display-flex');
            });
            $('.close-' + name + '-popup').on('click', () => {
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



        function show(name) {
            $('#btn-' + name + '-show').on('click', () => {
                $('#modal-' + name + '-show').toggleClass('display-flex');
            });

            $(window).on('click', (e) => {
                if (
                    !$('#modal-' + name + '-show')
                    .get(0)
                    .contains(e.target) &&
                    !$('#btn-' + name + '-show')
                    .get(0)
                    .contains(e.target)
                ) {
                    $('#modal-' + name + '-show').removeClass('display-flex');
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
        const formDesc = `
              <div class="absensi-content__form-container__box" id="report-form-desc">
                <p class="absensi-content__form-container__box-title">Description</p>
                <div class="absensi-content__form-container__box-input">
                  <textarea name="description" id="description" cols="30" rows="10"></textarea>
                </div>
              </div>`;

        $('#modal-desc-show').on('click', () => {
            if ($('#modal-form-popup').children(!$('#report-form-desc'))) {
                $(formDesc).insertAfter('#report-form-activity');
            }
        });

        //data table

        // $('#data-table-absensi-box').append(
        //     ``
        // );
        $(document).ready(function() {
            $('#data-table-absensi').DataTable({});
            $('#data-table-absensi_filter').insertAfter('.absensi-content__data-box__header--title');

            $(document).on('click', '.data-table-action', function() {
                if (!$(this).siblings('.action-box').hasClass('display-flex')) {
                    $('.action-box').removeClass('display-flex');
                }
                $(this).siblings('.action-box').toggleClass('display-flex');
            });



            // $(document).on('click', '.data-table-action', () => {
            //   $('.action-box').addClass('display-flex');
            //   $(window).on('click', (e) => {
            //     if (!$('.action-box').get(0).contains(e.target) && !$('.data-table-action').get(0).contains(e.target) && !$('.modal-form-popup').get(0).contains(e.target)) {
            //       $('.action-box').removeClass('display-flex');
            //     }
            //   });
            // });

            $(document).on('click', '.btn-desc-popup', () => {
                $('#modal-form-popup.edit').addClass('display-flex');
                $('.close-form-popup').on('click', () => {
                    $('#modal-form-popup.edit').removeClass('display-flex');
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
