<template>
    <section class="glass">
        <div class="content">
            <slot></slot>
        </div>
    </section>
</template>

<script>
export default {
    name: "BaseLayer"
}
</script>

<style scoped>
.glass{
    background: white;
    min-height: 80vh;
    width: 100%;
    background: linear-gradient(to right bottom, rgba(255,255,255,0.7), rgba(255,255,255,0.3));
    border-radius: 1rem;
    backdrop-filter: blur(1rem);
    padding: 1rem;
}
.content{
    align-items: center;
    text-align: center;
}
</style>
