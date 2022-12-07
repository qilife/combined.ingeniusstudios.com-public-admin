<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href='{{ backpack_url('elfinder') }}'><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>

@if (env('APP_NAME') == 'Combined')
<a class="btn btn-secondary" data-toggle="collapse" href="#collapseQiCoil" role="button" aria-expanded="false" aria-controls="collapseQiCoil"><i class='nav-icon la la-mobile'></i> QiCoil</a>
@endif
{{-- <ul class="collapse" id="collapseQiCoil">  --}}
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tier') }}'><i class='nav-icon la la-store'></i> Tiers</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-store'></i> Categories</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tag') }}'><i class='nav-icon la la-store'></i> Tags</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('track') }}'><i class='nav-icon la la-store'></i> Tracks</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('album') }}'><i class='nav-icon la la-store'></i> Albums</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('program') }}'><i class='nav-icon la la-store'></i> Programs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('playlist') }}'><i class='nav-icon la la-store'></i> Playlists</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('discover') }}'><i class='nav-icon la la-store'></i> Discover</a></li>
@if (env('APP_NAME') == 'Combined')
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('instruction') }}'><i class='nav-icon la la-store'></i> Instruction</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-store'></i> Users</a></li>
@endif
{{-- </ul>  --}}

@if (env('APP_NAME') == 'Combined')
<a class="btn btn-secondary" data-toggle="collapse" href="#collapseConsole" role="button" aria-expanded="false" aria-controls="collapseConsole"><i class='nav-icon la la-mobile'></i> Console</a>
{{-- <ul class="collapse" id="collapseConsole">  --}}
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('consoletier') }}'><i class='nav-icon la la-store'></i> Tiers</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('consolecategory') }}'><i class='nav-icon la la-store'></i> Categories</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('consoletag') }}'><i class='nav-icon la la-store'></i> Tags</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('consoletrack') }}'><i class='nav-icon la la-store'></i> Tracks</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('consolealbum') }}'><i class='nav-icon la la-store'></i> Albums</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('consoleprogram') }}'><i class='nav-icon la la-store'></i> Programs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('consoleplaylist') }}'><i class='nav-icon la la-store'></i> Playlists</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('consoleuser') }}'><i class='nav-icon la la-store'></i> Users</a></li>
{{-- </ul>  --}}
@endif
{{-- </ul>  --}}

@if (env('APP_NAME') == 'Combined')

<a class="btn btn-secondary" data-toggle="collapse" href="#collapseConsole" role="button" aria-expanded="false" aria-controls="collapseConsole"><i class='nav-icon la la-mobile'></i> Rife App</a>
<!--<li class='nav-item'><a class='nav-link' href='{{ backpack_url('rifefrequencies') }}'><i class='nav-icon la la-store'></i> Frequencies</a></li> -->
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('rifeuser') }}'><i class='nav-icon la la-store'></i> Users</a></li>

@endif