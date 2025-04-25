<header class="header relative rounded-t-2xl">
    <div class="header-wrapper flex justify-center items-center h-6">
        @php
            $messages = ['success', 'warning', 'error'];
        @endphp

        @foreach($messages as $message)
            <div
                id="message-{{ $message }}"
                class="absolute top-1/2 hidden"
            >
                <x-examples.pop-ups.messages width="96" :message="$message"/>
            </div>
        @endforeach
    </div>
</header>
