<template>
    <div class="container" id="home">
        <div class="row">
           <h2>Watch your inbox</h2>
           <p>Alerts are on the way to {{ email }}</p>
           <p>If you need to change anything, just sign up again.</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['email'],
    }
</script>
