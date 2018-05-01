<template>
    <div class="container">
        <div class="large-12 medium-12 small-12 cell">
            <form>
                <label for="body">Description</label>
                <textarea name="body" v-model="body"></textarea>

                <button v-on:click="submitPost()">Submit</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                body: this.post.body
            }
        },

        props: ['post'],

        methods: {
            submitPost() {
                event.preventDefault();

                axios.put('/api/posts/' + this.post.id, {
                    body: this.body
                }).then(function(){
                    window.location.replace('/home');
                })
                .catch(function(){
                    console.log('FAILURE!!');
                });
            }
        }
    }
</script>
