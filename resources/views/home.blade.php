@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Dashboard</div>

          <div class="panel-body m-t-10">
            <div class="tabs is-boxed">
              <ul>
                <li class="is-active">
                  <a>
                    <span>Overview</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span>Programme outline</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span>Admission Requirement</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span>Fee and Funding</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
