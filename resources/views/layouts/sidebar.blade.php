<!-- Teachers Management -->
<li class="menu-item {{ request()->is('admin/teachers*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-account-group"></i>
        <div data-i18n="Teachers">Teachers</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item {{ request()->is('admin/teachers') ? 'active' : '' }}">
            <a href="{{ route('admin.teachers.index') }}" class="menu-link">
                <div data-i18n="All Teachers">All Teachers</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/teachers/create') ? 'active' : '' }}">
            <a href="{{ route('admin.teachers.create') }}" class="menu-link">
                <div data-i18n="Add Teacher">Add Teacher</div>
            </a>
        </li>
    </ul>
</li>

<!-- Enrollments Management -->
<li class="menu-item {{ request()->is('admin/enrollments*') ? 'active' : '' }}">
    <a href="{{ route('admin.enrollments.index') }}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-file-document-edit"></i>
        <div data-i18n="Enrollments">Enrollments</div>
    </a>
</li> 