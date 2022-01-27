<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?= $name; ?>",
        "alternateName": "<?= $name; ?>",
        "url": "<?= URL; ?>",
        "logo": "<?= ASSETS . IMAGES . LOGO; ?>",
        "image": "<?= ASSETS . IMAGES . LOGO; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Aleea Slănic, nr. 9",
            "addressLocality": "Cluj-Napoca",
            "addressRegion": "<?= $language; ?>",
            "postalCode": "<?= $office_postal_code; ?>",
            "addressCountry": "<?= $language; ?>"
        },
        "foundingDate": "2011",
        "founders": [{
            "@type": "Person",
            "name": "<?= $name; ?>"
        }],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Service",
            "telephone": "<?= $office_phone; ?>",
            "email": "<?= $office_email; ?>"
        },
        "sameAs": [
            "https://www.facebook.com/eddy.zorici/",
            "https://www.instagram.com/eduard.zorici/",
            "https://www.youtube.com/channel/UC62dTeNJtUklMkQ5cIKkJDw",
            "https://www.linkedin.com/in/eduardzz/"
        ]
    }
</script>