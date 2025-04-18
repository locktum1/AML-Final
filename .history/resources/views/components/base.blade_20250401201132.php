<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AML</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    <script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-auth.js"></script>

</head>
<body class="bg-gray-400 font-mono">
    <x-navigation-bar></x-navigation-bar>
    <main class="mt-[5vh] text-white text-center">
        {{ $content }}
    </main>
</body>
</html>
