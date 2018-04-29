<div class="user-profile-menu pull-left">
    <div class="list-group">
        <a href="/user/info" class="list-group-item {{ ($activeId == 1) ? "active" : "" }}">
            Thông tin cá nhân
        </a>
        <a href="/user/{{ $userId }}/transaction_history" class="list-group-item {{ ($activeId == 2) ? "active" : "" }}">Lịch Sử Giao Dịch</a>
    </div>
</div>