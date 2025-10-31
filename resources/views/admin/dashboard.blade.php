<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard • Think Africa</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" />
    <style>
      .sidebar-dark-primary { background: linear-gradient(180deg,#0b1f1a,#0d362c 60%,#0b1f1a); }
      .brand-link { background: transparent; }
      .badge-status { padding: .25rem .5rem; border-radius:.375rem; font-weight:600; font-size:.75rem; }
      .badge-pending { background:#fde68a; color:#92400e; }
      .badge-approved { background:#bbf7d0; color:#065f46; }
      .badge-rejected { background:#fecaca; color:#991b1b; }
    </style>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed bg-gray-50 text-gray-800">
    <div class="wrapper min-h-screen grid grid-cols-[260px_1fr]">
      <!-- Sidebar -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4 hidden md:block">
        <a class="brand-link text-center py-3 text-white" href="#">
          <span class="brand-text font-weight-light">Admin</span>
        </a>
        <div class="sidebar">
          <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
              <li class="nav-item"><a class="nav-link active" href="#"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p></a></li>
              <li class="nav-item"><a class="nav-link" href="#appointments-section"><i class="nav-icon fas fa-calendar-check"></i><p>Appointments</p></a></li>
              <li class="nav-item"><a class="nav-link" href="#messages-section"><i class="nav-icon fas fa-envelope"></i><p>Messages</p></a></li>
            </ul>
          </nav>
          <div class="px-3 py-3 text-xs text-gray-300">Signed in as Admin</div>
        </div>
      </aside>

      <!-- Content area -->
      <div class="flex flex-col">
        <header class="main-header navbar navbar-expand navbar-dark bg-dark border-0 shadow-sm">
          <div class="container-fluid px-3">
            <a class="navbar-brand font-weight-bold" href="#">Admin</a>
            <ul class="navbar-nav ml-auto align-items-center">
              <li class="nav-item d-none d-md-inline"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li class="nav-item d-none d-md-inline"><a class="nav-link" href="#"><i class="fab fa-x-twitter"></i></a></li>
              <li class="nav-item d-none d-md-inline"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
              <li class="nav-item">
                <form method="POST" action="{{ route('admin.logout') }}" class="mb-0">
                  @csrf
                  <button class="btn btn-sm btn-outline-light">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </header>

        <main class="px-4 sm:px-6 lg:px-8 py-4 pt-5 space-y-10">
          <!-- Summary cards -->
          <section class="row">
            <div class="col-sm-6 col-md-3">
              <div class="small-box bg-gradient-success">
                <div class="inner">
                  <h3 id="metric-appt">{{ $todayAppointments ?? 0 }}</h3>
                  <p>Appointments Today</p>
                </div>
                <div class="icon"><i class="fas fa-calendar-check"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="small-box bg-gradient-info">
                <div class="inner">
                  <h3 id="metric-msg">{{ $todayMessages ?? 0 }}</h3>
                  <p>Messages Today</p>
                </div>
                <div class="icon"><i class="fas fa-envelope"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="small-box bg-gradient-secondary">
                <div class="inner">
                  <h3>{{ $pendingAppointments ?? 0 }}</h3>
                  <p>Pending Appointments</p>
                </div>
                <div class="icon"><i class="fas fa-hourglass-half"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="small-box bg-gradient-warning">
                <div class="inner">
                  <h3>{{ $pendingMessages ?? 0 }}</h3>
                  <p>New Messages</p>
                </div>
                <div class="icon"><i class="fas fa-inbox"></i></div>
              </div>
            </div>
          </section>

          @if(session('success'))
            <div class="rounded-md bg-emerald-600 text-white px-4 py-3">{{ session('success') }}</div>
          @endif

          <section id="appointments-section">
            <h2 class="text-xl font-semibold mb-3">Appointments</h2>
            <div class="overflow-x-auto bg-white border border-gray-100 rounded-xl">
              <table class="min-w-full text-sm">
                <thead class="bg-gray-50 text-gray-600">
                  <tr>
                    <th class="px-3 py-2 text-left">Name</th>
                    <th class="px-3 py-2 text-left">Email</th>
                    <th class="px-3 py-2 text-left">Phone</th>
                    <th class="px-3 py-2 text-left">Service</th>
                    <th class="px-3 py-2 text-left">Preferred</th>
                    <th class="px-3 py-2 text-left">Status</th>
                    <th class="px-3 py-2 text-left">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($appointments as $a)
                  <tr class="border-t align-top" data-row-type="appointment" data-id="{{ $a->id }}">
                    <td class="px-3 py-2">{{ $a->name }}</td>
                    <td class="px-3 py-2">{{ $a->email }}</td>
                    <td class="px-3 py-2">{{ $a->phone }}</td>
                    <td class="px-3 py-2">{{ $a->service }}</td>
                    <td class="px-3 py-2">{{ optional($a->preferred_date)->format('Y-m-d H:i') }}</td>
                    <td class="px-3 py-2" data-status>
                      <span class="badge-status {{ $a->status==='approved'?'badge-approved':($a->status==='rejected'?'badge-rejected':'badge-pending') }}">{{ $a->status }}</span>
                    </td>
                    <td class="px-3 py-2 space-y-2">
                      <div class="space-y-2">
                        <button data-approve-url="{{ route('admin.appointments.approve',$a) }}" data-open-reason class="rounded-md bg-emerald-600 text-white px-3 py-1">Approve</button>
                        <button data-reject-url="{{ route('admin.appointments.reject',$a) }}" data-open-reason class="rounded-md bg-red-600 text-white px-3 py-1">Reject</button>
                        <div class="space-y-1">
                          <textarea rows="2" class="w-full rounded-md border-gray-300" placeholder="Add internal note" data-note>{{ $a->admin_reply }}</textarea>
                          <button data-note-url="{{ route('admin.appointments.note',$a) }}" data-save-note class="rounded-md bg-gray-900 text-white px-3 py-1">Save Note</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="mt-3">{{ $appointments->links() }}</div>
          </section>
        <div class="mt-3">{{ $appointments->links() }}</div>
      </section>

      <section id="messages-section">
        <h2 class="text-xl font-semibold mb-3">Contact Messages</h2>
        <div class="overflow-x-auto bg-white border border-gray-100 rounded-xl">
          <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
              <tr>
                <th class="px-3 py-2 text-left">Name</th>
                <th class="px-3 py-2 text-left">Email</th>
                <th class="px-3 py-2 text-left">Subject</th>
                <th class="px-3 py-2 text-left">Status</th>
                <th class="px-3 py-2 text-left">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($messages as $c)
              <tr class="border-t align-top" data-row-type="message" data-id="{{ $c->id }}">
                <td class="px-3 py-2">{{ $c->name }}</td>
                <td class="px-3 py-2">{{ $c->email }}</td>
                <td class="px-3 py-2">{{ $c->subject }}</td>
                <td class="px-3 py-2" data-status>
                  <span class="badge-status {{ $c->status==='approved'?'badge-approved':($c->status==='rejected'?'badge-rejected':'badge-pending') }}">{{ $c->status }}</span>
                </td>
                <td class="px-3 py-2 space-y-2">
                  <div class="space-y-2">
                    <button data-approve-url="{{ route('admin.messages.approve',$c) }}" data-open-reason class="rounded-md bg-emerald-600 text-white px-3 py-1">Approve</button>
                    <button data-reject-url="{{ route('admin.messages.reject',$c) }}" data-open-reason class="rounded-md bg-red-600 text-white px-3 py-1">Reject</button>
                    <div class="space-y-1">
                      <textarea rows="2" class="w-full rounded-md border-gray-300" placeholder="Add internal note" data-note>{{ $c->admin_reply }}</textarea>
                      <button data-note-url="{{ route('admin.messages.note',$c) }}" data-save-note class="rounded-md bg-gray-900 text-white px-3 py-1">Save Note</button>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="mt-3">{{ $messages->links() }}</div>
      </section>

      <!-- Subscriptions table removed for now -->
        </main>

        <footer class="main-footer mt-auto bg-dark text-white-50 py-3">
          <div class="container-fluid d-flex justify-content-between align-items-center small">
            <div>
              <strong>Ishakiro Job Solution</strong> • © {{ date('Y') }} All rights reserved.
            </div>
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a class="text-white-50" href="#">Privacy</a></li>
              <li class="list-inline-item"><a class="text-white-50" href="#">Terms</a></li>
              <li class="list-inline-item"><a class="text-white-50" href="#">Contact</a></li>
              <li class="list-inline-item"><a class="btn btn-sm btn-secondary" href="#top">Top</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </div>

    <!-- Update Status Modal (AdminLTE-like) -->
    <div data-reason-modal class="fixed inset-0 z-50 hidden">
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="relative mx-auto mt-20 w-full max-w-lg rounded-xl bg-white shadow-xl">
        <div class="px-6 pt-5 pb-3 border-b">
          <h3 class="text-lg font-semibold">Update Application Status</h3>
          <p class="text-sm text-gray-600 mt-1">Provide an optional reason to include in the user's notification.</p>
        </div>
        <div class="px-6 pt-4 pb-2 space-y-4">
          <div>
            <label class="block text-sm text-gray-700 mb-1">Status</label>
            <select data-status-select class="w-full rounded-md border border-gray-300 px-3 py-2">
              <option value="" selected>selected</option>
              <option value="approved">approved</option>
              <option value="rejected">rejected</option>
            </select>
          </div>
          <div>
            <label class="block text-sm text-gray-700 mb-1">Reason (optional)</label>
            <textarea data-reason-input class="w-full rounded-md border border-gray-300 px-3 py-2" rows="4" placeholder="Provide a clear reason for approval or rejection..."></textarea>
          </div>
        </div>
        <div class="px-6 py-4 border-t flex justify-end gap-2">
          <button class="btn btn-outline-secondary" data-reason-cancel>Cancel</button>
          <button class="btn btn-success" data-reason-confirm>Confirm</button>
        </div>
      </div>
    </div>

    <script>
    (function(){
      const token = '{{ csrf_token() }}';
      const reasonModal = document.querySelector('[data-reason-modal]');
      const reasonInput = reasonModal?.querySelector('[data-reason-input]');
      const statusSelect = reasonModal?.querySelector('[data-status-select]');
      let pendingApproveUrl = null; // approve endpoint
      let pendingRejectUrl = null;  // reject endpoint
      let pendingRow = null; // tr element to update
      let pendingStatus = null; // approved/rejected

      function openReason(approveUrl, rejectUrl, row, status){
        pendingApproveUrl = approveUrl; pendingRejectUrl = rejectUrl; pendingRow = row; pendingStatus = status;
        if (reasonInput) reasonInput.value='';
        if (statusSelect){ statusSelect.value = status || ''; }
        reasonModal?.classList.remove('hidden');
      }
      function closeReason(){ reasonModal?.classList.add('hidden'); }
      reasonModal?.querySelector('[data-reason-cancel]')?.addEventListener('click', closeReason);
      reasonModal?.addEventListener('click', (e)=>{ if(e.target===reasonModal) closeReason(); });
      reasonModal?.querySelector('[data-reason-confirm]')?.addEventListener('click', async ()=>{
        if (!pendingRow) return closeReason();
        const _status = statusSelect?.value || pendingStatus;
        const targetUrl = _status === 'approved' ? pendingApproveUrl : (_status === 'rejected' ? pendingRejectUrl : null);
        if (!targetUrl) { toast('Please choose a status'); return; }
        const body = new FormData();
        body.append('_token', token);
        body.append('reason', reasonInput?.value || '');
        const res = await fetch(targetUrl, { method:'POST', headers:{ 'Accept':'application/json' }, body });
        if (res.ok){
          const data = await res.json();
          const statusCell = pendingRow.querySelector('[data-status]');
          if (statusCell){
            const badge = statusCell.querySelector('.badge-status');
            const newText = _status;
            const cls = _status==='approved'?'badge-approved':(_status==='rejected'?'badge-rejected':'badge-pending');
            if (badge){ badge.textContent = newText; badge.className = 'badge-status '+cls; }
            else { statusCell.textContent = newText; }
          }
          // refresh metrics if present
          if (data.counts){
            const ap = document.getElementById('metric-appt');
            const mg = document.getElementById('metric-msg');
            if (ap && typeof data.counts.todayAppointments !== 'undefined') ap.textContent = data.counts.todayAppointments;
            if (mg && typeof data.counts.todayMessages !== 'undefined') mg.textContent = data.counts.todayMessages;
          }
          toast('Saved successfully');
        } else {
          toast('Failed. Try again', true);
        }
        closeReason();
      });

      // Wire approve/reject buttons
      document.querySelectorAll('[data-open-reason]').forEach(btn=>{
        btn.addEventListener('click', ()=>{
          const row = btn.closest('tr');
          const approveUrl = btn.getAttribute('data-approve-url') || row?.querySelector('[data-approve-url]')?.getAttribute('data-approve-url');
          const rejectUrl = btn.getAttribute('data-reject-url') || row?.querySelector('[data-reject-url]')?.getAttribute('data-reject-url');
          const defaultStatus = btn.hasAttribute('data-approve-url') ? 'approved' : (btn.hasAttribute('data-reject-url') ? 'rejected' : '');
          if (row) openReason(approveUrl, rejectUrl, row, defaultStatus);
        });
      });

      // Save notes via AJAX
      document.querySelectorAll('[data-save-note]').forEach(btn=>{
        btn.addEventListener('click', async ()=>{
          const row = btn.closest('tr');
          const noteArea = row?.querySelector('[data-note]');
          const url = btn.getAttribute('data-note-url');
          if (!row || !noteArea || !url) return;
          const body = new FormData();
          body.append('_token', token);
          body.append('note', noteArea.value || '');
          const res = await fetch(url, { method:'POST', headers:{ 'Accept':'application/json' }, body });
          if (res.ok) toast('Note saved'); else toast('Failed to save note', true);
        });
      });

      function toast(msg, isErr){
        const el = document.createElement('div');
        el.textContent = msg;
        el.className = 'fixed bottom-4 right-4 z-50 rounded-md '+(isErr?'bg-red-600':'bg-emerald-600')+' text-white px-4 py-3 shadow';
        document.body.appendChild(el);
        setTimeout(()=> el.remove(), 3000);
      }
    })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  </body>
</html>
