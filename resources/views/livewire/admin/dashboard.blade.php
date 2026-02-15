<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
    <div class="grid md:grid-cols-4 gap-6">
        <div class="bg-white shadow rounded p-4">
            <div class="text-gray-500 text-sm">Projects</div>
            <div class="text-2xl font-bold">{{ $totalProjects }}</div>
        </div>
        <div class="bg-white shadow rounded p-4">
            <div class="text-gray-500 text-sm">Skills</div>
            <div class="text-2xl font-bold">{{ $totalSkills }}</div>
        </div>
        <div class="bg-white shadow rounded p-4">
            <div class="text-gray-500 text-sm">Messages</div>
            <div class="text-2xl font-bold">{{ $totalMessages }}</div>
        </div>
        <div class="bg-white shadow rounded p-4">
            <div class="text-gray-500 text-sm">Unread</div>
            <div class="text-2xl font-bold text-red-600">{{ $unreadMessages }}</div>
        </div>
    </div>
</div>
