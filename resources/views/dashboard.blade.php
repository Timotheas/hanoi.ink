<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard – Hanoi.ink</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>

    </style>
    <script>
        // Show/hide admin tools aside
        function toggleToolbox() {
            const aside = document.getElementById('dashboard-aside');
            aside.classList.toggle('open');
        }
    </script>
</head>

<body>
    <div class="container">
        <header class="site-header">
            <img src="/images/logo_hanoiInk.png" alt="Hanoi Ink Logo" class="site-logo" />
            <h1 class="site-title">
                Hanoi.<span>ink</span>
            </h1>
        </header>

        <div class="dashboard-layout">
            <!-- MAIN CONTENT (Dashboard) -->
            <div class="dashboard-main">
                <div class="card">
                    <h2>Dashboard</h2>
                    <p>Welcome{{ Auth::check() ? ', ' . Auth::user()->name : '' }}!</p>
                    <div class="dashboard-actions" style="margin-top:1.5rem;">
                        <a href="{{ route('profile.edit') }}" class="button">Edit Profile</a>

                        {{-- Only show Toolbox button for admin or moderator --}}
                        @if(in_array(Auth::user()->role, ['admin', 'moderator']))
                        <button type="button" class="button secondary" onclick="toggleToolbox()">
                            Open Toolbox
                        </button>
                        @endif

                        {{-- Logout button always visible --}}
                        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                            @csrf
                            <button type="submit" class="logout-btn">Logout</button>
                        </form>
                    </div>
                </div>

                <!-- Quicktools (voor alle users, kan uitgebreid!) -->
                <div class="card">
                    <h3>Quicktools</h3>
                    <div style="display:flex;gap:1rem;flex-wrap:wrap">
                        <a href="#" class="button">Find Studios</a>
                        <a href="#" class="button">Find Artists</a>
                        <a href="#" class="button">Upload Reference</a>
                        <a href="#" class="button">Appointments</a>
                        <a href="#" class="button">My Tattoos</a>
                        <a href="#" class="button">Suggest Feature</a>
                        <!-- Vul gerust verder aan -->
                    </div>
                </div>

                <!-- Gewone site-content (lijst, cards, etc. – toon je gewone pagina's hier) -->
                <div class="card">
                    <h3>Latest Studios</h3>
                    <ul>
                        <li>Studio Red Dragon</li>
                        <li>Lotus Blossom Ink</li>
                        <li>Golden Star Tattoo</li>
                        <!-- … Dynamisch vullen straks! -->
                    </ul>
                </div>
            </div>

            <!-- ADMIN ASIDE (Toolbox, alleen zichtbaar voor admin – simpel voorbeeld) -->
            {{-- Admin Toolbox aside and modal: only visible for admin (or admin/mod) --}}
            @if(Auth::check() && in_array(Auth::user()->role, ['admin', 'moderator']))
            <aside class="dashboard-aside" id="dashboard-aside">
                <button class="toolbox-close" onclick="toggleToolbox()">&times;</button>
                <h3 style="margin-bottom:1.2rem;">Admin Toolbox</h3>
                <ul style="list-style:none; padding:0;">
                    <li>
                        <button type="button" class="button" onclick="openUserManagementModal()">
                            User Management
                        </button>
                    </li>
                    <li><a href="#" class="button" style="width:100%;margin-bottom:0.8rem;">Studio Management</a></li>
                    <li><a href="#" class="button" style="width:100%;margin-bottom:0.8rem;">Artist Management</a></li>
                    <li><a href="#" class="button" style="width:100%;margin-bottom:0.8rem;">Review Moderation</a></li>
                    <li><a href="#" class="button" style="width:100%;">Backup & Export</a></li>
                </ul>
                <hr style="margin:1.5rem 0;">
                <div style="font-size:0.98em;">
                    <strong>Quick ideas:</strong>
                    <ul style="margin-top:0.6em;">
                        <li>• Approve/reject new artists</li>
                        <li>• Change user roles</li>
                        <li>• Manage appointments</li>
                        <li>• Mass-mail VIP users</li>
                        <li>• Export all studio data</li>
                        <li>• Abuse & ban tools</li>
                    </ul>
                </div>
            </aside>

            <!-- The overlay and modal for User Management (only for admin/mod) -->
            <div id="user-management-modal" class="modal-overlay" style="display:none;">
                <div class="modal-content">
                    <button class="modal-close" onclick="closeUserManagementModal()">&times;</button>
                    <h2>User Management</h2>
                    <!-- Example user list/table -->
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop users here in real app -->
                            <tr>
                                <td>1</td>
                                <td>Jane Nguyen</td>
                                <td>jane@email.com</td>
                                <td>User</td>
                                <td>
                                    <button class="button secondary">Edit</button>
                                    <button class="button danger">Delete</button>
                                </td>
                            </tr>
                            <!-- More users ... -->
                        </tbody>
                    </table>
                </div>
            </div>
            @endif

        </div>
    </div>
    <script>
function openUserManagementModal() {
    document.getElementById('user-management-modal').style.display = 'flex';
    document.body.classList.add('modal-open');
}
function closeUserManagementModal() {
    document.getElementById('user-management-modal').style.display = 'none';
    document.body.classList.remove('modal-open');
}
// Optional: Close with ESC key
window.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeUserManagementModal();
});
// Optional: Close modal when clicking outside of it
document.getElementById('user-management-modal').addEventListener('click', function(e) {
    if (e.target === this) closeUserManagementModal();
});
    </script>
</body>

</html>