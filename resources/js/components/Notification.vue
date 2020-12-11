<template>
    <div class="notification">
        <h1>{{ message }}</h1>
    </div>
</template>


<script>
export default {
    data() {
        return {
            message: 'Wear the mask! Be save!'
        };
    }
}
</script>

<style lang="scss">
    .notification {
        background: #05a089;
        color: #f6f8f8;
        font-weight: bold;
        font-family: Georgia, serif;
        font-size: 2em;
    }
</style>
