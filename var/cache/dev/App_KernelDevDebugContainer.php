<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4OSXMGC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4OSXMGC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4OSXMGC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4OSXMGC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4OSXMGC\App_KernelDevDebugContainer([
    'container.build_hash' => '4OSXMGC',
    'container.build_id' => 'd8ece40d',
    'container.build_time' => 1639414832,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4OSXMGC');
