@extends('layouts.app')
@section('main')


<div class="position-relative w-100">
    <div class="user-navigation">
        <ul>
            <li>
                <a href="">
                    <span class="user-icon">
                        <ion-icon name="albums-outline"></ion-icon>
                    </span>
                    <span class="user-title">title</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <span class="user-icon">
                        <ion-icon name="albums-outline"></ion-icon>
                    </span>
                    <span class="user-title">title</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="user-icon">
                        <ion-icon name="albums-outline"></ion-icon>
                    </span>
                    <span class="user-title">title</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="user-main bg-lightttt">
        <div class="user-topbar w-100 d-flex justify-content-between align-items-center px-0 py-2">
            <div class="user-toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>


            <div class="d-flex align-items-center">
                <div class="user-search">
                    <form class="user-search-form" action="#">
                        <input type="text" class="form-control" placeholder="Search her">
                        <ion-icon name="search-outline"></ion-icon>
                    </form>
                </div>

                <div class="mx-3">
                    <ion-icon name="mail-outline"></ion-icon>
                </div>

                <div class="mx-3">
                    <ion-icon name="notifications-outline"></ion-icon>
                </div>

                <div class="user-account">
                    user
                    <img src="https://picsum.photos/id/237/50/50" alt="">
                    <ion-icon name="person-outline"></ion-icon>
                </div>
            </div>

        </div>

        <div class="user-page-content">
            <h1>user page title</h1>
        </div>
    </div>
</div>

@stop