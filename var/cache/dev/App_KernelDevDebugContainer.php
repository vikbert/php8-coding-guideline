<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB7XZUm2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB7XZUm2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB7XZUm2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB7XZUm2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB7XZUm2\App_KernelDevDebugContainer([
    'container.build_hash' => 'B7XZUm2',
    'container.build_id' => '42c423a3',
    'container.build_time' => 1641813150,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB7XZUm2');