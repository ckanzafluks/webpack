<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNpf71QW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNpf71QW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNpf71QW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNpf71QW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNpf71QW\App_KernelDevDebugContainer([
    'container.build_hash' => 'Npf71QW',
    'container.build_id' => '60d70c67',
    'container.build_time' => 1599164537,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNpf71QW');