<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDfJGxng\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDfJGxng/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDfJGxng.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDfJGxng\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDfJGxng\App_KernelDevDebugContainer([
    'container.build_hash' => 'DfJGxng',
    'container.build_id' => 'ffa56b67',
    'container.build_time' => 1623586835,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDfJGxng');
