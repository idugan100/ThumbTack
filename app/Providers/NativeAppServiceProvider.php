<?php

namespace App\Providers;

use Native\Laravel\Facades\ContextMenu;
use Native\Laravel\Facades\Dock;
use Native\Laravel\Facades\Window;
use Native\Laravel\Facades\GlobalShortcut;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {


        Window::open()
            ->title("ThumbTack")
            ->route("home") 
            ->width(1200)
            ->height(100)
            ->rememberState()
            ->showDevTools(false);


    }
}
