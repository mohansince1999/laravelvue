<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <title>Vue+ Laravel </title>

    <!-- <link rel="canonical" href="https://www.cricmatch.zetoo.in/" />
    <link rel="alternate" href="http://www.cricmatch.zetoo.in/" hreflang="en-us"> -->
    <meta name="identifier-URL" content="http://play.cloudprojects.website/" />
    {{-- <link rel="shortcut icon" href="{{ asset('/favicon/favicon.ico') }}" /> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('/favicon/site.webmanifest') }}/" />
    <link rel="mask-icon" href="{{ asset('/favicon/safari-pinned-tab.svg') }}/" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />

    <link rel="preload" href="/react-asset/fonts/poppins_regular.ttf" as="font" type="font/ttf" crossorigin>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <meta name="language" content="ES" />
    <meta name="coverage" content="Worldwide" />
    <meta name="theme-color" content="#000" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="copyright" content="" />

    <meta name="description"
        content="Join CricMatch for thrilling sports betting and casino games. Dive into cricket, football, and more. Secure, skill-based fun. Bet smart." />
    <meta name="keywords" content="" />
    <meta name="author" content="Cricmatch" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Cricmatch" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://play.cloudprojects.website/" />
    <meta property="og:site_name" content="Cricmatch" />
    <meta property="og:description"
        content="Join CricMatch for thrilling sports betting and casino games. Dive into cricket, football, and more. Secure, skill-based fun. Bet smart." />
    <meta property="og:image" name="og:image" content="{{ asset('/crickmatch_banner.png?q=80') }}" />


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="http://play.cloudprojects.website/" />
    <meta name="twitter:title" content="CricMatch - Online Betting WebApp" />
    <meta name="twitter:description"
        content="Join CricMatch for thrilling sports betting and casino games. Dive into cricket, football, and more. Secure, skill-based fun. Bet smart." />
    <meta name="twitter:image" content="{{ asset('/crickmatch_banner.png?q=80') }}" />
    <meta property="og:image:type" content="image/webp" />

    <meta property="og:image" content="{{ asset('/crickmatch_small_banner.webp?q=80') }}" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <meta property="og:image" content="{{ asset('/crickmatch_banner.png?q=80') }}" />
    <meta property="og:image:secure_url" content="{{ asset('/crickmatch_banner.png?q=80') }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="CricMatch - Online Betting WebApp" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="google-site-verification" content="" />

    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="referrer" content="no-referrer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    {{--
    <meta http-equiv="Content-Security-Policy" content="default-src 'self';"> --}}
    {{--
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN"> --}}

    @viteReactRefresh
    @vite(['vue/main.js'])  

</head>

<body>
    <div id="app"></div>
    <script>
        // Fetch site info
        fetch('api/site-info')
            .then(response => response.json())
            .then(data => {
                // Use the fetched data as needed


                // Set title
                const siteName = data?.data?.site_name;
                if (siteName) {
                    document.title = siteName;
                }

                // Set favicon
                const faviconUrl = data?.data?.favicon;
                if (faviconUrl) {
                    const link = document.createElement('link');
                    link.rel = 'icon';
                    link.href = faviconUrl;
                    document.head.appendChild(link);
                }
            })
            .catch(error => console.error('Error fetching site info:', error));
    </script>

</body>

</html>
