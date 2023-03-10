 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="{{ route('dashboard-user') }}" class="app-brand-link">
             <img src="{{ asset('assets/img/imglogin.png') }}" alt="" width="40px">
             <span class="app-brand-text demo menu-text fw-bolder ms-2">kucata'ki</span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Dashboard</span>
         </li>
         <li class="menu-item {{ $title == 'Dashboard User' ? 'active' : '' }}">
             <a href="{{ route('dashboard-user') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-home-circle"></i>
                 <div data-i18n="Analytics">Dashboard</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Kartu Keluarga</span>
         </li>
         <li
             class="menu-item {{ $title == 'Kartu Keluarga' ? 'active' : ''}}">
             <a href="{{ route('kk.index') }}" class="menu-link">
                 <i class='menu-icon bx bx-body'></i>
                 <div data-i18n="Analytics">Kartu Keluarga</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Pages</span>
         </li>
         <li
             class="menu-item {{ ($title == 'Akta Kelahiran' ? 'active' : '' || $title == 'Formulir Pelaporan Kelahiran') ? 'active' : '' }}">
             <a href="{{ route('aktakelahiran.index') }}" class="menu-link">
                 <i class='menu-icon bx bx-body'></i>
                 <div data-i18n="Analytics">Akta Kelahiran</div>
             </a>
         </li>
         <li
             class="menu-item {{ ($title == 'Akta Kematian' ? 'active' : '' || $title == 'Formulir Pelaporan Kematian') ? 'active' : '' }}">
             <a href="{{ route('aktakematian.index') }}" class="menu-link">
                 <i class='menu-icon bx bx-accessibility'></i>
                 <div data-i18n="Analytics">Akta Kematian</div>
             </a>
         </li>
     </ul>
 </aside>
