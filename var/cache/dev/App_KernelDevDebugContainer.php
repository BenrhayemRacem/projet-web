<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPxW9jEL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPxW9jEL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPxW9jEL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPxW9jEL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPxW9jEL\App_KernelDevDebugContainer([
    'container.build_hash' => 'PxW9jEL',
    'container.build_id' => 'da69d63a',
    'container.build_time' => 1623506805,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPxW9jEL');
