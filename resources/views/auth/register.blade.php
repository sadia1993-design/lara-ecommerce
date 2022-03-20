<x-guest-layout>
    <x-slot name="page_title">
        Register
    </x-slot>

    <x-breadcrump>
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link">
                    <a href="#" class=" link text-red-500">Home</a>
                </li>
                <li class="item-link text-red-500"><span>Register</span></li>
            </ul>
        </div>
    </x-breadcrump>

    <div class=" mx-auto px-4 mb-8" style="width: 85%">
        <div class="px-6 py-6 bg-gray-100 border-gray-400 rounded-md rounded">
            <div class="px-6 py-6">
                <form action="" method="post">
                    @csrf

                    <div class="flex flex-row mb-8">
                        <!-- Name -->
                        <div class="name basis-1/2 mr-2">
                            <x-label for="name" :value="__('Name')"></x-label>
                            <x-input type="text" name="name" placeholder="name"></x-input>
                        </div>

                        <!-- Email -->
                        <div class="email basis-1/2">
                            <x-label for="email" :value="__('Email')"></x-label>
                            <x-input type="email" name="email" placeholder=" e.g. demo@gmail.com "></x-input>
                        </div>
                    </div>

                    <div class="flex flex-row mt-4 mb-8" >
                        <!-- password -->
                        <div class="password basis-1/2 mr-2">
                            <x-label for="password" :value="__('Password')"></x-label>
                            <x-input type="password" name="password" placeholder="Password"></x-input>
                        </div>

                        <!-- phone -->
                        <div class="phone basis-1/2">
                            <x-label for="phone" :value="__('Phone Number')"></x-label>
                            <x-input type="number" name="phone" placeholder=" Phone Number "></x-input>
                        </div>
                    </div>

                    <div class="flex flex-row mt-4 " >
                        <!-- address -->
                        <div class="Address w-full ">
                            <x-label for="Address" :value="__('Address')"></x-label>
                            <textarea rows="10" name="Address" class="border-transparent block px-4 py-4 w-full rounded rounded-md border-2 outline-auto"></textarea>
                        </div>
                    </div>

                    <!-- button -->
                    <x-button type="submit" :value="__('Register')"></x-button>


                </form>
            </div>
        </div>
    </div>

</x-guest-layout>
