<div class="dashboard">
    <div class="dashboard__nav">
        <div class="dashboard__nav-title">
            <img src={{ asset('./icons/logo.png') }} class="dashboard__nav-title__logo" />
            <div class="dashboard__nav-title__text">Siswa</div>
        </div>
        <ul class="dashboard__nav-link">
            <li class="dashboard__nav-link__item">
                <a href="/dashboard" class="dashboard__nav-link__item-list">
                    <ion-icon name="home"></ion-icon>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="dashboard__nav-link__item">
                <a href='/absensi' class="dashboard__nav-link__item-list">
                    <ion-icon name="calendar"></ion-icon>
                    <p>Absensi</p>
                </a>
            </li>
            <li class="dashboard__nav-link__item">
                <a href="/report" class="dashboard__nav-link__item-list">
                    <ion-icon name="book"></ion-icon>
                    <p>Report</p>
                </a>
            </li>
        </ul>
        <ul class="dashboard__nav-logout">
            <li class="dashboard__nav-logout__item">
                <a href="/login" class="dashboard__nav-logout__item-list">
                    <ion-icon name="log-out"></ion-icon>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>
