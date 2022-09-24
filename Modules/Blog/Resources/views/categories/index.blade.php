@extends('layouts::layouts.master')

@section('title')
    {{ __(config('blog.categories').' | Admin') }}
@endsection

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
    <div class="x_title">
        <h2 class="title_page">{{ __(config('blog.categories')) }}</h2>
        <a href="" class="btn btn-default btn_search_btn_top">Add {{ __(config('blog.category')) }}</a>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="float-right">
                        <form action="">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="search" class="form-control" placeholder="Keyword..."/>
                                </div>
                                <div class="form-outline">
                                    <button type="button" class="btn btn-default btn_search_btn_top">
                                        search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <table id="datatable-checkbox" class="table {{ config('blog.table-striped') ? 'table-striped' : ''}} table-bordered bulk_action" style="width:100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>
                                <td>#</td>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><input type="checkbox" id="check-all" ></th>
                                <th>1</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>
                                    <td>
                                        <div class="text-right d-flex justify-content-end">
                                            @can('blog.category.edit')
                                                <a href="#">
                                                    <button class="btn btn-link btn-sm">{{ __('Edit') }}</button>
                                                </a>
                                            @endcan
                                            @can('blog.category.delete')
                                                <livewire:table-confirm-delete>
                                            @endcan
                                        </div>
                                    </td>
                                </td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="check-all" ></th>
                                <th>2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="check-all" ></th>
                                <th>3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="check-all" ></th>
                                <th>4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('script')
@endsection