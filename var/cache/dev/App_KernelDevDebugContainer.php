<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIxn2ZBn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIxn2ZBn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIxn2ZBn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIxn2ZBn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIxn2ZBn\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ixn2ZBn',
    'container.build_id' => 'abdc72b1',
    'container.build_time' => 1623628494,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIxn2ZBn');
