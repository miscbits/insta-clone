<template>
    <div class="card card-default">
        <div class="card-body">
            <img :src="post.image_url" alt="" >
        </div>
        <div class="card-footer">{{ post.body }}</div>
    </div>
</template>

<script>
    export default {
        props: ['post'],
        
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
