<nav class="-mx-3 flex flex-1 justify-end">
    <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
        <a
            href="<?php echo e(url('/dashboard')); ?>"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
        >
            Dashboard
        </a>
    <?php else: ?>
        <a
            href="<?php echo e(route('login')); ?>"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
        >
            Log in
        </a>

        <!--[if BLOCK]><![endif]--><?php if(Route::has('register')): ?>
            <a
                href="<?php echo e(route('register')); ?>"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Register
            </a>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</nav><?php /**PATH C:\xampp\htdocs\larablogM7nunez\resources\views\livewire/welcome/navigation.blade.php ENDPATH**/ ?>