<div>
    <h1 class="text-2xl font-bold mb-6">Inbox</h1>
    @if ($messages->isEmpty())
    <div class="text-gray-500">
        No messages yet
    </div>
    
    @endif

    @foreach ($messages as $message)
        <div class="border p-4 rounded mb-4 {{ $message->status==='unread'? 'bg-gray-100' : ''}}">
            
            <div class="flex justify-between">
                <div>
                    <strong>{{ $message->name }}</strong>
                    <span class="text-sm text-gray-500">{{ $message->email }}</span>
                </div>
                <div class="space-x-2">
                    @if ($message->status==='unread')
                      <button wire:click="markAsRead({{ $message->id }})" class="text-blue-600 text-sm">Mark as read</button>
                    @endif
                    <button class="px-4 py-2 bg-red-500 rounded text-white" wire:click="delete({{ $message->id }})">Delete</button>
                </div>
            </div>
            <div class="mt-2 font-bold">
                {{ $message->subject }}
            </div>
            <div class="text-sm text-gray-700 mt-1">
                {{ $message->message }}
            </div>
        </div>
    @endforeach

</div>
