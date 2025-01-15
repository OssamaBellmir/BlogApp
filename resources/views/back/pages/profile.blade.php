@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profile')
@section('content')

<div class="page-header">
   @livewire('author-profile-header')
  <hr>
  <div>
    <div class="card">
        <ul class="nav nav-tabs" data-bs-toggle="tabs">
            <li class="nav-item">
                <a href="#tabs-personal-details" class="nav-link active" data-bs-toggle="tab">Personal Details</a>
            </li>
            <li class="nav-item">
                <a href="#tabs-change-password" class="nav-link" data-bs-toggle="tab">Change Password</a>
            </li>
        </ul>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active show" id="tabs-personal-details">
                    <div>
                        @livewire('author-personal-details')
                    </div>
                </div>
                <div class="tab-pane" id="tabs-change-password">
                    <div>
                        <form method="post">
                            <div class="row">
                                <div class="clo-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Current Password</label>
                                        <input type="password" class="form-control" name="example-text-input" placeholder="Current password">
                                    </div>
                                </div>
                                <div class="clo-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="example-text-input" placeholder="New password">
                                    </div>
                                </div>
                                <div class="clo-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Confirm new Password</label>
                                        <input type="password" class="form-control" name="example-text-input" placeholder="Retype new password">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Change password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
