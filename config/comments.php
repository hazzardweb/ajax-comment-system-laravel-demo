<?php

return [

    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    // Specify if guest users can post comments.
    'allow_guests' => true,

    // Specify if authenticated users can post comments.
    'allow_votes' => true,

    // Specify if comment replies are allowed.
    'allow_replies' => true,

    // Specify if you want real time updating comments.
    // Make sure you have a broadcast driver configured.
    'broadcast' => false,

    // The number of seconds after a user can edit a comment. To disable set null.
    'allow_edit' => 60,

    // The number of seconds after a user can delete a comment. To disable set null.
    'allow_delete' => 60,

    // The maximum comment length. To disable set null.
    'max_length' => 500,

    // The number of comments to be displayed per page.
    'per_page' => 15,

    // The default comment order: "latest", "oldest" or "best".
    'default_order' => 'latest',

    // The default Gravatar imageset.
    // Supported: "404", "mm", "identicon", "monsterid", "wavatar".
    'default_gravatar' => 'monsterid',

    /*
    |--------------------------------------------------------------------------
    | Formatting
    |--------------------------------------------------------------------------
    */

    // Specify if you want to emoji support.
    'emoji' => true,

    // Specify if comments should be parsed as Markdown (Litedown).
    'markdown' => true,

    // Specify if comments should be parsed as BBCode tags.
    // Not available when Markdown is enabled.
    'bbcodes' => false,

    // Specify if plain-text URLs should be converted into clickable links.
    'auto_link' => true,

    // Specify if plain-text emails should be converted into clickable links.
    'auto_email' => true,

    // Specify if plain-text image URLs should be converted into actual images.
    'auto_image' => true,

    // Specify if plain-text video URLs should be converted into actual videos.
    'auto_video' => true,

    // Specify if content from media sites should be embedded.
    // http://s9etextformatter.readthedocs.io/Plugins/MediaEmbed/Sites
    'media_embed' => true,

    /*
    |--------------------------------------------------------------------------
    | Moderation
    |--------------------------------------------------------------------------
    */

    // Specify if the comments should be put on hold for manual approval.
    'moderation' => false,

    // Specify if you want to use Akismet for spam detection.
    // Make sure to set the "akismet_key" in config/services.php.
    // https://akismet.com/account
    'akismet' => false,

    // When a comment contains any of these words in its content, name, URL,
    // e-mail, or IP, it will be held in the moderation queue.
    'moderation_keys' => [],

    // When a comment contains any of these words in its content, name, URL,
    // e-mail, or IP, it will be marked as spam.
    'blacklist_keys' => [],

    // Detect if another comment with the same content and for the same page exists.
    'detect_duplicates' => true,

    // The maximum number of unapproved comments a user can have before can't post anymore.
    'max_unapproved' => 5,

    // Specify the maximum number of links a comment a comment can have,
    // after which it will be put on hold.
    'max_links' => 10,

    // Specify if and what words should be censored.
    'censor' => false,
    'censored_words' => [],

    // Specify if comment reports are allowed.
    'allow_reports' => true,

    // The maximum number of reports after the comment gets flagged.
    'max_reports' => 10,

    // The status after the comment has to many reports: "pending" or "spam".
    'report_status' => 'pending',

    /*
    |--------------------------------------------------------------------------
    | Protection
    |--------------------------------------------------------------------------
    */

    // Specify if captcha is required for guest users.
    'captcha_guest' => false,

    // Specify if captcha is required for authenticated users.
    'captcha_auth' => false,

    // Specify if you want to throttle for comment posts,
    // the maximum number of comment post attempts for delaying further attempts
    // and the number of seconds to delay further comment post attempts.
    'throttle' => true,
    'throttle_max_attempts' => 5,
    'throttle_decay_minutes' => 1,

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    */

    // Specify if users should be notified when their comments receive replies.
    'reply_notification' => false,

    // Specify the email address to which notifications will be sent
    // when a new comment is posted. Spam won't be reported.
    'admin_notification' => null,

    /*
    |--------------------------------------------------------------------------
    | Misc
    |--------------------------------------------------------------------------
    */

    // Specify if the admin settings are enabled.
    'settings' => true,

    // Models
    'models' => [
        'vote' => Hazzard\Comments\Vote::class,
        'report' => Hazzard\Comments\Report::class,
        'comment' => Hazzard\Comments\Comment::class,
    ],

    // Table Names
    'table_names' => [
        'comments' => 'comments',
        'votes' => 'comment_votes',
        'reports' => 'comment_reports',
        'settings' => 'comment_settings',
    ],

];
