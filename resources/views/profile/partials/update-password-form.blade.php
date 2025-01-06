<section class="bg-white shadow-md rounded-lg p-6">
    <header class="mb-4 border-b border-gray-200 pb-4">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" class="block text-sm font-medium text-gray-700">{{ __('Current Password') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[#ff4500] focus:border-[#ff4500] sm:text-sm" autocomplete="current-password" />
            @error('updatePassword.current_password')
            <span class="text-sm text-red-500 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="update_password_password" class="block text-sm font-medium text-gray-700">{{ __('New Password') }}</label>
            <input id="update_password_password" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[#ff4500] focus:border-[#ff4500] sm:text-sm" autocomplete="new-password" />
            @error('updatePassword.password')
            <span class="text-sm text-red-500 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[#ff4500] focus:border-[#ff4500] sm:text-sm" autocomplete="new-password" />
            @error('updatePassword.password_confirmation')
            <span class="text-sm text-red-500 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="bg-[#ff4500] text-white py-2 px-4 rounded-md shadow-sm hover:bg-[#e14200] focus:outline-none focus:ring-2 focus:ring-[#ff4500] focus:ring-offset-2">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
