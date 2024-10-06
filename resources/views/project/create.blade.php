<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('project.store') }}" method="post">
                        @csrf
                        <div class="mb-5">
                            <x-input-label for="project_name" :value="__('Project Name')" />
                            <x-text-input name="name" type="text" placeholder="Enter your project name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <x-input-label for="category" :value="__('category')" />
                            <x-select-form name="category_id" placeholder="Enter your category">
                                <option selected>Choose a country</option>
                                @foreach ($Categories as $Category)
                                <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                @endforeach
                            </x-select-form>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <x-input-label for="client" :value="__('client')" />
                            <x-select-form name="client_id" placeholder="Enter your client">
                                <option selected>Choose a country</option>
                                @foreach ($Clients as $Client)
                                <option value="{{ $Client->id }}">{{ $Client->name }}</option>
                                @endforeach
                            </x-select-form>
                            <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <x-input-label for="developer" :value="__('Developer')" />
                            <x-select-form name="developer_id" placeholder="Enter your developer">
                                <option selected>Choose a country</option>
                                @foreach ($Developers as $Developer)
                                <option value="{{ $Developer->id }}">{{ $Developer->name }}</option>
                                @endforeach
                            </x-select-form>
                            <x-input-error :messages="$errors->get('developer_id')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <x-input-label for="project_duration" :value="__('Project Duration')" />
                            <x-date-picker-range startDate="start_date" endDate="end_date" startPlaceholder="Start Date"
                                endPlaceholder="End Date" />
                        </div>
                        <div class="mb-5">
                            <x-input-label for="payment" :value="__('Payment')" />
                            <x-select-form name="payment_status_id" placeholder="Enter your payment">
                                <option selected>Choose a country</option>
                                @foreach ($Payments as $Payment)
                                <option value="{{ $Payment->id }}">{{ $Payment->name }}</option>
                                @endforeach
                            </x-select-form>
                            <x-input-error :messages="$errors->get('payment_status_id')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-area name="description" rows="6" placeholder="Enter your description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <x-input-label for="notes" :value="__('Notes')" />
                            <x-text-area name="notes" rows="6" placeholder="Enter your notes" />
                            <x-input-error :messages="$errors->get('notes')" class="mt-2" />
                        </div>
                        <x-primary-button>
                            Submit
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>