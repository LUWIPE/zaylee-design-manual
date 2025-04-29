<div class="form-item vertical">
        <label class="form-label mb-2">{{ $label ?? '' }}</label>
    <div class="upload upload-draggable hover:border-primary bg-gray-100">
        <input
            class="upload-input draggable"
            type="file"
            accept=".png, .jpg"
            {{ $attributes }}
        >
        <div class="my-16 text-center w-full flex flex-col items-center justify-center">
            <div class="mb-4 flex items-center justify-center h-14">
                <x-examples.icons.img-upload/>
            </div>
            <p class="font-semibold">
                <span class="text-dark">Træk dit {{ $imgName ?? 'logo'  }} herhen, eller</span>
                <span class="text-info">søg</span>
            </p>
            <p class="mt-1 opacity-60">Godtager: .jpeg og .png</p>
        </div>
    </div>
</div>
