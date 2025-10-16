<div class="table-container">
    <div class="table-header text-center mb-4">
        <h2 class="fw-bold text-primary"><i class="bi bi-people-fill me-2"></i>Daftar User</h2>
        <p class="text-muted">Berikut adalah data user yang terdaftar dalam sistem</p>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-striped align-middle shadow-sm spongebob-table">
            <thead class="table-header-custom">
                <tr>
                    @foreach($columns as $column)
                        <th class="text-nowrap">{{ $column['label'] }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="table-row">
                        @foreach($columns as $column)
                            <td>{{ $user->{$column['key']} }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if(count($users) === 0)
            <div class="text-center py-5">
                <i class="bi bi-inbox display-1 text-muted"></i>
                <h4 class="text-muted mt-3">Tidak ada data user</h4>
                <p class="text-muted">Silakan tambahkan user baru melalui form create user.</p>
            </div>
        @endif
    </div>
</div>

<style>

.table-container {
    background: linear-gradient(180deg, #fffef2 0%, #f7fbff 100%);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    font-family: 'Comic Sans MS', 'Trebuchet MS', sans-serif;
}

.table-header h2 {
    color: #004e98;
    letter-spacing: 0.5px;
}

.table-header p {
    font-size: 0.95rem;
}

.spongebob-table {
    border-radius: 15px;
    overflow: hidden;
}

.table-header-custom {
    background: linear-gradient(90deg, #003366, #004e98);
    color: #FFD400;
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 0.6px;
    border: none;
}

.spongebob-table th, .spongebob-table td {
    padding: 1rem 1.25rem;
    border: none;
}

.table-row {
    transition: all 0.3s ease;
}

.table-row:hover {
    background-color: rgba(255, 212, 0, 0.1);
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.08);
}

.text-center i {
    opacity: 0.6;
}

@media (max-width: 768px) {
    .table-container {
        padding: 1rem;
    }
    .spongebob-table th, .spongebob-table td {
        padding: 0.75rem;
        font-size: 0.9rem;
    }
}
</style>