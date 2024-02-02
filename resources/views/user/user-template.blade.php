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

    <div class="user-main bg-light">
        <div class="user-topbar">
            <div class="user-toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="user-search">
                <label for=""></label>
                <input type="text" placeholder="Search her">
                <ion-icon name="search-outline"></ion-icon>
            </div>

            <div class="user-account">user
                <img src="https://picsum.photos/id/237/50/50" alt="">
                <ion-icon name="person-outline"></ion-icon>
            </div>
        </div>

        <div class="user-page-content">
            <h1>user page title</h1>
        </div>
    </div>
</div>

@stop