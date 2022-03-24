<?php

return [
    //branding
    ['name' => 'branding.site_name', 'value' => 'BeDrive'],

    //cache
    ['name' => 'cache.report_minutes', 'value' => 60],

    //other
    ['name' => 'site.force_https', 'value' => 0],

    //menus
    ['name' => 'menus', 'value' => json_encode([
        ['name' => 'Drive Sidebar', 'position' => 'drive-sidebar', 'items' => [
            ['type' => 'route', 'order' => 1, 'label' => 'Shared with me', 'action' => 'drive/shares', 'icon' => 'people'],
            ['type' => 'route', 'order' => 2, 'label' => 'Recent', 'action' => 'drive/recent', 'icon' => 'access-time'],
            ['type' => 'route', 'order' => 3, 'label' => 'Starred', 'action' => 'drive/starred', 'icon' => 'star'],
            ['type' => 'route', 'order' => 4, 'label' => 'Trash', 'action' => 'drive/trash', 'icon' => 'delete'],
        ]],
        ['name' => 'Drive Navbar', 'position' => 'drive-navbar', 'items' => [
            ['type' => 'route', 'order' => 1, 'label' => 'Workspaces', 'action' => 'drive/workspaces'],
        ]],
        [
            'name' => 'footer',
            'position' => 'footer',
            'items' => [
                ['type' => 'route', 'position' => 1, 'label' => 'Developers', 'action' => '/api-docs', 'condition' => 'auth'],
                ['type' => 'route', 'position' => 2, 'label' => 'Privacy Policy', 'action' => '/pages/1/privacy-policy'],
                ['type' => 'route', 'position' => 3, 'label' => 'Terms of Service', 'action' => '/pages/2/terms-of-service'],
                ['type' => 'route', 'position' => 4, 'label' => 'Contact Us', 'action' => '/contact'],
            ],
        ],
        [
            'name' => 'Footer Social',
            'position' => 'footer-secondary',
            'items' => [
                ['type' => 'link', 'position' => 1, 'icon' => 'facebook-square', 'action' => 'https://facebook.com'],
                ['type' => 'link', 'position' => 2, 'icon' => 'twitter', 'action' => 'https://twitter.com'],
                ['type' => 'link', 'position' => 3, 'icon' => 'instagram', 'action' => 'https://instagram.com'],
                ['type' => 'link', 'position' => 4, 'icon' => 'youtube', 'action' => 'https://youtube.com'],
            ],
        ],
    ])],

    //uploads
    ['name' => 'uploads.max_size', 'value' => 52428800],
    ['name' => 'uploads.chunk_size', 'value' => 15728640],
    ['name' => 'uploads.available_space', 'value' => 104857600],
    ['name' => 'uploads.blocked_extensions', 'value' => json_encode(['exe', 'application/x-msdownload', 'x-dosexec'])],

    //landing page
    ['name' => 'homepage.appearance', 'value' => json_encode([
        'headerTitle' => 'BeDrive. A new home for your files.',
        'headerSubtitle' => 'Register or Login now to upload, backup, manage and access your files on any device, from anywhere, free.',
        'headerImage' => 'client/assets/images/homepage/homepage-header-bg.jpg',
        'headerImageOpacity' => 1,
        'headerOverlayColor1' => null,
        'headerOverlayColor2' => null,
        'footerTitle' => 'Get started with BeDrive',
        'footerSubtitle' => null,
        'footerImage' => 'client/assets/images/homepage/homepage-footer-bg.svg',
        'actions' => [
            'cta1' => 'Register Now',
            'cta2' => null,
            'cta3' => 'Sign up for free',
        ],
        'primaryFeatures' => [
            [
                'title' => 'Store any file',
                'subtitle' => 'Keep photos, stories, designs, drawings, recordings, videos, and more. Your first 15 GB of storage are free.',
                'image' => 'upload.svg',
            ],
            [
                'title' => 'See your stuff anywhere',
                'subtitle' => 'Your files in BeDrive can be reached from any smartphone, tablet, or computer.',
                'image' => 'web-devices.svg',
            ],
            [
                'title' => 'Share files and folders',
                'subtitle' => 'You can quickly invite others to view, download, and collaborate on all the files you want.',
                'image' => 'share.svg',
            ],
        ],
        'secondaryFeatures' => [
            [
                'title' => 'Keep your files safe',
                'image' => 'client/assets/images/homepage/homepage-feature-1.jpg',
                'description' => 'If something happens to your device, you don\'t have to worry about losing your files or photos – they\'re in your BeDrive. And BeDrive is encrypted using SSL.',
            ],
            [
                'title' => 'Reliable storage and fast transfers',
                'image' => 'client/assets/images/homepage/homepage-feature-2.jpg',
                'description' => 'We make secure cloud storage simple and convenient. Create a free BeDrive account today!',
            ],
        ],
    ])],

    // drive
    ['name' => 'drive.default_view', 'value' => 'grid'],
    ['name' => 'drive.send_share_notification', 'value' => false],
    ['name' => 'share.suggest_emails', 'value' => false],
];
