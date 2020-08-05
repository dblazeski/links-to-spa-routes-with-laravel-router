<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="app-standalone">
    <style>
        body {
            text-align: center;
        }
        a:visited {
            color: blue;
        }
        nav {
            display: flex;
            justify-content: center;
        }
        nav a {
            margin: 5px;
        }
    </style>
</head>

<body>

    <div id="app">
        <p>SPA within Laravel</p>
        <nav>
            <router-link :to="{ name: 'profile' }">Go to profile page</router-link>
            <router-link :to="{ name: 'about' }">Go to about page</router-link>
        </nav>
        <router-view></router-view>
    </div>

    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script>
        const routes = [
            { path: '/profile', name: 'profile', component: { template: '<h1>Profile page</h1>' } },
            { path: '/about', name: 'about', component: { template: '<h1>About page</h1>' } }
        ]

        const router = new VueRouter({
            routes
        })

        const app = new Vue({
            router
        }).$mount('#app')
    </script>
</body>
</html>
