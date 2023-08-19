@extends('layouts.main')

@section('title','Home')

@section('bodyContent')
    <div class="content-area">
        <div class="container">
            <div class="p-5 border border-dashed rounded-5 text-center mt-5">
                <h3>Employee Management</h3>
                <p class="col-md-10 mx-auto mb-3">Efficiently oversee and coordinate your team's activities with our comprehensive employee management tools. Streamline tasks, enhance communication, and boost productivity.</p>
                <a href="/employee">
                    <button class="btn btn-success">
                        Manage Employee <i class="bi bi-plus-circle-dotted"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
