<div class="mt-4">
    <form wire:submit="save">
        <div class="flex flex-col gap-4">
            <x-mary-input label="Title" wire:model="title"/>
            <x-mary-datetime type="datetime-local" label="Due Date" wire:model="due_date"/>
            <div>
                <x-mary-button type="submit">Submit</x-mary-button>
            </div>
        </div>
    </form>
</div>
