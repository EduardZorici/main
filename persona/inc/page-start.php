<!DOCTYPE html>
<html dir="ltr" lang="<?= $lang; ?>" xml:lang="<?= $lang; ?>">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="revisit-after" content="2 days" />
    <meta name="robots" content="index,follow" />
    <meta property="og:locale" content="<?= $lang; ?>_<?= $language; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $name; ?>" />
    <meta property="og:url" content="<?= URL; ?>" />
    <meta property="og:title" content="<?= $description; ?>" />
    <meta property="og:image" content="<?= URL . ASSETS . IMAGES . $default_image; ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?= $description; ?>" />
    <meta name="twitter:image" content="<?= URL . ASSETS . IMAGES . $default_image; ?>" />
    <meta name="twitter:url" content="<?= URL; ?>" />
    <link rel="image_src" type="image/jpeg" href="<?= URL . ASSETS . IMAGES . $default_image; ?>" />
    <link rel="canonical" href="<?= URL; ?>" />
    <!-- <meta name="google-site-verification" content="" /> -->
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="author" content="<?= $name; ?>" />
    <link rel="stylesheet" href="<?= URL . ASSETS . CSSPATH . STYLECSS; ?>" />

    <!-- Extra stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <title><?= $title; ?></title>
    <meta name="description" content="<?= $title; ?>" />

    <?php
    if (isset($page_type)) {
        include __DIR__ . "/" . $page_type . "-schema.php";
    } ?>

</head>